<?php require '../../layout/header_admin.php'; ?>

<div class="container mt-5">

  <div class="d-flex justify-content-between align-items-center mb-4">
    <h2 class="fw-bold"><i class="bi bi-calendar-event text-primary me-2"></i>List Event</h2>
    <a href="create.php" class="btn btn-primary">
      <i class="bi bi-plus-lg me-1"></i> Tambah Event
    </a>
  </div>

  <div class="card shadow-sm">
    <div class="card-body p-0">
      <div class="table-responsive">

        <table class="table table-striped table-hover mb-0">
          <thead class="table-primary">
            <tr class="text-center">
              <th>No</th>
              <th>Nama Event</th>
              <th>Tanggal</th>
              <th>Lokasi</th>
              <th>Keterangan</th>
              <th>Updated at</th>
              <th>Aksi</th>
            </tr>
          </thead>

          <tbody>

            <!-- Dummy 1 -->
            <tr class="text-center">
              <td>1</td>
              <td>Festival Danau Limboto</td>
              <td>2025-06-12</td>
              <td>Kabupaten Gorontalo</td>
              <td>Perlombaan perahu dan bazar UMKM</td>
              <td>3 jam lalu</td>
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
              <td>2</td>
              <td>Gorontalo Marathon</td>
              <td>2025-08-21</td>
              <td>Kota Gorontalo</td>
              <td>Event lari skala nasional</td>
              <td>2 hari lalu</td>
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
              <td>3</td>
              <td>Festival Karawo</td>
              <td>2025-10-05</td>
              <td>Kota Gorontalo</td>
              <td>Pameran seni dan pakaian motif karawo</td>
              <td>1 minggu lalu</td>
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

<?php require '../../layout/footer_admin.php'; ?>