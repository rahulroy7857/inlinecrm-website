@extends('admin.layouts.app')

@section('title', 'Entrance Exams')

@section('content')

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Entrance Exams</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{url('admin/dashboard')}}">Home</a></li>
                        <li class="breadcrumb-item active">Entrance Exams</li>
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
                            <h3 class="card-title">Manage Entrance Exams</h3>
                            <div class="card-tools">
                                <a href="{{url('admin/entrance-exams/create')}}" class="btn btn-primary btn-sm">
                                    <i class="fas fa-plus"></i> Add New Exam
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                            @if(session('success'))
                                <div class="alert alert-success alert-dismissible">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                    {{ session('success') }}
                                </div>
                            @endif

                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Exam Name</th>
                                        <th>Conducted By</th>
                                        <th>Mode</th>
                                        <th>Duration</th>
                                        <th>Course</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($exams as $exam)
                                    <tr>
                                        <td>{{ $exam->id }}</td>
                                        <td>{{ $exam->short_name }}</td>
                                        <td>{{ $exam->conducted_by }}</td>
                                        <td>{{ $exam->mode }}</td>
                                        <td>{{ $exam->duration ?? 'N/A' }}</td>
                                        <td>{{ $exam->courses->pluck('id')->toArray() ? $exam->courses->pluck('name')->implode(', ') : 'N/A' }}</td>
                                        <td>
                                            @if($exam->status)
                                                <span class="badge badge-success">Active</span>
                                            @else
                                                <span class="badge badge-danger">Inactive</span>
                                            @endif
                                        </td>
                                        <td>
                                            <!-- <a href="{{url('admin/entrance-exams/'.$exam->id)}}" class="btn btn-info btn-sm">
                                                <i class="fas fa-eye"></i>
                                            </a> -->
                                            <a href="{{url('admin/entrance-exams/'.$exam->id.'/edit')}}" class="btn btn-warning btn-sm">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <a href="{{url('admin/delete-entrance-exam/'.$exam->id)}}" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this exam?')">
                                                <i class="fas fa-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="8" class="text-center">No entrance exams found.</td>
                                    </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection 