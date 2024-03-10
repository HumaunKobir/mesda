<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        
        if($request->isMethod('post')){
            $data = $request->all();
            $request->validate([
                'name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
                'password' => ['required', 'confirmed', Rules\Password::defaults()],
                'father_name'=> ['required'],
                'mother_name'=> ['required'],
                'village'=> ['required'],
                'word'=> ['required'],
                'post_office'=> ['required'],
                'city'=> ['required'],
                'phone'=> ['required'],
                'date_of_birth'=>['required'],
                'gender'=> ['required'],
                'bload_group'=>['required'],
                'academic_one'=>['required'],
                'institution_one'=>['required'],
                'passing_year_one'=>['required'],
            ]);
         
        //Upload Category Picture
        $user = new User();
        if($request->hasFile('user_image')){
            $image_tmp = $request->file('user_image');
            if($image_tmp->isValid()){
                //Get Image Extension
                $extension = $image_tmp->getClientOriginalExtension();
                //Generate New Image Name
                $image_name = time().'-'.$request->name .'.'.$extension;
                $request->user_image->move(public_path('admin/images/photos'),$image_name);
                $user->user_image = $image_name;    
            }
            }else{
                $user->user_image = "";
            }
            $user->name = $data['name'];
            $user->father_name = $data['father_name'];
            $user->mother_name = $data['mother_name'];
            $user->email = isset($data['email']) ? $data['email'] : "-";
            $user->phone = $data['phone'];
            $user->village = $data['village'];
            $user->word = $data['word'];
            $user->post_office = $data['post_office'];
            $user->city = $data['city'];
            $user->distric = "Meherpur";
            $user->date_of_birth = $data['date_of_birth'];
            $user->gender = $data['gender'];
            $user->bload_group = $data['bload_group'];
            $user->academic_one = $data['academic_one'];
            $user->institution_one = $data['institution_one'];
            $user->passing_year_one = $data['passing_year_one'];
            $user->academic_two = isset($data['academic_two']) ? $data['academic_two'] : "-";
            $user->institution_two = isset($data['institution_two']) ? $data['institution_two'] : "-";
            $user->passing_year_two = isset($data['passing_year_two']) ? $data['passing_year_two'] : "-";
            $user->academic_three = isset($data['academic_three']) ? $data['academic_three'] : "-";
            $user->institution_three = isset($data['institution_three']) ? $data['institution_three'] : "-";
            $user->passing_year_three = isset($data['passing_year_three']) ? $data['passing_year_three'] : "-";
            $user->academic_four = isset($data['academic_four']) ? $data['academic_four'] : "-";
            $user->institution_four = isset($data['institution_four']) ? $data['institution_four'] : "-";
            $user->passing_year_four = isset($data['passing_year_four']) ? $data['passing_year_four'] : "-";
            $user->prof_dsignation = isset($data['prof_dsignation']) ? $data['prof_dsignation'] : "-";
            $user->organization_name = isset($data['organization_name']) ? $data['organization_name'] : "-";
            $user->password = Hash::make($data['password']);
            $user->status = 1;
            $user->save();

        }


        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME)->with(compact('user'));
    }
}
