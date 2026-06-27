@extends('admin.layouts.app')
@section('title', 'Top Colleges')
@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Top Colleges </h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('admin/dashboard')}}">Home</a></li>
              <li class="breadcrumb-item active">Top Colleges</li>
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
              <h3 class="card-title">Top Colleges </h3>
              <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-default" style="float:right">
                  Add Partner
                </button>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
           
              <table id="EnquiriesTable" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th width="5%">Sl.No</th>
                  <th>Title</th>
                  <th>Image</th>
                  <th>Action</th>
                </tr>  
                </thead>
                <tbody>
               <?php $i= 1;?>
               @foreach($partners as $gallery)
                <tr>
                  <td>{{$i++}}</td>
                  <td>{{$gallery->name}}</td>
                  <td><img src="{{url('/storage/'.$gallery->image)}}" style="height: 66px;width: auto;"></td>
                  <td class="text-center">
                    <button class="btn btn-primary btn-circle btn-sm Edit-Gallery" data-tooltip="tooltip" data-placement="top" title="Edit" href="" data-toggle="modal" data-target="#myModal" name="{{$gallery->name}}" edit-url="{{url('admin/update-partner/'.$gallery->id)}}"  ><i class="far fa-edit" aria-hidden="true"></i></button> 
                    <a data-tooltip="tooltip" data-placement="top" title="Delete!" onclick="return confirm('Want to Delete?')" href="{{url('admin/delete-partner/'.$gallery->id)}}" class="btn btn-danger btn-circle btn-sm"><i class="fa fa-trash" aria-hidden="true"></i></a>
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
              <h4 class="modal-title">Add College</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="{{url('admin/add-partner')}}" method="post" enctype="multipart/form-data" autocomplete="off">
            {{csrf_field()}}
            <div class="modal-body">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputPassword1">Name</label>
                    <input type="text" name="name" class="form-control" required id="exampleInputPassword1">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="image" class="custom-file-input" id="exampleInputFile" multiple required>
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
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
              <h4 class="modal-title">Edit College</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="" id="Editform" method="post" enctype="multipart/form-data" autocomplete="off">
            {{csrf_field()}}
            {{method_field('PATCH')}}
            <div class="modal-body">
            <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputPassword1">Name</label>
                    <input type="text" name="name" class="form-control Edit-Title" id="exampleInputPassword1" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="image" class="custom-file-input Edit-image" id="exampleInputFile" multiple >
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
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
            $('#Editform').attr('action', '');

            var title = $(this).attr('name');
            var action = $(this).attr('edit-url');
            
            $('.Edit-Title').val(title);
            $('#Editform').attr('action', action);
            });
    </script>

@endpush