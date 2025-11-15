<?php
require 'layout/header.php'; ?>

<!-- HERO -->
<header id="home" class="hero" role="banner" style="min-height: 45vh; background: url('assets/images/Head.png') center/cover">
  <div class="container text-center" data-aos="fade-up">
    <h1>Jelajahi Keindahan Gorontalo</h1>
    <p>Temukan destinasi terbaik, kuliner khas, dan pengalaman budaya yang autentik di Bumi Serambi Madinah.</p>
    <div class="d-flex justify-content-center gap-3 mt-3">
      <a href="#destinasi" class="btn btn-primary-custom">Explore Sekarang</a>
      <a href="#peta" class="btn btn-outline-accent text-light">Buka Peta</a>
    </div>
  </div>
</header>

<!-- DESTINASI (Landing preview + modal detail) -->
<section id="destinasi" class="section" aria-labelledby="destinasiTitle">
  <div class="container">
    <div class="row align-items-center mb-4">
      <div class="col-md-8" data-aos="fade-right">
        <h2 id="destinasiTitle" class="title">Destinasi Unggulan</h2>
        <p class="subtitle">Pilihan destinasi terbaik yang wajib dikunjungi di Gorontalo. Klik "Detail" untuk informasi lengkap.</p>
      </div>
      <div class="col-md-4 text-md-end" data-aos="fade-left">
        <a href="destinasi.php" class="btn btn-outline-accent">Lihat Semua Destinasi</a>
      </div>
    </div>

    <div class="row g-4">
      <!-- Card 1 -->
      <div class="col-md-4" data-aos="zoom-in" data-aos-delay="50">
        <article class="card-tour">
          <img src="assets/images/Benteng otanaha.png" alt="Benteng Otanaha panorama">
          <div class="p-3">
            <h5 class="mb-1">Benteng Otanaha</h5>
            <p class="small text-muted mb-2">Benteng peninggalan sejarah dengan pemandangan Danau Limboto.</p>
            <div class="d-flex justify-content-between align-items-center">
              <span class="badge-accent">Budaya</span>
              <button class="btn btn-sm btn-primary-custom" data-bs-toggle="modal" data-bs-target="#modalWisata1">Detail</button>
            </div>
          </div>
        </article>
      </div>

      <!-- Card 2 -->
      <div class="col-md-4" data-aos="zoom-in" data-aos-delay="120">
        <article class="card-tour">
          <img src="assets/images/taman olele.png" alt="Taman Laut Olele">
          <div class="p-3">
            <h5 class="mb-1">Taman Laut Olele</h5>
            <p class="small text-muted mb-2">Terumbu karang kelas dunia, ideal untuk snorkeling & diving.</p>
            <div class="d-flex justify-content-between align-items-center">
              <span class="badge-accent">Bahari</span>
              <button class="btn btn-sm btn-primary-custom" data-bs-toggle="modal" data-bs-target="#modalWisata2">Detail</button>
            </div>
          </div>
        </article>
      </div>

      <!-- Card 3 -->
      <div class="col-md-4" data-aos="zoom-in" data-aos-delay="190">
        <article class="card-tour">
          <img src="assets/images/shark.png" alt="Whale Shark Botubarani">
          <div class="p-3">
            <h5 class="mb-1">Whale Shark Botubarani</h5>
            <p class="small text-muted mb-2">Spot etis untuk melihat hiu paus dari dekat bersama pemandu tersertifikasi.</p>
            <div class="d-flex justify-content-between align-items-center">
              <span class="badge-accent">Wildlife</span>
              <button class="btn btn-sm btn-primary-custom" data-bs-toggle="modal" data-bs-target="#modalWisata3">Detail</button>
            </div>
          </div>
        </article>
      </div>
    </div>
  </div>
</section>

