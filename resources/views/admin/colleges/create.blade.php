@extends('admin.layouts.app')
@section('title', 'Create College')
@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Create College </h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('admin/dashboard')}}">Home</a></li>
              <li class="breadcrumb-item active">Create College</li>
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
              <h3 class="card-title">Create College </h3>
              
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <form method="post" action="{{url('/admin/colleges')}}" enctype="multipart/form-data" autocomplete="off">
                {{csrf_field()}}
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Name</label>
                      <input type="text" name="name" class="form-control" required>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Meta Title</label>
                      <input type="text" name="meta_title" class="form-control" required>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="textarea">Meta Description</label>
                      <textarea class="textarea" name="meta" id="" placeholder="Place some text here"
                          style="width: 100%; height: 100px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="exampleInputFile">Logo</label>
                      <div class="input-group">
                        <div class="custom-file">
                          <input type="file" name="logo" class="custom-file-input" id="exampleInputFile" required>
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
                          <input type="file" name="image" class="custom-file-input" id="exampleInputFile" required>
                          <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                        </div>
                      </div>
                    </div>
                  </div>
                  
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="exampleInputFile">Type</label>
                      <div class="input-group">
                        <div class="custom-file">
                          <select class="form-control" name="type">
                            <option value="1">College</option>
                            <option value="2">PU College</option>
                          </select>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="exampleInputFile">Affiliation</label>
                      <input type="text" name="affiliation" class="form-control" required>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="exampleInputFile">Established</label>
                      <input type="text" name="established" class="form-control" required>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="exampleInputFile">Location</label>
                      <input type="text" name="location" class="form-control" required>
                    </div>
                  </div>
                  <!-- <div class="col-md-12">
                    <div class="form-group">
                      <label for="textarea">Slider Text</label>
                      <textarea class="textarea" name="slider_text" id="slider-text" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" required></textarea>
                     </div>
                  </div> -->
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="textarea">About</label>
                      <textarea class="textarea" name="about" id="about" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" required></textarea>
                     </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="textarea">Overview</label>
                      <textarea class="textarea" name="overview" id="overview" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" required></textarea>
                     </div>
                  </div>
                  <!-- <div class="col-md-12">
                    <div class="form-group">
                      <label for="textarea">Facilities</label>
                      <textarea class="textarea" name="facilities" id="facilities" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                     </div>
                  </div> -->
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="textarea">Specializations</label>
                      <textarea class="textarea" name="specializations" id="specializations" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                     </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="textarea">Fees</label>
                      <textarea class="textarea" name="fees" id="fees" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                     </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="textarea">Placements</label>
                      <textarea class="textarea" name="placements" id="placements" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                     </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="textarea">Facilities</label>
                      <select class="form-control js-example-basic-single" multiple name="facilities2[]">
                        <option value="Library">Library</option>
                        <option value="Sports">Sports</option>
                        <option value="IT Infrastructure">IT Infrastructure</option>
                        <option value="Laboratories">Laboratories</option>
                        <option value="Auditorium">Auditorium</option>
                        <option value="Hostel">Hostel</option>
                        <option value="Transport Facility">Transport Facility</option>
                        <option value="Cafeteria">Cafeteria</option>
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
                  </div> -->
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="exampleInputFile">Youtube Video Id</label>
                      <div class="input-group">
                          <input type="text" name="youtube_id" class="form-control">
                      </div>
                    </div>
                  </div>

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
                  </div>
                  



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
      CKEDITOR.replace( 'specializations' , {
          versionCheck: false
      });
      CKEDITOR.replace( 'fees' , {
          versionCheck: false
      });
      CKEDITOR.replace( 'placements' , {  
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