<?php

include_once('path.php');
include(ROOT_PATH . '/app/database/db.php');
include_once(ROOT_PATH . '/app/helpers/middleware.php');
usersOnly();

$PageTitle="PUMSA - Academics";

function customPageHeader(){?>

<?php }

include(ROOT_PATH . '/app/includes/header.php');

?>


  <!--/ Intro Single star /-->
  <section class="intro-single">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-8">
          <div class="title-single-box">
            <h1 class="title-single">Academics</h1>
          </div>
        </div>
        <div class="col-md-12 col-lg-4">
          <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="index.php">Home</a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">
                Academics
              </li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </section>
  <!--/ Intro Single End /-->

  <!--/ About Star /-->
  <section class="section-about">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="about-img-box">
            <img src="img/textbooks.jpeg" alt="" class="img-fluid" width="100%">
          </div>
          <div class="sinse-box">
            <h3 class="sinse-title">Textbooks</h3>
            <p style="color: white;">On online library of all the textbooks <br> you will ever need in medical school</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ About End /-->

  <div class="container">
    <div class="col-md-12 section-t8">
      <div class="row">
        <div class="title-box-d">
          <h3 class="title-d" style="text-align: center;">
          <span class="color-d">Coming</span> Soon </h3>
        </div>
      </div>
    </div>
  </div>

<?php include(ROOT_PATH . '/app/includes/footer.php'); ?>