<?php

include_once('path.php');
include_once(ROOT_PATH . '/app/controllers/topics.php');

$posts = array();
$postsTitle = 'All Blog Posts';

if (isset($_GET['t_id'])) {
  $posts = getPostsByTopicId($_GET['t_id']);
  $postsTitle = "You searched for posts under '" . $_GET['name'] . "'";
} else if (isset($_POST['search-term'])) {
  $postsTitle = "You searched for '" . $_POST['search-term'] . "'";
  $posts = searchPost($_POST['search-term']);
} else {
  $posts = selectAll('posts', ['published' => 1]);
}


$PageTitle = "PUMSA - Blog";

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


<!--/ Blog Star /-->
<section class="section-news section-t8">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="title-wrap d-flex justify-content-between">
          <div class="title-box">
            <h2 class="title-a">Trending Blog Posts</h2>
            <p>Swipe right <span class="ion-ios-arrow-forward"></span></p>
          </div>
        </div>
      </div>
    </div>
    <div id="new-carousel" class="owl-carousel owl-theme">

      <?php foreach ($posts as $post) : ?>
        <div class="carousel-item-c">
          <div class="card-box-b card-shadow news-box" style="height: 350px;">
            <div class="img-box-b" style="height: 350px;">
              <img src="<?php echo BASE_URL . '/img/blog_img/' . $post['image']; ?>" alt="" class="img-b img-fluid" style="height: 350px; object-fit: cover;">
            </div>
            <div class="card-overlay">
              <div class="card-header-b">
                <div class="card-title-b">
                  <h2 class="title-2">
                    <a href="single.php?id=<?php echo $post['id']; ?>"><?php echo $post['title']; ?></a>
                  </h2>
                </div>
                <div class="card-date">
                  <span class="date-b"><?php echo $post['author']; ?></span>
                </div>
                <div class="card-category-b" style="margin-top: 10px">
                  <a href="single.php?id=<?php echo $post['id']; ?>" class="category-b"> <?php echo date('F j, Y', strtotime($post['created_at'])); ?> </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      <?php endforeach; ?>

    </div>
  </div>
</section>
<!--/ Blog End /-->

<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="row">

        <div class="col-md-9">
          <!--/ Intro Single star /-->
          <section class="intro-single">
            <div class="col-md-12 col-lg-12">
              <div class="title-single-box">
                <h1 class="title-single"><?php echo $postsTitle ?></h1>
              </div>
            </div>
          </section>
          <!--/ Intro Single End /-->

          <!--/ News Grid Star /-->
          <section class="news-grid grid">
            <div class="col-md-12">
              <div class="row">

                <?php foreach ($posts as $post) : ?>
                  <div class="col-md-4">
                    <div class="card-box-b card-shadow news-box" style="height: 250px;">
                      <div class="img-box-b" style="height: 250px;">
                        <img src="<?php echo BASE_URL . '/img/blog_img/' . $post['image']; ?>" alt="" class="img-b img-fluid" style="height: 250px; width: auto; object-fit:cover;">
                      </div>
                      <div class="card-overlay">
                        <div class="card-header-b">
                          <div class="card-title-b">
                            <h2 class="title-2">
                              <a href="single.php?id=<?php echo $post['id']; ?>"><?php echo $post['title']; ?></a>
                            </h2>
                          </div>
                          <div class="card-date">
                            <span class="date-b"><?php echo $post['author']; ?></span>
                          </div>
                          <div class="card-category-b" style="margin-top: 10px">
                            <a href="single.php?id=<?php echo $post['id']; ?>" class="category-b"> <?php echo date('F j, Y', strtotime($post['created_at'])); ?> </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                <?php endforeach; ?>

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
        </div>

        <div class="col-md-3">
          <!--/ Intro Single star /-->
          <section class="intro-single">
            <div class="container">
              <div class="row">
                <div class="col-md-12 col-lg-12">
                  <div class="title-single-box">
                    <h1 class="title-single">Topics</h1>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!--/ Intro Single End /-->

          <div class="col-md-12">
            <form class="form-a" action="blog.php" method="post">
              <div class="row">
                <div class="col-md-12 mb-2">
                  <div class="form-group">
                    <label for="Type" style="font-size: 1.1rem; color: #008dc9;">Search Post</label>
                    <input type="text" name="search-term" class="form-control form-control-lg form-control-a" placeholder="Keyword" height="28px">
                  </div>
                </div>
              </div>
            </form>
          </div>

          <div class="col-md-12">
            <div class="topics-wrapper">
              <div class="left-side-bar">
                <ul>

                  <?php foreach ($topics as $key => $topic) : ?>
                    <li><a href="<?php echo BASE_URL . '/blog.php?t_id=' . $topic['id'] . '&name=' . $topic['name']; ?>"> <?php echo $topic['name']; ?> </a></li>
                  <?php endforeach; ?>

                </ul>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</div>


<?php include(ROOT_PATH . '/app/includes/footer.php'); ?>