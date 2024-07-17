@extends('user.template')

@section('content')
    <div class="wrapper">
        <div class="content-wrapper">
            <div class="container col-lg-8 py-5">
                <div class="row mt-2">
                    <div class="col">
                        <div class="card">
                            <div class="card-header">
                                LOKASI
                            </div>
                            <div class="card-body">
                                <div id="map" style="height: 400px;"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>

    <script>
        var map = L.map('map').setView([-6.606187, 106.799346], 15);

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
            attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
        }).addTo(map);

        var schoolMarker = L.marker([-6.606187, 106.799346]).addTo(map);
        schoolMarker.bindPopup("<b>Lokasi Sekolah</b").openPopup();

        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(function(position) {
                var userLat = position.coords.latitude;
                var userLng = position.coords.longitude;

                var userMarker = L.marker([userLat, userLng]).addTo(map);
                userMarker.bindPopup("<b>Lokasi Anda</b>").openPopup();
            }, function() {
                console.error('Error: The Geolocation service failed.');
            });
        } else {
            console.error('Error: Your browser doesn\'t support geolocation.');
        }
    </script>
@endsection
