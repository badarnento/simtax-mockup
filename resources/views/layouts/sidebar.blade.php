<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">{{ config('app.name') }}</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="index.html">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Beranda</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Operasional
    </div>
    
    <li class="nav-item">
        <a class="nav-link" href="{{ url('/taxes') }}">
            <i class="fas fa-fw fa-money"></i>
            <span>Data Pajak</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Master
    </div>

    
    <li class="nav-item">
        <a class="nav-link" href="{{ url('/taxes') }}">
            <i class="fas fa-fw fa-users"></i>
            <span>Karyawan</span></a>
    </li>
    
    <li class="nav-item">
        <a class="nav-link" href="{{ url('/taxes') }}">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Rate</span></a>
    </li>


</ul>