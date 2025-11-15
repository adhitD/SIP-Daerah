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
        <!-- DESTINASI 1 -->
        <div class="col-md-6" id="benteng-otanaha">
          <div class="card-tour" data-aos="fade-up">
            <img src="assets/images/Benteng otanaha.png" />
            <div class="p-3">
              <h4>Benteng Otanaha</h4>
              <p class="text-muted small">Benteng bersejarah dengan pemandangan Danau Limboto yang luar biasa.</p>

              <ul class="small">
                <li><strong>Lokasi:</strong> Bukit Otanaha, Kota Gorontalo</li>
                <li><strong>Jam Operasional:</strong> 06:00 – 18:00</li>
                <li><strong>Tiket Masuk:</strong> Rp 10.000</li>
              </ul>

              <p>Peninggalan kerajaan Gorontalo dengan akses tangga yang menantang. Spot foto sunrise terbaik.</p>

              <div class="ratio ratio-16x9 mt-2">
                <iframe src="https://www.google.com/maps?q=Benteng+Otanaha&output=embed"></iframe>
              </div>
            </div>
          </div>
        </div>

        <!-- DESTINASI 2 -->
        <div class="col-md-6" id="olele">
          <div class="card-tour" data-aos="fade-up" data-aos-delay="100">
            <img src="assets/images/taman olele.png" />
            <div class="p-3">
              <h4>Taman Laut Olele</h4>
              <p class="text-muted small">Surga bawah laut dengan terumbu karang kelas dunia.</p>

              <ul class="small">
                <li><strong>Lokasi:</strong> Bone Bolango, Gorontalo</li>
                <li><strong>Aktivitas:</strong> Diving, Snorkeling</li>
              </ul>

              <p>Spot diving internasional dengan coral wall dan beragam ikan laut.</p>

              <div class="ratio ratio-16x9 mt-2">
                <iframe src="https://www.google.com/maps?q=Taman+Laut+Olele&output=embed"></iframe>
              </div>
            </div>
          </div>
        </div>

        <!-- DESTINASI 3 -->
        <div class="col-md-6" id="botubarani">
          <div class="card-tour" data-aos="fade-up">
            <img src="assets/images/shark.png" />
            <div class="p-3">
              <h4>Whale Shark Botubarani</h4>
              <p class="text-muted small">Bertemu hiu paus secara etis di habitat alami.</p>

              <ul class="small">
                <li><strong>Lokasi:</strong> Botubarani, Kabila Bone</li>
                <li><strong>Musim Terbaik:</strong> Mei – Oktober</li>
              </ul>

              <p>Wisata edukasi konservasi dengan pemandu bersertifikat.</p>

              <div class="ratio ratio-16x9 mt-2">
                <iframe src="https://www.google.com/maps?q=Botubarani&output=embed"></iframe>
              </div>
            </div>
          </div>
        </div>

        <!-- DESTINASI 4 -->
        <div class="col-md-6" id="pantai-biluhu">
          <div class="card-tour" data-aos="fade-up" data-aos-delay="100">
            <img src="assets/images/biluhu.png" />
            <div class="p-3">
              <h4>Pantai Biluhu</h4>
              <p class="text-muted small">Pantai pasir putih dengan air laut biru jernih.</p>

              <ul class="small">
                <li><strong>Kegiatan:</strong> Snorkeling, berenang, foto prewedding</li>
              </ul>

              <p>Pantai tenang yang cocok untuk wisata keluarga & santai.</p>

              <div class="ratio ratio-16x9 mt-2">
                <iframe src="https://www.google.com/maps?q=Biluhu&output=embed"></iframe>
              </div>
            </div>
          </div>
        </div>

        <!-- DESTINASI 5 -->
        <div class="col-md-6" id="danau-limboto">
          <div class="card-tour" data-aos="fade-up">
            <img src="assets/images/danau limboto.png" />
            <div class="p-3">
              <h4>Danau Limboto</h4>
              <p class="text-muted small">Danau terbesar di Gorontalo dengan aktivitas budaya lokal.</p>

              <ul class="small">
                <li><strong>Kegiatan:</strong> Fotografi, festival, wisata perahu</li>
              </ul>

              <p>Sering digunakan untuk event tahunan “Pesona Danau Limboto”.</p>

              <div class="ratio ratio-16x9 mt-2">
                <iframe src="https://www.google.com/maps?q=Danau+Limboto&output=embed"></iframe>
              </div>
            </div>
          </div>
        </div>

        <!-- DESTINASI 6 -->
        <div class="col-md-6" id="pantai-botutonuo">
          <div class="card-tour" data-aos="fade-up" data-aos-delay="100">
            <img src="assets/images/bototonuo.png" />
            <div class="p-3">
              <h4>Pantai Botutonuo</h4>
              <p class="text-muted small">Pantai landai dengan air jernih cocok untuk keluarga.</p>

              <ul class="small">
                <li><strong>Harga Tiket:</strong> Rp 5.000 – Rp 10.000</li>
              </ul>

              <p>Ombaknya tenang, cocok untuk anak-anak.</p>

              <div class="ratio ratio-16x9 mt-2">
                <iframe src="https://www.google.com/maps?q=Botutonuo&output=embed"></iframe>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- end row -->
    </div>
  </section>

  <?php

  require 'layout/footer.php'

  ?>