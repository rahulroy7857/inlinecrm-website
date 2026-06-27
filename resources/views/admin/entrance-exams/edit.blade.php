@extends('admin.layouts.app')

@section('title', 'Edit Entrance Exam')

@section('content')

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Edit Entrance Exam</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{url('admin/dashboard')}}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{url('admin/entrance-exams')}}">Entrance Exams</a></li>
                        <li class="breadcrumb-item active">Edit Exam</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Edit Entrance Exam</h3>
                        </div>
                        <form action="{{url('admin/entrance-exams/'.$exam->id)}}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                @if($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                        <label>Meta Title</label>
                                        <input type="text" name="meta_title" value="{{$exam->meta_title}}" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                        <label for="textarea">Meta Description</label>
                                        <textarea class="textarea" name="meta" id="" placeholder="Place some text here"
                                            style="width: 100%; height: 100px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{$exam->meta}}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="name">Exam Name(full) *</label>
                                            <input type="text" class="form-control" id="name" name="full_name" value="{{ old('full_name', $exam->full_name) }}" placeholder="e.g., Karnataka Common Entrance Test" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="name">Exam Name(short) *</label>
                                            <input type="text" class="form-control" id="name" name="short_name" value="{{ old('short_name', $exam->short_name) }}" placeholder="e.g., KCET" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="conducted_by">Conducted By *</label>
                                            <input type="text" class="form-control" id="conducted_by" name="conducted_by" value="{{ old('conducted_by', $exam->conducted_by) }}" placeholder="e.g., Karnataka Examination Authority (KEA)" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="purpose">Purpose *</label>
                                    <textarea class="form-control" id="purpose" name="purpose" rows="3" placeholder="Describe the purpose of this exam" required>{{ old('purpose', $exam->purpose) }}</textarea>
                                </div>

                                <div class="form-group">
                                    <label for="eligibility">Eligibility *</label>
                                    <textarea class="form-control" id="eligibility" name="eligibility" rows="3" placeholder="Describe the eligibility criteria" required>{{ old('eligibility', $exam->eligibility) }}</textarea>
                                </div>

                                <div class="form-group">
                                    <label for="exam_pattern">Exam Pattern *</label>
                                    <textarea class="form-control" id="exam_pattern" name="exam_pattern" rows="10" placeholder="Describe the exam pattern in detail" required>{{ old('exam_pattern', $exam->exam_pattern) }}</textarea>
                                </div>

                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label for="mode">Mode *</label>
                                            <select class="form-control" id="mode" name="mode" required>
                                                <option value="">Select Mode</option>
                                                <option value="Offline" {{ old('mode', $exam->mode) == 'Offline' ? 'selected' : '' }}>Offline (Pen and Paper-based)</option>
                                                <option value="Online" {{ old('mode', $exam->mode) == 'Online' ? 'selected' : '' }}>Online (Computer-based)</option>
                                                <option value="Hybrid" {{ old('mode', $exam->mode) == 'Hybrid' ? 'selected' : '' }}>Hybrid</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label for="duration">Duration</label>
                                            <input type="text" class="form-control" id="duration" name="duration" value="{{ old('duration', $exam->duration) }}" placeholder="e.g., 80 minutes per subject">
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label for="status">Status</label>
                                            <div class="custom-control custom-switch">
                                                <input type="checkbox" class="custom-control-input" id="status" name="status" value="1" {{ old('status', $exam->status) ? 'checked' : '' }}>
                                                <label class="custom-control-label" for="status">Active</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="course_id">Applicable Course</label>
                                            <select name="course_id[]" multiple class="form-control js-example-basic-single">
                                                @foreach(\App\Models\Course::all() as $course)
                                                    <option value="{{ $course->id }}" {{ in_array($course->id, old('course_id', $exam->courses->pluck('id')->toArray() ?? [])) ? 'selected' : '' }}>{{ $course->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    
                                </div>

                                <div class="form-group">
                                    <label for="admission_process">Admission Process *</label>
                                    <textarea class="form-control" id="admission_process" name="admission_process" rows="3" placeholder="Describe the admission process" required>{{ old('admission_process', $exam->admission_process) }}</textarea>
                                </div>
                            </div>

                            <div class="card-footer text-right">
                                <a href="{{url('admin/entrance-exams')}}" class="btn btn-secondary">Cancel</a>
                                <button type="submit" class="btn btn-primary">Update Exam</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

@push('scripts')
<script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
<script>
$(document).ready(function() {
    $('.js-example-basic-single').select2();
});
CKEDITOR.replace( 'purpose' , {
        versionCheck: false
    });
CKEDITOR.replace( 'eligibility' , {
        versionCheck: false
    });
CKEDITOR.replace( 'admission_process' , {
        versionCheck: false
    });
CKEDITOR.replace( 'exam_pattern' , {
        versionCheck: false
    });
</script>
@endpush 