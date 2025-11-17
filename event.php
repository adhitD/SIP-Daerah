<!doctype html>
<html lang="id">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Event & Festival Gorontalo — Explore Gorontalo</title>

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
        <img src="assets/images/Logo.png" width="40" height="40" style="border-radius:8px">
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
          <li class="nav-item"><a href="event.php" class="nav-link active">Event</a></li>
          <li class="nav-item"><a href="peta.php" class="nav-link">Peta</a></li>
          <li class="nav-item"><a href="tentang.php" class="nav-link">Tentang</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- HEADER -->
  <header class="hero" style="min-height:45vh; background:url('assets/images/event.png') center/cover;">
    <div class="container text-center" data-aos="fade-up">
      <h1>Event & Festival Gorontalo</h1>
      <p>Temukan berbagai acara budaya, festival seni, dan kegiatan tahunan yang khas dan memukau.</p>
    </div>
  </header>

  <!-- CONTENT -->
  <section class="section">
    <div class="container">

      <h2 class="title mb-2" data-aos="fade-right">Daftar Event Tahunan</h2>
      <p class="subtitle mb-4" data-aos="fade-right">Mulai dari festival budaya hingga pertunjukan seni modern.</p>

      <div class="row g-4">

        <!-- EVENT 1 -->
          <?php 
 $sql = "SELECT * FROM event ";
 $result = mysqli_query($conn, $sql);
  while($row = mysqli_fetch_assoc($result)){
    if(isset($row['gambar'])){
    $foto = $row['gambar'];
    }
    else{
      $foto = 'default.png'; // default image if none is set
    }
 ?>

        <div class="col-md-6" id="karawo">
          <div class="card-tour" data-aos="fade-up">
            <img src="assets/event1.jpg">
            <div class="p-3">
              <h4>Festival Karawo</h4>
              <p class="text-muted small">Perayaan besar kerajinan bordir khas Gorontalo.</p>

              <ul class="small">
                <li><strong>Tanggal:</strong> 20 Oktober 2025</li>
                <li><strong>Lokasi:</strong> Kota Gorontalo</li>
              </ul>

              <p>
                Festival ini mengenalkan kerajinan Karawo kepada dunia melalui
                pameran, lomba desain, workshop, dan pertunjukan budaya tradisional.
              </p>

              <h6 class="mt-3">Sorotan Kegiatan:</h6>
              <ul class="small">
                <li>Pameran busana Karawo</li>
                <li>Workshop bordir</li>
                <li>Konser musik tradisional</li>
                <li>Lomba desain Karawo modern</li>
              </ul>

              <div class="ratio ratio-16x9 mt-3">
                <iframe src="https://www.google.com/maps?q=gorontalo+center&output=embed"></iframe>
              </div>
            </div>
          </div>
        </div>
        <?php } ?>


    

      </div><!-- end row -->

    </div>
  </section>

  <?php

  require 'layout/footer.php'

  ?>