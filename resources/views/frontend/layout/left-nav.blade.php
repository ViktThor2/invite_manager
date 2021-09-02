<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-text mx-3">Ingatlankezelő</div>
    </a>

    <!-- Ingatlanok -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Ingatlankezelő
    </div>

    <!-- Nav Item - Charts -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('search.create') }}">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Keresés</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('house.index') }}">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Ingatlanok</span></a>
    </li>



</ul>
<!-- End of Sidebar -->
