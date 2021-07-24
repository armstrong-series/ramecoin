<div class="ecaps-sidemenu-area">
            <!-- Desktop Logo -->
            <div class="ecaps-logo">
                <a href="#"><img class="desktop-logo" src="{{ asset('assets/img/core-img/logo.png') }}" alt="Desktop Logo"> <img class="small-logo" src="img/core-img/small-logo.png" alt="Mobile Logo"></a>
            </div>

            <!-- Side Nav -->
            <div class="ecaps-sidenav" id="ecapsSideNav">
                <!-- Side Menu Area -->
                <div class="side-menu-area">
                    <!-- Sidebar Menu -->
                    <nav>
                        <ul class="sidebar-menu" data-widget="tree">
                            <li class="{{ $page == 'dashboard' ? 'active' : '' }}"><a href="{{ route('user.dashboard') }}"><i class="zmdi zmdi-view-web"></i> <span>Dashboard</span></a></li>
                            <li class="treeview">
                                <a href="javascript:void(0)"><i class="zmdi zmdi-code-smartphone"></i> <span>Pages</span> <i class="fa fa-angle-right"></i></a>
                                <ul class="treeview-menu">
                                    <li><a href="#">Home</a></li>
                                    <li><a href="#">About</a></li>
                                    <li><a href="#">Services</a></li>
                                    <li><a href="#">Portfolio</a></li>
                                    <li><a href="#">Team</a></li>
                                </ul>
                            </li>
                            @if(Auth::user->role === "admin" ||Auth::user->role === "support" )
                                <li class="active"><a href="#"><i class="zmdi zmdi-view-web"></i> <span>User Management</span></a></li>
                            @endif
                        </ul>
                    </nav>
                </div>
            </div>
        </div>

