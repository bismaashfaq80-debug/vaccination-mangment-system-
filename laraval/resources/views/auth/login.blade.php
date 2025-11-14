@extends('../layout')
@section('content')
        <div class="container-fluid">
            <h3 class="text-center">LOGIN PAGE</h3>
            <hr>
            <div class="row">
                <div class="col-lg-6">
                    <x-validation-errors class="mb-4 text-danger" />

        @if(session('message'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('message') }}
            </div>
        @endif
                
                <form method="POST" action="{{ route('login') }}">
            @csrf

            <br>
            <br>
            <div>
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-100" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('Password') }}" />
                <x-input id="password" class="block mt-1 w-100" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center justify-end mt-4">
                    <x-checkbox id="remember_me" name="remember" />
                    <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-button class="ms-4 btn btn-primary">
                    {{ __('Log in') }} 
                </x-button>
            </div>
        </form>
        </div>
        <div class="col-lg-6">
            <img src="assets/img/departments-2.jpg" class="w-100  "  alt="">
        </div>
         </div>
        </div>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>

@endsection
        