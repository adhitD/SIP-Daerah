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

        <!-- KULINER 1 -->
        <div class="col-md-6" id="binte">
          <div class="card-tour" data-aos="fade-up">
            <img src="assets/images/bintje.png">
            <div class="p-3">
              <h4>Binte Biluhuta</h4>
              <p class="text-muted small">Sup jagung khas Gorontalo dengan kuah gurih dan aroma rempah.</p>

              <ul class="small">
                <li><strong>Bahan Utama:</strong> Jagung, ikan cakalang/goropa, kemangi</li>
                <li><strong>Kategori:</strong> Hidangan tradisional</li>
              </ul>

              <p>Rasanya manis-gurih segar, cocok dimakan pada malam hari atau saat cuaca dingin.</p>

              <h6 class="mt-3">Tempat Rekomendasi</h6>
              <ul class="small">
                <li>Warung Binte Kota Tua</li>
                <li>Kuliner Center Gorontalo</li>
              </ul>
            </div>
          </div>
        </div>

        <!-- KULINER 2 -->
        <div class="col-md-6" id="ilabulo">
          <div class="card-tour" data-aos="fade-up" data-aos-delay="100">
            <img src="assets/images/ilabulo.png">
            <div class="p-3">
              <h4>Ilabulo</h4>
              <p class="text-muted small">Hidangan adat berbahan dasar sagu, hati ayam, dan bumbu khas.</p>

              <ul class="small">
                <li><strong>Kategori:</strong> Makanan adat</li>
                <li><strong>Tekstur:</strong> Kenyal & lembut</li>
              </ul>

              <p>Biasanya disajikan pada upacara adat. Rasa gurih pedasnya sangat khas Gorontalo.</p>

              <h6 class="mt-3">Tempat Rekomendasi</h6>
              <ul class="small">
                <li>Ramayana Food Court</li>
                <li>Warung Ilabulo Sentral</li>
              </ul>
            </div>
          </div>
        </div>

        <!-- KULINER 3 -->
        <div class="col-md-6" id="ayam-iloni">
          <div class="card-tour" data-aos="fade-up">
            <img src="assets/images/ayam iloni.png">
            <div class="p-3">
              <h4>Ayam Iloni</h4>
              <p class="text-muted small">Ayam panggang berbumbu khas yang diolah dengan arang kelapa.</p>

              <ul class="small">
                <li><strong>Cita Rasa:</strong> Gurih, aromatik, sedikit pedas</li>
                <li><strong>Kategori:</strong> Hidangan favorit</li>
              </ul>

              <p>Dipanggang perlahan hingga bumbunya meresap sempurna. Sangat cocok dimakan dengan nasi jagung.</p>

              <h6 class="mt-3">Rekomendasi</h6>
              <ul class="small">
                <li>Rumah Makan Iloni Zamrud</li>
                <li>Kuliner Pantai Leato</li>
              </ul>
            </div>
          </div>
        </div>

        <!-- KULINER 4 -->
        <div class="col-md-6" id="miluyu">
          <div class="card-tour" data-aos="fade-up" data-aos-delay="100">
            <img src="assets/images/miluyu.png">
            <div class="p-3">
              <h4>Miluyu</h4>
              <p class="text-muted small">Kue tradisional manis berbahan dasar ketan dan gula aren.</p>

              <p>Hidangan ringan yang wajib dicoba saat berkunjung pada hari besar atau festival rakyat.</p>

              <h6 class="mt-3">Rekomendasi</h6>
              <ul class="small">
                <li>Pasar Sentral Gorontalo</li>
                <li>Toko Kue Tradisional Kota Selatan</li>
              </ul>
            </div>
          </div>
        </div>

        <!-- KULINER 5 -->
        <div class="col-md-6" id="lalampa">
          <div class="card-tour" data-aos="fade-up">
            <img src="assets/images/lalampa.png">
            <div class="p-3">
              <h4>Lalampa</h4>
              <p class="text-muted small">Makanan mirip lemper tetapi dibakar sehingga aromanya khas.</p>

              <p>Isian ikan cakalang pedas dengan nasi ketan — sangat cocok sebagai oleh-oleh.</p>

              <ul class="small">
                <li>Tersedia hampir di seluruh pasar tradisional</li>
              </ul>
            </div>
          </div>
        </div>

      </div><!-- end row -->

    </div>
  </section>


  <?php

  require 'layout/footer.php'

  ?>