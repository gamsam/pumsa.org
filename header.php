<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title><?= isset($PageTitle) ? $PageTitle : "Default Title"?></title>
    <?php if (function_exists('customPageHeader')){
      customPageHeader();
    }?>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="pumsa, port harcourt, university, medical, students, association, pumsa.org" name="keywords">
  <meta content="Official website of the Port Harcourt University Medical Students Association, events news" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

  <!-- Fancy Box -->
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.4.1/dist/jquery.min.js"></script>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
  <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>


  <!--Start of Tawk.to Script-->
  <script type="text/javascript">
  var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
  (function(){
  var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
  s1.async=true;
  s1.src='https://embed.tawk.to/5dda2d20d96992700fc8f332/default';
  s1.charset='UTF-8';
  s1.setAttribute('crossorigin','*');
  s0.parentNode.insertBefore(s1,s0);
  })();
  </script>
  <!--End of Tawk.to Script-->

</head>

<body>
  <!--/ Nav Star /-->
  <nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">
    <div class="container">

      <a href="index.php" class="pull-left navbar-brand"><img src="img/logo.png" alt="PUMSA Logo" style="height: 40px"></a> 
      <a class="navbar-brand text-brand" href="index.php">PUMSA</a>

      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault"
        aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>

      <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="index.php">Home</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="yellowpage.php"> <span style="color: #f4ca16;"> Yellow Page</span></a>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
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
            <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
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
            <a class="nav-link active dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
              Media Center
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="live.php">Live</a>
              <a class="dropdown-item" href="gallery.php">Gallery</a>
              <a class="dropdown-item" href="news.php">News</a>
              <a class="dropdown-item" href="blog.php">Blog</a>
              <a class="dropdown-item" href="calendar.php">Events Calendar</a>
            </div>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
              Academics
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="textbooks.php">Textbooks</a>
              <a class="dropdown-item" href="pq.php">Past Questions</a>
            </div>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="contact.php">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!--/ Nav End /-->