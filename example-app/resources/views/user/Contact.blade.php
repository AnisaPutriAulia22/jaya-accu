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
                    <span class="icon me-3" style="font-size: 24px; color:#007bff;">
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
                    <span class="icon me-3" style="font-size: 24px; color:#28a745;">
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
                    <span class="icon me-3" style="font-size: 24px; color:#dc3545;">
                        <!-- Phone icon -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                          <path fill-rule="evenodd" d="M3.654 1.328a.678.678 0 0 1 .737-.06l2.5 1.5a.678.678 0 0 1 .252.787l-1 3a.678.678 0 0 1-.564.417l-1.7.2a11.285 11.285 0 0 0 4.516 4.516l.2-1.7a.678.678 0 0 1 .417-.564l3-1a.678.678 0 0 1 .787.252l1.5 2.5a.678.678 0 0 1-.06.737l-2.2 2.2a1.745 1.745 0 0 1-1.933.45c-2.077-.83-4.373-3.125-5.203-5.203a1.745 1.745 0 0 1 .45-1.933l2.2-2.2z"/>
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
<script>
    function initMap() {
        const location = { lat: -6.200000, lng: 106.816666 };
        const map = new google.maps.Map(document.getElementById("map"), {
            zoom: 14,
            center: location,
        });
        const marker = new google.maps.Marker({
            position: location,
            map: map,
        });
    }
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB86ZhBu3Lk_BK03SdhwxHKapEjPy4POAc&callback=initMap" async defer></script>

@endsection
