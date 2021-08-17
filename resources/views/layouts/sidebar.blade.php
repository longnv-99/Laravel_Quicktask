<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="{{ asset('bower_components/adminlte/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">{{ __('message.long') }}</span>
    </a>

    <!-- SidebarSearch Form -->
    <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
            <input class="form-control form-control-sidebar" type="search" placeholder="{{ __('message.search') }}" aria-label="Search">
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
            <li class="nav-item">
                <a class="nav-link" href="#" id="manageProduct">
                    <i class="nav-icon fas fa-tasks"></i>
                    <p>{{ __('message.manage-department') }}</p>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#" id="manageUser">
                    <i class="nav-icon fas fa-user-friends"></i>
                    <p>{{ __('message.manage-user') }}</p>
                </a>
            </li>
        </ul>
    </nav>
</aside>
