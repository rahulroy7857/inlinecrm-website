@extends('admin.layouts.app')
@section('title', 'Countries')
@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Countries</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('admin/dashboard')}}">Home</a></li>
              <li class="breadcrumb-item active">Countries</li>
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
              <h3 class="card-title">Countries</h3>
              <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-default" style="float:right">
                  Add Country
                </button>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
           
              <table id="BlogTable" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Sl.No</th>
                  <th>Country</th>
                  <th>Image</th>
                  <th>Date</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
               <?php $i= 1;?>
               @foreach($countries as $country)
                <tr>
                  <td>{{$i++}}</td>
                  <td>{{$country->name}}</td>
                  <td><img src="{{url('/storage/'.$country->image)}}" style="height: 66px;width: auto;"></td>
                  <td>{{$country->created_at->format('d-m-Y')}}</td>
                  <td class="text-center">
                    <!-- <a data-tooltip="tooltip" data-placement="top" title="Delete!" onclick="return confirm('Want to Delete?')" href="{{url('admin/delete-country/'.$country->id)}}" class="btn btn-danger btn-circle btn-sm"><i class="fa fa-trash" aria-hidden="true"></i></a> -->
                    <button class="btn btn-primary btn-circle btn-sm Edit-Country" data-tooltip="tooltip" data-placement="top" title="Edit" href="" data-toggle="modal" data-target="#myModal" ccountry="{{$country->name}}" coverview="{{$country->overview}}" cmeta_title="{{$country->meta_title}}" cmeta="{{$country->meta}}" edit-url="{{url('admin/countries/'.$country->id)}}"><i class="far fa-edit" aria-hidden="true"></i></button> 
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
              <h4 class="modal-title">Add Country</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="{{url('admin/countries')}}" method="post" enctype="multipart/form-data" autocomplete="off">
            {{csrf_field()}}
            <div class="modal-body">
            <div class="card-body">
                <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" name="name" class="form-control" id="" placeholder="Enter the Country Name" required>
                  </div>
                <div class="form-group">
                    <label for="">Meta Title</label>
                    <input type="text" name="meta_title" class="form-control" id="" placeholder="Enter the Meta Title">
                  </div>
                     <div class="form-group">
                     <label for="textarea">Meta</label>
                   <textarea class="textarea" name="meta" id="" placeholder="Place some text here"
                          style="width: 100%; height: 100px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                    </div>
                    <div class="form-group">
                     <label for="textarea">Overview</label>
                   <textarea class="textarea" name="overview" id="" placeholder="Place some text here"
                          style="width: 100%; height: 100px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                    </div>
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
              <h4 class="modal-title">Edit Country</h4>
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
                    <label for="">Name</label>
                    <input type="text" name="name" class="form-control Edit-Country-Name" id="" placeholder="Enter the Country Name" required>
                  </div>
                <div class="form-group">
                    <label for="">Meta Title</label>
                    <input type="text" name="meta_title" class="form-control Edit-Meta-Title" id="" placeholder="Enter the Meta Title">
                  </div>
                     <div class="form-group">
                     <label for="textarea">Meta</label>
                   <textarea class="textarea Edit-Meta-Desc" name="meta" id="" placeholder="Place some text here"
                          style="width: 100%; height: 100px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                    </div>
                    <div class="form-group">
                     <label for="textarea">Overview</label>
                   <textarea class="textarea Edit-Overview" name="overview" id="" placeholder="Place some text here"
                          style="width: 100%; height: 100px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                    </div>
                  <div class="form-group">
                    <label for="exampleInputFile">Image</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="image" class="custom-file-input Edit-Image" id="exampleInputFile">
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
    $("#BlogTable").DataTable({
        "pageLength" : 50,
        "responsive" : true,
        "bPaginate": true
    });
  });
</script>
<script src="//cdn.ckeditor.com/4.21.0/full/ckeditor.js"></script>
<script>
CKEDITOR.replace( 'content' , {
        versionCheck: false
    });
CKEDITOR.replace( 'content1' , {
        versionCheck: false
    });
</script>
<script>
      $(document).on('click', '.Edit-Country', function(){
            $('.Edit-Country-Name').val('');
            $('.Edit-Meta-Title').val('');
            $('.Edit-Meta-Des').text('');
            $('.Edit-Meta-Key').text('');
            $('.Edit-Overview').text('');
            $('.Edit-Flag').val('');
            $('.Edit-Content').text('');
            $('.Edit-Image').val('');
            $('#Editform').attr('action', '');

            var country = $(this).attr('ccountry');
            var title = $(this).attr('cmeta_title');
            var desc = $(this).attr('cmeta');
            var overview = $(this).attr('coverview');
            var action = $(this).attr('edit-url');

           
            $('.Edit-Country-Name').val(country);
            $('.Edit-Meta-Title').val(title);
            $('.Edit-Meta-Des').text(desc);
            $('.Edit-Overview').text(overview);
            $('.Edit-Image').val('');
            $('#Editform').attr('action', action);
            });
</script>
@endpush