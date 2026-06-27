@extends('admin.layouts.app')
@section('title', 'Reviews')
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
            <h1>{{$college->name}} Reviews </h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('admin/dashboard')}}">Home</a></li>
              <li class="breadcrumb-item active">Reviews</li>
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
              <h3 class="card-title">Reviews </h3>
              
            </div>
            <!-- /.card-header -->
            <div class="card-body">
           
              <table id="EnquiriesTable" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th width="5%">Sl.No</th>
                  <th>Name</th>
                  <th>Mobile</th>
                  <th>Review</th>
                  <th>Rating</th>
                  <th>Action</th>
                </tr>  
                </thead>
                <tbody>
               <?php $i= 1;?>
               @foreach($reviews as $review)
                <tr>
                  <td>{{$i++}}</td>
                  <td>{{$review->name}}</td>
                  <td>{{$review->phone}}</td>
                  <td>{{$review->review}}</td>
                  <td>{{$review->total}}</td>
                  <td>
                    <a data-tooltip="tooltip" data-placement="top" title="Delete!" onclick="return confirm('Want to Delete?')" href="{{url('admin/delete-abroad-review/'.$review->id)}}" class="btn btn-danger btn-circle btn-sm"><i class="fa fa-trash" aria-hidden="true"></i></a>

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

@endpush