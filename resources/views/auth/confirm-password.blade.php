<x-guest-layout>
<div class="container-fluid">
        <div class="form-filed p-3">
            <div class="container-fluid">
                <div class="row">
                                    
                    <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
                        {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
                    </div>

                    <!-- Session Status -->
                    <x-auth-session-status class="mb-4" :status="session('status')" />
                    <div class="col-sm-4"></div>
                        <div class="col-sm-4">
                            <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
                                {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
                            </div>

                            <form method="POST" action="{{ route('password.confirm') }}">
                                @csrf

                                <!-- Password -->
                                <div>
                                    <x-input-label for="password" :value="__('Password')" />

                                    <x-text-input id="password" class="block mt-1 w-full"
                                                    type="password"
                                                    name="password"
                                                    required autocomplete="current-password" />

                                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                </div>

                                <div class="flex justify-end mt-4">
                                    <x-primary-button>
                                        {{ __('Confirm') }}
                                    </x-primary-button>
                                </div>
                            </form>
                        </div>
                    <div class="col-sm-4"></div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
