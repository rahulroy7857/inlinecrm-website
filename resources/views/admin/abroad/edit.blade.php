@extends('admin.layouts.app')
@section('title', 'Edit College')
@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit College </h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('admin/dashboard')}}">Home</a></li>
              <li class="breadcrumb-item active">Edit College</li>
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
              <h3 class="card-title">Edit College </h3>
              
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <form method="post" action="{{url('/admin/abroad-colleges/'.$college->id)}}" enctype="multipart/form-data" autocomplete="off">
                {{csrf_field()}}
                {{method_field('PATCH')}}
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Name</label>
                      <input type="text" name="name" value="{{$college->name}}" class="form-control" required>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Meta Title</label>
                      <input type="text" name="meta_title" value="{{$college->meta_title}}" class="form-control" required>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="textarea">Meta Description</label>
                      <textarea class="textarea" name="meta" id="" placeholder="Place some text here"
                          style="width: 100%; height: 100px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{$college->meta}}</textarea>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="exampleInputFile">Logo</label>
                      <div class="input-group">
                        <div class="custom-file">
                          <input type="file" name="logo" class="custom-file-input" id="exampleInputFile" >
                          <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="exampleInputFile">Image</label>
                      <div class="input-group">
                        <div class="custom-file">
                          <input type="file" name="image" class="custom-file-input" id="exampleInputFile" >
                          <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="textarea">Country</label>
                      <select class="form-control" name="country" required>
                        <option value="">Select</option>
                        @foreach($states as $state)
                        <option value="{{$state->id}}" <?php if($college->country_id == $state->id) echo 'selected'; ?>>{{$state->name}}</option>
                        @endforeach
                      </select>
                     </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="textarea">Location</label>
                      <input type="text" name="location" class="form-control" value="{{$college->location}}" required>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="exampleInputFile">Affiliation</label>
                      <input type="text" name="affiliation" class="form-control" value="{{$college->affiliation}}" required>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="exampleInputFile">Established</label>
                      <input type="text" name="established" class="form-control" value="{{$college->established}}" required>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="textarea">About</label>
                      <textarea class="textarea" name="about" id="about" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" required>{!!$college->about!!}</textarea>
                     </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="textarea">Overview</label>
                      <textarea class="textarea" name="overview" id="overview" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" required>{!!$college->overview!!}</textarea>
                     </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="textarea">Facilities</label>
                      <textarea class="textarea" name="facilities" id="facilities" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{!!$college->facilities!!}</textarea>
                     </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="textarea">Facilities</label>
                      <select class="form-control js-example-basic-single" multiple name="facilities2[]">
                        <option value="Library" <?php if(in_array('Library', $facilities)) echo 'selected'; ?>>Library</option>
                        <option value="Sports" <?php if(in_array('Sports', $facilities)) echo 'selected'; ?>>Sports</option>
                        <option value="IT Infrastructure" <?php if(in_array('IT Infrastructure', $facilities)) echo 'selected'; ?>>IT Infrastructure</option>
                        <option value="Laboratories" <?php if(in_array('Laboratories', $facilities)) echo 'selected'; ?>>Laboratories</option>
                        <option value="Auditorium" <?php if(in_array('Auditorium', $facilities)) echo 'selected'; ?>>Auditorium</option>
                        <option value="Hostel" <?php if(in_array('Hostel', $facilities)) echo 'selected'; ?>>Hostel</option>
                        <option value="Transport Facility" <?php if(in_array('Transport Facility', $facilities)) echo 'selected'; ?>>Transport Facility</option>
                        <option value="Cafeteria" <?php if(in_array('Cafeteria', $facilities)) echo 'selected'; ?>>Cafeteria</option>
                      </select>
                     </div>
                  </div>
                  <!-- <div class="col-md-3">
                    <div class="form-group">
                      <label for="exampleInputFile">Side Image 1</label>
                      <div class="input-group">
                        <div class="custom-file">
                          <input type="file" name="image1" class="custom-file-input" id="exampleInputFile">
                          <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="exampleInputFile">Side Image 2</label>
                      <div class="input-group">
                        <div class="custom-file">
                          <input type="file" name="image2" class="custom-file-input" id="exampleInputFile">
                          <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="exampleInputFile">Side Image 3</label>
                      <div class="input-group">
                        <div class="custom-file">
                          <input type="file" name="image3" class="custom-file-input" id="exampleInputFile">
                          <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="exampleInputFile">Side Image 4</label>
                      <div class="input-group">
                        <div class="custom-file">
                          <input type="file" name="image4" class="custom-file-input" id="exampleInputFile">
                          <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="exampleInputFile">Youtube Video Id</label>
                      <div class="input-group">
                          <input type="text" value="{{$college->youtube_id}}" name="youtube_id" class="form-control">
                      </div>
                    </div>
                  </div> -->
<!-- 
                  <div class="col-md-8">
                    <div class="form-group">
                      <label for="exampleInputFile">Campus Photos</label>
                      <div class="input-group">
                        <div class="custom-file">
                          <input type="file" name="campus_photos[]" accept="image/*" multiple class="custom-file-input" id="exampleInputFile">
                          <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                        </div>
                      </div>
                    </div>
                  </div> -->
                  



                  <div class="col-md-12 text-right">
                    <button class="btn btn-primary">Submit</button>
                  </div>
                </div>
              </form>
            </div>
            <!-- /.card-body -->
          </div>
        </div>
      </div>
    </section>   
   

@endsection          
@push('scripts')
<script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
<script>
CKEDITOR.replace( 'about' , {
        versionCheck: false
    });
CKEDITOR.replace( 'overview' , {
        versionCheck: false
    });
CKEDITOR.replace( 'slider-text' , {
        versionCheck: false
    });
CKEDITOR.replace( 'facilities' , {
        versionCheck: false
    });
</script>
<script>
$(document).ready(function() {
    $('.js-example-basic-single').select2();
});
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