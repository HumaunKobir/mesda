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
            $user->email = $data['email'];
            $user->distric = $data['distric'];
            $user->city = $data['city'];
            $user->phone = $data['phone'];
            $user->date_of_birth = $data['date_of_birth'];
            $user->gender = $data['gender'];
            $user->bload_group = $data['bload_group'];
            $user->academic_one = $data['academic_one'];
            $user->institution_one = $data['institution_one'];
            $user->passing_year_one = $data['passing_year_one'];
            $user->academic_two = $data['academic_two'];
            $user->institution_two = $data['institution_two'];
            $user->passing_year_two = $data['passing_year_two'];
            $user->academic_three = $data['academic_three'];
            $user->institution_three = $data['institution_three'];
            $user->passing_year_three = $data['passing_year_three'];
            $user->academic_four = $data['academic_four'];
            $user->institution_four = $data['institution_four'];
            $user->passing_year_four = $data['passing_year_four'];
            $user->prof_dsignation = $data['prof_dsignation'];
            $user->organization_name = $data['organization_name'];
            $user->password = Hash::make($data['password']);
            $user->status = 1;
            $user->save();

        }


        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME)->with(compact('user'));
    }
}
