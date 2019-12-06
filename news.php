<?php

$PageTitle="PUMSA - News";

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
            <h1 class="title-single">News</h1>
            <span class="color-text-a">News about PUMSA</span>
          </div>
        </div>
        <div class="col-md-12 col-lg-4">
          <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="index.php">Home</a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">
                News
              </li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </section>
  <!--/ Intro Single End /-->


  <!--/ Property Grid Star /-->
  <section class="property-grid grid">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="card-box-a card-shadow">
            <div class="img-box-a">
              <img src="img/pumsagoogle.jpg" alt="PUMSA Powered Google Digital Skills Training" class="img-a img-fluid">
            </div>
            <div class="card-overlay">
              <div class="card-overlay-a-content">
                <div class="card-header-a">
                  <h2 class="card-title-a">
                    <a href="pumsagoogle.php">PUMSA Powered Google Digital Skills Training </a>
                  </h2>
                </div>
                <div class="card-body-a">
                  <div class="price-box d-flex">
                    <span class="price-a">23rd November, 2019</span>
                  </div>
                  <a href="pumsagoogle.php" class="link-a">Click here to read
                    <span class="ion-ios-arrow-forward"></span>
                  </a>
                </div>
                <!-- <div class="card-footer-a">
                  <ul class="card-info d-flex justify-content-around">
                    <li>
                      <h4 class="card-info-title">Date</h4>
                      <span>November 2019</span>
                    </li>
                  </ul>
                </div> -->
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card-box-a card-shadow">
            <div class="img-box-a">
              <img src="img/uniportmedic.jpeg" alt="PUMSA Student emerges winner at face of Health-Care Expo" class="img-a img-fluid">
            </div>
            <div class="card-overlay">
              <div class="card-overlay-a-content">
                <div class="card-header-a">
                  <h2 class="card-title-a">
                    <a href="uniportmedic.php">UNIPORT Medic emerges winner at face of Health-Care Expo </a>
                  </h2>
                </div>
                <div class="card-body-a">
                  <div class="price-box d-flex">
                    <span class="price-a">November, 2019</span>
                  </div>
                  <a href="uniportmedic.php" class="link-a">Click here to read
                    <span class="ion-ios-arrow-forward"></span>
                  </a>
                </div>
                <!-- <div class="card-footer-a">
                  <ul class="card-info d-flex justify-content-around">
                    <li>
                      <h4 class="card-info-title">Date</h4>
                      <span>November 2019</span>
                    </li>
                  </ul>
                </div> -->
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>
  <!--/ Property Grid End /-->


<?php include_once('footer.php'); ?>