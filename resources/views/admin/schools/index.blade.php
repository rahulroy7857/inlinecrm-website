@extends('admin.layouts.app')
@section('title', 'Schools')
@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Schools </h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('admin/dashboard')}}">Home</a></li>
              <li class="breadcrumb-item active">Schools</li>
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
              <h3 class="card-title">Schools </h3>
              <a href="{{url('/admin/schools/create')}}"><button type="button" class="btn btn-success" style="float:right">
                  Add School
                </button></a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
           
              <table id="EnquiriesTable" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th width="5%">Sl.No</th>
                  <th>Name</th>
                  <th>logo</th>
                  <th>Courses</th>
                  <th>Action</th>
                </tr>  
                </thead>
                <tbody>
                <?php $i= 1;?>
               @foreach($colleges as $college)
                <tr>
                  <td>{{$i++}}</td>
                  <td>{{$college->name}}</td>
                  <td><img src="{{url('/storage/'.$college->logo)}}" style="height: 66px;width: auto;"></td>
                  <td>{{App\Models\SchoolClasse::courseCount($college->id)}}</td>
                  <td class="text-center">
                    <a data-tooltip="tooltip" data-placement="top" title="View!" href="{{url('admin/schools/'.$college->id.'/edit')}}" class="btn btn-info btn-circle btn-sm action-button"><i class="fa fa-edit" aria-hidden="true"></i> Edit</a>

                    <!-- <a data-tooltip="tooltip" data-placement="top" title="View!" href="{{url('admin/schools/courses/'.$college->id)}}" class="btn btn-primary btn-circle btn-sm action-button"><i class="fa fa-book" aria-hidden="true"></i> Courses</a> -->

                    <!-- <a data-tooltip="tooltip" data-placement="top" title="View!" href="{{url('admin/colleges/exams/'.$college->id)}}" class="btn btn-success btn-circle btn-sm action-button"><i class="fa fa-file" aria-hidden="true"></i> Exams</a> -->

                    <!-- <a data-tooltip="tooltip" data-placement="top" title="View!" href="{{url('admin/schools/faqs/'.$college->id)}}" class="btn btn-danger btn-circle btn-sm action-button"><i class="fa fa-question" aria-hidden="true"></i> FAQS</a> -->
                    
                    <!-- <a data-tooltip="tooltip" data-placement="top" title="View!" href="{{url('admin/schools/reviews/'.$college->id)}}" class="btn btn-info btn-circle btn-sm action-button"><i class="fa fa-envelope" aria-hidden="true"></i> Reviews</a> -->
                    
                    <!-- <a data-tooltip="tooltip" data-placement="top" title="Whats New" href="{{url('admin/schools/notifications/'.$college->id)}}" class="btn btn-primary btn-circle btn-sm action-button"><i class="fa fa-bell" aria-hidden="true"></i> Notifications</a> -->
                  
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
            $('#Editform').attr('action', '');

            var title = $(this).attr('name');
            var details = $(this).attr('details');
            var action = $(this).attr('edit-url');
            
            $('.Edit-Title').val(title);
            $('.Edit-Details').val(details);
            $('#Editform').attr('action', action);
            });
    </script>

@endpush