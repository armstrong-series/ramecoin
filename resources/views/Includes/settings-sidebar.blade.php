<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">


    @if(Auth::user()->role === "member")  
        <li class="nav-item  {{ $page == 'dashboard' ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('user.dashboard') }}">
                <span class="menu-title">Dashboard</span>&nbsp;&nbsp;
                <i class="fab fa-dashcube"></i>
            </a>
        </li>
     @endif

        <li class="nav-item  {{ $page == 'admin' ? 'active' : '' }}">
         @if(Auth::user()->role == "admin" || Auth::user()->role  == "support")
            <a class="nav-link" href="{{ route('admin.dashboard') }}">
                <span class="menu-title">Dashboard</span>&nbsp;&nbsp;
                <i class="fas fa-tachometer"></i>
            </a>
         @endif
        </li>  
      
        <li class="nav-item">
            <a class="nav-link"  href="#" aria-expanded="false"
                aria-controls="email">
                <span class="menu-title">Payment Setup</span>&nbsp;&nbsp;
                <i class="fas fa-credit-card"></i>
                
            </a>
        </li>

        <li class="nav-item {{ $page = 'mailintegration' ? 'active' : '' }}">
            <a class="nav-link"  href="{{ route('settings.mail') }}" aria-expanded="false"
                aria-controls="email">
                <span class="menu-title">Email  Integrations</span>&nbsp;&nbsp;
                <i class="fas fa-microchip"></i>
                
            </a>
        </li>

        <li class="nav-item {{ $page == 'security' ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('user.settings.security') }}">
                <span class="menu-title">Security</span>&nbsp;&nbsp;
                <!-- <i class="fas fa-siren"></i> -->
                <i class="fas fa-door-closed"></i>
            </a>
        </li>


        <li class="nav-item">
            <a class="nav-link" href="#">
                <span class="menu-title">Referrals</span>&nbsp;&nbsp;
                <i class="fas fa-clipboard"></i>
            </a>
        </li>
       
      
   
    </ul>
</nav>




