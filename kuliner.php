<?php
require 'databases/koneksi.php';
?>
<!doctype html>
<html lang="id">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Kuliner Khas Gorontalo — Explore Gorontalo</title>

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
        Sistem Informasi Parawisata Daerah
      </a>

      <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navMain">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navMain">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a href="index.php#home" class="nav-link">Home</a></li>
          <li class="nav-item"><a href="destinasi.php" class="nav-link">Destinasi</a></li>
          <li class="nav-item"><a href="kuliner.php" class="nav-link active">Kuliner</a></li>
          <li class="nav-item"><a href="event.php" class="nav-link">Event</a></li>
          <li class="nav-item"><a href="peta.php" class="nav-link">Peta</a></li>
          <li class="nav-item"><a href="tentang.php" class="nav-link">Tentang</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- HEADER -->
  <header class="hero" style="min-height:45vh; background:url('assets/images/Kuliner.png') center/cover;">
    <div class="container text-center" data-aos="fade-up">
      <h1>Kuliner Khas Gorontalo</h1>
      <p>Jelajahi kekayaan cita rasa kuliner tradisional Gorontalo yang unik, autentik, dan penuh sejarah.</p>
    </div>
  </header>

  <!-- CONTENT -->
  <section class="section">
    <div class="container">

      <h2 class="title mb-2" data-aos="fade-right">Daftar Kuliner Khas</h2>
      <p class="subtitle mb-4" data-aos="fade-right">
        Ragam hidangan mulai dari makanan adat, kuliner rumahan, hingga sajian khas pesisir Gorontalo.
      </p>

      <div class="row g-4">
<?php 
$sql = "SELECT * FROM kuliner";
$result = mysqli_query($conn,$sql);
while($row = mysqli_fetch_assoc($result)){
  $foto = $row['gambar'];
?>
        <!-- KULINER 1 -->
        <div class="col-md-6" id="binte">
          <div class="card-tour" data-aos="fade-up">
            <img src="assets/images/kuliner/<?=$foto?>">
            <div class="p-3">
              <h4><?=$row['nama']?></h4>
              <p class="text-muted small"><?=$row['deskripsi']?></p>

              <ul class="small">
                <li><strong>Bahan Utama:</strong> <?=$row['bahan']?></li>
                <li><strong>Kategori:</strong> <?=$row['kategori']?></li>
              </ul>

              <p><?=$row['deskripsi']?></p>

              <!-- <h6 class="mt-3">Tempat Rekomendasi</h6>
              <ul class="small">
                <li>Warung Binte Kota Tua</li>
                <li>Kuliner Center Gorontalo</li>
              </ul> -->
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