<?php
include './koneksi/koneksi.php';
// panggil tabel untuk data 2025
                    $panggil1=mysqli_query($koneksi, "SELECT a.kode_alat, a.nama_alat, a.tipe_alat, a.merek, a.gambar_alat, s.tgl_kalibrasi, s.kal_next FROM t_alat a LEFT JOIN t_bmn b ON a.kode_alat = b.kode_alat LEFT JOIN t_serti s ON b.kode_bmn = s.kode_bmn WHERE YEAR(s.tgl_kalibrasi) = 2025;");
                    $total_data1 = mysqli_num_rows($panggil1);

// panggil tabel untuk data 2026
                    $panggil2=mysqli_query($koneksi, "SELECT a.kode_alat, a.nama_alat, a.tipe_alat, a.merek, a.gambar_alat, s.tgl_kalibrasi, s.kal_next FROM t_alat a LEFT JOIN t_bmn b ON a.kode_alat = b.kode_alat LEFT JOIN t_serti s ON b.kode_bmn = s.kode_bmn WHERE YEAR(s.kal_next) = 2026;");
                    $total_data2 = mysqli_num_rows($panggil2);

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta content="Codescandy" name="author">
  <title>Dasher Free - Responsive Bootstrap 5 Admin Dashboard</title>
  <link rel="stylesheet" href="./assets/libs/swiper/swiper-bundle.min.css" />
  <!-- Favicon icon-->
<!-- <link rel="apple-touch-icon" sizes="57x57" href="./assets/images/favicon/apple-icon-57x57.png" />
<link rel="apple-touch-icon" sizes="60x60" href="./assets/images/favicon/apple-icon-60x60.png" />
<link rel="apple-touch-icon" sizes="72x72" href="./assets/images/favicon/apple-icon-72x72.png" />
<link rel="apple-touch-icon" sizes="76x76" href="./assets/images/favicon/apple-icon-76x76.png" />
<link rel="apple-touch-icon" sizes="114x114" href="./assets/images/favicon/apple-icon-114x114.png" />
<link rel="apple-touch-icon" sizes="120x120" href="./assets/images/favicon/apple-icon-120x120.png" />
<link rel="apple-touch-icon" sizes="144x144" href="./assets/images/favicon/apple-icon-144x144.png" />
<link rel="apple-touch-icon" sizes="152x152" href="./assets/images/favicon/apple-icon-152x152.png" />
<link rel="apple-touch-icon" sizes="180x180" href="./assets/images/favicon/apple-icon-180x180.png" />
<link rel="icon" type="image/png" sizes="192x192" href="./assets/images/favicon/android-icon-192x192.png" />
<link rel="icon" type="image/png" sizes="32x32" href="./assets/images/favicon/favicon-32x32.png" />
<link rel="icon" type="image/png" sizes="96x96" href="./assets/images/favicon/favicon-96x96.png" /> -->
<link rel="icon" type="image/png" sizes="16x16" href="././foto/logo.png" />

<meta name="msapplication-TileColor" content="#ffffff" />
<meta name="msapplication-TileImage" content="./assets/images/favicon/ms-icon-144x144.png" />
<meta name="theme-color" content="#ffffff" />
<!-- Color modes -->
<script src="./assets/js/vendors/color-modes.js"></script>
<script>
  if (localStorage.getItem('sidebarExpanded') === 'false') {
    document.documentElement.classList.add('collapsed');
    document.documentElement.classList.remove('expanded');
  } else {
    document.documentElement.classList.remove('collapsed');
    document.documentElement.classList.add('expanded');
  }
</script>
<!-- Libs CSS -->
<link rel="preconnect" href="https://fonts.googleapis.com" />
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@300;400;500;600;700;800&display=swap" />
<link rel="stylesheet" href="./assets/libs/simplebar/dist/simplebar.min.css" />
<link rel="stylesheet" href="./assets/libs/@tabler/icons-webfont/tabler-icons.min.css" />

<!-- Theme CSS -->
<link rel="stylesheet" href="./assets/css/theme.min.css">

</head>