<!-- KULINER -->
<section id="kuliner" class="section bg-white" aria-labelledby="kulinerTitle">
  <div class="container">
    <div class="row align-items-center mb-4">
      <div class="col-md-8" data-aos="fade-right">
        <h2 id="kulinerTitle" class="title">Kuliner Khas</h2>
        <p class="subtitle">Cicipi cita rasa otentik Gorontalo — dari jajanan jalanan hingga hidangan upacara.</p>
      </div>
      <div class="col-md-4 text-md-end" data-aos="fade-left">
        <a href="kuliner.php" class="btn btn-outline-accent">Lihat Semua Kuliner</a>
      </div>
    </div>

    <div class="row g-4">
      <!-- Kuliner 1 -->
      <div class="col-md-4" data-aos="fade-up" data-aos-delay="60">
        <article class="card-tour">
          <img src="assets/images/bintje.png" alt="Binte Biluhuta">
          <div class="p-3">
            <h5 class="mb-1">Binte Biluhuta</h5>
            <p class="small text-muted mb-2">Sup jagung khas Gorontalo, gurih dan hangat.</p>
            <div class="d-flex justify-content-between align-items-center">
              <span class="badge-accent">Tradisi</span>
              <button class="btn btn-sm btn-primary-custom" data-bs-toggle="modal" data-bs-target="#modalKuliner1">Detail</button>
            </div>
          </div>
        </article>
      </div>

      <!-- Kuliner 2 -->
      <div class="col-md-4" data-aos="fade-up" data-aos-delay="120">
        <article class="card-tour">
          <img src="assets/images/ilabulo.png" alt="Ilabulo">
          <div class="p-3">
            <h5 class="mb-1">Ilabulo</h5>
            <p class="small text-muted mb-2">Hidangan adat, sering hadir dalam upacara tradisional.</p>
            <div class="d-flex justify-content-between align-items-center">
              <span class="badge-accent">Khas</span>
              <button class="btn btn-sm btn-primary-custom" data-bs-toggle="modal" data-bs-target="#modalKuliner2">Detail</button>
            </div>
          </div>
        </article>
      </div>

      <!-- Kuliner 3 -->
      <div class="col-md-4" data-aos="fade-up" data-aos-delay="180">
        <article class="card-tour">
          <img src="assets/images/ayam iloni.png" alt="Ayam Iloni">
          <div class="p-3">
            <h5 class="mb-1">Ayam Iloni</h5>
            <p class="small text-muted mb-2">Ayam bakar berempah yang digemari lokal dan turis.</p>
            <div class="d-flex justify-content-between align-items-center">
              <span class="badge-accent">Favorit</span>
              <button class="btn btn-sm btn-primary-custom" data-bs-toggle="modal" data-bs-target="#modalKuliner3">Detail</button>
            </div>
          </div>
        </article>
      </div>
    </div>
  </div>
</section>

<!-- EVENT -->
<section id="event" class="section" aria-labelledby="eventTitle">
  <div class="container">
    <div class="row align-items-center mb-4">
      <div class="col-md-8" data-aos="fade-right">
        <h2 id="eventTitle" class="title">Event & Festival</h2>
        <p class="subtitle">Informasi tanggal, lokasi, dan cara ikut serta di event-event budaya Gorontalo.</p>
      </div>
      <div class="col-md-4 text-md-end" data-aos="fade-left">
        <a href="event.php" class="btn btn-outline-accent">Lihat Semua Event</a>
      </div>
    </div>

    <div class="row g-4">
      <!-- Event 1 -->
      <div class="col-md-4" data-aos="flip-left" data-aos-delay="60">
        <div class="card-tour p-3">
          <h5>Festival Karawo</h5>
          <p class="small text-muted mb-2">Pameran & lomba kerajinan bordir Karawo — menampilkan perajin lokal.</p>
          <div class="d-flex justify-content-between align-items-center">
            <small class="text-muted">Tanggal: 20 Okt 2025</small>
            <button class="btn btn-sm btn-primary-custom" data-bs-toggle="modal" data-bs-target="#modalEvent1">Detail</button>
          </div>
        </div>
      </div>

      <!-- Event 2 -->
      <div class="col-md-4" data-aos="flip-left" data-aos-delay="120">
        <div class="card-tour p-3">
          <h5>Pesona Danau Limboto</h5>
          <p class="small text-muted mb-2">Perayaan budaya di tepi Danau Limboto, termasuk parade budaya.</p>
          <div class="d-flex justify-content-between align-items-center">
            <small class="text-muted">Tanggal: 10 Ags 2025</small>
            <button class="btn btn-sm btn-primary-custom" data-bs-toggle="modal" data-bs-target="#modalEvent2">Detail</button>
          </div>
        </div>
      </div>

      <!-- Event 3 -->
      <div class="col-md-4" data-aos="flip-left" data-aos-delay="180">
        <div class="card-tour p-3">
          <h5>Gorontalo Cultural Parade</h5>
          <p class="small text-muted mb-2">Pawai budaya menampilkan pakaian adat dan pertunjukan seni.</p>
          <div class="d-flex justify-content-between align-items-center">
            <small class="text-muted">Tanggal: 05 Nov 2025</small>
            <button class="btn btn-sm btn-primary-custom" data-bs-toggle="modal" data-bs-target="#modalEvent3">Detail</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- PETA INTERAKTIF (Preview di landing) -->
