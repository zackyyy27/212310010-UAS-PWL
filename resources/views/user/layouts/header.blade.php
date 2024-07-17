<nav class="navbar navbar-expand-lg navbar-custom">
    <a class="navbar-brand" href="/dashboard">
        <img src="{{ asset('asset/gambar/logosma.png') }}" alt="Logo sekolah">
    </a>
    <div class="navbar-toggler-container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-profile dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <img src="{{ asset('asset/gambar/foto.jpg') }}" alt="Profile">
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <p>
                    <i class="fa-solid fa-user"></i>
                    {{ auth()->user()->name }}
                </p>
                <form method="POST" action="/logout">
                    @csrf
                    <button type="submit" class="dropdown-item">
                        <i class="fa-solid fa-sign-out-alt"></i>
                        Logout</button>
                </form>
            </div>
        </div>
    </div>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="/dashboard">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/presensi">Presensi</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/izinpage">Izin</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/profile">profile</a>
            </li>
        </ul>
    </div>
</nav>
