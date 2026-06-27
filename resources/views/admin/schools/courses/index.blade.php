@extends('admin.layouts.app')
@section('title', 'Courses')
@push('custom-style')
<style>
  .select2-container--default {
    width: 100% !important;
  }
  .select2-selection--single {
    height: 35px !important;
  }
</style>

@endpush
@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>{{$college->name}} Courses </h1>
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
                  <th>Class</th>
                  <th>Name</th>
                  <th>Seat</th>
                  <th>Fee</th>
                  <th>Duration</th>
                  <th>Action</th>
                </tr>  
                </thead>
                <tbody>
               <?php $i= 1;?>
               @foreach($programs as $program)
                <tr>
                  <td>{{$i++}}</td>
                  <td>{{$program->classes->name}}</td>
                  <td>{{$program->course_name}}</td>
                  <td>{{$program->seat}}</td>
                  <td>{{$program->fee}}</td>
                  <td>{{$program->duration}}</td>
                  <td>
                    <a data-tooltip="tooltip" data-placement="top" title="Delete!" onclick="return confirm('Want to Delete?')" href="{{url('admin/delete-school-program/'.$program->id)}}" class="btn btn-danger btn-circle btn-sm"><i class="fa fa-trash" aria-hidden="true"></i></a>

                    <button class="btn btn-primary btn-circle btn-sm edit-course" data-tooltip="tooltip" data-placement="top" title="Edit" href="" data-toggle="modal" data-target="#myModal" course="{{$program->class_id}}" name="{{$program->course_name}}" fee="{{$program->fee}}" mode="{{$program->mode}}" seat="{{$program->seat}}" exams="{{$program->exams}}" eligibility="{{$program->eligibility}}" duration="{{$program->duration}}" affiliation="{{$program->affiliation}}" popular="{{$program->status}}" url="{{url('admin/update-school-program/'.$program->id)}}"><i class="far fa-edit" aria-hidden="true"></i></button> 
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
            <form action="{{url('admin/add-school-program')}}" method="post" enctype="multipart/form-data" autocomplete="off">
            {{csrf_field()}}
            <input type="hidden" value="{{$collegeId}}" name="school_id">
            <div class="modal-body">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="exampleInputPassword1">Course</label>
                      <select class="form-control js-example-basic-single" name="course" required>
                          <option value="">Select</option>
                          @foreach($courses as $course)
                          <option value="{{$course->id}}">{{$course->name}}</option>
                          @endforeach
                      </select>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="exampleInputPassword1">Course Name</label>
                      <input type="text" name="name" class="form-control">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="exampleInputPassword1">Seat</label>
                      <input type="number" name="seat" class="form-control" required>
                    </div>
                  </div>
                  
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="exampleInputPassword1">Fee</label>
                      <input type="text" name="fee" class="form-control" required>
                    </div>
                  </div>
                  
                  <div class="col-md-12">
                    <div class="form-group">
                        <label for="textarea">Eligibility</label>
                        <textarea class="textarea" name="eligibility" id="content" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="exampleInputPassword1">Duration</label>
                      <input type="text" name="duration" class="form-control" id="exampleInputPassword1" required>
                    </div>
                  </div>
                  <div class="col-md-6">
                      <div class="form-group">
                          <label for="exampleInputPassword1">Popular Course ?</label>
                          <select class="form-control" name="popular_course" required>
                              <option value="">Select</option>
                              <option value="1">Yes</option>
                              <option value="2">No</option>
                          </select>
                      </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                        <label for="textarea">Affiliation</label>
                        <textarea class="textarea" name="affiliation" id="content1" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
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
              <h4 class="modal-title">Edit Course</h4>
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
                      <label for="exampleInputPassword1">Course</label>
                      <select class="form-control js-example-basic-single edit-course" name="course" required>
                          <option value="">Select</option>
                          @foreach($courses as $course)
                          <option value="{{$course->id}}">{{$course->name}}</option>
                          @endforeach
                      </select>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="exampleInputPassword1">Course Name</label>
                      <input type="text" name="name" class="form-control edit-name">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="exampleInputPassword1">Seat</label>
                      <input type="number" name="seat" class="form-control edit-seat" required>
                    </div>
                  </div>
                  
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="exampleInputPassword1">Fee</label>
                      <input type="text" name="fee" class="form-control edit-fee" required>
                    </div>
                  </div>
                  
                  <div class="col-md-12">
                    <div class="form-group">
                        <label for="textarea">Eligibility</label>
                        <textarea class="textarea" name="eligibility" id="content2" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="exampleInputPassword1">Duration</label>
                      <input type="text" name="duration" class="form-control edit-duration" id="exampleInputPassword1" required>
                    </div>
                  </div>
                  <div class="col-md-6">
                      <div class="form-group">
                          <label for="exampleInputPassword1">Popular Course ?</label>
                          <select class="form-control edit-popular" name="popular_course" required>
                              <option value="">Select</option>
                              <option value="1">Yes</option>
                              <option value="2">No</option>
                          </select>
                      </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                        <label for="textarea">Affiliation</label>
                        <textarea class="textarea" name="affiliation" id="content3" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
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
  $(document).ready(function() {
    $('.js-example-basic-single').select2();
  });
</script>

<script>
      $(document).on('click', '.edit-course', function(){
            $('.edit-course').val('');
            $('.edit-name').val('');
            $('.edit-seat').val('');
            $('.edit-mode').val('');
            $('.edit-fee').val('');
            $('.edit-exam').val('');
            $('.edit-duration').val('');  
            $('.edit-popular').val('');          
            $('#Editform').attr('action', '');

            $('.js-example-basic-single').select2('destroy');

            var course = $(this).attr('course');
            var name = $(this).attr('name');
            var fee = $(this).attr('fee');
            var mode = $(this).attr('mode');
            var seat = $(this).attr('seat');
            var exams = $(this).attr('exams');
            var eligibility = $(this).attr('eligibility');
            var duration = $(this).attr('duration');
            var popular = $(this).attr('popular');
            var affiliation = $(this).attr('affiliation');

            var action = $(this).attr('url');

            $('.edit-course').val(course);
            $('.edit-name').val(name);
            $('.edit-seat').val(seat);
            $('.edit-mode').val(mode);
            $('.edit-fee').val(fee);
            $('.edit-exam').val(exams);
            $('.edit-duration').val(duration);  
            $('.edit-popular').val(popular);    
            CKEDITOR.instances['content2'].setData(eligibility)
            CKEDITOR.instances['content3'].setData(affiliation)
            $('#Editform').attr('action', action);
            $('.js-example-basic-single').select2();
      });
    </script>

@endpush