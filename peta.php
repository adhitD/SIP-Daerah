<!doctype html>
<html lang="id">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Peta Wisata Gorontalo — Explore Gorontalo</title>

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- AOS -->
  <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">

  <!-- Custom CSS -->
  <link href="assets/css/styles.css" rel="stylesheet" />
</head>

<body>

  <!-- NAVBAR -->
  <nav class="navbar navbar-expand-lg navbar-dark sticky-top">
    <div class="container">
      <a class="navbar-brand" href="index.php">
        <img src="assets/logo.png" width="40" height="40" style="border-radius:8px">
        Explore Gorontalo
      </a>

      <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navMain">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navMain">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a href="index.php#home" class="nav-link">Home</a></li>
          <li class="nav-item"><a href="destinasi.php" class="nav-link">Destinasi</a></li>
          <li class="nav-item"><a href="kuliner.php" class="nav-link">Kuliner</a></li>
          <li class="nav-item"><a href="event.php" class="nav-link">Event</a></li>
          <li class="nav-item"><a href="peta.php" class="nav-link active">Peta</a></li>
          <li class="nav-item"><a href="tentang.php" class="nav-link">Tentang</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- HEADER -->
  <header class="hero" style="min-height:45vh; background:url('assets/peta-header.jpg') center/cover;">
    <div class="container text-center" data-aos="fade-up">
      <h1>Peta Wisata Gorontalo</h1>
      <p>Navigasi mudah ke semua destinasi unggulan, kuliner, pantai, dan area wisata budaya di Gorontalo.</p>
    </div>
  </header>

  <!-- MAIN CONTENT -->
  <section class="section">
    <div class="container">

      <h2 class="title mb-2" data-aos="fade-right">Peta Interaktif</h2>
      <p class="subtitle mb-4" data-aos="fade-right">
        Gunakan peta di bawah untuk menemukan lokasi wisata dan rute perjalanan.
      </p>

      <div class="row g-4">
        <div class="col-lg-8" data-aos="fade-up">
          <iframe
            src="YOUR_GOOGLE_MAPS_EMBED_URL"
            class="map-frame"
            allowfullscreen
            loading="lazy">
          </iframe>
        </div>

        <div class="col-lg-4" data-aos="fade-left">
          <div class="card p-3">
            <h5 class="fw-bold mb-3">Lokasi Populer</h5>

            <ul class="list-unstyled small">
              <li class="mb-3">
                <b>Benteng Otanaha</b><br>
                Bukit Otanaha, Kota Gorontalo<br>
                <a href="https://www.google.com/maps?q=Benteng+Otanaha" target="_blank">Lihat di Maps</a>
              </li>

              <li class="mb-3">
                <b>Taman Laut Olele</b><br>
                Bone Bolango<br>
                <a href="https://www.google.com/maps?q=Taman+Laut+Olele" target="_blank">Lihat di Maps</a>
              </li>

              <li class="mb-3">
                <b>Whale Shark Botubarani</b><br>
                Botubarani, Kabila Bone<br>
                <a href="https://www.google.com/maps?q=Botubarani" target="_blank">Lihat di Maps</a>
              </li>

              <li class="mb-3">
                <b>Pantai Biluhu</b><br>
                Biluhu, Gorontalo<br>
                <a href="https://www.google.com/maps?q=Biluhu" target="_blank">Lihat di Maps</a>
              </li>

              <li>
                <b>Danau Limboto</b><br>
                Kabupaten Gorontalo<br>
                <a href="https://www.google.com/maps?q=Danau+Limboto" target="_blank">Lihat di Maps</a>
              </li>
            </ul>

            <a href="destinasi.html" class="btn btn-primary-custom mt-3 w-100">
              Kunjungi Halaman Destinasi
            </a>
          </div>
        </div>
      </div>

    </div>
  </section>

  <!-- DAFTAR LENGKAP -->
  <section class="section bg-white">
    <div class="container">

      <h2 class="title mb-2" data-aos="fade-right">Daftar Lokasi Wisata</h2>
      <p class="subtitle mb-4" data-aos="fade-right">Semua lokasi ditampilkan beserta link Google Maps.</p>

      <div class="row g-4">

        <!-- LIST TEMPLATE -->
        <div class="col-md-4" data-aos="fade-up">
          <div class="card p-3 shadow-soft">
            <h6 class="fw-bold">Benteng Otanaha</h6>
            <p class="small text-muted">Bukit Otanaha, Kota Gorontalo</p>
            <a href="https://www.google.com/maps?q=Benteng+Otanaha" target="_blank" class="btn btn-sm btn-primary-custom">Lihat Lokasi</a>
          </div>
        </div>

        <div class="col-md-4" data-aos="fade-up" data-aos-delay="80">
          <div class="card p-3 shadow-soft">
            <h6 class="fw-bold">Taman Laut Olele</h6>
            <p class="small text-muted">Bone Bolango</p>
            <a href="https://www.google.com/maps?q=Taman+Laut+Olele" target="_blank" class="btn btn-sm btn-primary-custom">Lihat Lokasi</a>
          </div>
        </div>

        <div class="col-md-4" data-aos="fade-up" data-aos-delay="150">
          <div class="card p-3 shadow-soft">
            <h6 class="fw-bold">Whale Shark Botubarani</h6>
            <p class="small text-muted">Kabila Bone</p>
            <a href="https://www.google.com/maps?q=Botubarani" target="_blank" class="btn btn-sm btn-primary-custom">Lihat Lokasi</a>
          </div>
        </div>

        <div class="col-md-4" data-aos="fade-up">
          <div class="card p-3 shadow-soft">
            <h6 class="fw-bold">Pantai Biluhu</h6>
            <p class="small text-muted">Biluhu, Gorontalo</p>
            <a href="https://www.google.com/maps?q=Biluhu" target="_blank" class="btn btn-sm btn-primary-custom">Lihat Lokasi</a>
          </div>
        </div>

        <div class="col-md-4" data-aos="fade-up" data-aos-delay="80">
          <div class="card p-3 shadow-soft">
            <h6 class="fw-bold">Danau Limboto</h6>
            <p class="small text-muted">Kabupaten Gorontalo</p>
            <a href="https://www.google.com/maps?q=Danau+Limboto" target="_blank" class="btn btn-sm btn-primary-custom">Lihat Lokasi</a>
          </div>
        </div>

        <div class="col-md-4" data-aos="fade-up" data-aos-delay="150">
          <div class="card p-3 shadow-soft">
            <h6 class="fw-bold">Pantai Botutonuo</h6>
            <p class="small text-muted">Kabila Bone</p>
            <a href="https://www.google.com/maps?q=Botutonuo" target="_blank" class="btn btn-sm btn-primary-custom">Lihat Lokasi</a>
          </div>
        </div>

      </div>
    </div>
  </section>


  <?php

  require 'layout/footer.php'

  ?>