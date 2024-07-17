@extends('user.template')

@section('content')
    <div class="container">
        <div class="container-custom">
            <h2>Keterangan</h2>
            <p>Isi form berikut untuk mengunggah file dan memberikan keterangan yang diperlukan.</p>
            <form action="{{ route('izin.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="description">Keterangan:</label>
                    <input class="form-control" id="description" name="description" placeholder="Masukkan keterangan"
                        required></input>
                </div>
                <div class="form-group">
                    <label for="file">Unggah File:</label>
                    <input type="file" class="form-control-file" id="file" name="file_path" required>
                </div>
                <button type="submit" class="btn btn-primary">Kirim</button>
            </form>
            </br>
            </br>
            <h2>Informasi</h2>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eveniet, minus incidunt atque, consectetur et,
                dolore recusandae sit tenetur vel culpa laborum. Consequatur, tenetur mollitia? Minus animi facilis odio
                ullam asperiores.</p>
        </div>
    </div>
@endsection
