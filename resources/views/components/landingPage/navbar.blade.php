<section class="navBarSection">
    <div id="header" class="header">
        <div class="logoDiv" style="color: #f86b29; cursor: pointer;">
            <span>Pemweb C1</span>
        </div>
        <div id="navBar" class="navBar">
            <ul class="navList ">
                <li class="navItem">
                    <span class="navLink">Home</span>
                </li>
                <li class="navItem">
                    <span class="navLink">Popular</span>
                </li>
                <li class="navItem">
                    <span class="navLink">Offers</span>
                </li>
                <li class="navItem">
                    <span class="navLink">Blog</span>
                </li>
                <li class="navItem">
                    <span class="navLink">Contacts</span>
                </li>
                @if (session('login'))
                    <div class="headerBtns flex">
                        <button class="btn">
                            <p>{{ session('username') }}</p>
                        </button>
                        <button class="btn" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <p>Logout</p>
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
            </ul>
            <div onclick="removeNav()" class="closeNavbar">
                <svg class="icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" width="32" height="32">
                    <path d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </div>
        </div>
        <div onclick="showNav()" class="toggleNavbar">
            <svg class="icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" width="32" height="32">
                <path d="M3 6h18M3 12h18m-9 6h9"></path>
            </svg>
        </div>
    </div>
</section>
