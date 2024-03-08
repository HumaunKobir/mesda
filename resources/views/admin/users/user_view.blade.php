@extends('admin.layout.layout')
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
       
        <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">All Users</h4>
                  @if(Session::has('success_message'))
                  <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Success::</strong> {{Session::get('success_message')}}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  @endif
                  <div class="table-responsive pt-3">
                    <table id="section" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>User Name</th>
                          <th>User Email</th>
                          <th>Distric</th>
                          <th>City</th>
                          <th>Phone</th>
                          <th>Date Of Birth</th>
                          <th>Gender</th>
                          <th>Bload Group</th>
                          <th>Academic Lavel</th>
                          <th>Institution</th>
                          <th>Passing Year</th>
                          <th>Academic Lavel</th>
                          <th>Institution</th>
                          <th>Passing Year</th>
                          <th>Academic Lavel</th>
                          <th>Institution</th>
                          <th>Passing Year</th>
                          <th>Academic Lavel</th>
                          <th>Institution</th>
                          <th>Passing Year</th>
                          <th>Profesional details</th>
                          <th>Organization name</th>
                          <th>User Image</th>
                          <th>Status</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($users as $user)
                         <tr>
                          <td>{{$user['id']}}</td>
                          <td>{{$user['name']}}</td>
                          <td>{{$user['email']}}</td>
                          <td>{{$user['distric']}}</td>
                          <td>{{$user['city']}}</td>
                          <td>{{$user['phone']}}</td>
                          <td>{{$user['date_of_birth']}}</td>
                          <td>{{$user['gender']}}</td>
                          <td>{{$user['bload_group']}}</td>
                          <td>{{$user['academic_one']}}</td>
                          <td>{{$user['institution_one']}}</td>
                          <td>{{$user['passing_year_one']}}</td>
                          <td>{{$user['academic_two']}}</td>
                          <td>{{$user['institution_two']}}</td>
                          <td>{{$user['passing_year_two']}}</td>
                          <td>{{$user['academic_three']}}</td>
                          <td>{{$user['institution_three']}}</td>
                          <td>{{$user['passing_year_three']}}</td>
                          <td>{{$user['academic_four']}}</td>
                          <td>{{$user['institution_four']}}</td>
                          <td>{{$user['passing_year_four']}}</td>
                          <td>{{$user['prof_dsignation']}}</td>
                          <td>{{$user['organization_name']}}</td>
                          <td>
                            <img src="{{ asset('admin/images/photos/'.$user['user_image']) }}">
                          </td>
                          <td>
                            @if($user['status']==1)
                           <a class="updateUserStatus" id="user-{{$user['id']}}" user_id="{{ $user['id']}}" href="javascript:void(0)"><i style="font-size:25px;" class="mdi mdi-bookmark-check"status="Active"></i></a> 
                            @else 
                            <a class="updateUserStatus" id="user-{{$user['id']}}" user_id="{{ $user['id']}}" href="javascript:void(0)"><i style="font-size:25px;" class="mdi mdi-bookmark-outline" status="Inactive"></i></a>
                            @endif
                          </td>
                          <td>
                            <a href="javascript:void(0)" class="confirmDelete" module="user" moduleid="{{ $user['id']}}">
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