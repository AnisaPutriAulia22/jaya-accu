@extends('layout.master-user')

@section('title', 'Contact')

@section('content')
<div class="container my-2">
    <div class="row">
        <div class="col-md-12">
            
            <div id="map" style="width: 100%; height: 300px;"></div>
        </div>
    </div>
</div>
<!-- Contact Info Box -->
<div class="container" style="margin-bottom: 100px; margin-top: 100px;">
    <div class="row justify-content-center">
        <div class="col-md-10">

            <div class="contact-box p-4 border rounded shadow-sm d-flex justify-content-between">

                <div class="contact-item d-flex align-items-start me-3" style="min-width: 30%;">
                    <span class="icon me-3" style="font-size: 24px; color:#6c757d;">
                        <!-- Location icon -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                          <path d="M8 16s6-5.686 6-10A6 6 0 1 0 2 6c0 4.314 6 10 6 10zM8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4z"/>
                        </svg>
                    </span>
                    <div>
                        <strong>Location:</strong><br>
                        Pekuwon, Kec. Bangsal,<br>
                        Kabupaten Mojokerto, Jawa Timur 61381
                    </div>
                </div>

                <div class="contact-item d-flex align-items-start me-3" style="min-width: 30%;">
                    <span class="icon me-3" style="font-size: 24px; color:#6c757d;">
                        <!-- Email icon -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                          <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555zM0 4.697v7.104l5.803-3.552L0 4.697zM6.761 8.83l-6.761 4.141A2 2 0 0 0 2 14h12a2 2 0 0 0 1.999-1.029l-6.761-4.141L8 9.586l-1.239-.757zM16 4.697l-5.803 3.552L16 11.801V4.697z"/>
                        </svg>
                    </span>
                    <div>
                        <strong>Email:</strong><br>
                        rajhikmatulkaromah@gmail.com
                    </div>
                </div>

                <div class="contact-item d-flex align-items-start" style="min-width: 30%;">
                    <span class="icon me-3" style="font-size: 24px; color:#6c757d;">
                        <!-- Phone icon -->
                       <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-phone-fill" viewBox="0 0 16 16">
                            <path d="M11 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h6zm-3 13a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
                        </svg>
                    </span>
                    <div>
                        <strong>Call:</strong><br>
                        +62 856-4537-5840
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>

@endsection

@section('scripts')
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const map = L.map('map').setView([-7.2575, 112.7521], 14); // Surabaya

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '© OpenStreetMap contributors'
        }).addTo(map);

        L.marker([-7.2575, 112.7521]).addTo(map)
            .bindPopup("Surabaya, Jawa Timur")
            .openPopup();
    });
</script>

@endsection
