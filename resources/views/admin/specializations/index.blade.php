@extends('admin.layouts.app')
@section('title', 'Specializations')
@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>{{$course->name}} - Specializations</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('admin/dashboard')}}">Home</a></li>
              <li class="breadcrumb-item"><a href="{{url('admin/departments/'.$course->department_id)}}">Courses</a></li>
              <li class="breadcrumb-item active">Specializations</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
                            
<section class="content">
      @if(session()->has('success'))
          <div class="alert alert-success alert-dismissible" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                  {{ session()->get('success') }}
          </div>
      @endif
      @if(session()->has('error'))
          <div class="alert alert-danger alert-dismissible" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                  {{ session()->get('error') }}
          </div>
      @endif
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Specializations</h3>
              <button type="button" class="btn btn-success" data-toggle="modal" data-target="#addSpecializationModal" style="float:right">
                  Add Specialization
                </button>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
           
              <table id="SpecializationsTable" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th width="5%">Sl.No</th>
                  <th>Name</th>
                  <th>Description</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>  
                </thead>
                <tbody>
               <?php $i= 1;?>
               @foreach($specializations as $specialization)
                <tr>
                  <td>{{$i++}}</td>
                  <td>{{$specialization->name}}</td>
                  <td>{!!$specialization->description!!}</td>
                  <td>
                    @if($specialization->status)
                        <span class="badge badge-success">Active</span>
                    @else
                        <span class="badge badge-danger">Inactive</span>
                    @endif
                  </td>
                  <td class="text-center">
                    <a href="{{url('admin/specializations/'.$specialization->id.'/edit')}}" class="btn btn-warning btn-sm">
                      <i class="far fa-edit"></i> Edit
                    </a>
                    <a href="{{url('admin/delete-specializations/'.$specialization->id)}}" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this specialization?')">
                      <i class="far fa-trash-alt"></i> Delete
                    </a>
                  </td>
                </tr>
                @endforeach
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
        </div>
      </div>
    </section>   
   
<!-- Add Specialization Modal -->
<div class="modal fade" id="addSpecializationModal">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Add Specialization</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="{{url('admin/specializations')}}" method="post">
            {{csrf_field()}}
            <input type="hidden" value="{{$course->id}}" name="course_id">
            <div class="modal-body">
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="name">Name</label>
                      <input type="text" name="name" class="form-control" required>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea class="textarea" name="description" id="description" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="status">Status</label>
                      <div class="custom-control custom-switch">
                        <input type="checkbox" class="custom-control-input" id="status" name="status" value="1" checked>
                        <label class="custom-control-label" for="status">Active</label>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
@endsection          
@push('scripts')
<script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
<script>
CKEDITOR.replace( 'description' , {
        versionCheck: false
    });
</script>
<script>
  $(function () {
    $("#SpecializationsTable").DataTable({
        "pageLength" : 50,
        "responsive" : true
    });
  });
</script>
@endpush 