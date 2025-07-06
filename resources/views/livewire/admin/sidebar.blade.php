<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/admin">
        <div class="sidebar-brand-icon rounded">
            {{-- <i class="fas fa-laugh-wink"></i> --}}
            <img class="rounded" src="{{ asset('images/logo/logo-duangy.png') }}" alt="" width="60px"
                height="60px">
        </div>
        <div class="sidebar-brand-text mx-3">DUANGY</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider">
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    {{-- <li class="nav-item" wire:current="active">
        <a class="nav-link" href="/admin" wire:navigate>
            <i class="fs-6 fas fa-fw fa-tachometer-alt"></i>
            <span class="fs-6">Trang chủ</span></a>
    </li> --}}


    <!-- Nav Item - Pages Collapse Menu -->

    <!-- Nav Item -->
    <li class="nav-item" wire:current="active">
        <a class="nav-link" href="/routes" wire:navigate>
            <i class="fs-6 fas fa-fw fa-chart-area"></i>
            <span class="fs-6">Danh sách tuyến đi</span></a>
    </li>

    <li class="nav-item" wire:current="active">
        <a class="nav-link" href="/admin-trips" wire:navigate>
            <i class="fs-6 fas fa-fw fa-chart-area"></i>
            <span class="fs-6">Danh sách chuyến đi</span></a>
    </li>

    <li class="nav-item" wire:current="active">
        <a class="nav-link" href="/buses" wire:navigate>
            <i class="fs-6 fas fa-fw fa-chart-area"></i>
            <span class="fs-6">Danh sách xe</span></a>
    </li>

    <li class="nav-item" wire:current="active">
        <a class="nav-link" href="/admin-account" wire:navigate>
            <i class="fs-6 fas fa-fw fa-tachometer-alt"></i>
            <span class="fs-6">Tài khoản</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>


</ul>
