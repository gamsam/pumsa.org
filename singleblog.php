<?php

include_once('path.php');
include_once(ROOT_PATH . '/app/controllers/posts.php');

if (isset($_GET['id'])) {
  $post = selectOne('posts', ['id' => $_GET['id']]);
}

$topics = selectAll('topics');
$posts = selectAll('posts', ['published' => 1]);

?>


<?php $PageTitle = "PUMSA - " . $post['title'];

function customPageHeader()
{ ?>

<?php } ?>

<?php include(ROOT_PATH . '/app/includes/header.php'); ?>

<!--/ Intro Single star /-->
<section class="intro-single">
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-lg-8">
        <div class="title-single-box">
          <h1 class="title-single"> <?php echo $post['title']; ?> </h1>
          <span class="color-text-a"></span>
        </div>
      </div>
      <div class="col-md-12 col-lg-4">
        <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="index.php">Home</a>
            </li>
            <li class="breadcrumb-item">
              <a href="blog.php">Blog</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">
              <?php echo $post['title']; ?>
            </li>
          </ol>
        </nav>
      </div>
    </div>
  </div>
</section>
<!--/ Intro Single End /-->


<!--/ News Single Star /-->
<section class="news-single nav-arrow-b">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="news-img-box">
          <img src="<?php echo BASE_URL . '/img/blog_img/' . $post['image']; ?>" alt="" class="img-fluid" style=" height: 500px; width: 100%; object-fit:cover;">
        </div>
      </div>
      <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2">
        <div class="post-information">
          <ul class="list-inline text-center color-a">
            <li class="list-inline-item mr-2">
              <strong>Author: </strong>
              <span class="color-text-a"> <?php echo $post['author']; ?> </span>
            </li>
            <li class="list-inline-item mr-2">
              <strong>Category: </strong>
              <span class="color-text-a"> Life </span>
            </li>
            <li class="list-inline-item">
              <strong>Date: </strong>
              <span class="color-text-a"> <?php echo date('F j, Y', strtotime($post['created_at'])); ?> </span>
            </li>
          </ul>
        </div>
      </div>

      <div class="col-md-9" style="margin-bottom: 30px">
        <div class="post-content color-text-a" style="text-align: justify;">
          <strong style="font-size: 1.4rem;"> <?php echo $post['title']; ?> </strong> <br> <br>
          <?php echo html_entity_decode($post['body']); ?>
          <blockquote class="blockquote">
            <?php echo $post['author']; ?>
          </blockquote>
        </div>
      </div>

      <div class="col-md-3" style="margin-bottom: 30px">
        <div style="margin-bottom: 50px">
          <!--/ Intro Single star /-->
          <section class="intro-single" style="padding-top: 0px; padding-bottom: 18px;">
            <div class="container">
              <div class="row">
                <div class="col-md-12 col-lg-12">
                  <div class="title-single-box">
                    <h3 style="font-size: 20px" class="title-single">Topics</h3>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!--/ Intro Single End /-->

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

        <div style="margin-bottom: 50px">
          <!--/ Intro Single star /-->
          <section class="intro-single" style="padding-top: 0px; padding-bottom: 18px;">
            <div class="container">
              <div class="row">
                <div class="col-md-12 col-lg-12">
                  <div class="title-single-box">
                    <h3 style="font-size: 20px" class="title-single">Popular Posts</h3>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!--/ Intro Single End /-->

          <?php foreach ($posts as $p) : ?>
            <div class="col-md-12" style="margin-bottom: 10px;">
              <div class="card-box-b card-shadow news-box" style="height: 150px;">
                <div class="img-box-b" style="height: 150px;">
                  <img src="<?php echo BASE_URL . '/img/blog_img/' . $p['image']; ?>" alt="" class="img-b img-fluid" style="height: 150px; width: auto; object-fit:cover;">
                </div>
                <div class="card-overlay">
                  <div class="card-header-b">
                    <div class="card-title-b">
                      <h2 class="title-2">
                        <a href="singleblog.php?id=<?php echo $p['id']; ?>"><?php echo $p['title']; ?></a>
                      </h2>
                    </div>
                    <div class="card-date">
                      <span class="date-b"><?php echo $p['author']; ?></span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          <?php endforeach; ?>

        </div>

      </div>


      <?php include(ROOT_PATH . '/app/includes/blogfooter.php'); ?>

      <?php include(ROOT_PATH . '/app/includes/footer.php'); ?>