<aside class="bd-sidebar scrp">
    <div class="offcanvas-lg offcanvas-start text-bg-dark pb-5 scrp" id="sidebar">
        <!-- SIDEBAR HEADER -->
        <div class="sidebar-header p-3 position-sticky top-0 bg-dark z-3 d-block d-lg-none">
            <div class="text-end">
                <button type="button" class="btn btn-dark" data-bs-dismiss="offcanvas" data-bs-target="#sidebar">
                    <i class="bi bi-x-lg"></i>
                </button>
            </div>
        </div>
        <!-- END OF SIDEBAR HEADER -->

        <!-- LOGO -->
        <div class="p-3 text-center">
            <a href="{{ url('img/LOGO BULAT.png') }}" class="block">
                <img src="{{ asset('img/LOGO_PANJANG.png') }}" alt="LOGO TRANSPARAN"
                    class="img-fluid mx-auto mb-2 rectangular-logo" width="150" height="50">
                <img src="{{ asset('img/LOGO BULAT.png') }}" alt="LOGO BULAT TRANSPARAN" class="mx-auto dark-mode-logo"
                    width="50">
            </a>
        </div>

        <!-- SIDEBAR BODY -->
        <div class="sidebar-body mb-3">
            <div class="accordion accordion-flush">
                <!-- ADMIN MENU -->
                <div class="accordion-item text-bg-dark border-0">
                    <!-- ADMIN MENU HEADER -->
                    <div class="accordion-header px-3">
                        @if (Session::get('user_role') == 0)
                            <button class="accordion-button text-bg-dark shadow-none p-0 py-3" type="button"
                                data-bs-toggle="collapse" data-bs-target="#submenu-admin">
                                <h6>
                                    ADMIN
                                </h6>
                            </button>
                        @else
                            <button class="accordion-button text-bg-dark shadow-none p-0 py-3 size-20" type="button"
                                data-bs-toggle="collapse" data-bs-target="#submenu-user">
                                USER
                            </button>
                        @endif
                    </div>

                    <!-- ADMIN SUBMENU -->
                    <div id="submenu-admin" class="accordion-collapse collapse show">
                        <div class="accordion-body p-0 px-3">
                            <div class="list-group list-group-flush">
                                <h6 class="text-uppercase text-white mt-1 mb-1 mr-9 small-text">Dashboard</h6>
                                <a href="{{ url('/denah') }}"
                                    class="list-group-item list-group-item-action border-0 mb-1 text-bg-dark {{ Request::is('denah') ? 'active' : '' }}"
                                    data-bs-placement="right" data-bs-title="Dashboard">
                                    <i class="bi bi-layout-text-sidebar me-3"></i>
                                    <span class="submenu-title">STO Layout</span>
                                </a>
                                <a href="{{ url('/topology') }}"
                                    class="list-group-item list-group-item-action border-0 mb-1 text-bg-dark {{ Request::is('topology') ? 'active' : '' }}"
                                    data-bs-placement="right" data-bs-title="Topology">
                                    <i class="bi bi-diagram-3 me-3"></i>
                                    <span class="submenu-title">STO Topology</span>
                                </a>
                                <a href="{{ url('/document') }}"
                                    class="list-group-item list-group-item-action border-0 mb-1 text-bg-dark {{ Request::is('document') ? 'active' : '' }}"
                                    data-bs-placement="right" data-bs-title="Surat">
                                    <i class="bi bi-archive me-3"></i>
                                    <span class="submenu-title">Asset Idle</span>
                                </a>

                                <h6 class="text-uppercase text-white mt-3 mb-1 small-text">Reports</h6>
                                <a href="{{ url('/core') }}"
                                    class="list-group-item list-group-item-action border-0 mb-1 text-bg-dark {{ Request::is('core') ? 'active' : '' }}"
                                    data-bs-placement="right" data-bs-title="Surat">
                                    <i class="bi bi-diagram-3-fill me-3"></i>
                                    <span class="submenu-title">Core Potential</span>
                                </a>
                                <a href="{{ url('/cme') }}"
                                    class="list-group-item list-group-item-action border-0 mb-1 text-bg-dark {{ Request::is('cme') ? 'active' : '' }}"
                                    data-bs-placement="right" data-bs-title="Surat">
                                    <i class="bi bi-pie-chart-fill me-3"></i>
                                    <span class="submenu-title">CME Potential</span>
                                </a>
                                <a href="{{ url('/bbm') }}"
                                    class="list-group-item list-group-item-action border-0 mb-1 text-bg-dark {{ Request::is('bbm') ? 'active' : '' }}"
                                    data-bs-placement="right" data-bs-title="Surat">
                                    <i class="bi bi-graph-up-arrow me-3"></i>
                                    <span class="submenu-title">BBM</span>
                                </a>

                                <h6 class="text-uppercase text-white mt-3 mb-1 small-text">Assets & Resources</h6>
                                <a href="{{ url('/sto') }}"
                                    class="list-group-item list-group-item-action border-0 mb-1 text-bg-dark {{ Request::is('sto') ? 'active' : '' }}"
                                    data-bs-placement="right" data-bs-title="Surat">
                                    <i class="bi bi-building me-3"></i>
                                    <span class="submenu-title">STO</span>
                                </a>
                                <a href="{{ url('/room') }}"
                                    class="list-group-item list-group-item-action border-0 mb-1 text-bg-dark {{ Request::is('room') ? 'active' : '' }}"
                                    data-bs-placement="right" data-bs-title="Surat">
                                    <i class="bi bi-house-door me-3"></i>
                                    <span class="submenu-title">Room</span>
                                </a>
                                <a href="{{ url('/device') }}"
                                    class="list-group-item list-group-item-action border-0 mb-1 text-bg-dark {{ Request::is('device') ? 'active' : '' }}"
                                    data-bs-placement="right" data-bs-title="Surat">
                                    <i class="bi bi-device-hdd me-3"></i>
                                    <span class="submenu-title">Device</span>
                                </a>

                                @if (Session::get('user_role') == 0)
                                    <h6 class="text-uppercase text-white mt-3 mb-1 small-text">Users Management</h6>
                                    <a href="{{ url('/viewuser') }}"
                                        class="list-group-item list-group-item-action border-0 mb-1 text-bg-dark {{ Request::is('viewuser') ? 'active' : '' }}"
                                        data-bs-placement="right" data-bs-title="Surat">
                                        <i class="bi bi-people me-3"></i>
                                        <span class="submenu-title">User</span>
                                    </a>
                                @endif
                                <a href="{{ route('logout') }}"
                                    class="list-group-item list-group-item-action border-0 mb-1 text-bg-dark {{ Request::is('logout') ? 'active' : '' }}"
                                    data-bs-placement="right" data-bs-title="Logout">
                                    <i class="bi bi-box-arrow-left me-3"></i>
                                    <span class="submenu-title">Logout</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- END OF ADMIN SUBMENU -->
                </div>
                <!-- END OF ADMIN MENU -->
            </div>
        </div>
        <!-- END OF SIDEBAR BODY -->
    </div>
</aside>
