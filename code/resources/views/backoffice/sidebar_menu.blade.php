<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{asset ('code/frontend_template/image/user2.jpg')}}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="{{url('admin/pengguna')}}" class="d-block">{{ session('name') }}</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="{{url('admin/blank')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{url('admin/pengguna')}}" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Data User
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{url('admin/banner')}}" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Data Banner
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{url('admin/kategori')}}" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Data Kategori Produk
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{url('admin/produk')}}" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Data Produk
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{url('admin/dblog')}}" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Data Blog
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{url('admin/kontak')}}" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Data Kontak
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>