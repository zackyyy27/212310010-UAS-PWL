@extends('admin.tamplateadmin')

@section('content')
    <div class="wrapper">
        <div class="content-wrapper flex-grow-1">
            <div class="container form-container p-3 ">
                <div>
                    <h4>Silakan Masukan Data Siswa</h4>
                </div>
                <form method="POST" action="/adddata" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">
                        <div class="col-md-4">
                            <label for="nama">Nama Lengkap Siswa</label>
                            <input type="text" class="form-control" name="nama_lengkap"
                                placeholder="Masukan Nama lengkap siswa">
                        </div>
                        <div class="col-md-4">
                            <label for="nis">NIS</label>
                            <input type="number" class="form-control" name="nis" placeholder="12345678">
                        </div>
                        <div class="col-md-4">
                            <label for="exampleFormControlSelect1">Agama</label>
                            <select class="form-control" name="agama">
                                <option value="Islam">Islam</option>
                                <option value="Kristen">Kristen</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Buddha">Buddha</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-6">
                            <label for="tempat_lahir">Tempat Lahir</label>
                            <input type="text" class="form-control" name="tempat_lahir" placeholder="Jakarta">
                        </div>
                        <div class="col-md-6">
                            <label for="tanggal_lahire">Tanggal Lahir</label>
                            <input type="date" class="form-control" name="tanggal_lahir">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-6">
                            <label for="exampleFormControlSelect1">Kelas</label>
                            <select class="form-control" name="kelas">
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="exampleFormControlSelect1">Jurusan</label>
                            <select class="form-control" name="jurusan">
                                <option value="TKJ">TKJ</option>
                                <option value="RPL">RPL</option>
                                <option value="DKV">DKV</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-6">
                            <label for="religion">Email</label>
                            <input type="email" class="form-control" name="email" placeholder="user@gmail.com"
                                pattern="[a-z0-9._%+-]+@gmail\.com" required>
                            <div class="invalid-feedback">Please enter a valid Gmail address.</div>
                        </div>
                        <div class="col-md-6">
                            <label for="major">Password</label>
                            <input type="password" class="form-control" name="password" placeholder="Password">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="address">Address *</label>
                        <textarea class="form-control" name="alamat" rows="3"
                            placeholder="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incnameidunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat."></textarea>
                    </div>
                    <div class="form-group ">
                        <label for="file">Unggah File:</label>
                        <input type="file" class="form-control-file text-dark" name="foto" required>
                    </div>
                    <div class="d-flex justify-content-end mr-3 mt-3">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
