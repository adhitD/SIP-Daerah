<?php
require '../../layout/header_admin.php'; ?>

<div class="d-flex justify-content-between align-items-center mb-4 mt-5">
  <div>
    <h2 class="fw-bold"><i class="bi bi-calendar-event text-danger me-2"></i>Tambah Event</h2>
    <p class="text-muted mb-0">Masukkan data event secara lengkap di bawah ini.</p>
  </div>
  <a href="index.php" class="btn btn-outline-secondary">
    <i class="bi bi-arrow-left me-1"></i> Kembali
  </a>
</div>

<div class="card shadow-sm border-0">
  <div class="card-body p-4">

    <form action="proses_create.php" method="POST">
      <div class="row g-4">

        <!-- Nama Event -->
        <div class="col-md-6">
          <label class="form-label fw-semibold">Nama Event<span class="text-danger">*</span></label>
          <input type="text" class="form-control" name="nama" placeholder="Masukkan nama event">
        </div>

        <!-- Tanggal Acara -->
        <div class="col-md-6">
          <label class="form-label fw-semibold">Tanggal Acara<span class="text-danger">*</span></label>
          <input type="date" class="form-control" name="tanggal">
        </div>

        <!-- Lokasi -->
        <div class="col-md-6">
          <label class="form-label fw-semibold">Lokasi Event<span class="text-danger">*</span></label>
          <input type="text" class="form-control" name="lokasi" placeholder="Masukkan lokasi event">
        </div>

        <!-- Keterangan -->
        <div class="col-12">
          <label class="form-label fw-semibold">Keterangan</label>
          <textarea class="form-control" name="keterangan" rows="4" placeholder="Tuliskan keterangan atau detail event"></textarea>
        </div>

      </div>

      <div class="mt-5 d-flex justify-content-end gap-2">
        <button type="submit" name="tambah" class="btn btn-primary px-4">
          <i class="bi bi-save me-1"></i> Simpan Event
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
