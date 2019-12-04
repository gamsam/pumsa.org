<?php

$PageTitle="PUMSA - Blog";

function customPageHeader(){?>

<?php }

include_once('header.php');

?>

  <!--/ Intro Single star /-->
  <section class="intro-single">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-8">
          <div class="title-single-box">
            <h1 class="title-single">Our Blog Posts</h1>
            <span class="color-text-a">Check out amazing blog posts from our members</span>
          </div>
        </div>
        <div class="col-md-12 col-lg-4">
          <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="index.php">Home</a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">
                Blog
              </li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </section>
  <!--/ Intro Single End /-->


  <!--/ News Grid Star /-->
  <section class="news-grid grid">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="card-box-b card-shadow news-box">
            <div class="img-box-b">
              <img src="img/innocencepot.jpg" alt="" class="img-b img-fluid">
            </div>
            <div class="card-overlay">
              <div class="card-header-b">
                <div class="card-category-b">
                  <a href="lossofinnocence.php" class="category-b">Poetry</a>
                </div>
                <div class="card-title-b">
                  <h2 class="title-2">
                    <a href="lossofinnocence.php">Loss of
                      <br> Innocence </a>
                  </h2>
                </div>
                <div class="card-date">
                  <span class="date-b">©️ The Writing Doctor</span>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card-box-b card-shadow news-box">
            <div class="img-box-b">
              <img src="img/wishespot.jpg" alt="" class="img-b img-fluid">
            </div>
            <div class="card-overlay">
              <div class="card-header-b">
                <div class="card-category-b">
                  <a href="wishes.php" class="category-b">Inspirational</a>
                </div>
                <div class="card-title-b">
                  <h2 class="title-2">
                    <a href="wishes.php">Wishes</a>
                  </h2>
                </div>
                <div class="card-date">
                  <span class="date-b">Tochi Izuheihe</span>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card-box-b card-shadow news-box">
            <div class="img-box-b">
              <img src="img/happymen.jpg" alt="" class="img-b img-fluid">
            </div>
            <div class="card-overlay">
              <div class="card-header-b">
                <div class="card-category-b">
                  <a href="happymen.php" class="category-b">Life</a>
                </div>
                <div class="card-title-b">
                  <h2 class="title-2">
                    <a href="happymen.php">7 Habits of Happy Men</a>
                  </h2>
                </div>
                <div class="card-date">
                  <span class="date-b">Icheka Ozuru</span>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card-box-b card-shadow news-box">
            <div class="img-box-b">
              <img src="img/costume.jpg" alt="" class="img-b img-fluid">
            </div>
            <div class="card-overlay">
              <div class="card-header-b">
                <div class="card-category-b">
                  <a href="costume.php" class="category-b">Life</a>
                </div>
                <div class="card-title-b">
                  <h2 class="title-2">
                    <a href="costume.php">Costume Party</a>
                  </h2>
                </div>
                <div class="card-date">
                  <span class="date-b">Idakwo Fervent</span>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card-box-b card-shadow news-box">
            <div class="img-box-b">
              <img src="img/beingsinglepot.jpg" alt="" class="img-b img-fluid">
            </div>
            <div class="card-overlay">
              <div class="card-header-b">
                <div class="card-category-b">
                  <a href="beingsingle.php" class="category-b"> Life </a>
                </div>
                <div class="card-title-b">
                  <h2 class="title-2">
                    <a href="beingsingle.php">Being Single</a>
                  </h2>
                </div>
                <div class="card-date">
                  <span class="date-b">www.verilymag.com</span>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
      <!-- <div class="row">
        <div class="col-sm-12">
          <nav class="pagination-a">
            <ul class="pagination justify-content-end">
              <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1">
                  <span class="ion-ios-arrow-back"></span>
                </a>
              </li>
              <li class="page-item">
                <a class="page-link" href="gallery2.php">1</a>
              </li>
              <li class="page-item active">
                <a class="page-link" href="gallery3.php">2</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="gallery4.php">3</a>
              </li>
              <li class="page-item next">
                <a class="page-link" href="gallery2.php">
                  <span class="ion-ios-arrow-forward"></span>
                </a>
              </li>
            </ul>
          </nav>
        </div>
      </div> -->
    </div>
  </section>
  <!--/ News Grid End /-->
  

<?php include_once('footer.php'); ?>