@extends('user.template')

@section('content')
    <div class="wrapper mt-5">
        <div class="content-wrapper">
            <div class="row justify-content-center">
                <div class="col-md-8 mx-auto mx-md-0 py-2">
                    <div class="card mx-2">
                        <div class="card-header text-dark">SILAKAN SCAN ABSENSI</div>
                        <div class="card-body">
                            <div id="reader" style="max-width: 100%;"></div>
                            <p id="attendanceTime" class="mt-3 text-success"></p>
                        </div>

                        <div class="modal fade" id="successModal" tabindex="-1" role="dialog"
                            aria-labelledby="successModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content text-center p-4">
                                    <div class="modal-body">
                                        <div class="icon-container">
                                            <img src="{{ asset('asset/gambar/ceklis_hijau.png') }}" alt="Success Icon"
                                                width="64" height="64">
                                        </div>
                                        <h5 class="modal-title my-3" id="successModalLabel">Absensi Berhasil</h5>
                                        <p>Absensi anda telah berhasil selamat belajar</p>
                                        <button type="button" class="btn btn-success mt-3" data-dismiss="modal">Ok</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://unpkg.com/html5-qrcode" type="text/javascript"></script>
    <script>
        function onScanSuccess(decodedText, decodedResult) {
            console.log(`Code matched = ${decodedText}`, decodedResult);

            const scanData = decodedText.split(' ');
            const nama = scanData[0];
            const hari = scanData[1];
            const tanggal = scanData[2];
            const jam = scanData[3];
            console.log(`nama: ${nama}, hari: ${hari}, tanggal: ${tanggal}, jam: ${jam}`);

            $('#attendanceTime').text(`Anda sudah absensi jam ${jam}`);

            $.ajax({
                url: "{{ route('attendance.storeScanResult') }}",
                type: "POST",
                data: {
                    _token: "{{ csrf_token() }}",
                    nama: nama,
                    hari: hari,
                    tanggal: tanggal,
                    jam: jam
                },
                success: function(response) {
                    console.log(response.success);
                    $('#successMessage').text(`Anda berhasil absen pada jam ${jam}`);
                    $('#successModal').modal('show');
                },
                error: function(xhr, status, error) {
                    console.error(error);
                }
            });
        }

        function onScanFailure(error) {
            console.warn(`Code scan error = ${error}`);
        }

        let html5QrcodeScanner = new Html5QrcodeScanner(
            "reader", {
                fps: 10,
                qrbox: {
                    width: 250,
                    height: 250
                }
            },
            false);
        html5QrcodeScanner.render(onScanSuccess, onScanFailure);
    </script>
@endsection
