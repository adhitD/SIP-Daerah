<?php

require '../databases/proses_auth.php';

if (isset($_POST['masuk'])) {
  login($_POST);
}
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login || Pariwisata Gorontalo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
</head>

<body class="bg-light">

  <div class="container py-5">

    <?php if (isset($_GET['pesan'])) : ?>
      <div class="col-md-6 offset-md-3">
        <div class="alert alert-success d-flex align-items-center mb-4">
          <i class="bi bi-check-circle-fill me-2"></i>
          Registrasi Berhasil, Silahkan Login.
        </div>
      </div>
    <?php endif; ?>

    <?php if (isset($_GET['login'])) : ?>
      <div class="col-md-6 offset-md-3">
        <div class="alert alert-danger alert-dismissible fade show mb-4">
          <i class="bi bi-exclamation-triangle-fill me-2"></i>
          Username atau password salah.
          <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
      </div>
    <?php endif; ?>

    <div class="row justify-content-center">
      <div class="col-12 col-sm-10 col-md-7 col-lg-5">

        <div class="card shadow-sm">
          <div class="card-header text-center">
            <h6 class="m-0">Login</h6>
          </div>

          <div class="card-body">

            <form action="" method="post">

              <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <div class="input-group">
                  <span class="input-group-text">
                    <i class="bi bi-person-fill"></i>
                  </span>
                  <input type="text" id="username" name="username" class="form-control" required autocomplete="off">
                </div>
              </div>

              <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <div class="input-group">
                  <span class="input-group-text">
                    <i class="bi bi-lock-fill"></i>
                  </span>
                  <input type="password" id="password" name="password" class="form-control" required autocomplete="off">
                </div>
              </div>

              <div class="d-grid">
                <button type="submit" name="masuk" class="btn btn-primary">Login</button>
              </div>

            </form>

          </div>

          <div class="card-footer text-end">
            <small class="float-end">Belum Punya Akun? <a href="registrasi.php">Daftar Akun</a></small>
          </div>

        </div>

      </div>
    </div>

  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>