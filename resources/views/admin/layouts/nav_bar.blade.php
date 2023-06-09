 <!-- partial:partials/_navbar.html -->
    <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
    <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo text-white" href="index.html">Admin</a>
    </div>
    <div class="navbar-menu-wrapper d-flex align-items-stretch">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
        <span class="mdi mdi-menu"></span>
        </button>
        <div class="search-field d-none d-xl-block">
       
        </div>
        <ul class="navbar-nav navbar-nav-right">
        <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
           
            <div class="nav-profile-text">
                <div>{{ Auth::user()->name }}</div>
            </div>
            </a>
            <div class="dropdown-menu navbar-dropdown dropdown-menu-right p-0 border-0 font-size-sm" aria-labelledby="profileDropdown" data-x-placement="bottom-end">
            <div class="p-3 text-center bg-primary">
                <img class="img-avatar img-avatar48 img-avatar-thumb" src="{{ asset('admin/images/faces/face28.png') }}" alt="">
            </div>
            <div class="p-2">
                <h5 class="dropdown-header text-uppercase ps-2 text-dark">User Options</h5>
                <a class="dropdown-item py-1 d-flex align-items-center justify-content-between" href="#">
                <span>Inbox</span>
                <span class="p-0">
                    <span class="badge badge-primary">3</span>
                    <i class="mdi mdi-email-open-outline ms-1"></i>
                </span>
                </a>
                <a class="dropdown-item py-1 d-flex align-items-center justify-content-between" href="#">
                <span>Profile</span>
                <span class="p-0">
                    <span class="badge badge-success">1</span>
                    <i class="mdi mdi-account-outline ms-1"></i>
                </span>
                </a>
                <a class="dropdown-item py-1 d-flex align-items-center justify-content-between" href="javascript:void(0)">
                <span>Settings</span>
                <i class="mdi mdi-settings"></i>
                </a>
                <div role="separator" class="dropdown-divider"></div>
                <h5 class="dropdown-header text-uppercase  ps-2 text-dark mt-2">Actions</h5>
                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                        <a class="dropdown-item py-1 d-flex align-items-center justify-content-between" href="{{route('logout')}}"
                        onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        <span>Log Out</span>
                        <i class="mdi mdi-logout ms-1"></i>
                        </a>
                </form>
            </div>
            </div>
        </li>
        <li class="nav-item dropdown">
           
            <div class="dropdown-menu dropdown-menu-end navbar-dropdown preview-list" aria-labelledby="messageDropdown">
            <h6 class="p-3 mb-0 bg-primary text-white py-4">Messages</h6>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                <img src="assets/images/faces/face4.jpg" alt="image" class="profile-pic">
                </div>
                <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                <h6 class="preview-subject ellipsis mb-1 font-weight-normal">Mark send you a message</h6>
                <p class="text-gray mb-0"> 1 Minutes ago </p>
                </div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                <img src="assets/images/faces/face2.jpg" alt="image" class="profile-pic">
                </div>
                <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                <h6 class="preview-subject ellipsis mb-1 font-weight-normal">Cregh send you a message</h6>
                <p class="text-gray mb-0"> 15 Minutes ago </p>
                </div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                <img src="assets/images/faces/face3.jpg" alt="image" class="profile-pic">
                </div>
                <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                <h6 class="preview-subject ellipsis mb-1 font-weight-normal">Profile picture updated</h6>
                <p class="text-gray mb-0"> 18 Minutes ago </p>
                </div>
            </a>
            <div class="dropdown-divider"></div>
            <h6 class="p-3 mb-0 text-center">4 new messages</h6>
            </div>
        </li>
       
        </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
        <span class="mdi mdi-menu"></span>
        </button>
    </div>
    </nav>