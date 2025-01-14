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
</div>
</div>

