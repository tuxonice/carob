<div class="sidebar">
    <x-shop.login-info/>
    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                 with font-awesome or any other icon font library -->
            <li class="nav-item">
                <a href="{{ route('shop-dashboard') }}" class="nav-link">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>
                        Dashboard
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('shop-mailbox') }}" class="nav-link">
                    <i class="nav-icon fas fa-envelope"></i>
                    <p>
                        Mailbox
                        <span class="badge badge-info right">6</span>
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('shop-clients') }}" class="nav-link">
                    <i class="nav-icon fas fa-users"></i>
                    <p>
                        Clients
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('shop-orders') }}" class="nav-link">
                    <i class="nav-icon fas fa-shopping-bag"></i>
                    <p>
                        Orders
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('shop-configuration') }}" class="nav-link">
                    <i class="nav-icon fas fa-cogs"></i>
                    <p>
                        Configuration
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('shop-tools') }}" class="nav-link">
                    <i class="nav-icon fas fa-tools"></i>
                    <p>
                        Tools
                    </p>
                </a>
            </li>
            <li class="nav-header">EXTRAS</li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon far fa-calendar"></i>
                    <p>
                        Calendar
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-search"></i>
                    <p>
                        Search
                    </p>
                </a>
            </li>
            <li class="nav-header">DOCUMENTATION</li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon far fa-file"></i>
                    <p>
                        Manual
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon far fa-question-circle"></i>
                    <p>
                        FAQ
                    </p>
                </a>
            </li>
        </ul>
    </nav>
    <!-- /.sidebar-menu -->
</div>
