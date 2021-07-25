<div class="ecaps-sidemenu-area">
            <!-- Desktop Logo -->
    <div class="ecaps-logo">
        <a href="#"><img class="desktop-logo" src="{{ asset('assets/img/core-img/logo.png') }}" alt="Desktop Logo">
            <img class="small-logo" src="{{ asset('assets/img/core-img/small-logo.png') }}" alt="Mobile Logo">
        </a>
    </div>
    <!-- Side Nav -->
    <div class="ecaps-sidenav" id="ecapsSideNav">
        <!-- Side Menu Area -->
        <div class="side-menu-area">
            <!-- Sidebar Menu -->
            <nav>
                <ul class="sidebar-menu" data-widget="tree">
                    <li class="{{ $page == 'dashboard' ? 'active' : '' }}"><a href="{{ route('user.dashboard') }}"><i class="fas fa-tachometer-alt"></i>&nbsp;&nbsp;<span>Dashboard</span></a></li>
                    <li class="treeview">
                        <a href="javascript:void(0)"><i class="fas fa-file"></i>&nbsp;&nbsp;<span>Pages</span> <i class="fa fa-angle-right"></i></a>
                        <ul class="treeview-menu">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">About</a></li>
                            <li><a href="#">Services</a></li>
                            <li  class="{{ $page == 'portfolio' ? 'active' : '' }}"><a href="{{ route('user.portfolio')}}">Portfolio</a></li>
                            <li><a href="#"><i class="fas fa-users"></i>&nbsp;&nbsp;Team</a></li>
                        </ul>
                    </li>
                    @if(Auth::user()->role === "admin" || Auth::user()->role  === "support")
                        <li class="active"><a href="#"><i class="fas fa-users"></i>&nbsp;&nbsp;<span>User Management</span></a></li>
                    @endif

                    <li class="active"><a href="#"><i class="fas fa-cog"></i>&nbsp;&nbsp;<span>Settings</span></a></li>
                </ul>
            </nav>
        </div>
    </div>
</div>

