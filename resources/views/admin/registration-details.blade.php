@extends('admin.layouts.app')
@section('title', 'Registration Details')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Registration Details</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('admin/dashboard')}}">Home</a></li>
              <li class="breadcrumb-item"><a href="{{url('admin/registrations')}}">Registrations</a></li>
              <li class="breadcrumb-item active">Registration Details</li>
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
              <h3 class="card-title">Student Registration Information</h3>
              <div class="card-tools">
                <a href="{{url('admin/registrations')}}" class="btn btn-sm btn-primary">
                  <i class="fas fa-arrow-left"></i> Back to Registrations
                </a>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered table-striped">
                  <tbody>
                    <tr>
                      <th width="20%" class="bg-light">Student Name</th>
                      <td width="30%">{{$registration->name}}</td>
                      <th width="20%" class="bg-light">Contact Number</th>
                      <td width="30%">{{$registration->number}}</td>
                    </tr>
                    <tr>
                      <th class="bg-light">Alternative Number</th>
                      <td>{{$registration->alternative_number}}</td>
                      <th class="bg-light">Date of Birth</th>
                      <td>{{$registration->dob}}</td>
                    </tr>
                    <tr>
                      <th class="bg-light">Gender</th>
                      <td>{{$registration->gender}}</td>
                      <th class="bg-light">Course</th>
                      <td>{{$registration->course}}</td>
                    </tr>
                    <tr>
                      <th class="bg-light">Father's Name</th>
                      <td>{{$registration->father}}</td>
                      <th class="bg-light">Father's Number</th>
                      <td>{{$registration->father_no}}</td>
                    </tr>
                    <tr>
                      <th class="bg-light">Mother's Name</th>
                      <td>{{$registration->mother}}</td>
                      <th class="bg-light">Mother's Number</th>
                      <td>{{$registration->mother_no}}</td>
                    </tr>
                    <tr>
                      <th class="bg-light">Address</th>
                      <td colspan="3">{{$registration->address}}</td>
                    </tr>
                    <tr>
                      <th class="bg-light">City</th>
                      <td>{{$registration->city}}</td>
                      <th class="bg-light">Postal Code</th>
                      <td>{{$registration->post}}</td>
                    </tr>
                    <tr>
                      <th class="bg-light">10th Standard Percentage</th>
                      <td>{{$registration->tenth}}%</td>
                      <th class="bg-light">12th Standard Percentage</th>
                      <td>{{$registration->twelth}}%</td>
                    </tr>
                    <tr>
                      <th class="bg-light">Registration Date</th>
                      <td>{{$registration->created_at->format('d-m-Y H:i A')}}</td>
                      <th class="bg-light">Last Updated</th>
                      <td>{{$registration->updated_at->format('d-m-Y H:i A')}}</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <!-- /.card-body -->
          </div>
        </div>
      </div>
    </section>   
@endsection

@push('styles')
<style>
  .table th {
    background-color: #f8f9fa !important;
    font-weight: 600;
    color: #495057;
  }
  .table td {
    vertical-align: middle;
  }
  .card-header {
    background-color: #fff;
    border-bottom: 1px solid #dee2e6;
  }
  .card-tools {
    float: right;
  }
</style>
@endpush