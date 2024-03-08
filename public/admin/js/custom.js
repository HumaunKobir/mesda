$(document).ready(function(){
    //call Data Table
    $("#section").DataTable();
    $(".nav-item").removeClass("active");
    $(".nav-link").removeClass("active");
    //Check Admin Pasword is correct or not
    $("#current_password").keyup(function(){
        var current_password= $("#current_password").val();
        // alert(current_password);
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type:'post',
            url:'/admin/check-current-password',
            data:{current_password:current_password},
            success:function(resp){
                if(resp=="true"){
                    $("#check_password").html("<font color='green'>Current Password is Incorrect!</font>");
                }else if(resp=="false"){
                        $("#check_password").html("<font color='red'>Current Password is Correct</font>");
                }
               

            },error:function(){
                alert('Error');
            }
        });
    })
    //Update Admin Status
    $(document).on("click",".updateAdminStatus",function(){
        var status = $(this).children("i").attr("status");
        var admin_id = $(this).attr("admin_id");
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type:'post',
            url:'/admin/update-admin-status',
            data:{status:status,admin_id:admin_id},
            success:function(resp){
                if(resp['status']==0){
                    $("#admin-"+admin_id).html("<i style='font-size:25px;' class='mdi mdi-bookmark-outline'status='Inactive'></i>");
                }else if(resp['status']==1){
                    $("#admin-"+admin_id).html("<i style='font-size:25px;' class='mdi mdi-bookmark-check'status='Active'></i>");
                }
            },error:function(){
                alert("Error");
            }
        })
    })
     //Update Users Status
     $(document).on("click",".updateUserStatus",function(){
        var status = $(this).children("i").attr("status");
        var user_id = $(this).attr("user_id");
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type:'post',
            url:'/admin/update-user-status',
            data:{status:status,user_id:user_id},
            success:function(resp){
                if(resp['status']==0){
                    $("#user-"+user_id).html("<i style='font-size:25px;' class='mdi mdi-bookmark-outline'status='Inactive'></i>");
                }else if(resp['status']==1){
                    $("#user-"+user_id).html("<i style='font-size:25px;' class='mdi mdi-bookmark-check'status='Active'></i>");
                }
            },error:function(){
                alert("Error");
            }
        });
    })

    //Update Post Status
    $(document).on("click",".updatePostStatus",function(){
        var status = $(this).children("i").attr("status");
        var post_id = $(this).attr("post_id");
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type:'post',
            url:'/admin/update-post-status',
            data:{status:status,post_id:post_id},
            success:function(resp){
                if(resp['status']==0){
                    $("#post-"+post_id).html("<i style='font-size:25px;' class='mdi mdi-bookmark-outline'status='Inactive'></i>");
                }else if(resp['status']==1){
                    $("#post-"+post_id).html("<i style='font-size:25px;' class='mdi mdi-bookmark-check'status='Active'></i>");
                }
            },error:function(){
                alert("Error");
            }
        });
    })

    //Custom Deletiion
    $(".confirmDelete").click(function(){
        var module = $(this).attr('module');
        var moduleid = $(this).attr('moduleid');
        Swal.fire({
            title: "Are you sure?",
            text: "You won't be able to revert this!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, delete it!"
          }).then((result) => {
            if (result.isConfirmed) {
              Swal.fire({
                title: "Deleted!",
                text: "Your file has been deleted.",
                icon: "success"
              });
              window.location = "/admin/delete-"+module+"/"+moduleid;
            }
          });
    })
});
