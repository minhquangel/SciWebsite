<div class="default-sidebar">
    <nav class="side-navbar box-scroll sidebar-scroll">
        <ul class="list-unstyled">
            <li class="{{ Request::is('admin/blog/*')
                || Request::is('admin/blog') ? 'active' : '' }}">
                <a href="{{ route('admin.blog.list') }}">
                    <i class="la la-newspaper-o"></i><span> Blog </span>
                </a>
            </li>
            <li class="{{ Request::is('admin/survey/*')
                || Request::is('admin/survey') ? 'active' : '' }}">
                <a href="{{ route('admin.survey.list') }}">
                    <i class="la la-check-square"></i><span> Survey </span>
                </a>
            </li>
        </ul>
    </nav>
</div>
