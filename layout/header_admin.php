<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin || Pariwisata Gorontalo</title>

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <link rel="stylesheet" href="../style.css">
</head>

<body>


  <!-- Sidebar -->
  <div class="sidebar" id="sidebarMenu">
    <div class="d-flex align-items-center mb-4">
      <i class="bi bi-globe-asia-australia fs-3 me-2 text-primary"></i>
      <span class="fs-4 fw-bold">Admin</span>
    </div>

    <nav class="nav flex-column">
      <a href="../index.php" class="nav-link ">
        <i class="bi bi-speedometer2 me-2"></i> Dashboard
      </a>
      <a href="../destinasi/index.php" class="nav-link">
        <i class="bi bi-geo-alt me-2"></i> Destinasi
      </a>

      <a href="../kuliner/index.php" class="nav-link">
        <i class="bi bi-shop me-2"></i> Kuliner
      </a>

      <a href="../event/index.php" class="nav-link">
        <i class="bi bi-calendar-event me-2"></i> Event
      </a>
    </nav>

    <form action="../auth/logout.php" method="POST" class="ps-2">
      <button type="submit" class="nav-link btn btn-link text-danger p-0 text-start">
        <i class="bi bi-box-arrow-right me-2"></i> Logout
      </button>
    </form>


    <div class="mt-0 small text-muted ps-2">
      © 2025 Pariwisata v1.0
    </div>
  </div>


  <!-- Overlay (muncul hanya di mobile) -->
  <div class="sidebar-overlay" id="sidebarOverlay"></div>

  <!-- Main Content -->
  <div class="main-content">

    <!-- NAVBAR -->
    <nav class="navbar navbar-custom d-flex justify-content-between align-items-center">
      <div class="d-flex align-items-center">
        <!-- ✅ Burger Menu -->
        <button class="btn bg-transparent border-0 me-3" id="menuToggle">
          <i class="bi bi-list fs-3"></i>
        </button>

        <input type="text" class="form-control d-none d-md-block" placeholder="🔍 Cari Destinasi atau Kuliner..." style="width: 300px;">
      </div>

      <div class="d-flex align-items-center">
        <!-- Notifikasi -->
        <button class="btn bg-transparent position-relative me-3 border-0">
          <i class="bi bi-bell fs-4"></i>
          <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">3</span>
        </button>

        <!-- Dropdown Profil -->
        <div class="dropdown">
          <a href="#" class="d-flex align-items-center text-decoration-none" id="profileDropdown" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="../../assets/images/ayam iloni.png" alt="profile" class="rounded-circle me-2" width="40" height="40" />
            <div class="d-none d-sm-block text-start">
              Sarjan
            </div>
          </a>

          <!-- Isi Dropdown -->
          <ul class="dropdown-menu dropdown-menu-end shadow border-0 p-2 rounded-3" aria-labelledby="profileDropdown" style="min-width: 240px">
            <li class="border-bottom pb-3 mb-2 px-3">
              <div class="d-flex align-items-center gap-3">
                <img src="../../assets/images/ayam iloni.png" class="rounded-circle" width="60" height="60" alt="profile" />
                <div>
                  <h6 class="mb-0 fw-semibold">Sarjan Nusuri</h6>
                  <small class="text-muted">Admin</small>
                </div>
              </div>
            </li>
            <li>
              <a class="dropdown-item d-flex align-items-center py-2" href="http://127.0.0.1:8000/myProfile"> <i class="bi bi-person me-2 fs-5"></i> My Profile </a>
            </li>
            <li>
              <a class="dropdown-item d-flex align-items-center py-2" href="#"> <i class="bi bi-gear me-2 fs-5"></i> Settings </a>
            </li>
            <li>
              <hr class="dropdown-divider" />
            </li>
            <li>
              <form action="../auth/logout.php" method="POST" class="mt-3">
                <input type="hidden" name="_token" value="wgJRloRbRy0fr26B0wEY12YbxHPgmtfEmaGwLIa6" autocomplete="off"> <button type="submit" class="dropdown-item d-flex align-items-center text-danger pl-5">
                  <i class="bi bi-box-arrow-right me-2"></i>Log Out </a>
                </button>
              </form>
            </li>
          </ul>
        </div>
      </div>

    </nav>