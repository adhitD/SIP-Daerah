<?php
require '../../databases/koneksi.php';
require '../../layout/header_admin.php'; ?>

<div class="container mt-5">

  <div class="d-flex justify-content-between align-items-center mb-4">
    <h2 class="fw-bold">🌍 List Destinasi</h2>
    <a href="create.php" class="btn btn-primary">
      <i class="bi bi-plus-lg me-1"></i> Tambah Destinasi
    </a>
  </div>

  <div class="card shadow-sm">
    <div class="card-body p-0">
      <div class="table-responsive">

        <table class="table table-striped table-hover mb-0">
          <thead class="table-primary">
            <tr class="text-center">
              <th>Gambar</th>
              <th>No</th>
              <th>Nama</th>
              <th>Lokasi</th>
              <th>jam operasional</th>
              <th>Harga Tiket</th>
              <th>Updated at</th>
              <th>Aksi</th>
            </tr>
          </thead>

          <tbody>

<?php 
$no  =1 ;
$sql = "SELECT * FROM destinasi";
$result = mysqli_query($conn,$sql);
while($row = mysqli_fetch_assoc($result)){
?>

            <!-- Dummy 1 -->
            <tr class="text-center">
              <td>
                <img src="assets/images/destinasi1.jpg"
                  width="80"
                  class="rounded shadow-sm">
              </td>
              <td><?=$no++?></td>
              <td><?=$row['nama']?></td>
              <td><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d63834.162559347285
                !2d<?=$row['lng']?>
                !3d<?=$row['lat']?>
                !2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sid!2sid!4v1763271727576!5m2!1sid!2sid" width="150" height="150" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></td>
              <td><?=$row['jam_operasional']?></td>
              <td>Rp <?=$row['tiket_masuk']?></td>
              <td>2 jam lalu</td>
              <td>
                <div class="dropdown">
                  <button class="bg-transparent btn-sm border-0"
                    data-bs-toggle="dropdown">
                    <i class="bi bi-three-dots-vertical"></i>
                  </button>

                  <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                      <a class="dropdown-item text-warning" href="edit.php">
                        <i class="bi bi-pencil me-1"></i>Edit
                      </a>
                    </li>
                    <li>
                      <button class="dropdown-item text-danger"
                        data-bs-toggle="modal"
                        data-bs-target="#delete1">
                        <i class="bi bi-trash me-1"></i>Hapus
                      </button>
                    </li>
                  </ul>
                </div>
              </td>
            </tr>
<?php } ?>
            <!-- Dummy 2 -->
            <tr class="text-center">
              <td>
                <img src="assets/images/destinasi2.jpg"
                  width="80"
                  class="rounded shadow-sm">
              </td>
              <td>2</td>
              <td>Pantai Olele</td>
              <td>Bone Bolango</td>
              <td>Laut</td>
              <td>Rp 10.000</td>
              <td>1 hari lalu</td>
              <td>
                <div class="dropdown">
                  <button class="bg-transparent btn-sm border-0"
                    data-bs-toggle="dropdown">
                    <i class="bi bi-three-dots-vertical"></i>
                  </button>
                  <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                      <a class="dropdown-item text-warning" href="#">
                        <i class="bi bi-pencil me-1"></i>Edit
                      </a>
                    </li>
                    <li>
                      <button class="dropdown-item text-danger"
                        data-bs-toggle="modal"
                        data-bs-target="#delete2">
                        <i class="bi bi-trash me-1"></i>Hapus
                      </button>
                    </li>
                  </ul>
                </div>
              </td>
            </tr>

            <!-- Dummy 3 -->
            <tr class="text-center">
              <td>
                <img src="assets/images/destinasi3.jpg"
                  width="80"
                  class="rounded shadow-sm">
              </td>
              <td>3</td>
              <td>Danau Perintis</td>
              <td>Kabupaten Gorontalo</td>
              <td>Alam</td>
              <td>Gratis</td>
              <td>3 hari lalu</td>
              <td>
                <div class="dropdown">
                  <button class="bg-transparent btn-sm border-0"
                    data-bs-toggle="dropdown">
                    <i class="bi bi-three-dots-vertical"></i>
                  </button>
                  <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                      <a class="dropdown-item text-warning" href="#">
                        <i class="bi bi-pencil me-1"></i>Edit
                      </a>
                    </li>
                    <li>
                      <button class="dropdown-item text-danger"
                        data-bs-toggle="modal"
                        data-bs-target="#delete3">
                        <i class="bi bi-trash me-1"></i>Hapus
                      </button>
                    </li>
                  </ul>
                </div>
              </td>
            </tr>

          </tbody>
        </table>

      </div>
    </div>

    <div class="card-footer text-center text-muted small">
      © 2025 Pariwisata v1.0
    </div>

  </div>
</div>


<?php require '../../layout/footer_admin.php' ?>