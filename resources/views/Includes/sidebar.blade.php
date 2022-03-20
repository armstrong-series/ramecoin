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


        @if(Auth::user()->role === "admin" || Auth::user()->role  === "support")     
        <li class="nav-item {{ $page == 'user-management' ? 'active' : '' }}"> 

            <a class="nav-link"  href="{{ route('admin.user-management')}}" 
                aria-controls="app">
                <span class="menu-title">User Management</span>&nbsp;&nbsp; 
                <i class="fas fa-users"></i> 
            </a>      
        </li>

        <li class="nav-item {{ $page == 'admin-transaction' ? 'active' : '' }}">
            <a class="nav-link"  href="{{ route('admin.transactions') }}" aria-expanded="false"
                aria-controls="email">
                <span class="menu-title">Manage Transactions</span>&nbsp;&nbsp; 
                <i class="fas fa-tasks-alt"></i>
                
            </a>
        </li>

        @endif


        
        
        <li class="nav-item">
            <a class="nav-link" class="{{ $page == 'wallet-fund' ? 'active' : '' }}"  href="{{ route('wallet.fund')}}" 
                aria-controls="app">
               
                <span class="menu-title">Fund Wallet</span>&nbsp;&nbsp;
                <i class="fas fa-wallet"></i>
            </a>
            
        </li>
        <li class="nav-item">
            <a class="nav-link"  href="{{ route('withdrawal.confirmation') }}" aria-expanded="false"
                aria-controls="email">
                <span class="menu-title">Withdraw Funds</span>&nbsp;&nbsp;
                <i class="fas fa-wallet"></i>
                
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="#">
                <span class="menu-title">Marketplace</span>&nbsp;&nbsp;
                <i class="fas fa-store-alt"></i>
            </a>
        </li>
        <li class="nav-item {{ $page == 'transactions' ? 'active' : '' }}">
          @if(Auth::user()->role === "member")
            <a class="nav-link"  href="{{ route('user.transactions') }}"
                aria-controls="elements">
               
                <span class="menu-title">Transaction History</span>&nbsp;&nbsp;
                <i class="fas fa-sticky-note"></i>
                
            </a>   
           @endif 
        </li>
        <!-- <li class="nav-item">
            <a class="nav-link" href="#">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"
                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" class="feather feather-users link-icon">
                    <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                    <circle cx="9" cy="7" r="4"></circle>
                    <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                    <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                </svg>
                <span class="menu-title">Marketplace</span>
            </a>
        </li>
        <li class="nav-item  {{ $page == 'plans' ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('investment.plan') }}" aria-expanded="false"
                aria-controls="general">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" class="feather feather-clipboard link-icon">
                    <path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2">
                    </path>
                    <rect x="8" y="2" width="8" height="4" rx="1" ry="1"></rect>
                </svg>
                <span class="menu-title">Invest</span>
               
            </a>
            <div class="collapse" id="invest">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"><a class="nav-link" href="#">Subscribe to a Plan</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">My Investment</a></li>   
                </ul>
            </div>
        </li> -->
   
    </ul>
</nav>




