<?php

$PageTitle="PUMSA - Calendar";

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
            <h1 class="title-single">PUMSA Events Calendar</h1>
            <span class="color-text-a">A calendar of all our past and upcoming events</span>
          </div>
        </div>
        <div class="col-md-12 col-lg-4">
          <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="index.php">Home</a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">
                Event Calendar
              </li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </section>
  <!--/ Intro Single End /-->

        <div class="container">
          <div class="row">
            <div class="col-sm-5 col-md-5">
              <div class="property-summary">
                <div class="row">
                  <div class="col-sm-12">
                    <div class="title-box-d section-t4">
                      <h3 class="title-d">Upcoming Events</h3>
                    </div>
                  </div>
                </div>
                <div class="summary-list">
                  <ul class="list">
                    <li class="d-flex justify-content-between">
                      <strong>PUMSA End of Year Events (EYES)</strong>
                      <span>9-13th Dec.</span>
                    </li>
                    <li class="d-flex justify-content-between">
                      <strong>EYES Outreach</strong>
                      <span>Mon, 9th December</span>
                    </li>
                    <li class="d-flex justify-content-between">
                      <strong>EYES Quiz Competition</strong>
                      <span>Tues, 10th December</span>
                    </li>
                    <li class="d-flex justify-content-between">
                      <strong>Articine (a day in the theatre)</strong>
                      <span>Wed, 11th December</span>
                    </li>
                    <li class="d-flex justify-content-between">
                      <strong>EYES Sports</strong>
                      <span>Thur, 12th December</span>
                    </li>
                    <li class="d-flex justify-content-between">
                      <strong>Christmas Carol</strong>
                      <span>Fri, 13th December</span>
                    </li>
                  </ul>
                </div>
              </div>
            </div>

            <div class="col-sm-7 col-md-7">
              <div class="col-sm-12">
                <iframe src="https://calendar.google.com/calendar/embed?height=600&amp;wkst=1&amp;bgcolor=%23039BE5&amp;ctz=Africa%2FLagos&amp;src=azk0NXNrbXY3ajlyZGoxYjM1b3M3bzhha29AZ3JvdXAuY2FsZW5kYXIuZ29vZ2xlLmNvbQ&amp;src=ZW4ubmcjaG9saWRheUBncm91cC52LmNhbGVuZGFyLmdvb2dsZS5jb20&amp;color=%23402175&amp;color=%231F753C&amp;showPrint=0&amp;title=PUMSA%20Event%20Calender&amp;showCalendars=0" style="border-width:0" width="100%" height="400" frameborder="0" scrolling="no"></iframe>
              </div>
            </div>
          </div>
        </div>


<?php include_once('footer.php'); ?>