{{-- <div class="col-md-3 left_col">
    <div class="left_col scroll-view">
        <div class="navbar nav_title" style="border: 0;">
            <a href="{{route('backend.dashboard')}}" class="site_title"><i class="fa fa-paw"></i> <span>{{ config('app.name') }} Team!</span></a>
        </div>

        <div class="clearfix"></div>

        <!-- menu profile quick info -->
        <div class="profile clearfix">
            <a href="">
                <div class="profile_pic">
                    <img src="{{ (!empty(Auth::user()->image)) ? Auth::user()->image : url('images/img.jpg') }}" alt="..." class="img-circle profile_img">
                </div>
                <div class="profile_info">
                    <span>Welcome,</span>
                    <h2>{{ Auth::user()->name }}</h2>
                </div>
            </a>
        </div>
        <!-- /menu profile quick info -->

        <br />

        <!-- sidebar menu -->
    @include('backend.includes.menu')
    <!-- /sidebar menu -->

    </div>
</div>

 --}}


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



  <!-- Main Sidebar Container -->

  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
    <img src="{{ url('admin/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
        <img src="{{ url('admin/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
        <a href="#" class="d-block">{{ Auth::user()->name }}</a>
        </div>
    </div>

    <!-- SidebarSearch Form -->
    <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
            <button class="btn btn-sidebar">
            <i class="fas fa-search fa-fw"></i>
            </button>
        </div>
        </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            @include('backend.includes.menu')
        </ul>
    </nav>
    </div>
    <!-- /.sidebar -->
</aside>