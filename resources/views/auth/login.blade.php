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
