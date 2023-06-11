 <!-- partial -->
   
    <!-- partial:partials/_sidebar.html -->
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
        <li class="nav-item nav-category">Main</li>
        <li class="nav-item">
            <span class="icon-bg"><i class="mdi mdi-cube menu-icon"></i></span>
            <span class="menu-title">Dashboard</span>
            </a>
        </li>
        </li>
        <li class="nav-item sidebar-user-actions">
            <div class="user-details">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                <div class="d-flex align-items-center">
                    <div class="sidebar-profile-img">
                    <img src="{{ asset('admin/images/faces/face28.png') }}" alt="image">
                    </div>
                    <div class="sidebar-profile-text">
                    <div>{{ Auth::user()->name }}</div>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </li>
        <li class="nav-item sidebar-user-actions">
           
            <div class="sidebar-user-menu">
                <a href="{{ route('adm.create') }}" class="nav-link"><i class="mdi mdi-account-plus"></i>
                    <span class="menu-title">Add Election</span>
                </a>
                </div>
            <div class="sidebar-user-menu">
                <a href="{{ route('news.create') }}" class="nav-link"><i class="fa fa-newspaper-o" aria-hidden="true"></i>
                    <span class="menu-title">Add News</span>
                </a>
                </div>
            <div class="sidebar-user-menu">
                <a href="{{ route('news.index') }}" class="nav-link"><i class="fa fa-newspaper-o" aria-hidden="true"></i>
                    <span class="menu-title">Show News</span>
                </a>
                </div>
        </li>
        <li class="nav-item sidebar-user-actions">
            <div class="sidebar-user-menu">
            <form method="POST" action="{{ route('logout') }}">
                @csrf
            <a class="nav-link"
            href="{{ route('logout') }}" 
            onclick="event.preventDefault();
                this.closest('form').submit();"">
                <i class="mdi mdi-logout menu-icon"></i>
                <span class="menu-title">Log Out</span></a>
            </div>
            </form>
        </li>
        {{-- <form method="POST" action="{{ route('logout') }}">
                        @csrf
                            <a class="dropdown-item py-1 d-flex align-items-center justify-content-between" href="route('logout')"
                            onclick="event.preventDefault();
                                            this.closest('form').submit();">
                            <span>Log Out</span>
                            <i class="mdi mdi-logout ms-1"></i>
                            </a>
                    </form> --}}
        </ul>
    </nav>

    <!-- main-panel ends -->