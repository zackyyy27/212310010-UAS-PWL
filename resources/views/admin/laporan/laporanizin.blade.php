<!-- resources/views/admin/laporan/laporanizin.blade.php -->

@extends('admin.tamplateadmin')

@section('content')
    <div class="wrapper">
        <div class="content-wrapper">
            <div class="container rounded">
                <!-- Search and Add Student Buttons -->
                <div class="d-flex justify-content-between mb-4 mx-2">
                    <div>
                        <input class="mt-3 " type="text" class="form-control" placeholder="Search...">
                    </div>
                    <div>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead class="thead-dark">
                            <tr>
                                <th>Nama Siswa</th>
                                <th>NIS</th>
                                <th>Hari dan Tanggal</th>
                                <th>Keterangan</th>
                                <th>File</th>
                                <th>Unduh</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($izins as $izin)
                                <tr>
                                    <td>{{ $izin->siswa->nama_lengkap }}</td>
                                    <td>{{ $izin->siswa->nis }}</td>
                                    <td>{{ $izin->created_at->format('d-m-Y') }}</td>
                                    <td>{{ $izin->description }}</td>
                                    <td><a href="{{ asset('storage/' . $izin->file_path) }}" target="_blank">View File</a>
                                    </td>
                                    <td><a href="{{ asset('storage/' . $izin->file_path) }}" download>
                                            <i class="fa-solid fa-download"></i>
                                            Unduh file </a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
