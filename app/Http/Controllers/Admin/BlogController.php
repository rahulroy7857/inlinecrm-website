<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use Illuminate\Support\Str;
use App\Models\Blog;
use Validator;
use Auth;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::orderBy('id','Desc')->get();
        return view('admin.blogs', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title'  => 'required',
            'author' => 'required',
            'content'=> 'required',
            'image.*'=> 'max:1048'
        ]);
        if ($validator->fails()) {
            return back()
                ->with('error', 'Images above 1MB is not allowed.');
        }
        $blog           = new Blog();
        $blog->title    = $request->title;
        $blog->meta_title= $request->meta_title;
        $blog->author   = $request->author;
        $blog->category = $request->category;
        $blog->country  = $request->country;
        $blog->content  = $request->content;
        $blog->meta     = $request->meta;
        $blog->slug     =  $this->createSlug($request->title);        
        if ($request->hasFile('image')) {
            $extension = $request->file('image')->getClientOriginalExtension();
            $filename  = uniqid() . '_426_163' . '.' . $extension;
            $path = public_path('storage/blogs/'.$filename);
            
            // Create image manager instance
            $manager = new ImageManager(new Driver());
            $image = $manager->read($request->file('image')->getRealPath());
            $image->resize(426, 163)->save($path);
            
            $blog->resized_image = $filename;
                      
            $extension = $request->file('image')->getClientOriginalExtension();
            $fileName = uniqid() . 'blog' . '.' . $extension;
            $path = $request->file('image')->storeAs("blogs", $fileName, 'public_uploads');
            $blog->image = $path;
        }
        $blog->save();
        return redirect()->back()->with('message', 'Blog Added successfully');
    }


    public function createSlug($title, $id = 0)
    {
        // Normalize the title
        // $slug = str_slug($title);
        $slug = Str::slug($title);
        // Get any that could possibly be related.
        // This cuts the queries down by doing it once.
        $allSlugs = $this->getRelatedSlugs($slug, $id);
        // If we haven't used it before then we are all good.
        if (! $allSlugs->contains('slug', $slug)){
            return $slug;
        }
        // Just append numbers like a savage until we find not used.
        for ($i = 1; $i <= 10; $i++) {
            $newSlug = $slug.'-'.$i;
            if (! $allSlugs->contains('slug', $newSlug)) {
                return $newSlug;
            }
        }
        throw new \Exception('Can not create a unique slug');
    }
    
    protected function getRelatedSlugs($slug, $id = 0)
    {
        return Blog::select('slug')->where('slug', 'like', $slug.'%')
                ->where('id', '<>', $id)
                ->get();
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       $validator = Validator::make($request->all(), [
            'title'  => 'required',
            'author' => 'required',
            'content'=> 'required',
        ]);
         if ($validator->fails()) {
            return back()
                    ->withErrors($validator->errors())->withInput();
        }
        $blog    = Blog::findOrFail($id);
        $blog->title    = $request->title;
        $blog->meta_title= $request->meta_title;
        $blog->author   = $request->author;
        $blog->category = $request->category;
        $blog->country  = $request->country;
        $blog->content  = $request->content;
        $blog->meta     = $request->meta;
        $blog->slug      =  $this->createSlug($request->title, $id);
        if($request->hasfile('image')){
            if (!empty($blog->image)) {
                if (file_exists(public_path() . "/storage/{$blog->image}")) {
                    unlink(public_path() . "/storage/{$blog->image}");
                }
            }
            if (!empty($blog->resized_image)) {
                if (file_exists(public_path() . "/storage/blogs/{$blog->resized_image}")) {
                    unlink(public_path() . "/storage/blogs/{$blog->resized_image}");
                }
            }
            $extension = $request->file('image')->getClientOriginalExtension();
            $filename  = uniqid() . '_426_163' . '.' . $extension;
            $path = public_path('storage/blogs/'.$filename);
            
            // Create image manager instance
            $manager = new ImageManager(new Driver());
            $image = $manager->read($request->file('image')->getRealPath());
            $image->resize(426, 163)->save($path);
            
            $blog->resized_image = $filename;
                      
            $extension = $request->file('image')->getClientOriginalExtension();
            $fileName = uniqid() . 'blog' . '.' . $extension;
            $path = $request->file('image')->storeAs("blogs", $fileName, 'public_uploads');
            $blog->image = $path;
        }
        $blog->save();
        return redirect()->back()->with('message', 'Blog Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blogs = Blog::findOrFail($id);
        if (!empty($blogs->image)) {
            if (file_exists(public_path() . "/storage/{$blogs->image}")) {
                unlink(public_path() . "/storage/{$blogs->image}");
            }
        }
        if (!empty($blogs->resized_image)) {
            if (file_exists(public_path() . "/storage/blogs/{$blogs->resized_image}")) {
                unlink(public_path() . "/storage/blogs/{$blogs->resized_image}");
            }
        }
        $blogs->delete();
        return redirect()->back()->with('message', 'Blog Deleted successfully');
    }
}
