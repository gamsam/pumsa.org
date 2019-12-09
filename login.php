<?php

include_once('path.php');
$PageTitle="PUMSA - Login";

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
            <h1 class="title-single">Login</h1>
            <span class="color-text-a">Login to access more features</span>
          </div>
        </div>
        <div class="col-md-12 col-lg-4">
          <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="index.php">Home</a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">
                Login
              </li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </section>
  <!--/ Intro Single End /-->

  <!--/ Contact Star /-->
  <section class="contact">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 section-t8" style="padding-top: 0;">
          <div class="row">
            <div class="col-md-7" style="margin: 0 auto;">
              <form class="form-a contactForm" action="contactform/contactform.php" method="POST" role="form">
                <!-- <div id="sendmessage">Your message has been sent. Thank you!</div> -->
                <!-- <div id="errormessage"> Sorry. Your message couldn't be sent. </div> -->
                <div class="row">
                  <div class="col-md-12 mb-3">
                    <div class="form-group">
                      <input type="text" name="username" class="form-control form-control-lg form-control-a" placeholder="Your Username" data-rule="minlen:4" data-msg="Please enter your username">
                      <div class="validation"></div>
                    </div>
                  </div>
                  <div class="col-md-12 mb-3">
                    <div class="form-group">
                      <input type="password" name="password" class="form-control form-control-lg form-control-a" placeholder="Your Password" data-rule="minlen:6" data-msg="Please enter a minimum of 6 characters">
                      <div class="validation"></div>
                    </div>
                  </div>
                  <div class="col-md-12" style="text-align: center;">
                    <button type="submit" class="btn btn-a">Login</button>
                  </div>
                </div>
              </form>
              <div class="col-md-12">
                <p style="font-size: 1.1rem; margin-top: 2rem; text-align: center;">
                  Not yet registered? <br>
                  <a style="color: #008dc9; text-decoration: underline;" href="<?php echo BASE_URL . '/signup.php' ?>"> Please Sign Up </a>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ Contact End /-->


<?php include(ROOT_PATH . '/app/includes/footer.php'); ?>