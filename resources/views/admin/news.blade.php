@extends('admin.layouts.app')
@section('title', 'News')
@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>News</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('admin/dashboard')}}">Home</a></li>
              <li class="breadcrumb-item active">News</li>
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
              <h3 class="card-title">News</h3>
              <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-default" style="float:right">
                  Add News
                </button>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
           
              <table id="NotificationTable" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th width="5%">Sl.No</th>
                  <th>Title</th>
                  <th>Image</th>
                  <th>Date</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
               <?php $i= 1;?>
               @foreach($news as $blog)
                <tr>
                  <td>{{$i++}}</td>
                  <td>{{$blog->title}}</td>
                  <td><img src="{{url('/storage/'.$blog->image)}}" style="height: 66px;width: auto;"></td>
                  <td>{{$blog->created_at->format('d-m-Y')}}</td>
                  <td class="text-center">
                    <a data-tooltip="tooltip" data-placement="top" title="Delete!" onclick="return confirm('Want to Delete?')" href="{{url('admin/delete-news/'.$blog->id)}}" class="btn btn-danger btn-circle btn-sm"><i class="fa fa-trash" aria-hidden="true"></i></a>
                    <button class="btn btn-primary btn-circle btn-sm Edit-Notification" data-tooltip="tooltip" data-placement="top" title="Edit" href="" data-toggle="modal" data-target="#myModal" ccontent="{{$blog->content}}" ccountry="{{$blog->country}}" ccategory="{{$blog->category}}"  ctitle="{{$blog->title}}" mtitle="{{$blog->meta_title}}" cdes="{{$blog->meta_desc}}" cmeta="{{$blog->meta}}" ccategory="{{$blog->category}}" edit-url="{{url('admin/news/'.$blog->id)}}"><i class="far fa-edit" aria-hidden="true"></i></button> 
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
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Add News</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="{{url('admin/news')}}" method="post" enctype="multipart/form-data" autocomplete="off">
            {{csrf_field()}}
            <div class="modal-body">
            <div class="card-body">
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="">Title</label>
                    <input type="text" name="title" class="form-control" id="" placeholder="Enter title" required>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="">Meta Title</label>
                    <input type="text" name="meta_title" class="form-control" id="" placeholder="Enter Meta Title">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="textarea">Meta Description</label>
                    <textarea class="textarea" name="meta" id="" placeholder="Place some text here"
                          style="width: 100%; height: 100px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
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
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="">Country</label>
                    <select name="country" class="form-control" required>
                      <option value="India">India</option>
                      <option value="USA">USA</option>
                      <option value="UK">UK</option>
                      <option value="Canada">Canada</option>
                      <option value="Australia">Australia</option>
                      <option value="New Zealand">New Zealand</option>
                      <option value="Other">Other</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="">Category</label>
                    <select name="category" class="form-control" required>
                      <option value="General">General</option>
                      <option value="Scholarships">Scholarships</option>
                      <option value="Education Fairs">Education Fairs</option>
                      <option value="Study Abroad">Study Abroad</option>
                      <option value="Test Prep">Test Prep</option>
                    </select>
                  </div>
                </div>
              </div>  
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="textarea">Content</label>
                    <textarea class="textarea" name="content" id="content" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
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
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Edit Blog</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="" id="Editform" method="post" enctype="multipart/form-data" autocomplete="off">
            {{csrf_field()}}
            {{method_field('PATCH')}}
            <div class="modal-body">
            <div class="card-body">
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="">Title</label>
                    <input type="text" name="title" class="form-control Edit-Title" id="" placeholder="" required>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="">Meta Title</label>
                    <input type="text" name="meta_title" class="form-control Edit-Mtitle" id="" placeholder="Enter Meta Title">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                   <div class="form-group">
                     <label for="textarea">Meta Description</label>
                   <textarea class="textarea Edit-meta" name="meta" id="" placeholder="Place some text here" style="width: 100%; height: 100px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                    </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="exampleInputFile">Image</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="image" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="">Country</label>
                    <select name="country" class="form-control Edit-country" required>
                      <option value="India">India</option>
                      <option value="USA">USA</option>
                      <option value="UK">UK</option>
                      <option value="Canada">Canada</option>
                      <option value="Australia">Australia</option>
                      <option value="New Zealand">New Zealand</option>
                      <option value="Other">Other</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="">Category</label>
                    <select name="category" class="form-control Edit-category" required>
                      <option value="General">General</option>
                      <option value="Scholarships">Scholarships</option>
                      <option value="Education Fairs">Education Fairs</option>
                    </select>
                  </div>
                </div>
              </div>  
              <div class="row">
                <div class="col-md-12">
                   <div class="form-group">
                      <label for="textarea">Content</label>
                      <textarea class="textarea Edit-Content" name="content" id="content1" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
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
    $("#NotificationTable").DataTable({
        "pageLength" : 50,
        "responsive" : true
    });
  });
</script>
<script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
<script>
CKEDITOR.replace( 'content', {
        versionCheck: false
    });
CKEDITOR.replace( 'content1', {
        versionCheck: false
    });
</script>

<script>
      $(document).on('click', '.Edit-Notification', function(){
            $('.Edit-Title').val('');
            $('.Edit-Mtitle').val('');
            $('.Edit-Key').text('');
            $('.Edit-Des').text('');
            $('.Edit-meta').text('');
            $('.Edit-category').val('');
            $('.Edit-country').val('');
            $('#Editform').attr('action', '');

            var title = $(this).attr('ctitle');
            var key = $(this).attr('ckey');
            var meta = $(this).attr('cmeta');
            var mtitle = $(this).attr('mtitle');
            var content = $(this).attr('ccontent');
            var category = $(this).attr('ccategory');
            var country = $(this).attr('ccountry');
            var action = $(this).attr('edit-url');
            CKEDITOR.instances['content1'].setData(content)
            
            $('.Edit-Title').val(title);
            $('.Edit-Key').text(key);
            $('.Edit-meta').text(meta);
            $('.Edit-Mtitle').val(mtitle);
            $('.Edit-Content').text(content);
            $('.Edit-category').val(category);
            $('.Edit-country').val(country);
            $('#Editform').attr('action', action);
            });
</script>
@endpush