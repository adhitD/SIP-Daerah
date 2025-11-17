<?php
require 'databases/koneksi.php';  
require 'layout/header.php';
?>

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
       <?php 
       $sql = "SELECT * FROM destinasi ";
       $result = mysqli_query($conn, $sql);
       while($row = mysqli_fetch_assoc($result)){
        $foto = $row['cover'];
       ?>
      <div class="col-md-4" data-aos="zoom-in" data-aos-delay="50">
        <article class="card-tour">
          <img src="assets/images/destinasi/<?=$foto?>" alt="Benteng Otanaha panorama">
          <div class="p-3">
            <h5 class="mb-1"><?=$row['nama']?></h5>
            <p class="small text-muted mb-2 text-truncate" style="max-width:800px;"><?=$row['deskripsi']?></p>
            <div class="d-flex justify-content-between align-items-center">
              <span class="badge-accent">Budaya</span>
              <button class="btn btn-sm btn-primary-custom" data-bs-toggle="modal" data-bs-target="#modalWisata<?=$row['id']?>">Detail</button>
            </div>
          </div>
        </article>
      </div>
      <?php 
       }
       ?>

      <!-- Card 2 -->
      
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
       <?php 
       $sql = "SELECT * FROM kuliner ";
        $result = mysqli_query($conn, $sql);
        while($row = mysqli_fetch_assoc($result)){
          $foto = $row['gambar'];
       ?>
      <div class="col-md-4" data-aos="fade-up" data-aos-delay="60">
        <article class="card-tour">
          <img src="assets/images/kuliner/<?=$foto?>" alt="Binte Biluhuta">
          <div class="p-3">
            <h5 class="mb-1"><?=$row['nama']?></h5>
            <p class="small text-muted mb-2 text-truncate" style="max-width: 700px;"><?=$row['deskripsi']?></p>
            <div class="d-flex justify-content-between align-items-center">
              <span class="badge-accent"><?=$row['kategori']?></span>
              <button class="btn btn-sm btn-primary-custom" data-bs-toggle="modal" data-bs-target="#modalKuliner<?=$row['id']?>">Detail</button>
            </div>
          </div>
        </article>
      </div>
<?php } ?>
     
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
      <?php 
      $sql = "SELECT * FROM event ";
      $result = mysqli_query($conn, $sql);
      while($row = mysqli_fetch_assoc($result)){
        // $foto = $row['gambar'];
      ?>
      <!-- Event 1 -->
      <div class="col-md-4" data-aos="flip-left" data-aos-delay="60">
        <div class="card-tour p-3">
          <h5><?=$row['nama']?></h5>
          <p class="small text-muted mb-2 text-truncate"><?=$row['keterangan']?></p>
          <div class="d-flex justify-content-between align-items-center">
            <small class="text-muted"><?=$row['tanggal'] ?></small>
            <button class="btn btn-sm btn-primary-custom" data-bs-toggle="modal" data-bs-target="#modalEvent<?=$row['id']?>">Detail</button>
          </div>
        </div>
      </div>
<?php 
      } ?>
      <!-- Event 2 -->
    
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
<?php 
$sql = "SELECT * FROM destinasi ";
$result = mysqli_query($conn, $sql);
while($row = mysqli_fetch_assoc($result)){
  $foto = $row['cover'];
?>
<!-- Modal Wisata 1 -->
<div class="modal fade" id="modalWisata<?=$row['id']?>" tabindex="-1" aria-labelledby="modalWisata<?=$row['id']?>" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalWisata1Label"><?=$row['nama']?></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
      </div>
      <div class="modal-body">
        <img src="assets/images/destinasi/<?=$foto?>" alt="<?=$row['nama']?>" class="img-fluid rounded mb-3">
        <p><strong>Lokasi:</strong> <?=$row['nama']?>, Gorontalo</p>
        <p><strong>Deskripsi:</strong> <?=$row['deskripsi']?></p>
        <p><strong>Jam buka:</strong> <?=$row['jam_operasional']?></p>
        <p><strong>Biaya masuk:</strong> Rp <?=$row['tiket_masuk']?> (perkiraan)</p>
        <!-- <p><strong>Tips:</strong> Bawa air, gunakan sepatu yang nyaman untuk mendaki, kunjungi pagi hari untuk cuaca terbaik.</p> -->
        <div class="ratio ratio-16x9 mt-3">
          <!-- small preview map -->
<iframe 
    src="https://www.google.com/maps?q=<?= $row['lat'] ?>,<?= $row['lng'] ?>&output=embed" 
    width="100%" 
    height="300" 
    style="border:0;" 
    allowfullscreen=""
    loading="lazy">
</iframe>        </div>
      </div>
      <div class="modal-footer">
        <a href="destinasi.php#id=<?=$row['id']?>" class="btn btn-outline-accent">Halaman Destinasi</a>
        <button type="button" class="btn btn-primary-custom" data-bs-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>
<?php 
} ?>

<!-- =========================
     MODAL DETAILS (KULINER)
   ========================= -->
   <?php 
   $sql = "SELECT * FROM kuliner ";
   $result = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_assoc($result)){
      $foto = $row['gambar'];
   ?>
<!-- Kuliner 1 -->
<div class="modal fade" id="modalKuliner<?=$row['id']?>" tabindex="-1" aria-labelledby="modalKuliner1Label" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalKuliner1Label"><?=$row['nama']?></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
      </div>
      <div class="modal-body">
        <img src="assets/images/kuliner/<?=$foto?>" alt="Binte Biluhuta" class="img-fluid rounded mb-3">
        <p><strong>Deskripsi:</strong> <?=$row['deskripsi']?></p>
        <p><strong>Bahan:</strong> <?=$row['bahan']?></p>
        <!-- <p><strong>Tips:</strong> Coba bersama sambal khas lokal untuk sensasi rasa lengkap.</p> -->
      </div>
      <div class="modal-footer">
        <a href="kuliner.php#<?=$row['id']?>" class="btn btn-outline-accent">Halaman Kuliner</a>
        <button type="button" class="btn btn-primary-custom" data-bs-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>
<?php 
} ?>


<!-- =========================
     MODAL DETAILS (EVENT)
   ========================= -->
<!-- Event 1 -->
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
<div class="modal fade" id="modalEvent<?=$row['id']?>" tabindex="-1" aria-labelledby="modalEvent1Label" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalEvent1Label"><?=$row['nama']?></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
      </div>
      <div class="modal-body">
         <img src="assets/images/event/<?=$foto?>" alt="Pesona Danau Limboto" class="img-fluid rounded mb-3">
        
        <p><strong>Deskripsi:</strong> <?=$row['keterangan']?></p>
        <p><strong>Lokasi:</strong> <?=$row['nama']?></p>
        <p><strong>Tanggal:</strong> <?=$row['tanggal']?></p>
        <p><strong>Kontak/Daftar:</strong> admin@example.com</p>
      </div>
      <div class="modal-footer">
        <a href="event.php#<?=$row['id']?>" class="btn btn-outline-accent">Halaman Event</a>
        <button type="button" class="btn btn-primary-custom" data-bs-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>
<?php 
  } ?>

<!-- contoh Event  -->
<!-- <div class="modal fade" id="modalEvent3" tabindex="-1" aria-labelledby="modalEvent3Label" aria-hidden="true">
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
</div> -->

<?php

require 'layout/footer.php'

?>