<section id="peta" class="section bg-white" aria-labelledby="petaTitle">
  <div class="container">
    <div class="row align-items-center mb-4">
      <div class="col-md-8" data-aos="fade-right">
        <h2 id="petaTitle" class="title">Peta Wisata</h2>
        <p class="subtitle">Gunakan peta untuk menemukan lokasi destinasi, rute, dan estimasi waktu perjalanan.</p>
      </div>
      <div class="col-md-4 text-md-end" data-aos="fade-left">
        <a href="peta.php" class="btn btn-outline-accent">Buka Peta Lengkap</a>
      </div>
    </div>

    <div class="row g-4">
      <div class="col-lg-8" data-aos="fade-up">

        <iframe class="map-frame" id="embedMap" src="https://maps.google.com/maps?width=600&height=400&hl=en&q=Gorontalo&t=&z=14&ie=UTF8&iwloc=B&output=embed" loading="lazy" referrerpolicy="no-referrer-when-downgrade" title="Peta Wisata Gorontalo"></iframe>
      </div>

      <div class="col-lg-4" data-aos="fade-up" data-aos-delay="80">
        <div class="card p-3">
          <h6 class="mb-3">Lokasi Populer</h6>
          <ul class="list-unstyled small">
            <li><strong>Benteng Otanaha</strong><br><span class="text-muted">Bukit Otanaha — titik panorama</span></li>
            <li class="mt-3"><strong>Taman Laut Olele</strong><br><span class="text-muted">Spot diving & snorkeling</span></li>
            <li class="mt-3"><strong>Botubarani</strong><br><span class="text-muted">Whale shark watching</span></li>
          </ul>
          <div class="mt-3 text-end">
            <a class="btn btn-sm btn-primary-custom" href="peta.html">Lihat Semua</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- TENTANG -->
<section id="tentang" class="section" aria-labelledby="tentangTitle">
  <div class="container">
    <div class="row g-4 align-items-center">
      <div class="col-lg-6" data-aos="fade-right">
        <h2 id="tentangTitle" class="title">Tentang Gorontalo</h2>
        <p class="subtitle">Gorontalo — "Serambi Madinah" — dikenal dengan keramahan masyarakat, tradisi kuat, dan keindahan alam, khususnya laut dan pesisirnya.</p>

        <ul class="list-unstyled">
          <li class="mb-2"><strong>Budaya & Seni:</strong> Karawo (bordir), tarian tradisional, upacara adat.</li>
          <li class="mb-2"><strong>Transportasi:</strong> Jalaluddin Airport (GTO), transport lokal & layanan tur berlisensi.</li>
          <li class="mb-2"><strong>Rekomendasi:</strong> Gunakan pemandu lokal untuk pengalaman aman & edukatif.</li>
        </ul>
      </div>

      <div class="col-lg-6" data-aos="fade-left">
        <div class="card-tour">
          <img src="assets/images/tentang.png" alt="Pemandangan Gorontalo">
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Modal Wisata 1 -->
<div class="modal fade" id="modalWisata1" tabindex="-1" aria-labelledby="modalWisata1Label" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalWisata1Label">Benteng Otanaha</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
      </div>
      <div class="modal-body">
        <img src="assets/images/Benteng otanaha.png" alt="Benteng Otanaha" class="img-fluid rounded mb-3">
        <p><strong>Lokasi:</strong> Bukit Otanaha, Gorontalo</p>
        <p><strong>Deskripsi:</strong> Benteng Otanaha adalah benteng bersejarah yang menawarkan panorama Danau Limboto. Cocok untuk wisata sejarah, fotografi, dan sunrise/sunset viewing.</p>
        <p><strong>Fasilitas:</strong> Parkir, area viewpoint, pedagang makanan ringan, jasa pemandu lokal.</p>
        <p><strong>Jam buka:</strong> 06:00 - 18:00</p>
        <p><strong>Biaya masuk:</strong> Rp 10.000 (perkiraan)</p>
        <p><strong>Tips:</strong> Bawa air, gunakan sepatu yang nyaman untuk mendaki, kunjungi pagi hari untuk cuaca terbaik.</p>
        <div class="ratio ratio-16x9 mt-3">
          <!-- small preview map -->
          <iframe src="https://www.google.com/maps?q=Benteng+Otanaha&output=embed" style="border:0;" allowfullscreen loading="lazy"></iframe>
        </div>
      </div>
      <div class="modal-footer">
        <a href="destinasi.html#benteng-otanaha" class="btn btn-outline-accent">Halaman Destinasi</a>
        <button type="button" class="btn btn-primary-custom" data-bs-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal Wisata 2 -->
