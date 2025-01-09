<<<<<<< HEAD
<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
=======
<link rel="stylesheet" href="{{ asset('css/login.css') }}">

<div class="mainBody">
<div class="login-section">
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <h2>LOGIN PAGE</h2>
        
        <!-- Input Group for Username -->
        <div class="input-group">
            <i class="fas fa-user"></i>
            <input 
                name="username" 
                type="text" 
                placeholder="Username" 
                value="{{ old('username') }}" 
                required 
            />
        </div>
        
        <!-- Input Group for Password -->
        <div class="input-group">
            <i class="fas fa-lock"></i>
            <input 
                name="password" 
                type="password" 
                placeholder="Password" 
                required 
            />
        </div>
        
        <!-- Buttons -->
        <button type="submit" class="primary-btn">Log In</button>
        <a href="{{ route('register') }}">
            <button type="button" class="secondary-btn">Register</button>
        </a>

        <!-- Google Login Button -->
        <button type="button" class="google-btn">
            <i class="fab fa-google"></i> Login with Google
        </button>

        <!-- Error Message -->
        @if (session('error'))
            <p class="error">{{ session('error') }}</p>
        @endif
    </form>
</div>
</div>
>>>>>>> c3a21b8794164a82fe0a5e73b55c782800b4f693
