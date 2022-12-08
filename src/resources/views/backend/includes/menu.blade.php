{{-- <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">

    @role('administrator|manager|editor')
    <div class="menu_section">
        <h3>Quản lý</h3>
        <ul class="nav side-menu">
            <li class="{{ Request::is('post') ? 'active' : '' }}"><a><i class="fa fa-folder-open-o" aria-hidden="true"></i> Bài viết <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li class="{{ Request::is('post') ? 'active' : '' }}">
                        <a href="{{ route('backend.posts')  }}">Tất cả bài viết</a>
                    </li>
                    <li class="{{ Request::is('post/create') ? 'active' : '' }}">
                        <a href="{{ route('backend.posts.create') }}">Bài viết mới</a>
                    </li>
                    <li class="{{ Request::is('category') ? 'active' : '' }}">
                        <a href="{{ route('backend.category') }}">Danh mục</a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
    @endrole

    <div class="menu_section">
        <h3>Tài khoản</h3>
        <ul class="nav side-menu">
            @role('administrator')
            <li class="{{ Request::is('auth') ? 'active' : '' }}"><a><i class="fa fa-folder-open-o" aria-hidden="true"></i> Tài khoản <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li class="{{ Request::is('account') ? 'active' : '' }}">
                        <a href="{{ route('backend.account') }}">Danh sách</a>
                    </li>
                    <li class="{{ Request::is('role') ? 'active' : '' }}">
                        <a href="{{ route('backend.role') }}">Phân quyền - vai trò</a>
                    </li>
                </ul>
            </li>
            @endrole
            <li class="{{ Request::is('profile') ? 'active' : '' }}"><a href="{{ route('backend.profile', ['admin' => Auth::id()]) }}"><i class="fa fa-user" aria-hidden="true"></i> Thông tin cá nhân</a></li>
        </ul>
    </div>

</div> --}}

<li class="nav-item{{ Request::is('admin/dashboard') ? ' menu-open' : '' }}">
    <a href="{{ route('backend.dashboard') }}" class="nav-link">
        <i class="nav-icon fas fa-tachometer-alt"></i>
        <p>
            Dashboard
        </p>
    </a>
</li>
<li class="nav-header">Quản lý tin tức</li>
<li class="nav-item {{ Request::is('admin/post') ? 'menu-is-opening menu-open' : '' }}">
    <a href="#" class="nav-link">
        <i class="nav-icon fas fa-copy"></i>
        <p>
            Tin tức
            <i class="fas fa-angle-left right"></i>
        </p>
    </a>
    <ul class="nav nav-treeview" {{ Request::is('admin/post') ? 'style="display: block"' : '' }}>
        <li class="nav-item">
            <a href="pages/layout/top-nav.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Danh sách</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('backend.posts') }}" class="nav-link {{ Request::is('admin/post') ? 'active' : '' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>Thêm mới</p>
            </a>
        </li>
    </ul>
</li>
<li class="nav-header">Quản lý tài khoản</li>
<li class="nav-item {{ Request::is('admin/post') ? 'menu-is-opening menu-open' : '' }}">
    <a href="#" class="nav-link">
        <i class="nav-icon fas fa-copy"></i>
        <p>
            Tất cả tài khoản
            <i class="fas fa-angle-left right"></i>
        </p>
    </a>
    <ul class="nav nav-treeview" {{ Request::is('admin/post') ? 'style="display: block"' : '' }}>
        <li class="nav-item">
            <a href="pages/layout/top-nav.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Danh sách tài khoản</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('backend.posts') }}" class="nav-link {{ Request::is('admin/post') ? 'active' : '' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>Thêm mới tài khoản</p>
            </a>
        </li>
    </ul>
</li>

<li class="nav-item {{ Request::is('admin/post') ? 'menu-is-opening menu-open' : '' }}">
    <a href="#" class="nav-link">
        <i class="nav-icon fas fa-copy"></i>
        <p>
            Tài khoản của tôi
            <i class="fas fa-angle-left right"></i>
        </p>
    </a>
    <ul class="nav nav-treeview" {{ Request::is('admin/post') ? 'style="display: block"' : '' }}>
        <li class="nav-item">
            <a href="{{ route('backend.profile', ['user' => Auth::id() ]) }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Thông tin cá nhân</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('backend.posts') }}" class="nav-link {{ Request::is('admin/post') ? 'active' : '' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>Thay đổi mật khẩu</p>
            </a>
        </li>
    </ul>
</li>

