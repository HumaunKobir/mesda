<x-guest-layout>
    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>
        <!-- Distric -->
        <div>
            <x-input-label for="distric" :value="__('Distric')" />
            <x-text-input id="distric" class="block mt-1 w-full" type="text" name="distric" :value="old('distric')" />
            <x-input-error :messages="$errors->get('distric')" class="mt-2" />
        </div>
        <!-- City -->
        <div>
            <x-input-label for="city" :value="__('City')" />
            <x-text-input id="city" class="block mt-1 w-full" type="text" name="city" :value="old('city')" required />
            <x-input-error :messages="$errors->get('city')" class="mt-2" />
        </div>
         <!-- phone -->
         <div>
            <x-input-label for="phone" :value="__('Phone Number')" />
            <x-text-input id="phone" class="block mt-1 w-full" type="text" name="phone" :value="old('phone')" required />
            <x-input-error :messages="$errors->get('phone')" class="mt-2" />
        </div>
         <!-- date_of_birth -->
         <div class="mt-4">
            <x-input-label for="date_of_birth" :value="__('Date Of Birth')" />
            <x-text-input id="date_of_birth" class="block mt-1 w-full" type="date" name="date_of_birth" :value="old('date_of_birth')" required />
            <x-input-error :messages="$errors->get('date_of_birth')" class="mt-2" />
        </div>
        <!-- Gender -->
        <div class="mt-4">
            <x-input-label for="gender" :value="__('Gender')" />
            <input id="gender_male"  type="radio" name="gender" value="Male" :checked="old('gender') === 'Male'" required /> Male
            <input id="gender_female" type="radio" name="gender" value="Female" :checked="old('gender') === 'Female'" required /> Female
            <input id="gender_other" type="radio" name="gender" value="Other" :checked="old('gender') === 'Other'" required /> Other
            <error :messages="$errors->get('gender')" class="mt-2" />
        </div>

         <!-- Bload Group -->
         <div class="mt-4">
            <x-input-label for="bload_group" :value="__('Bload Group')" />
            <input id="bload_apositive"  type="radio" name="bload_group" value="A+" :checked="old('bload_group') === 'A+'" required /> A+
            <x-text-input id="bload_anagetive" type="radio" name="bload_group" value="A-" :checked="old('bload_group') === 'A-'" required /> A-
            <x-text-input id="bload_bpostive" type="radio" name="bload_group" value="B+" :checked="old('bload_group') === 'B+'" required /> B+
            <x-text-input id="bload_AB" type="radio" name="bload_group" value="AB" :checked="old('bload_group') === 'AB'" required /> AB
            <x-text-input id="bload_opositive" type="radio" name="bload_group"  value="O+" :checked="old('bload_group') === 'O+'" required /> O+
            <x-text-input id="bload_onagetive" type="radio" name="bload_group" value="O-" :checked="old('bload_group') === 'O-'" required /> O-
            <x-input-error :messages="$errors->get('bload_group')" class="mt-2" />
        </div>
         <!-- City -->
         <div class="mt-4">
            <details>
                <summary>Academic-1</summary>
                <div>
                    <x-input-label for="academic_one" :value="__('Education Lavel')"  />
                    <x-text-input id="academic_one" type="checkbox" name="academic_one" value="SSC" :checked="old('academic_one') === 'SSC'" /> SSC
                    <x-input-label for="institution_one" :value="__('Institution Name')" />
                    <x-text-input id="institution_one" class="block mt-1 w-full" type="text" name="institution_one" :value="old('institution_one')" />  
                    <x-input-label for="passing_year_one" :value="__('Passing Year')" />
                    <x-text-input id="passing_year_one" class="block mt-1 w-full" type="text" name="passing_year_one" :value="old('passing_year_one')" />
                    <x-input-error :messages="$errors->get('passing_year_one')" class="mt-2" />
                </div>
            </details>
        </div>
        <div class="mt-4">
            <details>
                <summary>Academic-2</summary>
                <div>
                    <x-input-label for="academic_two" :value="__('Education Lavel')"  />
                    <x-text-input id="academic_two" type="checkbox" name="academic_two" value="HSC" :checked="old('academic_two') === 'HSC'" /> HSC
                    <x-input-label for="institution_two" :value="__('Institute Name')" />
                    <x-text-input id="institution_two" class="block mt-1 w-full" type="text" name="institution_two" :value="old('institution_two')" />  
                    <x-input-label for="passing_year_two" :value="__('Passing Year')" />
                    <x-text-input id="passing_year_two" class="block mt-1 w-full" type="text" name="passing_year_two" :value="old('passing_year_two')" />
                    <x-input-error :messages="$errors->get('passing_year_two')" class="mt-2" />
                </div>
            </details>
        </div>
        <div class="mt-4">
            <details>
                <summary>Academic-3</summary>
                <div>
                    <x-input-label for="academic_three" :value="__('Education Lavel')"  />
                    <x-text-input id="academic_three" type="checkbox" name="academic_three" value="Graduate" :checked="old('academic_three') === 'Graduate'" />Under Graduate
                    <x-input-label for="institution_three" :value="__('Institute Name')" />
                    <x-text-input id="institution_three" class="block mt-1 w-full" type="text" name="institution_three" :value="old('institution_three')" />  
                    <x-input-label for="passing_year_three" :value="__('Passing Year')" />
                    <x-text-input id="passing_year_three" class="block mt-1 w-full" type="text" name="passing_year_three" :value="old('passing_year_three')" />
                    <x-input-error :messages="$errors->get('passing_year_three')" class="mt-2" />
                </div>
            </details>
        </div>
        <div class="mt-4">
            <details>
                <summary>Academic-4</summary>
                <div>
                    <x-input-label for="academic_four" :value="__('Education Lavel')"  />
                    <x-text-input id="academic_four" type="checkbox" name="academic_four" value="Post-graduate" :checked="old('academic_four') === 'Post-graduate'" /> Post Graduate
                    <x-input-label for="institution_four" :value="__('Institute Name')" />
                    <x-text-input id="institution_four" class="block mt-1 w-full" type="text" name="institution_four" :value="old('institution_four')" />  
                    <x-input-label for="passing_year_four" :value="__('Passing Year')" />
                    <x-text-input id="passing_year_four" class="block mt-1 w-full" type="text" name="passing_year_four" :value="old('passing_year_four')" />
                    <x-input-error :messages="$errors->get('passing_year_four')" class="mt-2" />
                </div>
            </details>
        </div>
        
        <!-- Dsignetion -->
        <div class="mt-4">
            <x-input-label for="prof_dsignation" :value="__('Professional Dsignation')" />
            <x-text-input id="prof_dsignation" class="block mt-1 w-full" type="text" name="prof_dsignation" :value="old('prof_dsignation')" required />
            <x-input-error :messages="$errors->get('prof_dsignation')" class="mt-2" />
        </div>
        <!-- Dsignetion -->
        <div class="mt-4">
            <x-input-label for="organization_name" :value="__('Organization Name')" />
            <x-text-input id="organization_name" class="block mt-1 w-full" type="text" name="organization_name" :value="old('organization_name')" required />
            <x-input-error :messages="$errors->get('organization_name')" class="mt-2" />
        </div>
        <!-- User Image -->
        <div class="mt-4">
            <x-input-label for="user_image" :value="__('Upload Image')" />
            <x-text-input id="user_image" class="block mt-1 w-full" type="file" name="user_image" :value="old('user_image')"/>
            <x-input-error :messages="$errors->get('user_image')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