<body>
  <!-- Vertical Sidebar -->
  <div>
    <div id="miniSidebar">
  <div class="brand-logo">
    <a class="d-none d-md-flex align-items-center gap-2" href="./dashboard.php">
      <img src="../foto/logo.png" style="height:60px;" alt="" />
      <span class="fw-bold fs-2  site-logo-text">DIRiKAL</span>
    </a>
  </div>
  <ul class="navbar-nav flex-column  ">


    <!-- Nav item -->
    <li class="nav-item">
      <a class="nav-link" href="./dashboard.php"><span class="nav-icon"><svg xmlns="http://www.w3.org/2000/svg"
            width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
            stroke-linecap="round" stroke-linejoin="round"
            class="icon icon-tabler icons-tabler-outline icon-tabler-shopping-bag">
            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
            <path
              d="M6.331 8h11.339a2 2 0 0 1 1.977 2.304l-1.255 8.152a3 3 0 0 1 -2.966 2.544h-6.852a3 3 0 0 1 -2.965 -2.544l-1.255 -8.152a2 2 0 0 1 1.977 -2.304z" />
            <path d="M9 11v-5a3 3 0 0 1 6 0v5" />
          </svg></span> <span class="text">DASHBOARD</span></a>
    </li>





    <li class="nav-item">
      <div class="nav-heading">Pages</div>
      <hr class="mx-5 nav-line mb-1" />
    </li>
    <!-- Nav item -->
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        <span class="nav-icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
            stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
            class="icon icon-tabler icons-tabler-outline icon-tabler-file">
            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
            <path d="M14 3v4a1 1 0 0 0 1 1h4" />
            <path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z" />
          </svg>
        </span>
        <span class="text">DIRiKAL</span>
      </a>
      <ul class="dropdown-menu flex-column">



        <li class="nav-item">
          <a class="nav-link" href="daftaralat.php">Daftar Alat</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="users.php">Users</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="rekapt.php">Rekapitulasi Sertifikat</a>
        </li>
      </ul>
    </li>
    <!-- Nav item -->
    







    <!-- Nav item -->
    
    <!-- Nav item -->
    
    
    

  </ul>

<!-- awal penutup div nonaktif biar halaman yang dipanggil tidak terpisah atau berjarak -->
<!-- </div> -->
<!-- akhir penutup div nonaktif biar halaman yang dipanggil tidak terpisah atau berjarak -->

<!-- pembuka salah jadi dihapus -->

<!-- penutup salah jadi dihapus -->

    <!-- awal Main Content -->
    <div id="content" class="position-relative h-100">
      <!-- awal navbar -->
