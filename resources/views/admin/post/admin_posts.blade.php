@extends('admin.layout.layout')
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
       
        <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Admin Posts</h4>
                  <a style="max-width:150px;float:right;disply:inline-block;" class="btn btn-block btn-primary" href="{{ url('admin/add-edit-post') }}">Add Post</a>
                  @if(Session::has('success_message'))
                  <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Success::</strong> {{Session::get('success_message')}}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  @endif
                  <div class="table-responsive pt-3">
                    <table id="example1" class="table table-bordered table-striped">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Post Title</th>
                          <th>Post Image</th>
                          <th>Post Author</th>
                          <th>Post Summary</th>
                          <th>Post Tag</th>
                          <th>Post Status</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($posts as $post)
                         <tr>
                          <td>{{$post['id']}}</td>
                          <td>{{$post['post_title']}}</td>
                          <td>
                            <img src="{{ asset('Front/images/post_image/'.$post['post_image']) }}">
                          </td>
                          <td>{{$post['post_author']}}</td>
                          <td>{{$post['post_summary']}}</td>
                          <td>{{$post['post_tag']}}</td>
                          <td>
                            @if($post['status']==1)
                           <a class="updatePostStatus" id="post-{{$post['id']}}" post_id="{{ $post['id']}}" href="javascript:void(0)"><i style="font-size:25px;" class="mdi mdi-bookmark-check"status="Active"></i></a> 
                            @else 
                            <a class="updatePostStatus" id="post-{{$post['id']}}" post_id="{{ $post['id']}}" href="javascript:void(0)"><i style="font-size:25px;" class="mdi mdi-bookmark-outline" status="Inactive"></i></a>
                            @endif
                          </td>
                          <td>
                            <a href="{{url('admin/add-edit-post/'.$post['id'])}}">
                            <i style="font-size:25px;" class="mdi mdi-pencil-box"></i></a>
                            <a href="javascript:void(0)" class="confirmDelete" module="post" moduleid="{{ $post['id']}}">
                            <i style="font-size:25px;" class="mdi mdi-file-excel-box"></i></a>
                            
                          </td>
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
    <!-- content-wrapper ends -->
    <!-- partial:partials/_footer.html -->
    @include('admin.layout.footer')
    <!-- partial -->
</div>
@endsection