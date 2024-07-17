@extends('admin.tamplateadmin')

@section('content')
    <div class="wrapper mt-5">
        <div class="content-wrapper">
            <div class="container mt-5">
                <h2>Absensi</h2>
                <a href="{{ route('attendance.create') }}" class="btn btn-primary mb-3">Tambah Data Absensi</a>
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Hari</th>
                            <th>Tanggal</th>
                            <th>Waktu Absen Masuk</th>
                            <th>Waktu Absen Keluar</th>
                            <th>QR Code</th>
                            <th>Created At</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($attendances as $attendance)
                            <tr>
                                <td>{{ $attendance->id }}</td>
                                <td>{{ $attendance->hari }}</td>
                                <td>{{ $attendance->tanggal }}</td>
                                <td>{{ $attendance->waktu_absen_masuk }}</td>
                                <td>{{ $attendance->batas_waktu_absen_masuk }}</td>
                                <td>
                                    <img src="{{ asset('storage/qrcodes/qrcode_' . $attendance->id . '.png') }}"
                                        alt="QR Code">
                                </td>
                                <td>{{ $attendance->created_at }}</td>
                                <td>
                                    <a href="{{ route('attendance.edit', $attendance->id) }}"
                                        class="btn btn-sm btn-primary">Edit</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
