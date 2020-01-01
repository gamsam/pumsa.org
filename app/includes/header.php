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
  <script defer src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>


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

<body class="no-scroll-y">

  <!-- Preloader -->

  <style>
    .no-scroll-y {
      overflow-y: hidden;
    }

    .text-center {
      text-align: center;
    }

    .ctn-preloader {
      -webkit-box-align: center;
      -ms-flex-align: center;
      align-items: center;
      cursor: default;
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      height: 100%;
      -webkit-box-pack: center;
      -ms-flex-pack: center;
      justify-content: center;
      position: fixed;
      left: 0;
      top: 0;
      width: 100%;
      z-index: 9000;
    }

    .ctn-preloader .animation-preloader {
      z-index: 1000;
    }

    .ctn-preloader .animation-preloader .spinner {
      -webkit-animation: spinner 1s infinite linear;
      animation: spinner 1s infinite linear;
      border-radius: 50%;
      border: 3px solid rgba(0, 141, 201, 0.2);
      border-top-color: #008dc9;
      height: 9em;
      margin: 0 auto 3.5em auto;
      width: 9em;
    }

    .ctn-preloader .animation-preloader .txt-loading {
      font: bold 5em 'Poppins', sans-serif;
      text-align: center;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
    }

    .ctn-preloader .animation-preloader .txt-loading .letters-loading {
      color: rgba(0, 141, 201, 0.3);
      position: relative;
    }

    .ctn-preloader .animation-preloader .txt-loading .letters-loading:before {
      -webkit-animation: letters-loading 4s infinite;
      animation: letters-loading 4s infinite;
      color: #008dc9;
      content: attr(data-text-preloader);
      left: 0;
      opacity: 0;
      font-family: 'Poppins', sans-serif;
      position: absolute;
      top: -3px;
      -webkit-transform: rotateY(-90deg);
      transform: rotateY(-90deg);
    }

    .ctn-preloader .animation-preloader .txt-loading .letters-loading:nth-child(2):before {
      -webkit-animation-delay: 0.2s;
      animation-delay: 0.2s;
    }

    .ctn-preloader .animation-preloader .txt-loading .letters-loading:nth-child(3):before {
      -webkit-animation-delay: 0.4s;
      animation-delay: 0.4s;
    }

    .ctn-preloader .animation-preloader .txt-loading .letters-loading:nth-child(4):before {
      -webkit-animation-delay: 0.6s;
      animation-delay: 0.6s;
    }

    .ctn-preloader .animation-preloader .txt-loading .letters-loading:nth-child(5):before {
      -webkit-animation-delay: 0.8s;
      animation-delay: 0.8s;
    }

    .ctn-preloader .animation-preloader .txt-loading .letters-loading:nth-child(6):before {
      -webkit-animation-delay: 1s;
      animation-delay: 1s;
    }

    .ctn-preloader .animation-preloader .txt-loading .letters-loading:nth-child(7):before {
      -webkit-animation-delay: 1.2s;
      animation-delay: 1.2s;
    }

    .ctn-preloader .animation-preloader .txt-loading .letters-loading:nth-child(8):before {
      -webkit-animation-delay: 1.4s;
      animation-delay: 1.4s;
    }

    .ctn-preloader.dark .animation-preloader .spinner {
      border-color: rgba(255, 255, 255, 0.2);
      border-top-color: #fff;
    }

    .ctn-preloader.dark .animation-preloader .txt-loading .letters-loading {
      color: rgba(255, 255, 255, 0.2);
    }

    .ctn-preloader.dark .animation-preloader .txt-loading .letters-loading:before {
      color: #fff;
    }

    .ctn-preloader p {
      font-size: 14px;
      font-weight: 500;
      text-transform: uppercase;
      letter-spacing: 8px;
      color: #3b3b3b;
    }

    .ctn-preloader .loader {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      font-size: 0;
      z-index: 1;
      pointer-events: none;
    }

    .ctn-preloader .loader .row {
      height: 100%;
    }

    .ctn-preloader .loader .loader-section {
      padding: 0px;
    }

    .ctn-preloader .loader .loader-section .bg {
      background-color: #ffffff;
      height: 100%;
      width: 100%;
      opacity: 1;
      -webkit-transition: opacity 700ms cubic-bezier(0.77, 0, 0.175, 1);
      transition: opacity 700ms cubic-bezier(0.77, 0, 0.175, 1);
    }

    .ctn-preloader .loader.dark_bg .loader-section .bg {
      background: #111339;
    }

    @-webkit-keyframes spinner {
      to {
        -webkit-transform: rotateZ(360deg);
        transform: rotateZ(360deg);
      }
    }

    @keyframes spinner {
      to {
        -webkit-transform: rotateZ(360deg);
        transform: rotateZ(360deg);
      }
    }

    @-webkit-keyframes letters-loading {

      0%,
      75%,
      100% {
        opacity: 0;
        -webkit-transform: rotateY(-90deg);
        transform: rotateY(-90deg);
      }

      25%,
      50% {
        opacity: 1;
        -webkit-transform: rotateY(0deg);
        transform: rotateY(0deg);
      }
    }

    @keyframes letters-loading {

      0%,
      75%,
      100% {
        opacity: 0;
        -webkit-transform: rotateY(-90deg);
        transform: rotateY(-90deg);
      }

      25%,
      50% {
        opacity: 1;
        -webkit-transform: rotateY(0deg);
        transform: rotateY(0deg);
      }
    }
  </style>

  <div id="ctn-preloader" class="ctn-preloader">
    <div class="animation-preloader">
      <div class="spinner"></div>
      <div class="txt-loading">
        <span data-text-preloader="P" class="letters-loading">
          P
        </span>
        <span data-text-preloader="U" class="letters-loading">
          U
        </span>
        <span data-text-preloader="M" class="letters-loading">
          M
        </span>
        <span data-text-preloader="S" class="letters-loading">
          S
        </span>
        <span data-text-preloader="A" class="letters-loading">
          A
      </div>
      <p class="text-center">Loading</p>
    </div>
    <div class="loader">
      <div class="row">
        <div class="col-12 loader-section">
          <div class="bg"></div>
        </div>
      </div>
    </div>
  </div>

  <!-- Preloader End -->

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
                                  echo ' active';
                                } ?>" href="index.php">Home </a>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle <?php if ($page == 'sponsorship.php' || $page == 'registration.php' || $page == 'timetable.php') {
                                                  echo ' active';
                                                } ?>" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <span style="color: #139e21;"> NiMSA Games </span>
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="sponsorship.php">Sponsorship</a>
              <a class="dropdown-item" href="registration.php">Registration</a>
              <a class="dropdown-item" href="timetable.php">Timetable</a>
            </div>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle <?php if ($page == 'history.php' || $page == 'profile.php' || $page == 'principles.php' || $page == 'executives.php' || $page == 'senate.php') {
                                                  echo ' active';
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
                                                  echo ' active';
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
                                                  echo ' active';
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
                                                  echo ' active';
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
                                  echo ' active';
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
                                                    echo ' active';
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