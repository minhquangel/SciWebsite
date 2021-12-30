<header class="header">
    <nav class="navbar fixed-top">
        <div class="search-box">
            <button class="dismiss"><i class="ion-close-round"></i></button>
            <form id="searchForm" action="#" role="search">
                <input type="search" placeholder="Search something ..." class="form-control">
            </form>
        </div>
        <div class="navbar-holder d-flex align-items-center align-middle justify-content-between">
            <div class="navbar-header">
                <a href="{{ route('admin.blog.list') }}" class="navbar-brand">
                    <div class="brand-image brand-big">
                        <img src="{{ asset('assets/img/logo-big.png') }}" alt="logo" class="logo-big">
                    </div>
                    <div class="brand-image brand-small">
                        <img src="{{ asset('assets/img/logo.png') }}" alt="logo" class="logo-small">
                    </div>
                </a>
                <a id="toggle-btn" href="#" class="menu-btn active">
                    <span></span>
                    <span></span>
                    <span></span>
                </a>
            </div>
            <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center pull-right">
                <li class="nav-item dropdown">
                    <a id="user" rel="nofollow" data-target="#" href="#" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false" class="nav-link">
                        <img src="{{ asset('assets/img/avatar/avatar-01.jpg') }}" alt="..." class="avatar rounded-circle">
                    </a>
                    <ul aria-labelledby="user" class="user-size dropdown-menu pb-4">
                        <li class="welcome">
                            <img src="{{ asset('assets/img/avatar/avatar-01.jpg') }}" alt="..." class="rounded-circle">
                        </li>
                        <li class="text-center">
                            Welcome Admin !
                        </li>
                        <li class="separator"></li>
                        <li>
                            <a href="#" class="dropdown-item no-padding-bottom" data-toggle="modal" data-target="#logout-modal">Sign out</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>

<form action="{{ route('admin.sign_out') }}" method="POST">
    @csrf

    <div id="logout-modal" class="modal fade">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <div class="section-title mt-5 mb-5">
                        <h2 class="text-gradient-02"> You want to Sign out, Are you sure ? </h2>
                    </div>
                    <button type="button" class="btn btn-secondary mb-3 mr-3" data-dismiss="modal">
                        <i class="la la-close"></i> No
                    </button>
                    <button type="submit" class="btn btn-success mb-3">
                        <i class="la la-check"></i> Yes
                    </button>
                </div>
            </div>
        </div>
    </div>
</form>
