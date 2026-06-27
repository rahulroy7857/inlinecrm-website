@extends('admin.layouts.app')
@section('title', 'Registrations')
@push('custom-style')
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker.css">
@endpush
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Registrations</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('admin/dashboard')}}">Home</a></li>
              <li class="breadcrumb-item active">Registrations</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
<section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <form action="{{url('/admin/registrations')}}" method="post">
                  <div class="row">
                           {{ csrf_field() }}
                           <div class="col-md-3 offset-md-2">
                               <div class="form-group">
                                  <label for="pwd">Date From:</label>
                                  <div class="input-group date">
                                    <input type="text" class="form-control pull-right datepicker" id="datepicker" name="date_from" value="{{date('d-m-Y', strtotime($from))}}" readonly required>
                                  </div>
                                </div>
                           </div>
                           <div class="col-md-3">
                               <div class="form-group">
                                  <label for="pwd">Date To:</label>
                                  <div class="input-group date">
                                    <input type="text" value="{{date('d-m-Y', strtotime($to))}}" class="form-control pull-right datepicker" id="datepicker" name="date_to" readonly required>
                                  </div>
                                </div>
                           </div>
                           <div class="col-md-2">
                            <button class="btn btn-primary" style="margin-top:32px;">submit</button>
                           </div>
                  </div>
              </form>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="EnquiriesTable" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Sl.No</th>
                  <th>Name</th>
                  <th>Phone</th>
                  <th>Course</th>
                  <!-- <th>College</th> -->
                  <!-- <th>Counselor</th> -->
                  <th>Date</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                  <?php $i = 1; ?>
                  @foreach($registrations as $enquiry)
                  <tr>
                    <td>{{$i++}}</td>
                    <td>{{$enquiry->name}}</td>
                    <td>{{$enquiry->number}}</td>
                    <td>{{$enquiry->course}}</td>
                    <!-- <td>{{$enquiry->college}}</td> -->
                    <!-- <td>{{$enquiry->counselor_name}}</td> -->
                    <td>{{date('d-m-Y', strtotime($enquiry->created_at))}}</td>
                    <td>
                      <a href="{{url('admin/view-registration/'.$enquiry->id)}}" class="btn btn-primary btn-circle btn-sm"><i class="fa fa-eye" aria-hidden="true"></i></a>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/js/bootstrap-datepicker.js"></script>
<script>
  $(function () {
    $("#EnquiriesTable").DataTable({
        pageLength : 50,
        responsive : true,
        dom: 'Bfrtip',
        buttons: ['excel' , 'pdf' , 'print' , ]
    
    });
    
  });

</script>
<script>
        //Date picker
    var nowDate = new Date();
    var today = new Date(nowDate.getFullYear(), nowDate.getMonth(), nowDate.getDate(), 0, 0, 0, 0);
    $('.datepicker').datepicker({
      autoclose: true,
      format: 'dd-mm-yyyy'
    })
</script>
@endpush