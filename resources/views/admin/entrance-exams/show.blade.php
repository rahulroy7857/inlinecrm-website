@extends('admin.layouts.app')

@section('title', 'View Entrance Exam')

@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>View Entrance Exam</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{url('admin/dashboard')}}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{url('admin/entrance-exams')}}">Entrance Exams</a></li>
                        <li class="breadcrumb-item active">View Exam</li>
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
                            <h3 class="card-title">Exam Details</h3>
                            <div class="card-tools">
                                <a href="{{url('admin/entrance-exams/'.$exam->id.'/edit')}}" class="btn btn-warning btn-sm">
                                    <i class="fas fa-edit"></i> Edit
                                </a>
                                <a href="{{url('admin/entrance-exams')}}" class="btn btn-secondary btn-sm">
                                    <i class="fas fa-arrow-left"></i> Back
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <table class="table table-borderless">
                                        <tr>
                                            <th width="150">Exam Name:</th>
                                            <td>{{ $exam->name }}</td>
                                        </tr>
                                        <tr>
                                            <th>Conducted By:</th>
                                            <td>{{ $exam->conducted_by }}</td>
                                        </tr>
                                        <tr>
                                            <th>Mode:</th>
                                            <td>{{ $exam->mode }}</td>
                                        </tr>
                                        <tr>
                                            <th>Duration:</th>
                                            <td>{{ $exam->duration ?? 'Not specified' }}</td>
                                        </tr>
                                        <tr>
                                            <th>Applicable Course:</th>
                                            <td>{{ $exam->course ? $exam->course->name : 'Not specified' }}</td>
                                        </tr>
                                        <tr>
                                            <th>Status:</th>
                                            <td>
                                                @if($exam->status)
                                                    <span class="badge badge-success">Active</span>
                                                @else
                                                    <span class="badge badge-danger">Inactive</span>
                                                @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Created:</th>
                                            <td>{{ $exam->created_at->format('d M Y, h:i A') }}</td>
                                        </tr>
                                        <tr>
                                            <th>Updated:</th>
                                            <td>{{ $exam->updated_at->format('d M Y, h:i A') }}</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>

                            <hr>

                            <div class="row">
                                <div class="col-12">
                                    <h5><strong>Purpose:</strong></h5>
                                    <p>{{ $exam->purpose }}</p>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-12">
                                    <h5><strong>Eligibility:</strong></h5>
                                    <p>{{ $exam->eligibility }}</p>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-12">
                                    <h5><strong>Exam Pattern:</strong></h5>
                                    <div class="border p-3 bg-light">
                                        {!! $exam->exam_pattern !!}
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-12">
                                    <h5><strong>Admission Process:</strong></h5>
                                    <p>{{ $exam->admission_process }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection 