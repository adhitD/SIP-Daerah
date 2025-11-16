<?php
require '../../layout/header_admin.php'; ?>

<div class="d-flex justify-content-between align-items-center mb-4 mt-5">
  <div>
    <h2 class="fw-bold"><i class="bi bi-shop text-success me-2"></i>Tambah Kuliner</h2>
    <p class="text-muted mb-0">Masukkan data kuliner secara lengkap di bawah ini.</p>
  </div>
  <a href="index.php" class="btn btn-outline-secondary">
    <i class="bi bi-arrow-left me-1"></i> Kembali
  </a>
</div>

<div class="card shadow-sm border-0">
  <div class="card-body p-4">

    <form action="proses_create.php" method="POST" enctype="multipart/form-data">
      <div class="row g-4">

        <!-- Nama Kuliner -->
        <div class="col-md-6">
          <label class="form-label fw-semibold">Nama Kuliner<span class="text-danger">*</span></label>
          <input type="text" class="form-control" name="nama" placeholder="Masukkan nama kuliner">
        </div>

        <!-- Bahan -->
        <div class="col-md-6">
          <label class="form-label fw-semibold">Bahan Utama<span class="text-danger">*</span></label>
          <input type="text" class="form-control" name="bahan" placeholder="Masukkan bahan utama">
        </div>

        <!-- Kategori (Radio) -->
        <div class="col-md-12">
          <label class="form-label fw-semibold">Kategori</label>
          <div class="d-flex gap-4 mt-2">
      
            <div class="form-check">
              <input class="form-check-input" type="radio" name="kategori" value="Hidangan Adat" id="kategori1">
              <label class="form-check-label" for="kategori1">Hidangan Adat</label>
            </div>

            <div class="form-check">
              <input class="form-check-input" type="radio" name="kategori" value="Makanan Favorit" id="kategori2">
              <label class="form-check-label" for="kategori2">Makanan Favorit</label>
            </div>

            <div class="form-check">
              <input class="form-check-input" type="radio" name="kategori" value="Lainnya" id="kategori3">
              <label class="form-check-label" for="kategori3">Lainnya</label>
            </div>

          </div>
        </div>

        <!-- Deskripsi -->
        <div class="col-12">
          <label class="form-label fw-semibold">Deskripsi</label>
          <textarea class="form-control" name="deskripsi" rows="4" placeholder="Tuliskan deskripsi kuliner"></textarea>
        </div>

        <!-- Gambar -->
        <div class="col-md-6">
          <label class="form-label fw-semibold">Foto Kuliner</label>
          <input type="file" class="form-control" name="gambar" accept="jpg,jpeg,png">
        </div>

      </div>

      <div class="mt-5 d-flex justify-content-end gap-2">
        <button type="submit" name="tambah" class="btn btn-primary px-4">
          <i class="bi bi-save me-1"></i> Simpan Kuliner
        </button>
      </div>
    </form>

  </div>

  <div class="card-footer text-center text-muted small">
    © 2025 Pariwisata - All rights reserved.
  </div>
</div>

<?php
require '../../layout/footer_admin.php';
?>