@extends('admin.tamplateadmin')

@section('content')
    <div class="wrapper mt-5">
        <div class="content-wrapper">
            <div class="container mt-5">
                <h2>Tambah Data Absensi</h2>
                <form action="{{ route('attendance.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="hari" class="form-label">hari</label>
                        <input class="form-control" id="hari" name="hari" rows="3" required></input>
                    </div>
                    <div class="mb-3">
                        <label for="tanggalAbsensi" class="form-label">Tanggal Absensi</label>
                        <input type="date" class="form-control" id="tanggalAbsensi" name="tanggalAbsensi" required>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="waktuAbsenMasuk" class="form-label">Waktu Absen Masuk</label>
                            <input type="time" class="form-control" id="waktuAbsenMasuk" name="waktuAbsenMasuk" required>
                            <small class="form-text text-muted">Masukan dengan format 24:00.</small>
                        </div>
                        <div class="col-md-6">
                            <label for="batasWaktuAbsenMasuk" class="form-label">Batas Waktu Absen Masuk</label>
                            <input type="time" class="form-control" id="batasWaktuAbsenMasuk" name="batasWaktuAbsenMasuk"
                                required>
                            <small class="form-text text-muted">Masukan dengan format 24:00.</small>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="waktuAbsenPulang" class="form-label">Waktu Absen Pulang</label>
                            <input type="time" class="form-control" id="waktuAbsenPulang" name="waktuAbsenPulang"
                                required>
                            <small class="form-text text-muted">Masukan dengan format 24:00.</small>
                        </div>
                        <div class="col-md-6">
                            <label for="batasWaktuAbsenPulang" class="form-label">Batas Waktu Absen Pulang</label>
                            <input type="time" class="form-control" id="batasWaktuAbsenPulang"
                                name="batasWaktuAbsenPulang" required>
                            <small class="form-text text-muted">Masukan dengan format 24:00.</small>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
@endsection
