<?php
require '../../layout/header_admin.php'; ?>

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

    <form action="destinasi_store.php" method="POST" enctype="multipart/form-data">
      <div class="row g-4">

        <!-- Nama Destinasi -->
        <div class="col-md-6">
          <label for="nama" class="form-label fw-semibold">Nama Destinasi <span class="text-danger">*</span></label>
          <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan nama destinasi">
        </div>

        <!-- Lokasi -->
        <div class="col-md-6">
          <label for="lokasi" class="form-label fw-semibold">Lokasi <span class="text-danger">*</span></label>
          <input type="text" class="form-control" id="lokasi" name="lokasi" placeholder="Masukkan lokasi destinasi">
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
          <input type="file" class="form-control" id="cover" name="cover" accept=".jpg,.jpeg,.png">
        </div>

      </div>

      <!-- Tombol Aksi -->
      <div class="mt-5 d-flex justify-content-end gap-2">
        <button type="submit" class="btn btn-primary px-4">
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