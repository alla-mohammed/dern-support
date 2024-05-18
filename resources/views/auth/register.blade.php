<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link href="{{ asset('bootstrap.min.css') }}" rel="stylesheet">
</head>
<body >
   <x-guest-layout >
    
    <x-authentication-card>
        <x-slot name="logo">
        </x-slot>

        <x-validation-errors class="mb-4 " />

        <form method="POST" action="{{ route('register') }}">
            @csrf
            <h1 class="text-center h2">Welcome.</h1>
            <p class="h5 text-center mt-2"> Create an Account</p>
            <div class="d-flex justify-content-center align-items-center">
                <img src="{{ asset('logo.svg') }}" width="70px" alt="dern support logo">
            </div>

            <div>
                <x-label for="name" value="{{ __('Name') }}" />
                <x-input id="name" class="block mt-1 w-full form-control" type="text" name="name" :value="old('name')"
                    required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full form-control" type="email" name="email" :value="old('email')"
                    required autocomplete="username" />
            </div>
            <div class="mt-4">
                <x-label for="address" value="{{ __('Address') }}" />
                <x-input id="address" class="block mt-1 w-full form-control" type="text" name="address" :value="old('address')"
                    required />
            </div>

            <div class="mt-4">
                <x-label for="type" value="{{ __('Type') }}" />
                <select id="type" name="type" class="block mt-1 w-full form-control" required>
                    <option value="user" {{ old('type') == 'user' ? 'selected' : '' }}>{{ __('User') }}</option>
                    <option value="admin" {{ old('type') == 'admin' ? 'selected' : '' }}>{{ __('Admin') }}</option>
                </select>
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('Password') }}" />
                <x-input id="password" class="block mt-1 w-full form-control" type="password" name="password" required
                    autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-input id="password_confirmation" class="block mt-1 w-full form-control" type="password"
                    name="password_confirmation" required autocomplete="new-password" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-label for="terms">
                        <div class="flex items-center">
                            <x-checkbox name="terms" id="terms" required />

                            <div class="ms-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                    'terms_of_service' =>
                                        '<a target="_blank" href="' .
                                        route('terms.show') .
                                        '" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">' .
                                        __('Terms of Service') .
                                        '</a>',
                                    'privacy_policy' =>
                                        '<a target="_blank" href="' .
                                        route('policy.show') .
                                        '" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">' .
                                        __('Privacy Policy') .
                                        '</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                    href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ms-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout> 
</body>
</html>

