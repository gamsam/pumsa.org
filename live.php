<?php

include_once('path.php');
include(ROOT_PATH . '/app/database/db.php');
$PageTitle="PUMSA - Live";

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
            <h1 class="title-single">Live</h1>
            <span class="color-text-a"> Livestream of PUMSA Events and a collection of past events</span>
          </div>
        </div>
        <div class="col-md-12 col-lg-4">
          <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="index.php">Home</a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">
                Live
              </li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </section>
  <!--/ Intro Single End /-->

  <div class="col-md-10 offset-md-1">
    <!-- <iframe width="100%" height="600" src="https://www.youtube.com/embed/Gu4u74YErb4?rel=0&amp;controls=1&amp&amp;showinfo=0&amp;modestbranding=1" frameborder="0"></iframe> -->
    <iframe width="560" height="315" src="https://www.youtube.com/embed/Gu4u74YErb4?rel=0&amp;controls=1&amp&amp;showinfo=0&amp;modestbranding=1" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  </div>

  <div class="col-md-10 offset-md-1">
   <iframe width="560" height="315" src="https://www.youtube.com/embed/Gu4u74YErb4?rel=0&amp;controls=1&amp&amp;showinfo=0&amp;modestbranding=1" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  </div>
  

<?php include(ROOT_PATH . '/app/includes/footer.php'); ?>