<div class="navbar-glass navbar navbar-expand-lg px-0 px-lg-4" tabindex="-1">
  <div class="container-fluid px-lg-0">
    <div class="d-flex align-items-center gap-4">
      <!-- Collapse -->
      <div class="d-block d-lg-none">
        <a class="text-inherit" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button"
          aria-controls="offcanvasExample">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
            class="icon icon-tabler icons-tabler-outline icon-tabler-menu-2">
            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
            <path d="M4 6l16 0" />
            <path d="M4 12l16 0" />
            <path d="M4 18l16 0" />
          </svg>
        </a>
      </div>
      <div class="d-none d-lg-block">
        <a class="sidebar-toggle d-flex texttooltip p-3" href="javascript:void(0)" data-template="collapseMessage">
          <span class="collapse-mini">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
              stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
              class="icon icon-tabler icons-tabler-outline icon-tabler-arrow-bar-left text-secondary">
              <path stroke="none" d="M0 0h24v24H0z" fill="none" />
              <path d="M4 12l10 0" />
              <path d="M4 12l4 4" />
              <path d="M4 12l4 -4" />
              <path d="M20 4l0 16" />
            </svg>
          </span>
          <span class="collapse-expanded">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
              stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
              class="icon icon-tabler icons-tabler-outline icon-tabler-arrow-bar-right text-secondary">
              <path stroke="none" d="M0 0h24v24H0z" fill="none" />
              <path d="M20 12l-10 0" />
              <path d="M20 12l-4 4" />
              <path d="M20 12l-4 -4" />
              <path d="M4 4l0 16" />
            </svg>
            <div id="collapseMessage" class="d-none">
              <span class="small">Collapse</span>
            </div>
          </span>
        </a>
      </div>
      <!-- Logo -->
      <!-- <div class="d-block d-md-none">
        <a href="./index.html">
          <img src="./assets/images/brand/logo/logo-icon.svg" alt="" />
        </a>
      </div> -->
    </div>

    <!-- Navbar nav -->
    <ul class="list-unstyled d-flex align-items-center mb-0 gap-2">
      <!-- Pages link -->
      <li>
        <button type="button" class="btn btn-white" data-bs-toggle="modal" data-bs-target="#searchModal">
          <span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
              stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
              class="icon icon-tabler icons-tabler-outline icon-tabler-search">
              <path stroke="none" d="M0 0h24v24H0z" fill="none" />
              <circle cx="10" cy="10" r="7" />
              <line x1="21" y1="21" x2="15" y2="15" />
            </svg>
          </span>
          <small class="ms-1">⌘K</small>
        </button>
        <!-- Modal -->
      </li>
      <!-- Light dark mode-->
      <li>
        <div class="dropdown">
          <button class="btn btn-ghost btn-icon rounded-circle d-flex align-items-center" type="button"
            aria-expanded="false" data-bs-toggle="dropdown" aria-label="Toggle theme (auto)">
            <i class="ti theme-icon-active lh-1 fs-5"><i class="ti theme-icon ti-sun"></i></i>
            <span class="visually-hidden bs-theme-text">Toggle theme</span>
          </button>
          <ul class="dropdown-menu dropdown-menu-end shadow">
            <li>
              <button type="button" class="dropdown-item d-flex align-items-center active" data-bs-theme-value="light"
                aria-pressed="true">
                <i class="ti theme-icon ti ti-sun"></i>
                <span class="ms-2">Light</span>
              </button>
            </li>
            <li>
              <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="dark"
                aria-pressed="false">
                <i class="ti theme-icon ti-moon-stars"></i>
                <span class="ms-2">Dark</span>
              </button>
            </li>
            <li>
              <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="auto"
                aria-pressed="false">
                <i class="ti theme-icon ti-circle-half-2"></i>
                <span class="ms-2">Auto</span>
              </button>
            </li>
          </ul>
        </div>
      </li>
      <!-- Dropdown -->
      <!-- <li class="ms-3 dropdown">
        <a href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          <img src="./assets/images/avatar/avatar-1.jpg" alt="" class="avatar avatar-sm rounded-circle" />
        </a>
        <div class="dropdown-menu dropdown-menu-end dropdown-menu-md p-0">
          <div>
            <div class="d-flex gap-3 align-items-center border-dashed border-bottom px-4 py-4">
              <img src="./assets/images/avatar/avatar-1.jpg" alt="" class="avatar avatar-md rounded-circle" />
              <div>
                <h4 class="mb-0 fs-5">Jitu Chauhan</h4>
                <p class="mb-0 text-secondar small">@imjituchauhan</p>
              </div>
            </div>
            <div class="p-3 d-flex flex-column gap-1">
              <a href="#!" class="dropdown-item d-flex align-items-center gap-2">
                <span><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
                    class="icon icon-tabler icons-tabler-outline icon-tabler-home-2">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M5 12l-2 0l9 -9l9 9l-2 0" />
                    <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" />
                    <path d="M10 12h4v4h-4z" />
                  </svg>
                </span>
                <span>Home</span>
              </a>
              <a href="#!" class="dropdown-item d-flex align-items-center gap-2">
                <span><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
                    class="icon icon-tabler icons-tabler-outline icon-tabler-inbox">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M4 4m0 2a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2z" />
                    <path d="M4 13h3l3 3h4l3 -3h3" />
                  </svg>
                </span>
                <span> Inbox</span>
              </a>
              <a href="#!" class="dropdown-item d-flex align-items-center gap-2">
                <span><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
                    class="icon icon-tabler icons-tabler-outline icon-tabler-message">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M8 9h8" />
                    <path d="M8 13h6" />
                    <path
                      d="M18 4a3 3 0 0 1 3 3v8a3 3 0 0 1 -3 3h-5l-5 3v-3h-2a3 3 0 0 1 -3 -3v-8a3 3 0 0 1 3 -3h12z" />
                  </svg>
                </span>
                <span> Chat</span>
              </a>
              <a href="#!" class="dropdown-item d-flex align-items-center gap-2">
                <span><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
                    class="icon icon-tabler icons-tabler-outline icon-tabler-activity">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M3 12h4l3 8l4 -16l3 8h4" />
                  </svg>
                </span>
                <span> Activity</span>
              </a>
              <a href="#!" class="dropdown-item d-flex align-items-center gap-2">
                <span><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
                    class="icon icon-tabler icons-tabler-outline icon-tabler-settings">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path
                      d="M10.325 4.317c.426 -1.756 2.924 -1.756 3.35 0a1.724 1.724 0 0 0 2.573 1.066c1.543 -.94 3.31 .826 2.37 2.37a1.724 1.724 0 0 0 1.065 2.572c1.756 .426 1.756 2.924 0 3.35a1.724 1.724 0 0 0 -1.066 2.573c.94 1.543 -.826 3.31 -2.37 2.37a1.724 1.724 0 0 0 -2.572 1.065c-.426 1.756 -2.924 1.756 -3.35 0a1.724 1.724 0 0 0 -2.573 -1.066c-1.543 .94 -3.31 -.826 -2.37 -2.37a1.724 1.724 0 0 0 -1.065 -2.572c-1.756 -.426 -1.756 -2.924 0 -3.35a1.724 1.724 0 0 0 1.066 -2.573c-.94 -1.543 .826 -3.31 2.37 -2.37c1 .608 2.296 .07 2.572 -1.065z" />
                    <path d="M9 12a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" />
                  </svg>
                </span>
                <span> Account Settings</span>
              </a>
            </div>
            <div class="border-dashed border-top mb-4 pt-4 px-6">
              <a href="#!" class="text-secondary d-flex align-items-center gap-2">
                <span>
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
                    class="icon icon-tabler icons-tabler-outline icon-tabler-login-2">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M9 8v-2a2 2 0 0 1 2 -2h7a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-7a2 2 0 0 1 -2 -2v-2" />
                    <path d="M3 12h13l-3 -3" />
                    <path d="M13 15l3 -3" />
                  </svg>
                </span>
                <span>Logout</span></a>
            </div>
          </div>
        </div>
      </li> -->
    </ul>
  </div>
