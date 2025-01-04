<section class="navBarSection">
    <div id="header" class="header">
        <!-- Logo -->
        <div class="logoDiv" style="color: #f86b29; cursor: pointer;">
            <span>Pemweb C1</span>
        </div>
        
        <!-- Hamburger Menu Icon -->
        <div onclick="toggleNav()" class="toggleNavbar">
            <i class="fas fa-bars"></i>
        </div>
        
        <!-- Navbar Links -->
        <div id="navBar" class="navBar">
            <!-- Close Button -->
            <div onclick="toggleNav()" class="closeNavbar">
                <i class="fas fa-times"></i>
            </div>
            <ul class="navList">
                <li class="navItem">
                    <a href="#" class="navLink">Home</a>
                </li>
                <li class="navItem">
                    <a href="#" class="navLink">Popular</a>
                </li>
                <li class="navItem">
                    <a href="#" class="navLink">Offers</a>
                </li>
                <li class="navItem">
                    <a href="#" class="navLink">Blog</a>
                </li>
                <li class="navItem">
                    <a href="#" class="navLink">Contacts</a>
                </li>
            </ul>
            <!-- Authentication Buttons -->
            @if (session('login'))
                <div class="headerBtns flex">
                    <button class="btn">{{ session('username') }}</button>
                    <button class="btn" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        Logout
                    </button>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            @else
                <div class="headerBtns flex">
                    <button onclick="window.location.href='{{ route('login') }}'" class="btn LoginBtn">Login</button>
                    <button onclick="window.location.href='{{ route('register') }}'" class="btn">Sign Up</button>
                </div>
            @endif
        </div>
    </div>
</section>

<script>
    function toggleNav() {
        const navBar = document.getElementById('navBar');
        navBar.classList.toggle('active');
    }
</script>
