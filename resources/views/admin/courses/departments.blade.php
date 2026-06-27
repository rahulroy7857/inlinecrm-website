@extends('admin.layouts.app')
@section('title', 'Departments')
@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Departments </h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('admin/dashboard')}}">Home</a></li>
              <li class="breadcrumb-item active">Departments</li>
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
              <h3 class="card-title">Departments </h3>
              <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-default" style="float:right">
                  Add Department
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
                  <th>Details</th>
                  <th>Total Courses</th>
                  <th>Order</th>
                  <th>Action</th>
                </tr>  
                </thead>
                <tbody>
               <?php $i= 1;?>
               @foreach($departments as $department)
                <tr>
                  <td>{{$i++}}</td>
                  <td><a href="{{url('admin/departments/'.$department->id)}}">{{$department->name}}</a></td>
                  <td><img src="{{url('/storage/departments/'.$department->image)}}" style="height: 66px;width: auto;"></td>
                  <td>{{$department->details}}</td>
                  <td>{{App\Models\Course::getCount($department->id)}}</td>
                  <td>{{$department->position}}</td>
                  <td class="text-center">
                 
                    <button class="btn btn-primary btn-circle btn-sm Edit-Gallery action-button" data-tooltip="tooltip" data-placement="top" title="Edit" href="" data-toggle="modal" data-target="#myModal" name="{{$department->name}}" order="{{$department->order}}" details="{{$department->details}}" edit-url="{{url('admin/departments/'.$department->id)}}"  ><i class="fa fa-edit" aria-hidden="true"></i> Edit</button> 

                    <a data-tooltip="tooltip" data-placement="top" title="View!" href="{{url('admin/departments/'.$department->id)}}" class="btn btn-info btn-circle btn-sm action-button"><i class="fa fa-book" aria-hidden="true"></i> Courses</a>
                  
                    <!-- <a data-tooltip="tooltip" data-placement="top" title="View!" href="{{url('admin/departments/notifications/'.$department->id)}}" class="btn btn-danger btn-circle btn-sm action-button"><i class="fa fa-bell" aria-hidden="true"></i> Notifications</a> -->
                  
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
              <h4 class="modal-title">Add Department</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="{{url('admin/departments')}}" method="post" enctype="multipart/form-data" autocomplete="off">
            {{csrf_field()}}
            <div class="modal-body">
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="exampleInputPassword1">Name</label>
                        <input type="text" name="name" class="form-control" id="exampleInputPassword1">
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="exampleInputPassword1">Details</label>
                        <textarea class="form-control" name="details"></textarea>
                      </div>
                    </div>
                    <div class="col-md-8">
                      <div class="form-group">
                        <label for="exampleInputFile">Image</label>
                        <div class="input-group">
                          <div class="custom-file">
                            <input type="file" name="image" class="custom-file-input" required id="exampleInputFile">
                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label>Order</label>
                        <input type="number" name="order" class="form-control">
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
              <div class="col-sm-12">
                  <div class="form-group">
                    <label for="exampleInputPassword1">Name</label>
                    <input type="text" name="name" class="form-control Edit-Title" id="exampleInputPassword1">
                  </div>
              </div>
              <div class="col-sm-12">
              <div class="form-group">
                    <label for="exampleInputPassword1">Details</label>
                    <textarea class="form-control Edit-Details" name="details"></textarea>
              </div>
            </div>
              <div class="col-sm-8">
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
              <div class="col-md-4">
                      <div class="form-group">
                        <label>Order</label>
                        <input type="number" name="order" class="form-control edit-order">
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
            $('.Edit-Title').val('');
            $('.Edit-image').val('');
            $('.Edit-Details').val('');
            $('.edit-order').val('');
            $('#Editform').attr('action', '');

            var title = $(this).attr('name');
            var details = $(this).attr('details');
            var order = $(this).attr('order');
            var action = $(this).attr('edit-url');
            
            $('.Edit-Title').val(title);
            $('.Edit-Details').val(details);
            $('.edit-order').val(order);
            $('#Editform').attr('action', action);
            });
    </script>

@endpush