<div class="modal fade" id="modalWisata2" tabindex="-1" aria-labelledby="modalWisata2Label" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalWisata2Label">Taman Laut Olele</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
      </div>
      <div class="modal-body">
        <img src="assets/images/taman olele.png" alt="Taman Laut Olele" class="img-fluid rounded mb-3">
        <p><strong>Lokasi:</strong> Pesisir Gorontalo</p>
        <p><strong>Deskripsi:</strong> Taman laut dengan keindahan terumbu karang, cocok untuk snorkeling dan diving. Habitat beragam biota laut.</p>
        <p><strong>Fasilitas:</strong> Spot penyewaan peralatan snorkeling, guide selam, area bersantai.</p>
        <p><strong>Jam buka:</strong> 08:00 - 16:00</p>
        <p><strong>Biaya:</strong> Paket snorkeling & diving bervariasi (cek operator lokal).</p>
        <div class="ratio ratio-16x9 mt-3">
          <iframe src="https://www.google.com/maps?q=Taman+Laut+Olele&output=embed" style="border:0;" allowfullscreen loading="lazy"></iframe>
        </div>
      </div>
      <div class="modal-footer">
        <a href="destinasi.html#olele" class="btn btn-outline-accent">Halaman Destinasi</a>
        <button type="button" class="btn btn-primary-custom" data-bs-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal Wisata 3 -->
<div class="modal fade" id="modalWisata3" tabindex="-1" aria-labelledby="modalWisata3Label" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalWisata3Label">Whale Shark Botubarani</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
      </div>
      <div class="modal-body">
        <img src="assets/images/shark.png" alt="Whale Shark Botubarani" class="img-fluid rounded mb-3">
        <p><strong>Lokasi:</strong> Botubarani coast</p>
        <p><strong>Deskripsi:</strong> Lokasi untuk menyaksikan hiu paus secara etis bersama operator yang menjaga keamanan binatang.</p>
        <p><strong>Fasilitas:</strong> Operator tur, perahu, panduan konservasi.</p>
        <p><strong>Jam kunjungan:</strong> Sesuai jadwal operator.</p>
        <div class="ratio ratio-16x9 mt-3">
          <iframe src="https://www.google.com/maps?q=Botubarani&output=embed" style="border:0;" allowfullscreen loading="lazy"></iframe>
        </div>
      </div>
      <div class="modal-footer">
        <a href="destinasi.html#botubarani" class="btn btn-outline-accent">Halaman Destinasi</a>
        <button type="button" class="btn btn-primary-custom" data-bs-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>

<!-- =========================
     MODAL DETAILS (KULINER)
   ========================= -->
<!-- Kuliner 1 -->
<div class="modal fade" id="modalKuliner1" tabindex="-1" aria-labelledby="modalKuliner1Label" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalKuliner1Label">Binte Biluhuta</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
      </div>
      <div class="modal-body">
        <img src="assets/images/bintje.png" alt="Binte Biluhuta" class="img-fluid rounded mb-3">
        <p><strong>Deskripsi:</strong> Sup jagung khas Gorontalo, berisi jagung, ikan, dan rempah. Sering dijual di warung tradisional.</p>
        <p><strong>Tempat Mencoba:</strong> Pasar lokal & warung tradisional di pusat kota.</p>
        <p><strong>Tips:</strong> Coba bersama sambal khas lokal untuk sensasi rasa lengkap.</p>
      </div>
      <div class="modal-footer">
        <a href="kuliner.html#binte" class="btn btn-outline-accent">Halaman Kuliner</a>
        <button type="button" class="btn btn-primary-custom" data-bs-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>

