<?php require '../../layout/header_admin.php'; ?>

<div class="container mt-5">

  <div class="d-flex justify-content-between align-items-center mb-4">
    <h2 class="fw-bold"><i class="bi bi-shop-window text-success"></i> Daftar Kuliner</h2>
    <a href="create.php" class="btn btn-primary">
      <i class="bi bi-plus-lg me-1"></i> Tambah Kuliner
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
              <th>Bahan</th>
              <th>Kategori</th>
              <th>Deskripsi</th>
              <th>Aksi</th>
            </tr>
          </thead>

          <tbody>

            <!-- Dummy 1 -->
            <tr class="text-center">
              <td>
                <img src="assets/images/kuliner1.jpg"
                  width="80"
                  class="rounded shadow-sm">
              </td>
              <td>1</td>
              <td>Binte Biluhuta</td>
              <td>Jagung, udang, ikan, bawang</td>
              <td>Hidangan Adat</td>
              <td>Sup jagung khas Gorontalo</td>
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

            <!-- Dummy 2 -->
            <tr class="text-center">
              <td>
                <img src="assets/images/kuliner2.jpg"
                  width="80"
                  class="rounded shadow-sm">
              </td>
              <td>2</td>
              <td>Ilabulo</td>
              <td>Hati ayam, sagu, rempah</td>
              <td>Makanan Favorit</td>
              <td>Makanan seperti pepes berbahan sagu</td>
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
                <img src="assets/images/kuliner3.jpg"
                  width="80"
                  class="rounded shadow-sm">
              </td>
              <td>3</td>
              <td>Perkedel Nike</td>
              <td>Ikan nike, tepung, bawang</td>
              <td>Makanan Lainnya</td>
              <td>Gorengan ikan nike khas Gorontalo</td>
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
      © 2025 Kuliner v1.0
    </div>

  </div>
</div>

<?php require '../../layout/footer_admin.php'; ?>