<li class="nav-item {{ Request::is('admin/category') ? 'menu-is-opening menu-open' : '' }}">
    <a href="#" class="nav-link{{ Request::is('admin/category') ? ' active' : '' }}">
        <i class="nav-icon fas fa-copy"></i>
        <p>
            Thể loại phim
            <i class="fas fa-angle-left right"></i>
        </p>
    </a>
    <ul class="nav nav-treeview" {{ Request::is('admin/category') ? 'style="display: block"' : '' }}>
        <li class="nav-item">
            <a href="{{ route('backend.category') }}" class="nav-link{{ Request::is('admin/category') ? ' active' : '' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>Danh sách</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('backend.posts') }}" class="nav-link {{ Request::is('admin/post') ? 'active' : '' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>Thêm mới</p>
            </a>
        </li>
    </ul>
</li>


<li class="nav-item">
    <a href="pages/widgets.html" class="nav-link">
        <i class="nav-icon fas fa-th"></i>
        <p>
            Widgets
            <span class="right badge badge-danger">New</span>
        </p>
    </a>
</li>
<li class="nav-item">
    <a href="#" class="nav-link">
        <i class="nav-icon fas fa-copy"></i>
        <p>
            Layout Options
            <i class="fas fa-angle-left right"></i>
            <span class="badge badge-info right">6</span>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="pages/layout/top-nav.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Top Navigation</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="pages/layout/top-nav-sidebar.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Top Navigation + Sidebar</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="pages/layout/boxed.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Boxed</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="pages/layout/fixed-sidebar.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Fixed Sidebar</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="pages/layout/fixed-sidebar-custom.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Fixed Sidebar <small>+ Custom Area</small></p>
            </a>
        </li>
        <li class="nav-item">
            <a href="pages/layout/fixed-topnav.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Fixed Navbar</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="pages/layout/fixed-footer.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Fixed Footer</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="pages/layout/collapsed-sidebar.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Collapsed Sidebar</p>
            </a>
        </li>
    </ul>
</li>
<li class="nav-item">
    <a href="#" class="nav-link">
        <i class="nav-icon fas fa-chart-pie"></i>
        <p>
            Charts
            <i class="right fas fa-angle-left"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="pages/charts/chartjs.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>ChartJS</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="pages/charts/flot.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Flot</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="pages/charts/inline.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Inline</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="pages/charts/uplot.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>uPlot</p>
            </a>
        </li>
    </ul>
</li>
<li class="nav-item">
    <a href="#" class="nav-link">
        <i class="nav-icon fas fa-tree"></i>
        <p>
            UI Elements
            <i class="fas fa-angle-left right"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="pages/UI/general.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>General</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="pages/UI/icons.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Icons</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="pages/UI/buttons.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Buttons</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="pages/UI/sliders.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Sliders</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="pages/UI/modals.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Modals & Alerts</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="pages/UI/navbar.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Navbar & Tabs</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="pages/UI/timeline.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Timeline</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="pages/UI/ribbons.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Ribbons</p>
            </a>
        </li>
    </ul>
</li>
<li class="nav-item">
    <a href="#" class="nav-link">
        <i class="nav-icon fas fa-edit"></i>
        <p>
            Forms
            <i class="fas fa-angle-left right"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="pages/forms/general.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>General Elements</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="pages/forms/advanced.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Advanced Elements</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="pages/forms/editors.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Editors</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="pages/forms/validation.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Validation</p>
            </a>
        </li>
    </ul>
</li>
<li class="nav-item">
    <a href="#" class="nav-link">
        <i class="nav-icon fas fa-table"></i>
        <p>
            Tables
            <i class="fas fa-angle-left right"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="pages/tables/simple.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Simple Tables</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="pages/tables/data.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>DataTables</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="pages/tables/jsgrid.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>jsGrid</p>
            </a>
        </li>
    </ul>
</li>
<li class="nav-header">EXAMPLES</li>
<li class="nav-item">
    <a href="pages/calendar.html" class="nav-link">
        <i class="nav-icon far fa-calendar-alt"></i>
        <p>
            Calendar
            <span class="badge badge-info right">2</span>
        </p>
    </a>
</li>
<li class="nav-item">
    <a href="pages/gallery.html" class="nav-link">
        <i class="nav-icon far fa-image"></i>
        <p>
            Gallery
        </p>
    </a>
</li>
<li class="nav-item">
    <a href="pages/kanban.html" class="nav-link">
        <i class="nav-icon fas fa-columns"></i>
        <p>
            Kanban Board
        </p>
    </a>