<!-- Kuliner 2 -->
<div class="modal fade" id="modalKuliner2" tabindex="-1" aria-labelledby="modalKuliner2Label" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalKuliner2Label">Ilabulo</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
      </div>
      <div class="modal-body">
        <img src="assets/images/ilabulo.png" alt="Ilabulo" class="img-fluid rounded mb-3">
        <p><strong>Deskripsi:</strong> Hidangan berbasis sagu dan daging, disajikan pada acara adat.</p>
        <p><strong>Tempat Mencoba:</strong> Rumah makan tradisional & saat acara adat.</p>
      </div>
      <div class="modal-footer">
        <a href="kuliner.html#ilabulo" class="btn btn-outline-accent">Halaman Kuliner</a>
        <button type="button" class="btn btn-primary-custom" data-bs-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>

<!-- Kuliner 3 -->
<div class="modal fade" id="modalKuliner3" tabindex="-1" aria-labelledby="modalKuliner3Label" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalKuliner3Label">Ayam Iloni</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
      </div>
      <div class="modal-body">
        <img src="assets/images/ayam iloni.png" alt="Ayam Iloni" class="img-fluid rounded mb-3">
        <p><strong>Deskripsi:</strong> Ayam panggang berempah dengan rasa khas Gorontalo.</p>
        <p><strong>Tempat Mencoba:</strong> Rumah makan populer dan kedai tradisional.</p>
      </div>
      <div class="modal-footer">
        <a href="kuliner.html#ayam-iloni" class="btn btn-outline-accent">Halaman Kuliner</a>
        <button type="button" class="btn btn-primary-custom" data-bs-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>

<!-- =========================
     MODAL DETAILS (EVENT)
   ========================= -->
<!-- Event 1 -->
<div class="modal fade" id="modalEvent1" tabindex="-1" aria-labelledby="modalEvent1Label" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalEvent1Label">Festival Karawo</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
      </div>
      <div class="modal-body">
        <img src="assets/images/karawo.png" alt="Festival Karawo" class="img-fluid rounded mb-3">
        <p><strong>Deskripsi:</strong> Festival yang menampilkan kerajinan bordir Karawo, workshop, dan pameran perajin lokal.</p>
        <p><strong>Lokasi:</strong> Pusat Kota</p>
        <p><strong>Tanggal:</strong> 20 Oktober 2025</p>
        <p><strong>Kontak/Daftar:</strong> info@gorontalo.go.id</p>
      </div>
      <div class="modal-footer">
        <a href="event.html#karawo" class="btn btn-outline-accent">Halaman Event</a>
        <button type="button" class="btn btn-primary-custom" data-bs-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>

<!-- Event 2 -->
<div class="modal fade" id="modalEvent2" tabindex="-1" aria-labelledby="modalEvent2Label" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalEvent2Label">Pesona Danau Limboto</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
      </div>
      <div class="modal-body">
        <img src="assets/images/danau limboto.png" alt="Pesona Danau Limboto" class="img-fluid rounded mb-3">
        <p><strong>Deskripsi:</strong> Perayaan budaya dan atraksi di tepi Danau Limboto, festival kuliner dan pertunjukan seni.</p>
        <p><strong>Tanggal:</strong> 10 Agustus 2025</p>
      </div>
      <div class="modal-footer">
        <a href="event.html#limboto" class="btn btn-outline-accent">Halaman Event</a>
        <button type="button" class="btn btn-primary-custom" data-bs-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>

<!-- Event 3 -->
<div class="modal fade" id="modalEvent3" tabindex="-1" aria-labelledby="modalEvent3Label" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalEvent3Label">Gorontalo Cultural Parade</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
      </div>
      <div class="modal-body">
        <img src="assets/images/pawai.png" alt="Gorontalo Parade" class="img-fluid rounded mb-3">
        <p><strong>Deskripsi:</strong> Pawai budaya besar menampilkan pakaian adat, musik tradisional, dan tarian.</p>
        <p><strong>Tanggal:</strong> 05 November 2025</p>
      </div>
      <div class="modal-footer">
        <a href="event.html#parade" class="btn btn-outline-accent">Halaman Event</a>
        <button type="button" class="btn btn-primary-custom" data-bs-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>

<?php

require 'layout/footer.php'

?>