<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use Illuminate\Support\Str;
use App\Models\News;
use Validator;
use Auth;
use Carbon\Carbon;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = News::orderBy('id','Desc')->get();
        return view('admin.news', compact('news'));
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
            'content'=> 'required',
            'image.*'=> 'max:1048'
        ]);
        if ($validator->fails()) {
            return back()
                ->with('error', 'Images above 1MB is not allowed.');
        }
        $news           = new News();
        $news->title    = $request->title;
        $news->meta_title= $request->meta_title;
        $news->country  = $request->country;
        $news->category = $request->category;
        $news->content  = $request->content;
        $news->meta     = $request->meta;
        $news->slug     =  $this->createSlug($request->title);        
        if ($request->hasFile('image')) {
            $extension = $request->file('image')->getClientOriginalExtension();
            $filename  = uniqid() . '_426_426' . '.' . $extension;
            $path = public_path('storage/news/'.$filename);
            
            // Create image manager instance
            $manager = new ImageManager(new Driver());
            $image = $manager->read($request->file('image')->getRealPath());
            $image->resize(426, 426)->save($path);
            
            $news->resized_image = $filename;
                      
            $extension = $request->file('image')->getClientOriginalExtension();
            $fileName = uniqid() . 'news' . '.' . $extension;
            $path = $request->file('image')->storeAs("news", $fileName, 'public_uploads');
            $news->image = $path;
        }
        $news->save();
        return redirect()->back()->with('message', 'News Added successfully');
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
        //
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
            'content'=> 'required',
        ]);
         if ($validator->fails()) {
            return back()
                    ->withErrors($validator->errors())->withInput();
        }
        $news           = News::findOrFail($id);
        $news->title    = $request->title;
        $news->meta_title= $request->meta_title;
        $news->country  = $request->country;
        $news->category = $request->category;
        $news->content  = $request->content;
        $news->meta     = $request->meta;
        $news->slug      =  $this->createSlug($request->title, $id);
        if($request->hasfile('image')){
            if (!empty($news->image)) {
                if (file_exists(public_path() . "/storage/{$news->image}")) {
                    unlink(public_path() . "/storage/{$news->image}");
                }
            }
            if (!empty($news->resized_image)) {
                if (file_exists(public_path() . "/storage/news/{$news->resized_image}")) {
                    unlink(public_path() . "/storage/news/{$news->resized_image}");
                }
            }
            $extension = $request->file('image')->getClientOriginalExtension();
            $filename  = uniqid() . '_426_426' . '.' . $extension;
            $path = public_path('storage/news/'.$filename);
            
            // Create image manager instance
            $manager = new ImageManager(new Driver());
            $image = $manager->read($request->file('image')->getRealPath());
            $image->resize(426, 426)->save($path);
            
            $news->resized_image = $filename;
                      
            $extension = $request->file('image')->getClientOriginalExtension();
            $fileName = uniqid() . 'news' . '.' . $extension;
            $path = $request->file('image')->storeAs("news", $fileName, 'public_uploads');
            $news->image = $path;
        }
        $news->save();
        return redirect()->back()->with('message', 'News Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blogs = News::findOrFail($id);
        if (!empty($blogs->image)) {
            if (file_exists(public_path() . "/storage/{$blogs->image}")) {
                unlink(public_path() . "/storage/{$blogs->image}");
            }
        }
        if (!empty($blogs->resized_image)) {
            if (file_exists(public_path() . "/storage/news/{$blogs->resized_image}")) {
                unlink(public_path() . "/storage/news/{$blogs->resized_image}");
            }
        }
        $blogs->delete();
        return redirect()->back()->with('message', 'News Deleted successfully');
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
        return News::select('slug')->where('slug', 'like', $slug.'%')
                ->where('id', '<>', $id)
                ->get();
    }
    
    public function getNewsCount()
    {
        $oneWeekAgo = Carbon::now()->subWeek();
        $newsCount = News::where('updated_at', '>=', $oneWeekAgo)->count();

        return response()->json(['count' => $newsCount]);
    }
}
