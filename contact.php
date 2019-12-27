<?php

include_once('path.php');
include(ROOT_PATH . '/app/database/db.php');
include(ROOT_PATH . '/contactform/contactform.php');
$PageTitle = "PUMSA - Contact Us";

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
          <h1 class="title-single">Contact US</h1>
          <span class="color-text-a">Contact us for any inquiries, ideas, collaborations, sponsorship or complaints and we will get back to you shortly.</span>
        </div>
      </div>
      <div class="col-md-12 col-lg-4">
        <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="index.php">Home</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">
              Contact
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
      <div class="col-sm-12">
        <div class="contact-map box">
          <div id="map" class="contact-map">
            <div class="mapouter">
              <div class="gmap_canvas">
                <iframe width="100%" height="450px" id="gmap_canvas" src="" data-src="https://maps.google.com/maps?q=university%20of%20port%20harcourt&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                Google Maps Generator by <a href="https://www.embedgooglemap.net">embedgooglemap.net</a>
              </div>

              <style>
                .mapouter {
                  position: relative;
                  text-align: right;
                  height: 450px;
                  width: 100%;
                }

                .gmap_canvas {
                  overflow: hidden;
                  background: none !important;
                  height: 450px;
                  width: 100%;
                }
              </style>

              <script>
                function init() {
                  var vidDefer = document.getElementsByTagName('iframe');
                  for (var i = 0; i < vidDefer.length; i++) {
                    if (vidDefer[i].getAttribute('data-src')) {
                      vidDefer[i].setAttribute('src', vidDefer[i].getAttribute('data-src'));
                    }
                  }
                }
                window.onload = init;
              </script>

            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-12 section-t8">
      <div class="row">
        <div class="col-md-7">
          <form class="form-a contactForm" action="contact.php" method="POST" role="form">

            <?php include_once(ROOT_PATH . '/app/helpers/formErrors.php'); ?>

            <div class="row">
              <div class="col-md-6 mb-3">
                <div class="form-group">
                  <input type="text" name="name" value="<?php echo $name; ?>" class="form-control form-control-lg form-control-a" placeholder="Your Name">
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <div class="form-group">
                  <input name="email" value="<?php echo $email; ?>" type="email" class="form-control form-control-lg form-control-a" placeholder="Your Email">
                </div>
              </div>
              <div class="col-md-12 mb-3">
                <div class="form-group">
                  <input type="text" name="subject" value="<?php echo $subject; ?>" class="form-control form-control-lg form-control-a" placeholder="Subject">
                </div>
              </div>
              <div class="col-md-12 mb-3">
                <div class="form-group">
                  <textarea name="message" class="form-control" name="message" cols="45" rows="8" placeholder="Your Message Goes Here"> <?php echo $message; ?> </textarea>
                </div>
              </div>
              <div class="col-md-12">
                <button type="submit" name="send-message" class="btn btn-a">Send Message</button>
              </div>
            </div>
          </form>
        </div>
        <div class="col-md-5 section-md-t3">
          <div class="icon-box section-b2">
            <div class="icon-box-icon">
              <span class="ion-ios-paper-plane"></span>
            </div>
            <div class="icon-box-content table-cell">
              <div class="icon-box-title">
                <h4 class="icon-title">Say Hello</h4>
              </div>
              <div class="icon-box-content">
                <p class="mb-1">Email.
                  <span class="color-a">info@pumsa.org</span>
                </p>
                <p class="mb-1">Phone.
                  <span class="color-a">+234 814 786 5382, +234 810 388 6585</span>
                </p>
              </div>
            </div>
          </div>
          <div class="icon-box section-b2">
            <div class="icon-box-icon">
              <span class="ion-ios-pin"></span>
            </div>
            <div class="icon-box-content table-cell">
              <div class="icon-box-title">
                <h4 class="icon-title">Find us at</h4>
              </div>
              <div class="icon-box-content">
                <p class="mb-1">
                  PUMSA Secretariat, 3rd floor Clinical Students' Quarters,
                  <br> University of Port Harcourt, Choba
                  <br> Rivers State, Nigeria
                </p>
              </div>
            </div>
          </div>
          <div class="icon-box">
            <div class="icon-box-icon">
              <span class="ion-ios-redo"></span>
            </div>
            <div class="icon-box-content table-cell">
              <div class="icon-box-title">
                <h4 class="icon-title">Social networks</h4>
              </div>
              <div class="icon-box-content">
                <div class="socials-footer">
                  <ul class="list-inline">
                    <li class="list-inline-item">
                      <a href="https://facebook.com/Port-Harcourt-University-Medical-Students-Association-Pumsa-112037063596617/?_e_pi_=7%2CPAGE_ID10%2C6421767910" class="link-one">
                        <i class="fa fa-facebook" aria-hidden="true"></i>
                      </a>
                    </li>
                    <li class="list-inline-item">
                      <a href="https://www.twitter.com/pumsaofficial" class="link-one">
                        <i class="fa fa-twitter" aria-hidden="true"></i>
                      </a>
                    </li>
                    <li class="list-inline-item">
                      <a href="https://www.instagram.com/pumsa_official" class="link-one">
                        <i class="fa fa-instagram" aria-hidden="true"></i>
                      </a>
                    </li>
                    <li class="list-inline-item">
                      <a href="https://www.youtube.com/channel/UCEbGc713B7Gs1TY-ZG2TArA?view_as=subscriber" class="link-one">
                        <i class="fa fa-youtube-play" aria-hidden="true"></i>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--/ Contact End /-->


<?php include(ROOT_PATH . '/app/includes/footer.php'); ?>