</li>
<li class="nav-item">
    <a href="#" class="nav-link">
        <i class="nav-icon far fa-envelope"></i>
        <p>
            Mailbox
            <i class="fas fa-angle-left right"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="pages/mailbox/mailbox.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Inbox</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="pages/mailbox/compose.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Compose</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="pages/mailbox/read-mail.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Read</p>
            </a>
        </li>
    </ul>
</li>
<li class="nav-item">
    <a href="#" class="nav-link">
        <i class="nav-icon fas fa-book"></i>
        <p>
            Pages
            <i class="fas fa-angle-left right"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="pages/examples/invoice.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Invoice</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="pages/examples/profile.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Profile</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="pages/examples/e-commerce.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>E-commerce</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="pages/examples/projects.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Projects</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="pages/examples/project-add.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Project Add</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="pages/examples/project-edit.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Project Edit</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="pages/examples/project-detail.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Project Detail</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="pages/examples/contacts.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Contacts</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="pages/examples/faq.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>FAQ</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="pages/examples/contact-us.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Contact us</p>
            </a>
        </li>
    </ul>
</li>
<li class="nav-item">
    <a href="#" class="nav-link">
        <i class="nav-icon far fa-plus-square"></i>
        <p>
            Extras
            <i class="fas fa-angle-left right"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>
                    Login & Register v1
                    <i class="fas fa-angle-left right"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="pages/examples/login.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Login v1</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="pages/examples/register.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Register v1</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="pages/examples/forgot-password.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Forgot Password v1</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="pages/examples/recover-password.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Recover Password v1</p>
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>
                    Login & Register v2
                    <i class="fas fa-angle-left right"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="pages/examples/login-v2.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Login v2</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="pages/examples/register-v2.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Register v2</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="pages/examples/forgot-password-v2.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Forgot Password v2</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="pages/examples/recover-password-v2.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Recover Password v2</p>
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item">
            <a href="pages/examples/lockscreen.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Lockscreen</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="pages/examples/legacy-user-menu.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Legacy User Menu</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="pages/examples/language-menu.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Language Menu</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="pages/examples/404.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Error 404</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="pages/examples/500.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Error 500</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="pages/examples/pace.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Pace</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="pages/examples/blank.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Blank Page</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="starter.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Starter Page</p>
            </a>
        </li>
    </ul>
</li>
<li class="nav-item">
    <a href="#" class="nav-link">
        <i class="nav-icon fas fa-search"></i>
        <p>
            Search
            <i class="fas fa-angle-left right"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="pages/search/simple.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Simple Search</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="pages/search/enhanced.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Enhanced</p>
            </a>
        </li>
    </ul>
</li>
<li class="nav-header">MISCELLANEOUS</li>
<li class="nav-item">
    <a href="iframe.html" class="nav-link">
        <i class="nav-icon fas fa-ellipsis-h"></i>
        <p>Tabbed IFrame Plugin</p>
    </a>
</li>
<li class="nav-item">
    <a href="https://adminlte.io/docs/3.1/" class="nav-link">
        <i class="nav-icon fas fa-file"></i>
        <p>Documentation</p>
    </a>
</li>
<li class="nav-header">MULTI LEVEL EXAMPLE</li>
<li class="nav-item">
    <a href="#" class="nav-link">
        <i class="fas fa-circle nav-icon"></i>
        <p>Level 1</p>
    </a>
</li>
<li class="nav-item">
    <a href="#" class="nav-link">
        <i class="nav-icon fas fa-circle"></i>
        <p>
            Level 1
            <i class="right fas fa-angle-left"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Level 2</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>
                    Level 2
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="far fa-dot-circle nav-icon"></i>
                        <p>Level 3</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="far fa-dot-circle nav-icon"></i>
                        <p>Level 3</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="far fa-dot-circle nav-icon"></i>
                        <p>Level 3</p>
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Level 2</p>
            </a>
        </li>
    </ul>
</li>
<li class="nav-item">
    <a href="#" class="nav-link">
        <i class="fas fa-circle nav-icon"></i>
        <p>Level 1</p>
    </a>
</li>
<li class="nav-header">LABELS</li>
<li class="nav-item">
    <a href="#" class="nav-link">
        <i class="nav-icon far fa-circle text-danger"></i>
        <p class="text">Important</p>
    </a>
</li>
<li class="nav-item">
    <a href="#" class="nav-link">
        <i class="nav-icon far fa-circle text-warning"></i>
        <p>Warning</p>
    </a>
</li>
<li class="nav-item">
    <a href="#" class="nav-link">
        <i class="nav-icon far fa-circle text-info"></i>
        <p>Informational</p>
    </a>
</li>
