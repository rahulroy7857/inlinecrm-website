@extends('admin.layouts.app')
@section('title', 'Courses')
@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>{{$department->name}} Courses </h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('admin/dashboard')}}">Home</a></li>
              <li class="breadcrumb-item active">Courses</li>
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
      @if(session()->has('message'))
          <div class="alert alert-success alert-dismissible" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                  {{ session()->get('message') }}
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
              <h3 class="card-title">Courses </h3>
              <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-default" style="float:right">
                  Add Course
                </button>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
           
              <table id="EnquiriesTable" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th width="5%">Sl.No</th>
                  <th>Name</th>
                  <th>Image</th>
                  <th>Eligibility</th>
                  <th>Duration</th>
                  <th>Univsersity</th>
                  <th>Specializations</th>
                  <th>Action</th>
                </tr>  
                </thead>
                <tbody>
               <?php $i= 1;?>
               @foreach($courses as $course)
                <tr>
                  <td>{{$i++}}</td>
                  <td>{{$course->name}}</td>
                  <td><img src="{{url('/storage/'.$course->logo)}}" style="height: 66px;width: auto;"></td>
                  <td>{!!$course->eligibility!!}</td>
                  <td>{{$course->duration}}</td>
                  <td>{!!$course->university!!}</td>
                  <td>
                    <a href="{{url('admin/specializations/'.$course->id)}}" class="btn btn-info btn-sm">
                      <i class="fas fa-list"></i> Specializations ({{$course->specializations->count()}})
                    </a>
                  </td>
                  <td class="text-center">
                    <button class="btn btn-primary btn-circle btn-sm Edit-Gallery action-button" data-tooltip="tooltip" data-placement="top" title="Edit" href="" data-toggle="modal" data-target="#myModal" name="{{$course->name}}" type="{{$course->type}}" full_name="{{$course->full_name}}" duration="{{$course->duration}}" eligibility="{{$course->eligibility}}" university="{{$course->university}}" edit-url="{{url('admin/courses/'.$course->id)}}" order="{{$course->order}}"  ><i class="far fa-edit" aria-hidden="true"></i></button> 
                    
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
   
<div class="modal fade" id="modal-default">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Add Course</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="{{url('admin/courses')}}" method="post" enctype="multipart/form-data" autocomplete="off">
            {{csrf_field()}}
            <input type="hidden" value="{{$departmentId}}" name="department_id">
            <div class="modal-body">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="exampleInputPassword1">Type</label>
                      <select class="form-control" name="type" required>
                          <option value="">Select</option>
                          <option value="1">UG</option>
                          <option value="2">PG</option>
                          <option value="3">Diploma</option>
                          <option value="4">PUC</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="exampleInputPassword1">Name</label>
                      <input type="text" name="name" class="form-control" id="exampleInputPassword1" required>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="exampleInputPassword1">Full Name</label>
                      <input type="text" name="full_name" class="form-control" id="exampleInputPassword1" required>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="exampleInputFile">Image</label>
                      <div class="input-group">
                        <div class="custom-file">
                          <input type="file" name="image" class="custom-file-input" id="exampleInputFile" required>
                          <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                        </div>
                        
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="exampleInputPassword1">Order</label>
                      <input type="number" name="order" class="form-control" id="exampleInputPassword1" required>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                        <label for="textarea">Eligibility</label>
                        <textarea class="textarea" name="eligibility" id="content" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" required></textarea>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="exampleInputPassword1">Duration</label>
                      <input type="text" name="duration" class="form-control" id="exampleInputPassword1" required>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                        <label for="textarea">University</label>
                        <textarea class="textarea" name="university" id="content1" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
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
  <!-- Edit Gallery     -->
      <div class="modal fade" id="myModal">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Edit Department</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="" id="Editform" method="post" enctype="multipart/form-data" autocomplete="off">
            {{csrf_field()}}
            {{method_field('PATCH')}}
            <div class="modal-body">
            <div class="row">
              <div class="col-md-6">
                  <div class="form-group">
                      <label for="exampleInputPassword1">Type</label>
                      <select class="form-control Edit-Type" name="type" required>
                          <option value="">Select</option>
                          <option value="1">UG</option>
                          <option value="2">PG</option>
                          <option value="3">Diploma</option>
                          <option value="4">PUC</option>
                      </select>
                  </div>
              </div>
              <div class="col-sm-6">
                  <div class="form-group">
                    <label for="exampleInputPassword1">Name</label>
                    <input type="text" name="name" class="form-control Edit-Name" id="exampleInputPassword1" required>
                  </div>
              </div>
              <div class="col-sm-12">
                  <div class="form-group">
                    <label for="exampleInputPassword1">Full Name</label>
                    <input type="text" name="full_name" class="form-control Edit-Full-Name" id="exampleInputPassword1" required>
                  </div>
              </div>
              <div class="col-sm-6">
                  <div class="form-group">
                    <label for="exampleInputFile">Image</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="image" class="custom-file-input Edit-image" id="exampleInputFile" >
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      
                    </div>
                  </div>
              </div>
              <div class="col-md-6">
                    <div class="form-group">
                      <label for="exampleInputPassword1">Order</label>
                      <input type="number" name="order" class="form-control Edit-Order" id="exampleInputPassword1" required>
                    </div>
                  </div>
              <div class="col-sm-12">
                  <div class="form-group">
                      <label for="textarea">Eligibility</label>
                      <textarea class="textarea" name="eligibility" id="content2" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" required></textarea>
                  </div>
              </div>
              <div class="col-sm-12">
                  <div class="form-group">
                    <label for="exampleInputPassword1">Duration</label>
                    <input type="text" name="duration" class="form-control Edit-Duration" id="exampleInputPassword1" required>
                  </div>
              </div>
              <div class="col-sm-12">
                  <div class="form-group">
                      <label for="textarea">University</label>
                      <textarea class="textarea" name="university" id="content3" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
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
CKEDITOR.replace( 'content' , {
        versionCheck: false
    });
CKEDITOR.replace( 'content1' , {
        versionCheck: false
    });
CKEDITOR.replace( 'content2' , {
        versionCheck: false
    });
CKEDITOR.replace( 'content3' , {
        versionCheck: false
    });
</script>
<script>
  $(function () {
    $("#EnquiriesTable").DataTable({
        "pageLength" : 50,
        "responsive" : true
    });
  });
</script>

<script>
      $(document).on('click', '.Edit-Gallery', function(){
            $('.Edit-Name').val('');
            $('.Edit-Type').val('');
            $('.Edit-Full-Name').val('');
            $('.Edit-Duration').val('');
            $('.Edit-Order').val('');
            $('#Editform').attr('action', '');

            var type = $(this).attr('type');
            var name = $(this).attr('name');
            var fullName = $(this).attr('full_name');
            var eligibility = $(this).attr('eligibility');
            var duration = $(this).attr('duration');
            var order = $(this).attr('order');
            var university = $(this).attr('university');
            var action = $(this).attr('edit-url');

            $('.Edit-Name').val(name);
            $('.Edit-Type').val(type);
            $('.Edit-Order').val(order);
            $('.Edit-Full-Name').val(fullName);
            $('.Edit-Duration').val(duration);
            CKEDITOR.instances['content2'].setData(eligibility)
            CKEDITOR.instances['content3'].setData(university)
            $('#Editform').attr('action', action);
      });
    </script>

@endpush