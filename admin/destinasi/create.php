<?php
require '../../layout/header_admin.php'; ?>
 <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css"/>
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>

    <style>
        #map { height: 200px; width: 200px; }
    </style>
<!-- Header Halaman -->
<div class="d-flex justify-content-between align-items-center mb-4 mt-5">
  <div>
    <h2 class="fw-bold"><i class="bi bi-geo-alt text-primary me-2"></i>Tambah Destinasi</h2>
    <p class="text-muted mb-0">Masukkan data destinasi wisata secara lengkap di bawah ini.</p>
  </div>
  <a href="index.php" class="btn btn-outline-secondary">
    <i class="bi bi-arrow-left me-1"></i> Kembali
  </a>
</div>

<!-- Card Form -->
<div class="card shadow-sm border-0">
  <div class="card-body p-4">

    <form action="proses_create.php" method="POST" enctype="multipart/form-data">
      <div class="row g-4">

        <!-- Nama Destinasi -->
        <div class="col-md-6">
          <label for="nama" class="form-label fw-semibold">Nama Destinasi <span class="text-danger">*</span></label>
          <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan nama destinasi">
        </div>

        <!-- Lokasi -->
        <div class="col-md-6">
          <label for="lokasi" class="form-label fw-semibold">Lokasi <span class="text-danger">*</span></label>
          <div class="" id="map"></div>
          <input type="hidden" class="form-control" id="lat" name="lat" >
          <input type="hidden" class="form-control" id="lng" name="lng" >
        </div>

        <!-- Jam Operasional -->
        <div class="col-md-6">
          <label for="jam" class="form-label fw-semibold">Jam Operasional</label>
          <input type="text" class="form-control" id="jam" name="jam_operasional" placeholder="Contoh: 08.00 - 17.00">
        </div>

        <!-- Harga Tiket -->
        <div class="col-md-6">
          <label for="tiket" class="form-label fw-semibold">Tiket Masuk</label>
          <input type="text" class="form-control" id="tiket" name="tiket_masuk" placeholder="Contoh: 15000">
        </div>

        <!-- Deskripsi -->
        <div class="col-12">
          <label for="deskripsi" class="form-label fw-semibold">Deskripsi</label>
          <textarea class="form-control" id="deskripsi" name="deskripsi" rows="4" placeholder="Tuliskan deskripsi destinasi"></textarea>
        </div>

        <!-- Cover -->
        <div class="col-md-6">
          <label for="cover" class="form-label fw-semibold">Foto Destinasi</label>
          <input type="file" class="form-control" id="cover" name="cover" accept="jpg,jpeg,png">
        </div>

      </div>

      <!-- Tombol Aksi -->
      <div class="mt-5 d-flex justify-content-end gap-2">
        <button type="submit" name="tambah" class="btn btn-primary px-4">
          <i class="bi bi-save me-1"></i> Simpan Destinasi
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

<script>

function getLocation() {
    navigator.geolocation.getCurrentPosition(function(pos){
        document.getElementById("lat").value = pos.coords.latitude;
        document.getElementById("lng").value = pos.coords.longitude;
    });
}

    // Lokasi awal: Indonesia tengah
    var map = L.map('map').setView([0.5334731256031934, 123.06027573323716], 13);

    // Load tile map dari OpenStreetMap (gratis)
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 19,
    }).addTo(map);

    var marker;

    // Event klik peta
    map.on('click', function(e) {
        var lat = e.latlng.lat;
        var lng = e.latlng.lng;

        // Isi ke input form
        document.getElementById("lat").value = lat;
        document.getElementById("lng").value = lng;

        // Hapus marker sebelumnya
        if (marker) {
            map.removeLayer(marker);
        }

        // Buat marker baru
        marker = L.marker([lat, lng]).addTo(map);
    });

</script>