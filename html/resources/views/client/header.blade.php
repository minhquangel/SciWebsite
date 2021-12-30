<nav class="navbar navbar-dark navbar-expand-lg" id="mainNavigation">
    <a class="navbar-brand" href="{{ route('root') }}">U.S. VISA</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainMenu"
        aria-controls="mainMenu" aria-expanded="false" aria-label="Main Menu">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="mainMenu">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item {{ $currentPage === 'blog' ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('blog.list') }}">Nhật ký</a>
            </li>
            <li class="nav-item {{ $currentPage === 'service' ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('service') }}">Dịch vụ</a>
            </li>
            <li class="nav-item {{ $currentPage === 'student' ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('student') }}">Du học</a>
            </li>
            <li class="nav-item {{ $currentPage === 'tourism' ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('tourism') }}">Du lịch/công tác</a>
            </li>
        </ul>
    </div>
</nav>
