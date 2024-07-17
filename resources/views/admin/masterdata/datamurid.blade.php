@extends('admin.tamplateadmin')

@section('content')
    <div class="wrapper">
        <div class="content-wrapper">
            <div class="container rounded">
                <!-- Search and Add Student Buttons -->
                <div class="d-flex justify-content-between mb-4 mx-2">
                    <div>
                        <input class="mt-3 "type="text" class="form-control" placeholder="Search...">
                    </div>
                    <div>
                        <button class="btn btn-primary mt-3">
                            <a href="/adddata" class="text-white">
                                <i class="fa-solid fa-user-plus">
                                </i>
                                Add Student</button>
                        </a>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead class="thead-dark">
                            <tr>
                                <th>Nama Lengkap</th>
                                <th>NIS</th>
                                <th>Tempat Lahir</th>
                                <th>Tanggal Lahir</th>
                                <th>Agama</th>
                                <th>Kelas</th>
                                <th>Jurusan</th>
                                <th>Alamat</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($siswas as $siswa)
                                <tr>
                                    <td class="name"><img src="storage/foto-profil/{{ $siswa['foto'] }}" width="40px"
                                            height="40px" alt="">{{ $siswa['nama_lengkap'] }}</td>
                                    <td class="name">{{ $siswa['nis'] }}</td>
                                    <td class="name">{{ $siswa['tempat_lahir'] }}</td>
                                    <td class="name">{{ $siswa['tanggal_lahir'] }}</td>
                                    <td class="name">{{ $siswa['agama'] }}</td>
                                    <td class="name">{{ $siswa['kelas'] }}</td>
                                    <td class="name">{{ $siswa['jurusan'] }}</td>
                                    <td class="name">{{ $siswa['alamat'] }}</td>
                                    <td class="d-flex flex-row align-items-center">
                                        <a href="/editdata/{{ $siswa['id'] }}">
                                            <i class="fa-regular fa-pen-to-square"></i>
                                        </a>
                                        <form action="/delete/{{ $siswa->id }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn" onclick="confirm('Hapus?')">
                                                <i class="fa-regular fa-square-minus"></i>
                                            </button>
                                        </form>
                                    </td>

                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center">
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
@endsection
