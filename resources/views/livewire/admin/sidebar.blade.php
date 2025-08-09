<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar"
    style="width: 400px !important">

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
            {{-- <i class="fs-6 fas fa-fw fa-chart-area"></i> --}}
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor"
                class="bi bi-distribute-vertical" viewBox="0 0 16 16">
                <path fill-rule="evenodd"
                    d="M1 1.5a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 0-1h-13a.5.5 0 0 0-.5.5m0 13a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 0-1h-13a.5.5 0 0 0-.5.5" />
                <path d="M2 7a1 1 0 0 1 1-1h10a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1z" />
            </svg>
            <span class="fs-5" style="cursor: pointer !important;">Danh sách tuyến đi</span></a>
    </li>

    <li class="nav-item" wire:current="active">
        <a class="nav-link" href="/admin-trips" wire:navigate style="width: 100%">
            {{-- <i class="fs-6 fas fa-fw fa-chart-area"></i> --}}
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="lucide lucide-car-icon lucide-car">
                <path
                    d="M19 17h2c.6 0 1-.4 1-1v-3c0-.9-.7-1.7-1.5-1.9C18.7 10.6 16 10 16 10s-1.3-1.4-2.2-2.3c-.5-.4-1.1-.7-1.8-.7H5c-.6 0-1.1.4-1.4.9l-1.4 2.9A3.7 3.7 0 0 0 2 12v4c0 .6.4 1 1 1h2" />
                <circle cx="7" cy="17" r="2" />
                <path d="M9 17h6" />
                <circle cx="17" cy="17" r="2" />
            </svg>
            <span class="fs-5" style="cursor: pointer !important;">Danh sách chuyến đi</span></a>
    </li>

    <li class="nav-item" wire:current="active">
        <a class="nav-link" href="/pickup-dropoff" wire:navigate style="width: 100%">

            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="lucide lucide-map-pin-house-icon lucide-map-pin-house">
                <path
                    d="M15 22a1 1 0 0 1-1-1v-4a1 1 0 0 1 .445-.832l3-2a1 1 0 0 1 1.11 0l3 2A1 1 0 0 1 22 17v4a1 1 0 0 1-1 1z" />
                <path d="M18 10a8 8 0 0 0-16 0c0 4.993 5.539 10.193 7.399 11.799a1 1 0 0 0 .601.2" />
                <path d="M18 22v-3" />
                <circle cx="10" cy="10" r="3" />
            </svg>
            <span class="fs-5" style="cursor: pointer !important;">Danh sách điểm đón trả</span></a>
    </li>

    <li class="nav-item" wire:current="active">
        <a class="nav-link" href="/buses" wire:navigate>
            <i class="fs-6 fas fa-fw fa-bus"></i>
            <span class="fs-5" style="cursor: pointer !important;">Danh sách xe</span></a>
    </li>


</ul>