</div>
      <!-- akhir navbar -->
<!-- awal Modal of pages untuk cari -->
<div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="searchModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header border-0">
        <input type="search" class="form-control border-0 rounded-0 ps-0 form-focus-none" id="globalSearchInput"
          placeholder="Search any word..." aria-label="Search" aria-describedby="search-addon" />
        <button type="button" class="btn btn-white btn-sm" data-bs-dismiss="modal" aria-label="Close">Esc</button>
      </div>

    </div>
  </div>
</div>
<!-- akhir modal of pages untuk cari -->

      <!-- container isi halaman -->
      
      <!-- akhir container isi halaman -->

    </div>
    <!-- akhir main content -->

  </div>

  <!-- Libs JS -->
<script src="./assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="./assets/libs/simplebar/dist/simplebar.min.js"></script>

<!-- Theme JS -->
<script src="./assets/js/theme.min.js"></script>

  <!-- jsvectormap -->
  <script src="./assets/js/vendors/sidebarnav.js"></script>
  <script src="./assets/libs/jsvectormap/dist/js/jsvectormap.min.js"></script>
  <script src="./assets/libs/jsvectormap/dist/maps/world.js"></script>
  <script src="./assets/libs/jsvectormap/dist/maps/world-merc.js"></script>
  <script src="./assets/libs/apexcharts/dist/apexcharts.min.js"></script>
  <script src="./assets/js/vendors/chart.js"></script>
  <script src="./assets/libs/choices.js/public/assets/scripts/choices.min.js"></script>
  <script src="./assets/js/vendors/choice.js"></script>
  <script src="./assets/libs/swiper/swiper-bundle.min.js"></script>
  <script src="./assets/js/vendors/swiper.js"></script>
</body>

</html>