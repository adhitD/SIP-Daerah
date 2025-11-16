<?php
require 'databases/koneksi.php';
?>
<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Destinasi Wisata Gorontalo — Explore Gorontalo</title>

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />

  <!-- AOS -->
  <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet" />

  <!-- Custom Styles -->
  <link href="assets/css/styles.css" rel="stylesheet" />
</head>

<body>
  <!-- NAVBAR -->
  <nav class="navbar navbar-expand-lg navbar-dark sticky-top">
    <div class="container">
      <a class="navbar-brand" href="index.php">
        <img src="assets/images/Logo.png" width="40" height="40" style="border-radius: 8px" />
        Sistem Informasi Parawisata Daerah
      </a>

      <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navMain">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navMain">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a href="index.php#home" class="nav-link">Home</a></li>
          <li class="nav-item"><a href="destinasi.php" class="nav-link active">Destinasi</a></li>
          <li class="nav-item"><a href="kuliner.php" class="nav-link">Kuliner</a></li>
          <li class="nav-item"><a href="event.php" class="nav-link">Event</a></li>
          <li class="nav-item"><a href="peta.php" class="nav-link">Peta</a></li>
          <li class="nav-item"><a href="tentang.php" class="nav-link">Tentang</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- HEADER -->
  <header class="hero" style="min-height: 45vh; background: url('assets/images/Benteng\ otanaha.png') center/cover">
    <div class="container text-center" data-aos="fade-up">
      <h1>Destinasi Wisata Gorontalo</h1>
      <p>Eksplorasi tempat terbaik dengan pemandangan alam, budaya, laut, dan pesona sejarah.</p>
    </div>
  </header>

  <!-- CONTENT -->
  <section class="section">
    <div class="container">
      <h2 class="title mb-2" data-aos="fade-right">Destinasi Unggulan</h2>
      <p class="subtitle mb-4" data-aos="fade-right">Berikut daftar lengkap destinasi wisata yang wajib kamu kunjungi di Gorontalo.</p>

      <div class="row g-4">
        <?php 
        $sql = "SELECT * FROM destinasi ";
        $result = mysqli_query($conn, $sql);
        while($row = mysqli_fetch_assoc($result)){
        ?>
        <!-- DESTINASI 1 -->
        <div class="col-md-6" id="benteng-otanaha">
          <div class="card-tour" data-aos="fade-up">
            <img src="assets/images/destinasi/<?=$row['cover']?>" />
            <div class="p-3">
              <h4><?=$row['nama']?></h4>
              <p class="text-muted small"><?=$row['deskripsi']?></p>

              <ul class="small">
                <li><strong>Lokasi:</strong> <?=$row['nama']?>, Kota Gorontalo</li>
                <li><strong>Jam Operasional:</strong><?=$row['jam_operasional']?></li>
                <li><strong>Tiket Masuk:</strong> Rp <?=$row['tiket_masuk']?></li>
              </ul>

              <!-- <p>Peninggalan kerajaan Gorontalo dengan akses tangga yang menantang. Spot foto sunrise terbaik.</p> -->

              <div class="ratio ratio-16x9 mt-2">
               <iframe 
    src="https://www.google.com/maps?q=<?= $row['lat'] ?>,<?= $row['lng'] ?>&output=embed" 
    width="100%" 
    height="300" 
    style="border:0;" 
    allowfullscreen=""
    loading="lazy">
</iframe>
              </div>
            </div>
          </div>
        </div>
        <?php } ?>


     
      </div>
      <!-- end row -->
    </div>
  </section>

  <?php

  require 'layout/footer.php'

  ?>