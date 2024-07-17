@extends('admin.tamplateadmin')

@section('content')
    <div class="wrapper">
        <div class="content-wrapper flex-grow-1">
            <div class="container form-container p-3 ">
                <div>
                    <h4>Silakan Masukan Data Siswa</h4>
                </div>
                <form method="POST" action="/editdata/{{ $siswa->id }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group row">
                        <div class="col-md-4">
                            <label for="nama">Nama Lengkap Siswa</label>
                            <input type="text" class="form-control" name="nama_lengkap" value="{{ $siswa->nama_lengkap }}"
                                placeholder="Masukan Nama lengkap siswa">
                        </div>
                        <div class="col-md-4">
                            <label for="nis">NIS</label>
                            <input type="number" class="form-control" name="nis" value="{{ $siswa->nis }}"
                                placeholder="12345678">
                        </div>
                        <div class="col-md-4">
                            <label for="exampleFormControlSelect1">Agama</label>
                            <select class="form-control" name="agama">
                                <option value="Islam" {{ $siswa->agama == 'Islam' ? 'selected' : '' }}>Islam</option>
                                <option value="Kristen" {{ $siswa->agama == 'Kristen' ? 'selected' : '' }}>Kristen</option>
                                <option value="Hindu" {{ $siswa->agama == 'Hindu' ? 'selected' : '' }}>Hindu</option>
                                <option value="Buddha" {{ $siswa->agama == 'Buddha' ? 'selected' : '' }}>Buddha</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-6">
                            <label for="tempat_lahir">Tempat Lahir</label>
                            <input type="text" class="form-control" name="tempat_lahir"
                                value="{{ $siswa->tempat_lahir }}" placeholder="Jakarta">
                        </div>
                        <div class="col-md-6">
                            <label for="tanggal_lahir">Tanggal Lahir</label>
                            <input type="date" class="form-control" value="{{ $siswa->tanggal_lahir }}"
                                name="tanggal_lahir">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-6">
                            <label for="exampleFormControlSelect1">Kelas</label>
                            <select class="form-control" name="kelas">
                                <option value="10" {{ $siswa->kelas == '10' ? 'selected' : '' }}>10</option>
                                <option value="11" {{ $siswa->kelas == '11' ? 'selected' : '' }}>11</option>
                                <option value="12" {{ $siswa->kelas == '12' ? 'selected' : '' }}>12</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="exampleFormControlSelect1">Jurusan</label>
                            <select class="form-control" name="jurusan">
                                <option value="TKJ" {{ $siswa->jurusan == 'TKJ' ? 'selected' : '' }}>TKJ</option>
                                <option value="RPL" {{ $siswa->jurusan == 'RPL' ? 'selected' : '' }}>RPL</option>
                                <option value="DKV" {{ $siswa->jurusan == 'DKV' ? 'selected' : '' }}>DKV</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="address">Alamat</label>
                        <textarea class="form-control" name="alamat" rows="3" placeholder="Masukkan alamat lengkap siswa">{{ $siswa->alamat }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="file">Unggah File:</label>
                        <input type="file" class="form-control-file text-dark" name="foto">
                        @if ($siswa->foto)
                            <img src="{{ asset('storage/foto-profil/' . $siswa->foto) }}" alt="Foto Profil"
                                style="width: 150px; height: auto; margin-top: 10px;">
                        @endif
                    </div>
                    <div class="d-flex justify-content-end mr-3 mt-3">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
