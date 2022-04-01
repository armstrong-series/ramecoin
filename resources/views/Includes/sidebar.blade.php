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
            <a class="nav-link"  href="{{ route('funds.withdrawal') }}" aria-expanded="false"
                aria-controls="email">
                <span class="menu-title">Withdrawal</span>&nbsp;&nbsp;
                <i class="fas fa-university"></i>
                
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
    </ul>
</nav>




