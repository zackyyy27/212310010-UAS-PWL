@extends('admin.tamplateadmin')

@section('content')
    <div class="wrapper mt-5">
        <div class="content-wrapper">
            <div class="container mt-5">
                <h2>Edit Data Absensi</h2>
                <form action="{{ route('attendance.update', $attendance->id) }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="hari" class="form-label">Hari</label>
                        <input class="form-control" id="hari" name="hari" rows="3"
                            required>{{ $attendance->hari }}</input>
                    </div>
                    <div class="mb-3">
                        <label for="tanggalAbsensi" class="form-label">Tanggal Absensi</label>
                        <input type="date" class="form-control" id="tanggalAbsensi" name="tanggalAbsensi"
                            value="{{ $attendance->tanggal }}" required>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="waktuAbsenMasuk" class="form-label">Waktu Absen Masuk</label>
                            <input type="time" class="form-control" id="waktuAbsenMasuk" name="waktuAbsenMasuk"
                                value="{{ $attendance->waktu_absen_masuk }}" required>
                            <small class="form-text text-muted">Masukan dengan format 24:00.</small>
                        </div>
                        <div class="col-md-6">
                            <label for="batasWaktuAbsenMasuk" class="form-label">Batas Waktu Absen Masuk</label>
                            <input type="time" class="form-control" id="batasWaktuAbsenMasuk" name="batasWaktuAbsenMasuk"
                                value="{{ $attendance->batas_waktu_absen_masuk }}" required>
                            <small class="form-text text-muted">Masukan dengan format 24:00.</small>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="waktuAbsenPulang" class="form-label">Waktu Absen Pulang</label>
                            <input type="time" class="form-control" id="waktuAbsenPulang" name="waktuAbsenPulang"
                                value="{{ $attendance->waktu_absen_pulang }}" required>
                            <small class="form-text text-muted">Masukan dengan format 24:00.</small>
                        </div>
                        <div class="col-md-6">
                            <label for="batasWaktuAbsenPulang" class="form-label">Batas Waktu Absen Pulang</label>
                            <input type="time" class="form-control" id="batasWaktuAbsenPulang"
                                name="batasWaktuAbsenPulang" value="{{ $attendance->batas_waktu_absen_pulang }}" required>
                            <small class="form-text text-muted">Masukan dengan format 24:00.</small>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
@endsection
