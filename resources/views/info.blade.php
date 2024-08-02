<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sima Perkasya</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* CSS untuk mengatur ukuran gambar carousel */
        .carousel-item img {
            max-height: 500px; /* Atur tinggi maksimal gambar */
            object-fit: cover; /* Menjaga rasio gambar dan memastikan gambar menutupi area dengan baik */
        }
    </style>
</head>
<body>

<div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="5000">
    <!-- Indicators -->
    <ul class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ul>

    <!-- The slideshow -->
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="https://images.tokopedia.net/img/KRMmCm/2023/9/18/9f609a7c-bcb1-488e-938c-6df8576dea06.jpg" alt="Slide 1" class="d-block w-100">
            <div class="carousel-caption">
                <h3>Slide 1</h3>
                <p>Deskripsi Slide 1</p>
            </div>   
        </div>
        <div class="carousel-item">
            <img src="https://cdn.rri.co.id/berita/Pusat_Pemberitaan/o/1716527218847-images_-_2024-05-24T120506.622/vmxaj0551dovj9j.jpeg" alt="Slide 2" class="d-block w-100">
            <div class="carousel-caption">
                <h3>Slide 2</h3>
                <p>Deskripsi Slide 2</p>
            </div>   
        </div>
        <div class="carousel-item">
            <img src="https://pic0.iqiyipic.com/image/20240618/f2/2e/a_100421840_m_601_en_m6_1013_569.jpg" alt="Slide 3" class="d-block w-100">
            <div class="carousel-caption">
                <h3>Slide 3</h3>
                <p>Deskripsi Slide 3</p>
            </div>   
        </div>
    </div>

    <!-- Left and right controls -->
    <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" data-slide="next">
        <span class="carousel-control-next-icon"></span>
    </a>
</div>

<!-- Additional Information Section -->
<div class="container mt-5">
    <h2>Fasilitas Kami</h2>
    <p>Selain fitur carousel, kami juga menyediakan berbagai fasilitas untuk memenuhi kebutuhan Anda:</p>
    <ul>
        <li><strong>Ruang Meeting:</strong> Ruang meeting yang dilengkapi dengan peralatan modern untuk keperluan bisnis Anda.</li>
        <li><strong>Area Kerja Bersama:</strong> Area kerja yang nyaman dan dilengkapi dengan koneksi internet cepat.</li>
        <li><strong>Kantin:</strong> Kantin dengan berbagai pilihan makanan dan minuman sehat.</li>
        <li><strong>Ruang Rekreasi:</strong> Ruang rekreasi untuk bersantai dan melepaskan penat.</li>
        <li><strong>Parkir Luas:</strong> Area parkir yang luas dan aman untuk kendaraan Anda.</li>
    </ul>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
