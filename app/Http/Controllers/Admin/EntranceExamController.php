<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\EntranceExam;
use App\Models\Course;
use Illuminate\Support\Str;

class EntranceExamController extends Controller
{
    public function index()
    {
        $exams = EntranceExam::orderBy('id', 'desc')->get();
        return view('admin.entrance-exams.index', compact('exams'));
    }

    public function create()
    {
        return view('admin.entrance-exams.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'short_name' => 'nullable|string|max:100',
            'full_name' => 'nullable|string|max:255',
            'slug' => 'nullable|string|max:255|unique:entrance_exams,slug',
            'conducted_by' => 'required|string|max:255',
            'purpose' => 'required|string',
            'eligibility' => 'required|string',
            'exam_pattern' => 'required|string',
            'mode' => 'required|string|max:255',
            'duration' => 'nullable|string|max:255',
            'admission_process' => 'required|string',
            'course_id' => 'nullable|array',
            'course_id.*' => 'exists:courses,id',
        ]);

        $slugBase = $request->short_name;

        $exam = EntranceExam::create([
            'meta_title' => $request->meta_title,
            'meta' => $request->meta,
            'short_name' => $request->short_name,
            'full_name' => $request->full_name,
            'slug' => Str::slug($slugBase),
            'conducted_by' => $request->conducted_by,
            'purpose' => $request->purpose,
            'eligibility' => $request->eligibility,
            'exam_pattern' => $request->exam_pattern,
            'mode' => $request->mode,
            'duration' => $request->duration,
            'admission_process' => $request->admission_process,
            'status' => $request->has('status') ? 1 : 0,
        ]);

        // Sync multiple courses to the pivot table
        if ($request->has('course_id')) {
            $exam->courses()->sync($request->course_id);
        }

        return redirect('/admin/entrance-exams')->with('success', 'Entrance exam created successfully!');
    }

    public function show(string $id)
    {
        $exam = EntranceExam::findOrFail($id);
        return view('admin.entrance-exams.show', compact('exam'));
    }

    public function edit(string $id)
    {
        $exam = EntranceExam::with('courses')->findOrFail($id);
        return view('admin.entrance-exams.edit', compact('exam'));
    }

    public function update(Request $request, string $id)
    {
        $exam = EntranceExam::findOrFail($id);

        $request->validate([
            'short_name' => 'nullable|string|max:100',
            'full_name' => 'nullable|string|max:255',
            'slug' => 'nullable|string|max:255|unique:entrance_exams,slug,' . $exam->id,
            'conducted_by' => 'required|string|max:255',
            'purpose' => 'required|string',
            'eligibility' => 'required|string',
            'exam_pattern' => 'required|string',
            'mode' => 'required|string|max:255',
            'duration' => 'nullable|string|max:255',
            'admission_process' => 'required|string',
            'course_id' => 'nullable|array',
            'course_id.*' => 'exists:courses,id',
        ]);

        $exam->update([
            'meta_title' => $request->meta_title,
            'meta' => $request->meta,
            'short_name' => $request->short_name,
            'full_name' => $request->full_name,
            'conducted_by' => $request->conducted_by,
            'purpose' => $request->purpose,
            'eligibility' => $request->eligibility,
            'exam_pattern' => $request->exam_pattern,
            'mode' => $request->mode,
            'duration' => $request->duration,
            'admission_process' => $request->admission_process,
            'status' => $request->has('status') ? 1 : 0,
        ]);

        // Sync updated course relations
        if ($request->has('course_id')) {
            $exam->courses()->sync($request->course_id);
        }

        return redirect('/admin/entrance-exams')->with('success', 'Entrance exam updated successfully!');
    }

    public function destroy(string $id)
    {
        $exam = EntranceExam::findOrFail($id);
        $exam->courses()->detach(); // Clean up pivot relations
        $exam->delete();

        return redirect('/admin/entrance-exams')->with('success', 'Entrance exam deleted successfully!');
    }
}
