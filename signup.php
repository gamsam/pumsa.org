<?php 

include_once('path.php');
include(ROOT_PATH . '/app/controllers/users.php');
guestsOnly();

$PageTitle = "PUMSA - Sign Up";

function customPageHeader()
{ ?>

<?php }

include(ROOT_PATH . '/app/includes/header.php');

?>

<!DOCTYPE html>
<!--/ Intro Single star /-->
<section class="intro-single">
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-lg-8">
        <div class="title-single-box">
          <h1 class="title-single">Sign Up</h1>
          <span class="color-text-a">Are you a PUMSAite? Sign Up to gain access more to features</span>
        </div>
      </div>
      <div class="col-md-12 col-lg-4">
        <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="index.php">Home</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">
              Sign Up
            </li>
          </ol>
        </nav>
      </div>
    </div>
  </div>
</section>
<!--/ Intro Single End /-->

<!--/ Signup Star /-->
<section class="contact">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 section-t8" style="padding-top: 0;">
        <div class="row">
          <div class="col-md-7" style="margin: 0 auto;">
            <form class="form-a contactForm" action="signup.php" method="POST" role="form">

              <?php include_once(ROOT_PATH . '/app/helpers/formErrors.php'); ?>

              <div class="row">
                <div class="col-md-6 mb-3">
                  <div class="form-group">
                    <input type="text" name="username" value="<?php echo $username; ?>" class="form-control form-control-lg form-control-a" placeholder="Your Username" data-rule="minlen:4" data-msg="Please enter your username">
                    <div class="validation"></div>
                  </div>
                </div>
                <div class="col-md-6 mb-3">
                  <div class="form-group">
                    <input name="email" type="email" value="<?php echo $email; ?>" class="form-control form-control-lg form-control-a" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email">
                    <div class="validation"></div>
                  </div>
                </div>
                <div class="col-md-6 mb-3">
                  <div class="form-group">
                    <input type="password" name="password" value="<?php echo $password; ?>" class="form-control form-control-lg form-control-a" placeholder="Your Password" data-rule="minlen:6" data-msg="Please enter a minimum of 6 characters">
                    <div class="validation"></div>
                  </div>
                </div>
                <div class="col-md-6 mb-3">
                  <div class="form-group">
                    <input type="password" name="passwordConf" value="<?php echo $passwordConf; ?>" class="form-control form-control-lg form-control-a" placeholder="Repeat Password" data-rule="minlen:6" data-msg="Please enter a minimum of 6 characters">
                    <div class="validation"></div>
                  </div>
                </div>
                <div class="col-md-12" style="text-align: center;">
                  <button type="submit" name="signup-btn" class="btn btn-a">Sign Up</button>
                </div>
              </div>
            </form>
            <div class="col-md-12">
              <p style="font-size: 1.1rem; margin-top: 2rem; text-align: center;">
                Are you already registered? <br>
                <a style="color: #008dc9; text-decoration: underline;" href="<?php echo BASE_URL . '/login.php' ?>"> Please Login </a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--/ Contact End /-->


<?php include(ROOT_PATH . '/app/includes/footer.php');
