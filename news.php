<?php

include_once('path.php');
include_once(ROOT_PATH . '/app/controllers/news.php');
$newss = selectAll('news', ['published' => 1]);

$PageTitle = "PUMSA - News";

function customPageHeader()
{ ?>

<?php }

include(ROOT_PATH . '/app/includes/header.php');

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

      <?php foreach ($newss as $news) : ?>
        <div class="col-md-4">
          <div class="card-box-a card-shadow" style="height: 350px;">
            <div class="img-box-a" style="height: 350px;">
              <img src="<?php echo BASE_URL . '/img/news_img/' . $news['image']; ?>" alt="" class="img-a img-fluid" style="height: 350px; object-fit: cover;">
            </div>
            <div class="card-overlay">
              <div class="card-overlay-a-content">
                <div class="card-header-a">
                  <h2 class="card-title-a">
                    <a href="singlenews.php?id=<?php echo $news['id']; ?>"> <?php echo $news['title']; ?> </a>
                  </h2>
                </div>
                <div class="card-body-a">
                  <div class="price-box d-flex">
                    <span class="price-a"><?php echo html_entity_decode(substr($news['body'], 0, 100) . '...'); ?></span>
                  </div>
                  <a href="singlenews.php?id=<?php echo $news['id']; ?>" class="link-a">Click here to read more
                    <span class="ion-ios-arrow-forward"></span>
                  </a>
                </div>
                <div class="card-footer-a">
                  <ul class="card-info d-flex justify-content-around">
                    <li>
                      <h4 class="card-info-title">Date</h4>
                      <span><?php echo date('F j, Y', strtotime($news['created_at'])); ?></span>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      <?php endforeach; ?>

    </div>
  </div>
</section>
<!--/ Property Grid End /-->


<?php include(ROOT_PATH . '/app/includes/footer.php'); ?>