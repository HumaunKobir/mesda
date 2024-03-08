<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    //View Post
    public function adminPost(){
        $posts = Post::get()->toArray();
        return view("admin.post.admin_posts")->with(compact('posts'));
    }
     //Delete Category
     public function deletePost($id){
        Post::where('id',$id)->delete();
        return redirect()->back()->with('success_message','Post Deleted Successfully!');
    }
      //Update Post Status
      public function updatePostStatus(Request $request){
        if($request->ajax()){
            $data = $request->all();
            if($data['status']=="Active"){
                $status = 0;
            }else{
                $status = 1;
            }
            Post::where('id',$data['post_id'])->update(['status'=>$status]);
            return response()->json(['status'=>$status,'post_id'=>$data['post_id']]);
        }
    }
       //Add Edit Posts
       public function addEditPost(Request $request,$id=null){
        if($id==""){
            //Add Post
            $title = "Add Post";
            $post = new Post;
            $getPost = array();
            $message = "Post Added Successfully!";
        }else{
            //Edit Post
            $title = "Edit Post";
            $post = Post::find($id);
            $message = "Post Updated Successfully!";
        }

        //Add and Update Posts
        if($request->isMethod('post')){
            $data = $request->all();
            //Data Validation
            $rules = ([
                'post_title' =>'required',
                'post_summary' =>'required',
            ]);
            $this->validate($request,$rules);
            //Upload Post Picture
            if($request->hasFile('post_image')){
                $image_tmp = $request->file('post_image');
                if($image_tmp->isValid()){
                    //Get Image Extension
                    $extension = $image_tmp->getClientOriginalExtension();
                    //Generate New Image Name
                    $image_name = time().'-'.$request->post_name .'.'.$extension;
                    $request->post_image->move(public_path('Front/images/post_image'),$image_name);
                    $post->post_image = $image_name;    
                }
            }else{
                $post->post_image = "";
            }
            
            $post->post_title = $data['post_title'];
            $post->post_author = "Admin";
            $post->post_summary = $data['post_summary'];
            $post->post_tag = "facebook.com";
            $post->status = 1;
            $post->save();

            return redirect()->back()->with("success_message",$message);

        }
        return View('admin.post.add_edit_post')->with(compact('title','post'));
    }
}
