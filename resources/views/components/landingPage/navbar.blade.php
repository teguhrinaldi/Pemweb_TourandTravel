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
            @guest
            <button onclick="window.location.href='{{ route('login') }}'" class="btn LoginBtn">Login</button>
            <button onclick="window.location.href='{{ route('register') }}'" class="btn">Sign Up</button>
            @else
            <h3 class="profile-name">
                <a href="#">
                    {{ Auth::user()->email }}
                </a>
                <form action="{{ route('logout') }}" method="POST" style="display: inline;">
                    @csrf
                    <button type="submit" class="btn btn-logout">Logout</button>
                </form>
            </h3>
            @endguest
            </div>
        </div>
    </div>
</section>
