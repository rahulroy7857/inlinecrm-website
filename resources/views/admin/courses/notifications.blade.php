@extends('admin.layouts.app')
@section('title', 'Notifications')
@push('custom-style')
<style>
  .select2-container--default {
    width: 100% !important;
  }
  .select2-selection--single {
    height: 35px !important;
  }
</style>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker.css">
@endpush
@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>{{$college->name}} Notifications </h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('admin/dashboard')}}">Home</a></li>
              <li class="breadcrumb-item active">Notifications</li>
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
              <h3 class="card-title">Notifications </h3>
              <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-default" style="float:right">
                  Add Notification
                </button>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
           
              <table id="EnquiriesTable" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th width="5%">Sl.No</th>
                  <th>Name</th>
                  <th>Details</th>
                  <th>Action</th>
                </tr>  
                </thead>
                <tbody>
               <?php $i= 1;?>
               @foreach($exams as $program)
                <tr>
                  <td>{{$i++}}</td>
                  <td>{{$program->name}}</td>
                  <td>{!!$program->details!!}</td>
                  <td>
                    <a data-tooltip="tooltip" data-placement="top" title="Delete!" onclick="return confirm('Want to Delete?')" href="{{url('admin/delete-department-notification/'.$program->id)}}" class="btn btn-danger btn-circle btn-sm"><i class="fa fa-trash" aria-hidden="true"></i></a>

                    <button class="btn btn-primary btn-circle btn-sm edit-course" data-tooltip="tooltip" data-placement="top" title="Edit" href="" data-toggle="modal" data-target="#myModal" exam="{{$program->name}}" name="{{$program->name}}" mtitle="{{$program->meta_title}}" mdes="{{$program->meta}}" details="{{$program->details}}" url="{{url('admin/update-department-notification/'.$program->id)}}"><i class="far fa-edit" aria-hidden="true"></i></button> 
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
              <h4 class="modal-title">Add Notification</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="{{url('admin/add-department-notification')}}" method="post" enctype="multipart/form-data" autocomplete="off">
            {{csrf_field()}}
            <input type="hidden" value="{{$collegeId}}" name="college_id">
            <div class="modal-body">
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="exampleInputPassword1">Title</label>
                      <input type="text" name="name" class="form-control" required>
                    </div>
                  </div>
                  
                  <div class="col-md-12">
                  <div class="form-group">
                    <label for="">Meta Title</label>
                    <input type="text" name="meta_title" class="form-control" id="" placeholder="Enter Meta Title">
                  </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="textarea">Meta</label>
                      <textarea class="textarea" name="meta" id="" placeholder="Place some text here"
                            style="width: 100%; height: 100px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                        <label for="textarea">Details</label>
                        <textarea class="textarea" name="details" id="content" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
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
              <h4 class="modal-title">Edit Notification</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="" id="Editform" method="post" enctype="multipart/form-data" autocomplete="off">
            {{csrf_field()}}
            {{method_field('PATCH')}}
            <div class="modal-body">
              <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="exampleInputPassword1">Title</label>
                      <input type="text" name="name" class="form-control edit-exam">
                    </div>
                  </div>
=                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="">Meta Title</label>
                      <input type="text" name="meta_title" class="form-control Edit-Mtitle" id="" placeholder="Enter Meta Title">
                    </div>
                  </div>
                
                  <div class="col-md-12">
                     <div class="form-group">
                       <label for="textarea">Meta</label>
                     <textarea class="textarea Edit-meta" name="meta" id="" placeholder="Place some text here" style="width: 100%; height: 100px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                      </div>
                  </div>
=                  <div class="col-md-12">
                    <div class="form-group">
                        <label for="textarea">Details</label>
                        <textarea class="textarea" name="details" id="content1" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/js/bootstrap-datepicker.js"></script>
<script>
        //Date picker
    var nowDate = new Date();
    var today = new Date(nowDate.getFullYear(), nowDate.getMonth(), nowDate.getDate(), 0, 0, 0, 0);
    $('.datepicker').datepicker({
      autoclose: true,
      format: 'dd-mm-yyyy'
    })
</script>
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
CKEDITOR.replace( 'content3', {
        versionCheck: false
    } );
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
            $('.edit-exam').val('');
            $('.edit-name').val('');
            $('.edit-start').val('');
            $('.edit-end').val('');
            $('.edit-mode').val('');
            $('.Edit-Mtitle').val('');
            $('.Edit-meta').text('');
            $('#Editform').attr('action', '');

            var exam = $(this).attr('exam');
            var name = $(this).attr('name');
            var start = $(this).attr('start');
            var end = $(this).attr('end');
            var mode = $(this).attr('mode');
            var details = $(this).attr('details');
            var meta = $(this).attr('mdes');
            var mtitle = $(this).attr('mtitle');
            var action = $(this).attr('url');

            $('.edit-exam').val(exam);
            $('.edit-name').val(name);
            $('.edit-start').val(start);
            $('.edit-end').val(end);
            $('.Edit-meta').text(meta);
            $('.Edit-Mtitle').val(mtitle);
            $('.edit-mode').val(mode); 
            CKEDITOR.instances['content1'].setData(details)
            $('#Editform').attr('action', action);
      });
    </script>

@endpush