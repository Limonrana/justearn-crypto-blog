<!-- .app-aside -->
<aside class="app-aside app-aside-expand-md app-aside-light">
    <!-- .aside-content -->
    <div class="aside-content">
        <!-- .aside-header -->
        <header class="aside-header d-block d-md-none">
            <!-- .btn-account -->
            <button class="btn-account" type="button" data-toggle="collapse" data-target="#dropdown-aside"><span class="user-avatar user-avatar-lg"><img src="assets/images/avatars/profile.jpg" alt=""></span> <span class="account-icon"><span class="fa fa-caret-down fa-lg"></span></span> <span class="account-summary"><span class="account-name">Beni Arisandi</span> <span class="account-description">Marketing Manager</span></span></button> <!-- /.btn-account -->
            <!-- .dropdown-aside -->
            <div id="dropdown-aside" class="dropdown-aside collapse">
                <!-- dropdown-items -->
                <div class="pb-3">
                    <a class="dropdown-item" href="user-profile.html"><span class="dropdown-icon oi oi-person"></span> Profile</a> <a class="dropdown-item" href="auth-signin-v1.html"><span class="dropdown-icon oi oi-account-logout"></span> Logout</a>
                    <div class="dropdown-divider"></div><a class="dropdown-item" href="#">Help Center</a> <a class="dropdown-item" href="#">Ask Forum</a> <a class="dropdown-item" href="#">Keyboard Shortcuts</a>
                </div><!-- /dropdown-items -->
            </div><!-- /.dropdown-aside -->
        </header><!-- /.aside-header -->
        <!-- .aside-menu -->
        <div class="aside-menu overflow-hidden">
            <!-- .stacked-menu -->
            <nav id="stacked-menu" class="stacked-menu">
                <!-- .menu -->
                <ul class="menu">
                    <!-- .menu-item -->
                    <li class="menu-item {{ Request::is('admin/dashboard') ? 'has-active' : '' }}">
                        <a href="{{ route('admin.dashboard') }}" class="menu-link">
                            <span class="menu-icon fas fa-home"></span> <span class="menu-text">Dashboard</span>
                        </a>
                    </li>
                    <!-- /.menu-item -->
                    <!-- .menu-header -->
                    <li class="menu-header">CMS Manage</li>
                    <!-- /.menu-header -->
                    <!-- .menu-item -->
                    <li class="menu-item">
                        <a href="landing-page.html" class="menu-link">
                            <span class="menu-icon fas fa-images"></span> <span class="menu-text">Media</span>
                        </a>
                    </li>
                    <!-- /.menu-item -->
                    <!-- .menu-item -->
                    <li class="menu-item">
                        <a href="landing-page.html" class="menu-link">
                            <span class="menu-icon oi oi-bar-chart"></span> <span class="menu-text">Category</span>
                        </a>
                    </li>
                    <!-- /.menu-item -->
                    <!-- .menu-item -->
                    <li class="menu-item">
                        <a href="landing-page.html" class="menu-link">
                            <span class="menu-icon fas fa-table"></span> <span class="menu-text">Tags</span>
                        </a>
                    </li>
                    <!-- /.menu-item -->
                    <!-- .menu-item -->
                    <li class="menu-item has-child">
                        <a href="#" class="menu-link">
                            <span class="menu-icon oi oi-list-rich"></span> <span class="menu-text">Blog Post</span>
                        </a>
                        <!-- child menu -->
                        <ul class="menu">
                            <li class="menu-item">
                                <a href="#" class="menu-link">Blog Overview</a>
                            </li>
                            <li class="menu-item">
                                <a href="#" class="menu-link">Add New Blog</a>
                            </li>
                        </ul><!-- /child menu -->
                    </li>
                    <!-- /.menu-item -->
                    <!-- .menu-item -->
                    <li class="menu-item has-child">
                        <a href="#" class="menu-link">
                            <span class="menu-icon oi oi-puzzle-piece"></span> <span class="menu-text">Appearance</span>
                        </a> <!-- child menu -->
                        <ul class="menu">
                            <li class="menu-item">
                                <a href="component-general.html" class="menu-link">Theme Settings</a>
                            </li>
                            <li class="menu-item">
                                <a href="component-icons.html" class="menu-link">Color Settings</a>
                            </li>
                            <li class="menu-item">
                                <a href="component-sortable-nestable.html" class="menu-link">Menu</a>
                            </li>
                            <li class="menu-item">
                                <a href="component-activity.html" class="menu-link">Grid Layout</a>
                            </li>
                        </ul>
                        <!-- /child menu -->
                    </li>
                    <!-- /.menu-item -->
                    <!-- .menu-header -->
                    <li class="menu-header">Account Manage </li>
                    <!-- /.menu-header -->
                    <!-- .menu-item -->
                    <li class="menu-item has-child">
                        <a href="#" class="menu-link">
                            <span class="menu-icon oi oi-wrench"></span> <span class="menu-text">Settings</span>
                        </a>
                        <!-- child menu -->
                        <ul class="menu">
                            <li class="menu-item">
                                <a href="auth-comingsoon-v1.html" class="menu-link">General</a>
                            </li>
                            <li class="menu-item">
                                <a href="auth-comingsoon-v1.html" class="menu-link">SEO Settings</a>
                            </li>
                            <li class="menu-item">
                                <a href="auth-comingsoon-v1.html" class="menu-link">Email Settings</a>
                            </li>
                            <li class="menu-item">
                                <a href="auth-comingsoon-v1.html" class="menu-link">Analytics Settings</a>
                            </li>
                            <li class="menu-item">
                                <a href="auth-comingsoon-v1.html" class="menu-link">reCAPTCHA Settings</a>
                            </li>
                        </ul>
                        <!-- /child menu -->
                    </li>
                    <!-- /.menu-item -->
                    <!-- .menu-item -->
                    <li class="menu-item has-child">
                        <a href="#" class="menu-link">
                            <span class="menu-icon oi oi-person"></span> <span class="menu-text">User</span>
                        </a>
                        <!-- child menu -->
                        <ul class="menu">
                            <li class="menu-item">
                                <a href="user-profile.html" class="menu-link">Users Overview</a>
                            </li>
                            <li class="menu-item">
                                <a href="user-activities.html" class="menu-link">Add New User</a>
                            </li>
                        </ul>
                        <!-- /child menu -->
                    </li>
                    <!-- /.menu-item -->
                    <!-- .menu-item -->
                    <li class="menu-item {{ Request::is('admin/account') ? 'has-active' : '' }}">
                        <a href="{{ route('admin.account') }}" class="menu-link">
                            <span class="menu-icon fas fa-user-circle"></span> <span class="menu-text">My Account</span>
                        </a>
                    </li>
                    <!-- /.menu-item -->
                </ul><!-- /.menu -->
            </nav><!-- /.stacked-menu -->
        </div><!-- /.aside-menu -->
        <!-- Skin changer -->
        <footer class="aside-footer border-top p-2">
            <button class="btn btn-light btn-block text-primary" data-toggle="skin"><span class="d-compact-menu-none">Night mode</span> <i class="fas fa-moon ml-1"></i></button>
        </footer><!-- /Skin changer -->
    </div><!-- /.aside-content -->
</aside>
<!-- /.app-aside -->
