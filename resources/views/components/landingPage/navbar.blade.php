<section class="navBarSection">
    <div id="header" class="header">
        <div class="logoDiv" style="color: #f86b29; cursor: pointer;">
            <span>Pemweb C1</span>
        </div>
        <!-- Hamburger Menu -->
        <div onclick="toggleNav()" class="toggleNavbar">
            <i class="fas fa-bars"></i>
        </div>
        <div id="navBar" class="navBar">
            <ul class="navList">
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
            <!-- Tombol Close Navbar -->
            <div onclick="toggleNav()" class="closeNavbar">
                <i class="fas fa-times"></i>
            </div>
        </div>
    </div>
</section>

<!-- Tambahkan JavaScript di bagian bawah -->
<script>
    function toggleNav() {
        const navBar = document.getElementById('navBar');
        if (navBar.style.display === 'block') {
            navBar.style.display = 'none'; // Sembunyikan navbar
        } else {
            navBar.style.display = 'block'; // Tampilkan navbar
        }
    }
</script>
