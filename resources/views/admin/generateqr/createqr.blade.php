@extends('admin.tamplateadmin')

@section('content')
    <div class="wrapper mt-5">
        <div class="content-wrapper">
            <div class="container mt-5">
                <h2>Tambah Data Absensi</h2>
                <form>
                    <div class="mb-3">
                        <label for="tanggalAbsensi" class="form-label">Tanggal Absensi</label>
                        <input type="date" class="form-control" id="tanggalAbsensi" required>
                    </div>
                    <div class="mb-3">
                        <label for="keterangan" class="form-label">Keterangan</label>
                        <textarea class="form-control" id="keterangan" rows="3" required></textarea>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="waktuAbsenMasuk" class="form-label">Waktu Absen Masuk</label>
                            <input type="time" class="form-control" id="waktuAbsenMasuk" placeholder="07:00" required>
                            <small class="form-text text-muted">Masukan dengan format 24:00.</small>
                        </div>
                        <div class="col-md-6">
                            <label for="batasWaktuAbsenMasuk" class="form-label">Batas Waktu Absen Masuk</label>
                            <input type="time" class="form-control" id="batasWaktuAbsenMasuk" required>
                            <small class="form-text text-muted">Masukan dengan format 24:00.</small>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="waktuAbsenPulang" class="form-label">Waktu Absen Pulang</label>
                            <input type="time" class="form-control" id="waktuAbsenPulang" required>
                            <small class="form-text text-muted">Masukan dengan format 24:00.</small>
                        </div>
                        <div class="col-md-6">
                            <label for="batasWaktuAbsenPulang" class="form-label">Batas Waktu Absen Pulang</label>
                            <input type="time" class="form-control" id="batasWaktuAbsenPulang" required>
                            <small class="form-text text-muted">Masukan dengan format 24:00.</small>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
            {{-- <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header text-dark">GENERATE QRCODE</div>
                            <div class="card-body">
                                <form id="qrForm" method="POST" action="{{ route('attendance.store') }}">
                                    @csrf
                                    <div class="form-group text-dark">
                                        <label for="type">PILIH STATUS</label>
                                        <select class="form-control" id="keterangan_qr" name="keterangan_qr" required>
                                            <option value="" disabled selected>Pilih status</option>
                                            <option value="masuk">Masuk</option>
                                            <option value="pulang">Pulang</option>
                                        </select>
                                    </div>
                                    <button type="submit" class="btn btn-primary mt-3">SUBMIT</button>
                                </form>
                                <button id="doneButton" class="btn btn-secondary mt-3" style="display: none;"
                                    onclick="window.history.back();">SELESAI</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header text-dark"> INFORMASI QRCODE AKAN MUNCUL DISINI</div>
                            <div class="card-body">
                                @isset($qrCode)
                                    {!! $qrCode !!}
                                    <script>
                                        document.getElementById('qrForm').style.display = 'none';
                                        document.getElementById('doneButton').style.display = 'block';
                                    </script>
                                @endisset
                            </div>
                        </div>
                    </div>
                </div> --}}
        </div>
    </div>
@endsection
