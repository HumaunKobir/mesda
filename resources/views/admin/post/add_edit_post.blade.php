@extends('admin.layout.layout')
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="row">
                    <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                        <h3 class="font-weight-bold">Admin Post Management</h3>
                        <h6 class="font-weight-normal mb-0">Posts</h6>
                    </div>
                    <div class="col-12 col-xl-4">
                        <div class="justify-content-end d-flex">
                            <div class="dropdown flex-md-grow-1 flex-xl-grow-0">
                                <button class="btn btn-sm btn-light bg-white dropdown-toggle" type="button" id="dropdownMenuDate2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                <i class="mdi mdi-calendar"></i> Today (10 Jan 2021)
                                </button>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuDate2">
                                    <a class="dropdown-item" href="#">January - March</a>
                                    <a class="dropdown-item" href="#">March - June</a>
                                    <a class="dropdown-item" href="#">June - August</a>
                                    <a class="dropdown-item" href="#">August - November</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
          <div class="col-xl-3"></div>
          <div class="col-xl-6">
          <div class="grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">{{$title}}</h4>
                  @if(Session::has('error_message'))
                  <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>Error::</strong> {{Session::get('error_message')}}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  @endif
                  @if(Session::has('success_message'))
                  <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Success::</strong> {{Session::get('success_message')}}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  @endif
                  @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                  <form class="forms-sample" @if(empty($post['id'])) action="{{ url('admin/add-edit-post')}}" @else action="{{ url('admin/add-edit-post/'.$post['id']) }}" @endif  method="post" enctype="multipart/form-data">@csrf
                    <div class="form-group">
                      <label for="post_title">Post Title</label>
                      <input type="text" class="form-control" id="post_title" placeholder="Post Title" name="post_title" @if(!empty($post['post_title'])) value="{{ $post['post_title'] }}"@else value="{{ old('post_title')}}" @endif required="">
                    </div>
                    <div class="form-group">
                      <label for="post_image">Upload Picture</label>
                      <input type="file" class="form-control" id="post_image" name="post_image">
                    </div>
                    <div class="form-group">
                      <label for="post_summary">Post Summary</label>
                      <textarea name="post_summary" id="post_summary" class="form-control" rows="3" @if(!empty($post['post_summary'])) value="{{ $post['post_summary'] }}"@else value="{{ old('post_summary')}}" @endif></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-3"></div>
        </div>
        
    </div>
    <!-- content-wrapper ends -->
    <!-- partial:partials/_footer.html -->
    @include('admin.layout.footer')
    <!-- partial -->
</div>
@endsection