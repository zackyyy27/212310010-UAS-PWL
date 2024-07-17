<aside class="main-sidebar elevation-4"
    style="background-color: #11368d; display: flex; flex-direction: column; justify-content: space-between;">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="{{ asset('asset/gambar/logosma.png') }}" alt="SMK LOGO" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light text-white">SMK INFORMATIKA</span>
    </a>

    <hr>
    <!-- Sidebar -->
    <div class="sidebar flex-grow-1">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <li class="nav-item menu-open">
                    <a href="/dashboardadmin"
                        class="nav-link text-white item {{ request()->is('dashboardadmin') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                {{-- <li class="nav-item">
                    <a href="{{ route('attendance.create') }}" class="nav-link text-white">
                        <i class="nav-icon fa-solid fa-qrcode"></i>
                        <p>Generate QR</p>
                    </a>
                </li> --}}

                <li class="nav-item">
                    <a href="#"
                        class="text-white nav-link item {{ request()->is('datapresensi') ? 'active' : '' }}">
                        <i class="nav-icon fa-solid fa-calendar-days"></i>
                        <p>Absensi<i class="right fas fa-angle-left"></i></p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('attendance.create') }}" class="nav-link text-white">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Buat Absensi</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('dataabsensi') }}" class="nav-link text-white">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Data Absensi</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="text-white nav-link item {{ request()->is('datamurid') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>Master Data<i class="right fas fa-angle-left"></i></p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/datamurid" class="nav-link text-white">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Data Siswa</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/datapresensi" class="nav-link text-white">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Data Presensi Siswa</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="/laporanizin"
                        class="text-white nav-link item {{ request()->is('laporanizin') ? 'active' : '' }}">
                        <i class="nav-icon fa-solid fa-envelope"></i>
                        <p>Surat Izin</p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- Logout Button -->
    <div class="sidebar-footer">
        <nav>
            <ul class="nav nav-pills nav-sidebar flex-column" role="menu">
                <li class="nav-item">
                    <form method="POST" action="/logout">
                        @csrf
                        <button type="submit" class="nav-link btn btn-link text-white">
                            <i class="nav-icon fa-solid fa-sign-out-alt"></i>
                            <p>Logout</p>
                        </button>
                    </form>
                </li>
            </ul>
        </nav>
    </div>
    <!-- /.sidebar -->
</aside>
