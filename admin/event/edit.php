<?php
require '../../databases/koneksi.php';
require '../../layout/header_admin.php'; ?>

<div class="d-flex justify-content-between align-items-center mb-4 mt-5">
  <div>
    <h2 class="fw-bold"><i class="bi bi-calendar-event text-warning me-2"></i>Edit Event</h2>
    <p class="text-muted mb-0">Masukkan data event secara lengkap di bawah ini.</p>
  </div>
  <a href="index.php" class="btn btn-outline-secondary">
    <i class="bi bi-arrow-left me-1"></i> Kembali
  </a>
</div>

<div class="card shadow-sm border-0">
  <div class="card-body p-4">
<?php 
$id = $_GET['id'];
  $sql = "SELECT * FROM event WHERE id=$id";
  $result = mysqli_query($conn,$sql);
  $row= mysqli_fetch_assoc($result);
?>
    <form action="proses_edit.php" enctype="multipart/form-data" method="POST">
      <div class="row g-4">

        <!-- Nama Event -->
        <input type="hidden"  class="form-control" name="id" value="<?=$row['id']?>">
        <div class="col-md-6">
          <label class="form-label fw-semibold">Nama Event<span class="text-danger">*</span></label>
          <input type="text" class="form-control" name="nama" value="<?=$row['nama']?>">
        </div>

        <!-- Tanggal Acara -->
        <div class="col-md-6">
          <label class="form-label fw-semibold">Tanggal Acara<span class="text-danger">*</span></label>
          <input type="date" class="form-control" name="tanggal" value="<?=$row['tanggal']?>">
        </div>

        <!-- Lokasi -->
        <div class="col-md-6">
          <label class="form-label fw-semibold">Lokasi Event<span class="text-danger">*</span></label>
          <input type="text" class="form-control" name="lokasi" value="<?=$row['lokasi']?>" >
        </div>
        <!-- Foto -->
        <div class="col-md-6">
          <label class="form-label fw-semibold">Foto Event<span class="text-danger">*</span></label>
          <input type="file" class="form-control" name="gambar" accept="jpg,png,jpeg" >
        </div>
        <input type="hidden" class="form-control" name="gambarlama" value="<?=$row['gambar']?>" >

        <!-- Keterangan -->
        <div class="col-12">
          <label class="form-label fw-semibold">Keterangan</label>
          <textarea class="form-control" name="keterangan" rows="4"><?=$row['keterangan']?></textarea>
        </div>

      </div>

      <div class="mt-5 d-flex justify-content-end gap-2">
        <button type="submit" name="edit" class="btn btn-warning px-4">
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