<?php $page = basename($_SERVER['PHP_SELF']); ?>

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
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700&display=swap" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="<?php echo BASE_URL . '/lib/combined.min.css' ?>" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="<?php echo BASE_URL . '/css/style.css' ?>" rel="stylesheet">
  <link href="<?php echo BASE_URL . '/css/blogstyle.css' ?>" rel="stylesheet">

  <!-- Fancy Box -->
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.4.1/dist/jquery.min.js"></script>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
  <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>


  <!-- Start of Tawk.to Script -->
  <script type="text/javascript">
    var Tawk_API = Tawk_API || {},
      Tawk_LoadStart = new Date();
    (function() {
      var s1 = document.createElement("script"),
        s0 = document.getElementsByTagName("script")[0];
      s1.async = true;
      s1.src = 'https://embed.tawk.to/5dda2d20d96992700fc8f332/default';
      s1.charset = 'UTF-8';
      s1.setAttribute('crossorigin', '*');
      s0.parentNode.insertBefore(s1, s0);
    })();
  </script>
  <!--End of Tawk.to Script -->

</head>

<body>

  <!--/ Nav Star /-->
  <nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">
    <div class="container">

      <a href="index.php" class="pull-left navbar-brand"><img src="img/logo.png" alt="PUMSA Logo" style="height: 40px"></a>
      <a class="navbar-brand text-brand" href="index.php">PUMSA</a>

      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault" aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>

      <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link <?php if ($page == 'index.php') {
                                  echo ' active"';
                                } ?>" href="index.php">Home </a>
          </li>

          <li class="nav-item">
            <a class="nav-link <?php if ($page == 'yellowpage.php') {
                                  echo ' active"';
                                } ?>" href="yellowpage.php"> <span class="blink" style="color: #f4ca16;"> Yellow Page</span></a>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle <?php if ($page == 'history.php' || $page == 'profile.php' || $page == 'principles.php' || $page == 'executives.php' || $page == 'senate.php') {
                                                  echo ' active"';
                                                } ?>" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Our Association
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="history.php">History</a>
              <a class="dropdown-item" href="profile.php">Profile</a>
              <a class="dropdown-item" href="principles.php">Working Principles</a>
              <a class="dropdown-item" href="executives.php">Executive Council</a>
              <a class="dropdown-item" href="senate.php">PUMSA Senate</a>
            </div>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle <?php if ($page == 'newsletter.php' || $page == 'minutes.php' || $page == 'reports.php' || $page == 'election.php') {
                                                  echo ' active"';
                                                } ?>" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Publications
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="newsletter.php">Newsletters</a>
              <a class="dropdown-item" href="minutes.php">Minutes</a>
              <a class="dropdown-item" href="reports.php">Reports</a>
              <a class="dropdown-item" href="election.php">Election Results</a>
            </div>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle <?php if ($page == 'live.php' || $page == 'gallery.php' || $page == 'gallery2.php' || $page == 'news.php' || $page == 'blog.php' || $page == 'events.php') {
                                                  echo ' active"';
                                                } ?>" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Media Center
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="blog.php">Blog</a>
              <a class="dropdown-item" href="live.php">Live</a>
              <a class="dropdown-item" href="gallery.php">Gallery</a>
              <a class="dropdown-item" href="news.php">News</a>
              <a class="dropdown-item" href="events.php">Events</a>
            </div>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle <?php if ($page == 'textbooks.php' || $page == 'pq.php') {
                                                  echo ' active"';
                                                } ?>" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Academics
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="textbooks.php">Textbooks</a>
              <a class="dropdown-item" href="pq.php">Past Questions</a>
            </div>
          </li>

          <li class="nav-item">
            <a class="nav-link <?php if ($page == 'contact.php') {
                                  echo ' active"';
                                } ?>" href="contact.php">Contact</a>
          </li>


          <?php if (isset($_SESSION['id'])) : ?>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle <?php if ($page == 'dashboard.php' || $page == 'logout.php') {
                                                    echo ' active"';
                                                  } ?>" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fa fa-user" style="color: #008dc9"></i>
                <?php echo $_SESSION['username']; ?>
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">

                <?php if ($_SESSION['admin']) : ?>
                  <a class="dropdown-item" href="<?php echo BASE_URL . '/admin/dashboard.php' ?>">Dashboard</a>
                <?php endif; ?>

                <a class="dropdown-item" href="<?php echo BASE_URL . '/logout.php' ?>">Logout</a>
              </div>
            </li>
          <?php else : ?>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle <?php if ($page == 'signup.php' || $page == 'login.php') {
                                                    echo ' active"';
                                                  } ?>" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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