<?php
require '../databases/proses_auth.php';

if (isset($_POST['regis'])) {
  register($_POST);
}
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Registrasi || Pariwisata Gorontalo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
</head>

<body class="bg-light">

  <div class="container py-4">

    <?php if (isset($_GET['pesan'])) : ?>
      <div class="col-md-6 offset-md-3">
        <div class="alert alert-danger alert-dismissible fade show mb-4">
          <i class="bi bi-exclamation-triangle-fill me-2"></i>
          Akun atau Username telah digunakan.
          <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
      </div>
    <?php endif; ?>

    <div class="row justify-content-center">
      <div class="col-12 col-sm-10 col-md-7 col-lg-5">
        <div class="card shadow-sm">

          <div class="card-header text-center">
            <h6 class="mb-0">Registrasi</h6>
          </div>

          <div class="card-body">

            <form action="" method="post">

              <div class="mb-3">
                <label for="nama" class="form-label">Nama Lengkap</label>
                <div class="input-group">
                  <span class="input-group-text"><i class="bi bi-person-circle"></i></span>
                  <input type="text" class="form-control" name="nama" autocomplete="off" id="nama">
                </div>
              </div>

              <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <div class="input-group">
                  <span class="input-group-text"><i class="bi bi-person-fill"></i></span>
                  <input type="text" class="form-control" name="username" autocomplete="off" id="username" required>
                </div>
              </div>

              <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <div class="input-group">
                  <span class="input-group-text"><i class="bi bi-envelope-fill"></i></span>
                  <input type="email" class="form-control" name="email" autocomplete="off" id="email">
                </div>
              </div>

              <div class="mb-3">
                <label for="notelp" class="form-label">No. Telp</label>
                <div class="input-group">
                  <span class="input-group-text"><i class="bi bi-telephone-fill"></i></span>
                  <input type="text" class="form-control" name="notelp" autocomplete="off" id="notelp">
                </div>
              </div>

              <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <div class="input-group">
                  <span class="input-group-text"><i class="bi bi-lock-fill"></i></span>
                  <input type="password" class="form-control" name="password" id="password" required>
                </div>
              </div>

              <div class="d-grid col-6 mx-auto">
                <button type="submit" class="btn btn-primary" name="regis">Registrasi</button>
              </div>

            </form>

          </div>

          <div class="card-footer text-end">
            <small>Sudah punya akun? <a href="login.php">Login</a></small>
          </div>

        </div>
      </div>

    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>