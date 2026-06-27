@extends('admin.layouts.app')
@section('title', 'Dashboard')
@section('content')
        <div class="container-fluid">

          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
           
          </div>

          <div class="row">

            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                     <a href="{{url('admin/enquiries')}}">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Enquiries</div></a>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">{{$enquiry}}</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-envelope fa-2x text-gray-500"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                     <a href="{{url('admin/contacts')}}">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Contact Enquiries</div></a>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">{{$contacts}}</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-phone fa-2x text-gray-500"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <a href="{{url('admin/registrations')}}">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Registrations</div></a>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">{{$registrations}}</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-file fa-2x text-gray-500"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

           

            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <a href="{{url('admin/blogs')}}">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Blogs</div></a>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">{{$blogs}}</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-file fa-2x text-gray-500"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          

       
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                     <a href="{{url('admin/news')}}">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">News</div></a>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">{{$news}}</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-file fa-2x text-gray-500"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
         
            <!--  -->
         
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <a href="{{url('admin/colleges')}}">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Colleges</div></a>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">{{$colleges}}</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-university fa-2x text-gray-500"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <a href="{{url('admin/abroad-colleges')}}">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Abroad Colleges</div></a>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">{{$abroadColleges}}</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-university fa-2x text-gray-500"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <a href="{{url('admin/schools')}}">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Schools</div></a>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">{{$schools}}</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-university fa-2x text-gray-500"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

        </div>
        
        
    <div class="row">
         <div class="col-lg-12 col-xs-12">
             
             
        <h1 class="h3 mb-4 text-gray-800">Recent Enquiries</h1>

              <div class="card shadow mb-4">
                  <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Enquiries</h6>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-bordered" id="VrukkshaRecentEnquiries" width="100%" cellspacing="0">
                        <thead>
                          <tr>
                            <th>Sl No</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Message</th>
                            <th>Status</th>
                            <th>Date</th>
                          </tr>
                        </thead>
               
                        <tbody>
                          <?php $i=1?>
                          @foreach($enquiries as $enquiry)
                          <tr>
                            <td>{{$i++}}</td>
                            <td>{{$enquiry->name}}</td>
                            <td>{{$enquiry->email}}</td>
                            <td>{{$enquiry->phone}}</td>
                            <td>{{$enquiry->message}}</td>
                            <td>
                              @if($enquiry->status == 1)
                                New Enquiry
                              @else
                                Duplicate Enquiry
                              @endif
                            </td>
                            <td>{{date('d-m-Y', strtotime($enquiry->created_at))}}</td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>
                  </div>
                

          </div>        
            
    </div>
</div>
   
    </div>
        <!-- /.container-fluid -->

@endsection


