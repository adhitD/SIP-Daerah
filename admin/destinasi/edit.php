<?php
require '../../databases/koneksi.php';
require '../../layout/header_admin.php'; ?>
<link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css"/>
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
<style>
        #maps { height: 200px; width: 200px; }
    </style>

<!-- Header Halaman -->
<div class="d-flex justify-content-between align-items-center mb-4 mt-5">
  <div>
    <h2 class="fw-bold"><i class="bi bi-geo-alt text-warning me-2"></i>Edit Destinasi</h2>
    <p class="text-muted mb-0">Perbarui data destinasi wisata di bawah ini.</p>
  </div>
  <a href="index.php" class="btn btn-outline-secondary">
    <i class="bi bi-arrow-left me-1"></i> Kembali
  </a>
</div>

<!-- Card Form -->
<div class="card shadow-sm border-0">
  <div class="card-body p-4">

    <form action="proses_edit.php" method="POST" enctype="multipart/form-data">
      <div class="row g-4">
        <?php 
$id = $_GET['id'];
$sql = "SELECT * FROM destinasi WHERE id=$id";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);
        ?>
        <!-- Nama Destinasi -->
        <input type="text" class="form-control" hidden id="nama" name="id" value="<?=$row['id']?>">
        <div class="col-md-6">
          <label for="nama" class="form-label fw-semibold">Nama Destinasi <span class="text-danger">*</span></label>
          <input type="text" class="form-control" id="nama" name="nama" value="<?=$row['nama']?>">
        </div>

        <!-- Lokasi -->
      <div class="col-md-6">
  <label for="lokasi" class="form-label fw-semibold">Lokasi <span class="text-danger">*</span></label>
  <div id="maps"></div>

  <!-- Hidden Input -->
  <input type="hidden" id="lat" name="lat" value="<?= $row['lat'] ?>">
  <input type="hidden" id="lng" name="lng" value="<?= $row['lng'] ?>">
</div>

        <!-- Jam Operasional -->
        <div class="col-md-6">
          <label for="jam" class="form-label fw-semibold">Jam Operasional</label>
          <input type="text" class="form-control" id="jam" name="jam_operasional" value="<?=$row['jam_operasional']?>">
        </div>

        <!-- Harga Tiket -->
        <div class="col-md-6">
          <label for="tiket" class="form-label fw-semibold">Tiket Masuk</label>
          <input type="text" class="form-control" id="tiket" name="tiket_masuk" value="<?=$row['tiket_masuk']?>">
        </div>

        <!-- Deskripsi -->
        <div class="col-12">
          <label for="deskripsi" class="form-label fw-semibold">Deskripsi</label>
          <textarea class="form-control" id="deskripsi" name="deskripsi" rows="4" > <?=$row['deskripsi']?></textarea>
        </div>

        <!-- Cover -->
        <div class="col-md-6">
          <label for="cover" class="form-label fw-semibold">Foto Destinasi</label>
          <input type="file" class="form-control" id="cover" name="cover" accept=".jpg,.jpeg,.png">
          <input type="hidden" class="form-control" id="cover" value="<?=$row['cover']?>" name="coverlama">
        </div>

      </div>

      <!-- Tombol Aksi -->
      <div class="mt-5 d-flex justify-content-end gap-2">
        <button type="submit" name="edit" class="btn btn-warning px-4">
          <i class="bi bi-save me-1"></i> Update Destinasi
        </button>
      </div>
    </form>

  </div>

  <div class="card-footer text-center text-muted small">
    © 2025 Pariwisata - All rights reserved.
  </div>
</div>


<?php

require '../../layout/footer_admin.php'
?>
<script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>

<script>
// Ambil lat & lng lama dari PHP
var oldLat = <?= $row['lat'] ?>;
var oldLng = <?= $row['lng'] ?>;

// Buat map dan set posisi awal sesuai data lama
var map = L.map('maps').setView([oldLat, oldLng], 15);

// Load tile OpenStreetMap
L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19,
}).addTo(map);

// Tampilkan marker awal
var marker = L.marker([oldLat, oldLng]).addTo(map);

// Event klik pada map → update lat & lng + pindah marker
map.on('click', function(e) {
    var lat = e.latlng.lat;
    var lng = e.latlng.lng;

    // Update input hidden
    document.getElementById("lat").value = lat;
    document.getElementById("lng").value = lng;

    // Hapus marker lama
    map.removeLayer(marker);

    // Buat marker baru
    marker = L.marker([lat, lng]).addTo(map);
});
</script>
