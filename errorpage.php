<?php
    session_start();
    if (!isset($_SESSION['errorMessages'])) //unauthorized
	{
        header('location:index.html');
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Title -->
  <title>Zyno - Finance, Wallet, Crypto</title>

  <!-- Required Meta Tags Always Come First -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Favicon -->
  <link rel="apple-touch-icon" sizes="180x180" href="./assets/img/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="./assets/img/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="./assets/img/favicon-16x16.png">
  <link rel="manifest" href="./assets/img/site.webmanifest">

  <!-- Font -->
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">

  <!-- CSS Implementing Plugins -->
  <link rel="stylesheet" href="./assets/vendor/fontawesome/css/all.min.css">

  <!-- CSS Template -->
  <link rel="stylesheet" href="./assets/css/theme.min.css">
</head>
<body class="bg-img-hero-fixed" style="background-image: url(./assets/svg/illustrations/error-404.svg);">
  <!-- ========== HEADER ========== -->
  <header id="header" class="header header-bg-transparent header-abs-top py-3">
    <div class="header-section">
      <div id="logoAndNav" class="container">
        <nav class="navbar">
          <a class="navbar-brand" href="index.html" aria-label="Zyno">
            <h2>Zyno</h2>
          </a>
        </nav>
      </div>
    </div>
  </header>
  <!-- ========== END HEADER ========== -->

  <!-- ========== MAIN ========== -->
  <main id="content" role="main">
    <!-- Hero Section -->
    <div class="d-lg-flex">
      <div class="container d-lg-flex align-items-lg-center min-vh-lg-100 space-4">
        <div class="w-lg-60 w-xl-50">
          <!-- Title -->
          <div class="mb-4">
            <img class="max-w-23rem mb-3" src="./assets/svg/illustrations/error-number-400.svg" alt="SVG Illustration">
            <p class="lead">Oops! Looks like you entered invalid entries. 
              <br> Please see below for correction:</p>
              <div class="alert alert-warning" role="alert">
               <?php echo  $_SESSION['errorMessages']; ?>
              </div>
            </div>
          <!-- End Title -->

          <a class="btn btn-wide btn-primary transition-3d-hover" href="./index.html">Back Home</a>
        </div>
      </div>
    </div>
    <!-- End Hero Section -->
  </main>
  <!-- ========== END MAIN ========== -->

  <!-- ========== FOOTER ========== -->
  <footer class="position-absolute right-0 bottom-0 left-0">
    <div class="container">
      <div class="d-flex justify-content-between align-items-center space-1">
        <!-- Copyright -->
        <p class="small text-muted mb-0">&copy; Zyno Limited. All rights reserved</p>
        <!-- End Copyright -->
      </div>
    </div>
  </footer>
  <!-- ========== END FOOTER ========== -->

  <!-- JS Global Compulsory  -->
  <script src="./assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="./assets/vendor/jquery-migrate/dist/jquery-migrate.min.js"></script>
  <script src="./assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

  <!-- JS Implementing Plugins -->

  <!-- JS Front -->
  <script src="./assets/js/theme.min.js"></script>

  <!-- IE Support -->
  <script>
    if (/MSIE \d|Trident.*rv:/.test(navigator.userAgent)) document.write('<script src="./assets/vendor/babel-polyfill/dist/polyfill.js"><\/script>');
  </script>
</body>
</html>