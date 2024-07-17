@extends('user.template')

@section('content')
    <div class="wrapper">
        <div class="content-wrapper">
            <div class="profile-container mt-3 mb-5">
                <!-- Banner -->
                <div class="banner">
                    <img src="{{ asset('asset/gambar/Banner.jpg') }}" alt="Banner" class="banner-img">
                </div>

                <!-- Profile Picture -->
                <div class="text-center">
                    <img src="storage/foto-profil/{{ $siswa->foto }}" alt="Foto Profil" class="profile-pic">
                </div>

                <!-- Profile Information -->
                <div class="mt-5 text-center">
                    <h3>Profile Siswa</h3>
                </div>

                <form>
                    <div class="form-group">
                        <label for="namaLengkap">Nama Lengkap</label>
                        <input type="text" class="form-control" id="namaLengkap" value="{{ auth()->user()->name }}"
                            readonly>
                    </div>
                    <div class="form-group">
                        <label for="nis">NIS</label>
                        <input type="text" class="form-control" id="nis" value="{{ $siswa->nis }}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="kelas">Kelas</label>
                        <input type="text" class="form-control" id="kelas" value="{{ $siswa->kelas }}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="jurusan">Jurusan</label>
                        <input type="text" class="form-control" id="jurusan" value="{{ $siswa->jurusan }}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="agama">Agama</label>
                        <input type="text" class="form-control" id="agama" value="{{ $siswa->agama }}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" value="{{ auth()->user()->email }}"
                            readonly>
                    </div>
                </form>
                <form method="POST" action="/logout">
                    @csrf

                    <button type="submit" class="logout-button">
                        <i class="fa-solid fa-sign-out-alt"></i>
                        Logout
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection
