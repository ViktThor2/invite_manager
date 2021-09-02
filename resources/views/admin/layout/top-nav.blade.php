<!-- Topbar -->
<nav class="navbar navbar-expand navbar-light bg-white topbar mb-2 static-top shadow">

    <a href="{{ url()->previous() }}" class="btn btn-info">Vissza</a>

    <!-- Topbar Navbar -->
    <ul class="navbar-nav ml-auto">

        <!-- Nav Item - User Information -->
        <li class="nav-item">
                <a class="dropdown-item" href="{{ route('logout') }}" data-toggle="modal" data-target="#logoutModal">
                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                    Kijelentkezés
                </a>
        </li>

    </ul>

</nav>
<!-- End of Topbar -->
