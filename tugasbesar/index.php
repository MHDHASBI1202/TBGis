<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikum GIS Kelompok 3</title>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyARbstmFfeL3BQ2Pa_K7QkPUIqBsKn38ds&callback=initMap"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color:rgb(113, 131, 133);
        }
        .navbar {
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .card {
            border: none;
            transition: transform 0.3s, box-shadow 0.3s;
        }
        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 15px rgba(0, 0, 0, 0.2);
        }
        footer {
            background-color: #343a40;
            color: #ffffff;
        }
        .map-container {
            border: 2px solid #ddd;
            border-radius: 8px;
            overflow: hidden;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="#">Kelompok 3</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ms-auto">
                <a class="nav-link active" href="#">Home</a>
                <a class="nav-link" href="#daftar">Daftar</a>
                <a class="nav-link" href="#tools">Tools</a>
                <a class="nav-link" href="#about">About</a>
            </div>
        </div>
    </div>
</nav>

<div class="container mt-5">
    <div class="text-center">
        <h2 class="fw-bold">Tugas Besar Praktikum GIS Kelompok 3</h2>
    </div>

    <div class="row mt-4">
    <div class="col-md-6 map-container" id="map" style="height: 500px;"></div>
    <div class="col-md-6 d-flex flex-column align-items-center justify-content-center" style="height: 500px;">
        <img src="gambar/labgis.png" alt="Lab GIS" class="img-fluid mb-2" style="max-height: 100%; max-width: 100%;">
        <p class="text-muted">Laboratory of Geographic Information System</p>
    </div>
</div>

    <div id="daftar" class="mt-5">
        <h2 class="text-center fw-bold">Daftar Cafe</h2>
        <div class="row mt-4">
                   <!-- Cafe Cards -->
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="gambar/v_coffee.jpg" class="card-img-top" alt="V Coffee">
                <div class="card-body">
                    <h5 class="card-title text-center">V Coffee</h5>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">IG: @vcoffees</li>
                        <li class="list-group-item">Fasilitas: Ruang barista, ruang kafe, WC, smoking area</li>
                        <li class="list-group-item">Alamat: Jl. Jaksa Agung R. Soeprapto No.3a, Rimbo Kaluang, Kec. Padang Barat, Kota Padang</li>
                    </ul>            
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="gambar/parewa.jpg" class="card-img-top" alt="Parewa Coffee">
                <div class="card-body">
                    <h5 class="card-title text-center">Parewa Coffee</h5>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">IG: @parewacoffee</li>
                        <li class="list-group-item">Fasilitas: Ruang barista, photobox, ruang kafe, WC, smoking area</li>
                        <li class="list-group-item">Alamat: Jl. Flamboyan, Padang</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="gambar/warung_teko.jpg" class="card-img-top" alt="Warung Teko">
                <div class="card-body">
                    <h5 class="card-title text-center">Warung Teko</h5>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">IG: @warungteko_</li>
                        <li class="list-group-item">Fasilitas: WC, mushola, ruang kafe, smoking area</li>
                        <li class="list-group-item">Alamat: Jl. Flamboyan No.6, Padang</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="gambar/dua_pintu.jpg" class="card-img-top" alt="Dua Pintu Coffee">
                <div class="card-body">
                    <h5 class="card-title text-center">Dua Pintu Coffee Flamboyan</h5>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">IG: @duapintucoffe</li>
                        <li class="list-group-item">Fasilitas: Mushola, WC, ruang barista, ruang kafe</li>
                        <li class="list-group-item">Alamat: Jl. Aster Barat No.7, Flamboyan Baru, Kec. Padang Barat, Kota Padang</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="gambar/situ.jpg" class="card-img-top" alt="Situ Koffie">
                <div class="card-body">
                    <h5 class="card-title text-center">Situ Koffie</h5>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">IG: @sittukoffie</li>
                        <li class="list-group-item">Fasilitas: WC, mushola, ruang kafe, ruang barista, smoking area</li>
                        <li class="list-group-item">Alamat: Jl. Mawar No.10, Flamboyan Baru, Kec. Padang Barat, Kota Padang</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="gambar/sreca.jpg" class="card-img-top" alt="Sreca Garden">
                <div class="card-body">
                    <h5 class="card-title text-center">Sreca Garden</h5>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">IG: @srecagarden</li>
                        <li class="list-group-item">Fasilitas: WC, mushola, ruang kafe, ruang barista</li>
                        <li class="list-group-item">Alamat: Jl. Teratai No.2, Flamboyan Baru, Kec. Padang Barat, Kota Padang</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="gambar/de_ionix.jpg" class="card-img-top" alt="De Lonix Coffee">
                <div class="card-body">
                    <h5 class="card-title text-center">De Lonix Coffee & Eatery</h5>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">IG: @delonix_coffeeee</li>
                        <li class="list-group-item">Fasilitas: WC, mushola, ruang kafe, ruang barista</li>
                        <li class="list-group-item">Alamat: Jl. Teratai No.2, Flamboyan Baru, Kec. Padang Barat, Kota Padang</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="gambar/rey.jpg" class="card-img-top" alt="Rey Coffee">
                <div class="card-body">
                    <h5 class="card-title text-center">Rey Coffee & Resto</h5>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">IG: @ref_caferesto</li>
                        <li class="list-group-item">Fasilitas: WC, mushola, ruang kafe, ruang barista</li>
                        <li class="list-group-item">Alamat: Jl. Mahakam No.15, Rimbo Kaluang, Kec. Padang Barat, Kota Padang</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="gambar/orion.jpg" class="card-img-top" alt="Orion Coffee">
                <div class="card-body">
                    <h5 class="card-title text-center">Orion Coffee</h5>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">IG: @orioncoffe.id</li>
                        <li class="list-group-item">Fasilitas: Ruang barista, ruang kafe, WC, smoking area</li>
                        <li class="list-group-item">Alamat: Jl. Batang Agam, Jl. Jaksa Agung R. Soeprapto No.9, Rimbo Kaluang, Kec. Padang Barat, Kota Padang</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4 offset-md-4">
            <div class="card">
                <img src="gambar/rumah_depan.jpg" class="card-img-top" alt="Rumah Depan Coffee">
                <div class="card-body">
                    <h5 class="card-title text-center">Rumah Depan Coffee</h5>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">IG: @rumahdepan.coffee</li>
                        <li class="list-group-item">Fasilitas: Tempat barista, mushola, WC, ruang kafe, meeting room</li>
                        <li class="list-group-item">Alamat: Jl. Flamboyan No.14, Padang</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="tools" class="mt-5 text-center">
    <h2 class="fw-bold">Tools yang Digunakan</h2>
    <div class="row mt-4">
        <div class="col-md-4">
            <img src="gambar/mapinfo.png" alt="MapInfo" class="img-fluid" style="height: 150px;">
        </div>
        <div class="col-md-4">
            <img src="gambar/one.png" alt="One Touch Location" class="img-fluid" style="height: 150px;">
        </div>
        <div class="col-md-4">
            <img src="gambar/vscode.png" alt="Visual Studio Code" class="img-fluid" style="height: 150px;">
        </div>
        <div class="col-md-4">
            <img src="gambar/xampp.png" alt="XAMPP" class="img-fluid" style="height: 150px;">
        </div>
        <div class="col-md-4">
            <img src="gambar/posgre.png" alt="PostgreSQL" class="img-fluid" style="height: 150px;">
        </div>
        <div class="col-md-4">
            <img src="gambar/postgis.png" alt="PostGIS" class="img-fluid" style="height: 150px;">
        </div>
    </div>
</div>

    <div id="about" class="mt-5">
        <h2 class="text-center fw-bold">Anggota Kelompok</h2>
        <div class="row mt-4">
            <div class="col-md-4">
                <ul class="list-group mb-3">
                    <li class="list-group-item">RASYID NUGRAHESA RIQUA (2111523012)</li>
                    <li class="list-group-item">DINDA ARFITRI (2311521002)</li>
                    <li class="list-group-item">SHERLY AYUMA PUTRI (2311521018)</li>
                </ul>
            </div>
            <div class="col-md-4">
                <ul class="list-group mb-3">
                    <li class="list-group-item">NAUFAL HAKIM ZULIAN (2311522026)</li>
                    <li class="list-group-item">MASHIA ZAVIRA SEPTYANA (2311522028)</li>
                    <li class="list-group-item">MHD. HASBI (2311522032)</li>
                </ul>
            </div>
            <div class="col-md-4">
                <ul class="list-group mb-3">
                    <li class="list-group-item">ZHAHRA IDHYA ASTWOTI (2311523006)</li>
                    <li class="list-group-item">ALYA ZULHANIFA (2311523028)</li>
                    <li class="list-group-item">DELLA KHAIRUNNISA (2311523032)</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<footer class="py-3 mt-5">
    <div class="container text-center">
        <p>&copy; 2023 Kelompok 3 Kelas B. Tugas Besar Praktikum GIS.</p>
    </div>
</footer>

<script>
    var map;
    var infoWindow;

    function initMap() {
        var uluru = {lat: -0.928171, lng: 100.427520};
        map = new google.maps.Map(document.getElementById('map'), {
            zoom: 15,
            center: uluru
        });

        infoWindow = new google.maps.InfoWindow();

        // Panggil fungsi untuk menampilkan digitasi
        showDigitasi(infoWindow);

        // Kodingan Geolokasi
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(function (position) {
                var pos = {
                    lat: position.coords.latitude,
                    lng: position.coords.longitude
                };

                var marker = new google.maps.Marker({
                    position: pos,
                    map: map,
                    title: 'Lokasi Saya',
                    icon: 'http://maps.google.com/mapfiles/ms/icons/green-dot.png',
                    draggable: true,
                    animation: google.maps.Animation.DROP
                });

                marker.addListener('click', toggleBounce);

                function toggleBounce() {
                    if (marker.getAnimation() !== null) {
                        marker.setAnimation(null);
                    } else {
                        marker.setAnimation(google.maps.Animation.BOUNCE);
                    }
                }

                infoWindow.setPosition(pos);
                infoWindow.setContent('Kamu Disini');
                infoWindow.open(map); // Menampilkan InfoWindow
                map.setCenter(pos);
            }, function () {
                handleLocationError(true, infoWindow, map.getCenter());
            });
        } else {
            handleLocationError(false, infoWindow, map.getCenter());
        }
    }

    function showDigitasi(infoWindow) {
        $.ajax({
            url: 'data.php',
            dataType: 'json',
            cache: false,
            success: function (arrays) {
                for (var i = 0; i < arrays.features.length; i++) {
                    var data = arrays.features[i];
                    var arrayGeometries = data.geometry.coordinates;
                    var content = '<p>Nomor Bangunan: ' + data.properties.id + '</p>' +
                                  '<p>Nama Bangunan: ' + data.properties.bangunan + '</p>' +
                                  '<p>Alamat: ' + data.properties.alamat + '</p>' +
                                  '<p>IG: ' + data.properties.user_ig + '</p>' +
                                  '<p>Fasilitas: ' + data.properties.fasilitas + '</p>';

                    var coordinates = arrayGeometries[0][0].map(function(point) {
                        return {lat: point[1], lng: point[0]};
                    });

                    var show_digitation = new google.maps.Polygon({
                        paths: coordinates,
                        strokeColor: 'red',
                        strokeOpacity: 1,
                        strokeWeight: 1,
                        fillColor: 'green',
                        fillOpacity: 0.35,
                    });

                    show_digitation.set("data-content", content);
                    show_digitation.setMap(map);

                    show_digitation.addListener('click', function (event) {
                        var info = {
                            lat: event.latLng.lat(),
                            lng: event.latLng.lng()
                        };
                        var content = this.get("data-content");
                        infoWindow.setContent(content);
                        infoWindow.setPosition(info);
                        map.setCenter(info);
                        infoWindow.open(map);
                    });
                }
            }
        });
    }

    function handleLocationError(browserHasGeolocation, infoWindow, pos) {
        infoWindow.setPosition(pos);
        infoWindow.setContent(browserHasGeolocation
            ? 'Kesalahan: Tidak dapat mengambil lokasi Anda.'
            : 'Kesalahan: Browser Anda tidak mendukung geolokasi.');
        infoWindow.open(map);
    }
</script>
</body>
</html>