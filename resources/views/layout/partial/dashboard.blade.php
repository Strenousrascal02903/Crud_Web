<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
  
    <link rel="stylesheet" href="dashboard.css">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/dashboard/">

    <!-- Bootstrap core CSS -->
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .nav-link:hover {
        background-color: rgba(0, 0, 0, 0.1); /* Warna latar belakang saat hover */
        color: #fff; /* Warna teks saat hover */
      }
      .active {
        background-color: #007bff; /* Warna latar belakang item saat aktif */
      }

      .active .nav-link {
        color: #fff !important; /* Warna teks item saat aktif */
      }
    </style>

    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">
  </head>
  <body> 
    <div class="container-fluid">
      <div class="row">
        <main class="d-flex flex-nowrap">
          <div class="d-flex flex-column flex-shrink-0 p-3 text-bg-dark" style="width: 280px;">
            <hr>
            <ul class="nav nav-pills flex-column mb-auto">
              <li class="nav-item">
                <a href="/dashboard/student" class="nav-link text-white <?php echo ($_SERVER['REQUEST_URI'] == '/dashboard/student') ? 'active' : ''; ?>" aria-current="page">
                  <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#home"/></svg>
                  Student
                </a>
              </li>
              <li>
                <a href="/dashboard/kelas" class="nav-link text-white <?php echo ($_SERVER['REQUEST_URI'] == '/dashboard/kelas') ? 'active' : ''; ?>">
                  <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#speedometer2"/></svg>
                  Grade
                </a>
              </li>
            </ul>
            <hr>
          </div>

          <main class="col-md-1 ms-sm-auto col-lg-10 px-md-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
              <h1 class="h2">Dashboard</h1>
              <div class="btn-toolbar mb-2 mb-md-0">
                <!-- Tambahan tombol atau elemen lainnya -->
              </div>
            </div>

            <!-- Konten dari halaman -->
            @yield('conten')
          </main>
        </main>
      </div>
    </div>

    <!-- JavaScript dan skrip lainnya -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="dashboard.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script>
  </body>
</html>
