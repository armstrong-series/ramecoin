<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item  {{ $page == 'dashboard' ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('user.dashboard') }}">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" class="feather feather-box link-icon">
                    <path
                        d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z">
                    </path>
                    <polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline>
                    <line x1="12" y1="22.08" x2="12" y2="12"></line>
                </svg>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>


        <li class="nav-item  {{ $page == 'admin' ? 'active' : '' }}">
         @if(Auth::user()->role == "admin" || Auth::user()->role  == "support")
            <a class="nav-link" href="{{ route('admin.dashboard') }}">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" class="feather feather-box link-icon">
                    <path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z">
                    </path>
                    <polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline>
                    <line x1="12" y1="22.08" x2="12" y2="12"></line>
                </svg>
                <span class="menu-title">Administrator</span>
            </a>
            @endif
        </li>


        @if(Auth::user()->role === "admin" || Auth::user()->role  === "support")     
        <li class="nav-item {{ $page == 'user-management' ? 'active' : '' }}"> 

            <a class="nav-link"  href="{{ route('admin.user-management')}}" 
                aria-controls="app">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"
                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" class="feather feather-command link-icon">
                    <path
                        d="M18 3a3 3 0 0 0-3 3v12a3 3 0 0 0 3 3 3 3 0 0 0 3-3 3 3 0 0 0-3-3H6a3 3 0 0 0-3 3 3 3 0 0 0 3 3 3 3 0 0 0 3-3V6a3 3 0 0 0-3-3 3 3 0 0 0-3 3 3 3 0 0 0 3 3h12a3 3 0 0 0 3-3 3 3 0 0 0-3-3z">
                    </path>
                </svg>
                <span class="menu-title">User Management</span>   
            </a>      
        </li>

        <li class="nav-item {{ $page == 'admin-transaction' ? 'active' : '' }}">
            <a class="nav-link"  href="{{ route('admin.transactions') }}" aria-expanded="false"
                aria-controls="email">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"
                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" class="feather feather-mail link-icon">
                    <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z">
                    </path>
                    <polyline points="22,6 12,13 2,6"></polyline>
                </svg>
                <span class="menu-title">Manage Transactions</span>
                
            </a>
        </li>

        @endif


        
        
        <li class="nav-item">
            <a class="nav-link" class="{{ $page == 'wallet-fund' ? 'active' : '' }}"  href="{{ route('wallet.fund')}}" 
                aria-controls="app">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"
                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" class="feather feather-command link-icon">
                    <path
                        d="M18 3a3 3 0 0 0-3 3v12a3 3 0 0 0 3 3 3 3 0 0 0 3-3 3 3 0 0 0-3-3H6a3 3 0 0 0-3 3 3 3 0 0 0 3 3 3 3 0 0 0 3-3V6a3 3 0 0 0-3-3 3 3 0 0 0-3 3 3 3 0 0 0 3 3h12a3 3 0 0 0 3-3 3 3 0 0 0-3-3z">
                    </path>
                </svg>
                <span class="menu-title">Fund Wallet</span>
                
            </a>
            
        </li>
        <li class="nav-item">
            <a class="nav-link"  href="#" aria-expanded="false"
                aria-controls="email">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"
                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" class="feather feather-mail link-icon">
                    <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z">
                    </path>
                    <polyline points="22,6 12,13 2,6"></polyline>
                </svg>
                <span class="menu-title">Withdraw Funds</span>
                
            </a>
        </li>
        <li class="nav-item {{ $page == 'transactions' ? 'active' : '' }}">
 
          @if(Auth::user()->role === "member")
            <a class="nav-link"  href="{{ route('user.transactions') }}"
                aria-controls="elements">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" class="feather feather-feather link-icon">
                    <path d="M20.24 12.24a6 6 0 0 0-8.49-8.49L5 10.5V19h8.5z"></path>
                    <line x1="16" y1="8" x2="2" y2="22"></line>
                    <line x1="17.5" y1="15" x2="9" y2="15"></line>
                </svg>
                <span class="menu-title">Transaction History</span>
                
            </a>   
           @endif 
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"
                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" class="feather feather-users link-icon">
                    <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                    <circle cx="9" cy="7" r="4"></circle>
                    <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                    <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                </svg>
                <span class="menu-title">Crypto Exchange</span>
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
        </li>
   
    </ul>
</nav>



<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/js/solid.min.js" integrity="sha512-wabaor0DW08KSK5TQlRIyYOpDrAfJxl5J0FRzH0dNNhGJbeUpHaNj7up3Kr2Bwz/abLvVcJvDrJL+RLFcyGIkg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
