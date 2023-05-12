 <!-- partial -->
    <div class="container-fluid page-body-wrapper">
    <!-- partial:partials/_sidebar.html -->
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
        <li class="nav-item nav-category">Main</li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('blank')}}">
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
                    <img src="{{ asset('election_commission/images/faces/face28.png') }}" alt="image">
                    </div>
                    <div class="sidebar-profile-text">
                    <p class="mb-1">Henry Klein</p>
                    </div>
                </div>
                </div>
                <div class="badge badge-danger">3</div>
            </div>
            </div>
        </li>
        <li class="nav-item sidebar-user-actions">
            <div class="sidebar-user-menu">
            <a href="#" class="nav-link"><i class="mdi mdi-settings menu-icon"></i>
                <span class="menu-title">Settings</span>
            </a>
            </div>
        </li>
        <li class="nav-item sidebar-user-actions">
            <div class="sidebar-user-menu">
            <a href="#" class="nav-link"><i class="mdi mdi-logout menu-icon"></i>
                <span class="menu-title">Log Out</span></a>
            </div>
        </li>
        </ul>
    </nav>

    <!-- main-panel ends -->
    </div>