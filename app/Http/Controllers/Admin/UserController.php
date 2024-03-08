<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    
    public function usersView(){
        $users = User::get()->toArray();
        return view("admin.users.user_view")->with(compact('users'));
    }
      //Update Post Status
      public function updateUserStatus(Request $request){
        if($request->ajax()){
            $data = $request->all();
            if($data['status']=="Active"){
                $status = 0;
            }else{
                $status = 1;
            }
            User::where('id',$data['user_id'])->update(['status'=>$status]);
            return response()->json(['status'=>$status,'user_id'=>$data['user_id']]);
        }
    }
}
