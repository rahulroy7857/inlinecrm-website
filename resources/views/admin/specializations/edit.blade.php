@extends('admin.layouts.app')
@section('title', 'Edit Specialization')
@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Specialization</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('admin/dashboard')}}">Home</a></li>
              <li class="breadcrumb-item"><a href="{{url('admin/courses')}}">Courses</a></li>
              <li class="breadcrumb-item"><a href="{{url('admin/specializations/'.$course->id)}}">Specializations</a></li>
              <li class="breadcrumb-item active">Edit</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
                            
<section class="content">
      @if ($errors->any())
          <div class="alert alert-danger">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                  <ul>
                      @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                      @endforeach
                  </ul>
          </div>
      @endif
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Edit Specialization</h3>
            </div>
            <form action="{{url('admin/specializations/'.$specialization->id)}}" method="post">
                @csrf
                @method('PUT')
                <div class="card-body">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label for="name">Name</label>
                          <input type="text" name="name" class="form-control" value="{{ old('name', $specialization->name) }}" required>
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea class="textarea" name="description" id="description" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{ old('description', $specialization->description) }}</textarea>
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <label for="status">Status</label>
                          <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="status" name="status" value="1" {{ old('status', $specialization->status) ? 'checked' : '' }}>
                            <label class="custom-control-label" for="status">Active</label>
                          </div>
                        </div>
                      </div>
                    </div>
                </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Update</button>
                  <a href="{{url('admin/specializations/'.$course->id)}}" class="btn btn-secondary">Cancel</a>
                </div>
            </form>
          </div>
        </div>
      </div>
    </section>   
@endsection          
@push('scripts')
<script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
<script>
CKEDITOR.replace( 'description' , {
        versionCheck: false
    });
</script>
@endpush 