<<<<<<< HEAD
<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

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
=======
<link rel="stylesheet" href="{{ asset('css/register.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">


<div class="bodymain">
<div class="login-section-signup">
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <h2>SignUp Page</h2>
        
        <!-- Username Input with Icon -->
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
        
        <!-- Email Input with Icon -->
        <div class="input-group">
            <i class="fas fa-envelope"></i>
            <input 
                name="email" 
                type="email" 
                placeholder="Email" 
                value="{{ old('email') }}" 
                required 
            />
        </div>
        
        <!-- Password Input with Icon -->
        <div class="input-group">
            <i class="fas fa-lock"></i>
            <input 
                name="password" 
                id="password" 
                type="password" 
                placeholder="Password" 
                required 
            />
        
        </div>
        
        <!-- Confirm Password Input with Icon -->
        <div class="input-group">
            <i class="fas fa-lock"></i>
            <input 
                name="password_confirmation" 
                id="password-confirmation" 
                type="password" 
                placeholder="Confirm Password" 
                required 
            />   
        </div>

        <div class="login-or-signup">
            <button type="submit">Submit</button>
            <a href="{{ route('login') }}">
                <button type="button">Login</button>
            </a>
        </div>

        <div class="google-signup">
            <button class="google-btn">
                <i class="fab fa-google"></i> Sign up with Google
            </button>
        </div>

        @if ($errors->any())
            <p class="error">Field Cannot Be Empty</p>
        @endif
        <p class="loading" style="display: none;">Loading...</p>
    </form>
</div>
<<<<<<< HEAD
</div>
>>>>>>> c3a21b8794164a82fe0a5e73b55c782800b4f693
=======
</div>
>>>>>>> a937239de7c320105b1b7e2877556ec3d0f7a927
