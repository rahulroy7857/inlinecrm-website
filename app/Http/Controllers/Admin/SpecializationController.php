<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Specialization;
use App\Models\Course;

class SpecializationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($courseId)
    {
        $course = Course::findOrFail($courseId);
        $specializations = Specialization::where('course_id', $courseId)->orderBy('id', 'desc')->get();
        return view('admin.specializations.index', compact('specializations', 'course'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'course_id' => 'required|exists:courses,id',
        ]);

        Specialization::create([
            'name' => $request->name,
            'description' => $request->description,
            'course_id' => $request->course_id,
            'status' => $request->has('status') ? 1 : 0,
        ]);

        return redirect()->back()->with('success', 'Specialization created successfully!');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $specialization = Specialization::findOrFail($id);
        $course = Course::findOrFail($specialization->course_id);
        $specializations = Specialization::where('course_id', $specialization->course_id)->orderBy('id', 'desc')->get();
        return view('admin.specializations.edit', compact('specialization', 'course', 'specializations'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        $specialization = Specialization::findOrFail($id);
        $specialization->update([
            'name' => $request->name,
            'description' => $request->description,
            'status' => $request->has('status') ? 1 : 0,
        ]);

        return redirect()->route('admin.specializations.index', $specialization->course_id)->with('success', 'Specialization updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // return $id;
        $specialization = Specialization::findOrFail($id);
        $courseId = $specialization->course_id;
        $specialization->delete();

        return redirect('/admin/specializations/'.$courseId)->with('success', 'Specialization deleted successfully!');
    }
} 