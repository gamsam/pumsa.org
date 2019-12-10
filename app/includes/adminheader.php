<?php $page = basename($_SERVER['PHP_SELF']); ?>
<!-- <?php include_once('../../path.php'); ?> -->

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title><?= isset($PageTitle) ? $PageTitle : "Default Title" ?></title>
  <?php if (function_exists('customPageHeader')) {
    customPageHeader();
  } ?>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="pumsa, port harcourt, university, medical, students, association, pumsa.org" name="keywords">
  <meta content="Official website of the Port Harcourt University Medical Students Association, events news" name="description">

  <!-- Favicons -->
  <link href="<?php echo BASE_URL . '/img/favicon.png' ?>" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="<?php echo BASE_URL . '/lib/bootstrap/css/bootstrap.min.css' ?>" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="<?php echo BASE_URL . '/lib/font-awesome/css/font-awesome.min.css' ?>" rel="stylesheet">
  <link href="<?php echo BASE_URL . '/lib/animate/animate.min.css' ?>" rel="stylesheet">
  <link href="<?php echo BASE_URL . '/lib/ionicons/css/ionicons.min.css' ?>" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="<?php echo BASE_URL . '/css/style.css' ?>" rel="stylesheet">
  <link href="<?php echo BASE_URL . '/css/admin.css' ?>" rel="stylesheet">

  <!-- CKEditor -->
  <script src="https://cdn.ckeditor.com/ckeditor5/16.0.0/classic/ckeditor.js"></script>

</head>

<body>

  <!--/ Nav Star /-->
  <nav class="navbar navbar-default navbar-trans navbar-expand-lg">
    <div class="container">

      <a href="<?php echo BASE_URL . '/index.php' ?>" class="pull-left navbar-brand"><img src="<?php echo BASE_URL . '/img/logo.png' ?>" alt="PUMSA Logo" style="height: 40px"></a>
      <a class="navbar-brand text-brand" href="<?php echo BASE_URL . '/index.php' ?>">PUMSA Admin Page</a>

      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault" aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>

      <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="<?php echo BASE_URL . '/index.php' ?>">Home </a>
          </li>

          <?php if (isset($_SESSION['id'])) : ?>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fa fa-user" style="color: #008dc9"></i>
                <?php echo $_SESSION['username']; ?>
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="<?php echo BASE_URL . '/logout.php' ?>">Logout</a>
              </div>
            </li>
          <?php else : ?>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fa fa-user" style="color: #008dc9"></i>
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="<?php echo BASE_URL . '/signup.php' ?>">Sign Up</a>
                <a class="dropdown-item" href="<?php echo BASE_URL . '/login.php' ?>">Login</a>
              </div>
            </li>
          <?php endif; ?>
        </ul>
      </div>
    </div>
  </nav>
  <!--/ Nav End /-->


  <?php include(ROOT_PATH . '/app/includes/messages.php'); ?>