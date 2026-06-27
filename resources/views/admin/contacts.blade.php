@extends('admin.layouts.app')
@section('title', 'Contact Enquiries')
@push('custom-style')
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker.css">
@endpush
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Contact Enquiries</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('admin/dashboard')}}">Home</a></li>
              <li class="breadcrumb-item active">Contact Enquiries</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
<section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <!-- /.card-header -->
            <div class="card-header">
              <form action="{{url('/admin/contacts')}}" method="post">
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
                                    <input type="text" value="{{date('d-m-Y', strtotime($to))}}" class="form-control pull-right datepicker" id="datepicker" name="date_to" readonly>
                                  </div>
                                </div>
                           </div>
                           <div class="col-md-2">
                            <button class="btn btn-primary" style="margin-top:32px;">submit</button>
                           </div>
                  </div>
              </form>
            </div>
            <div class="card-body">
              <table id="EnquiriesTable" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th style="width:10%">Sl.No</th>
                  <th style="width:20%">Name</th>
                  <th style="width:20%">Email</th>
                  <th style="width:20%">Mobile</th>
                  <th style="width:20%">Message</th>
                  <th style="width:10%">Date</th>
                </tr>
                </thead>
                <tbody>
                  <?php $i = 1; ?>
                  @foreach($contacts as $contact)
                  <tr>
                    <td>{{$i++}}</td>
                    <td>{{$contact->name}}</td>
                    <td>{{$contact->email}}</td>
                    <td>{{$contact->phone}}</td>
                    <td>{!! $contact->message !!}</td>
                    <td>{{date('d-m-Y', strtotime($contact->created_at))}}</td>
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