@extends('user.template')

@section('content')
    <div class="wrapper">
        <div class="content-wrapper">
            <!-- Existing sections -->
            <div class="section" id="menu-section">
                <div class="card">
                    <div class="card-body text-center">
                        <div class="list-menu">
                            <div class="item-menu text-center">
                                <div class="menu-icon">
                                    <a id="presensi-button" href="{{ route('presensi') }}" style="font-size: 40px;">
                                        <i class="fa-solid fa-camera" style="color: #8fe663;"></i>
                                    </a>
                                </div>
                                <div class="menu-name">
                                    <span class="text-center">Presensi</span>
                                </div>
                            </div>
                            <div class="item-menu text-center">
                                <div class="menu-icon">
                                    <a href="{{ route('izinpage') }}" class="danger" style="font-size: 40px;">
                                        <i class="fa-solid fa-envelope" style="color: #ff970e;"></i>
                                    </a>
                                </div>
                                <div class="menu-name">
                                    <span class="text-center">Izin</span>
                                </div>
                            </div>
                            <div class="item-menu text-center">
                                <div class="menu-icon">
                                    <a href="{{ route('profile') }}" class="warning" style="font-size: 40px;">
                                        <i class="fa-solid fa-user" style="color: #63a4e6;"></i>
                                    </a>
                                </div>
                                <div class="menu-name">
                                    <span class="text-center">Profile</span>
                                </div>
                            </div>
                            <div class="item-menu text-center">
                                <div class="menu-icon">
                                    <a href="{{ route('lokasi') }}" class="orange" style="font-size: 40px;">
                                        <i class="fa-solid fa-location-dot" style="color: #f80000;"></i>
                                    </a>
                                </div>
                                <div class="menu-name">
                                    Lokasi
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="section">
                <div>
                    <div class="row">
                        <div class="col-6">
                            <div class="card gradasigreen">
                                <div class="card-body">
                                    <div class="presencecontent row align-items-center ">
                                        <div class="iconpresence">
                                            <i class="fa-solid fa-camera"></i>
                                        </div>
                                        <div>
                                            <h4>Masuk</h4>
                                            <span>07:00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="card gradasired">
                                <div class="card-body">
                                    <div class="presencecontent row align-items-center">
                                        <div class="iconpresence">
                                            <i class="fa-solid fa-camera"></i>
                                        </div>
                                        <div>
                                            <h4>Pulang</h4>
                                            <span>12:00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section summary-section p-4" id="summary-section">
                <h6 class="text-center">Rekap Presensi Bulan July Tahun 2024</h6>
                <div class="row justify-content-center">
                    <div class="col-3">
                        <div class="card">
                            <div class="card-body text-center">
                                <div class="presence-summary">
                                    <div class="icon">
                                        <i class="fa-solid fa-user-check "></i>
                                    </div>
                                    <div class="summary-text">
                                        <span>Hadir</span>
                                        <span class="badge badge-pill badge-danger">0</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="card">
                            <div class="card-body text-center">
                                <div class="presence-summary">
                                    <div class="icon">
                                        <i class="fa-solid fa-file-alt"></i>
                                    </div>
                                    <div class="summary-text">
                                        <span>Izin </span>
                                        <span class="badge badge-pill badge-danger">0</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="card">
                            <div class="card-body text-center">
                                <div class="presence-summary">
                                    <div class="icon">
                                        <i class="fa-solid fa-medkit"></i>
                                    </div>
                                    <div class="summary-text">
                                        <span>Sakit</span>
                                        <span class="badge badge-pill badge-danger">0</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="card">
                            <div class="card-body text-center">
                                <div class="presence-summary">
                                    <div class="icon">
                                        <i class="fa-solid fa-clock"></i>
                                    </div>
                                    <div class="summary-text">
                                        <span>Telat</span>
                                        <span class="badge badge-pill badge-danger">0</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
