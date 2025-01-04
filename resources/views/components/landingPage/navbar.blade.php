<section class="navBarSection">
    <div id="header" class="header">
        <!-- Logo -->
        <div class="logoDiv" style="color: #f86b29; cursor: pointer;">
            <span>Pemweb C1</span>
        </div>

        <!-- Hamburger Menu Icon -->
        <div onclick="toggleNav()" class="toggleNavbar">
            <i class="fas fa-bars" id="hamburgerIcon"></i>
        </div>

        <!-- Navbar Links -->
        <div id="navBar" class="navBar">
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
            <div class="headerBtns">
                @if (session('login'))
                    <button class="btn">{{ session('username') }}</button>
                    <button class="btn" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        Logout
                    </button>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                @else
                    <button onclick="window.location.href='{{ route('login') }}'" class="btn LoginBtn">Login</button>
                    <button onclick="window.location.href='{{ route('register') }}'" class="btn">Sign Up</button>
                @endif
            </div>
        </div>
    </div>
</section>


<script>
    function toggleNav() {
        const navBar = document.getElementById('navBar');
        const hamburgerIcon = document.getElementById('hamburgerIcon');
        navBar.classList.toggle('active');

        // Ganti ikon hamburger menjadi close
        if (navBar.classList.contains('active')) {
            hamburgerIcon.classList.replace('fa-bars', 'fa-times');
        } else {
            hamburgerIcon.classList.replace('fa-times', 'fa-bars');
        }
    }
</script>