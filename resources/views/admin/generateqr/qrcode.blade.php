@extends('admin.tamplateadmin')

@section('content')
    <div class="container mt-5">
        <h2>QR Code Generated</h2>
        <div class="text-center">
            {!! $qrCode !!}
        </div>
        <a href="{{ route('attendance.index') }}" class="btn btn-primary mt-3">Back to Attendance List</a>
    </div>
@endsection
