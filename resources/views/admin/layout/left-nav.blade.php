<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-text mx-3">Ingatlankezelő</div>
    </a>


    <!-- Felhasználók -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Felhasználó kezelő
    </div>

        <li class="nav-item">
            <a class="nav-link" href="{{ route('costumer.create') }}">
                <i class="fas fa-fw fa-chart-area"></i>
                <span>Létrehozás</span></a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{ route('invite')}}">
                <i class="fas fa-fw fa-chart-area"></i>
                <span>Meghívás</span></a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{ route('costumer.index') }}">
                <i class="fas fa-fw fa-chart-area"></i>
                <span>Felhasználók</span></a>
        </li>


    <!-- Ingatlanok -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Ingatlan kezelő
    </div>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('house.admin') }}">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Ingatlanok</span></a>
    </li>


</ul>
<!-- End of Sidebar -->
