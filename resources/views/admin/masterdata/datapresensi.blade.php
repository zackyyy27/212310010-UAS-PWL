@extends('admin.tamplateadmin')

@section('content')
    <div class="wrapper">
        <div class="content-wrapper">
            <div class="container rounded">
                <div class="d-flex justify-content-between mb-4 mx-2">
                    <div>
                        <input class="mt-3 "type="text" class="form-control" placeholder="Search...">
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead class="thead-dark">
                            <tr>
                                <th>Nama Siswa</th>
                                <th>NIS</th>
                                <th>Status</th>
                                <th>Hari</th>
                                <th>Tanggal</th>
                                <th>Jam</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    @endsection
