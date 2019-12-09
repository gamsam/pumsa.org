<?php

include_once('path.php');
include(ROOT_PATH . '/app/database/db.php');
$PageTitle="PUMSA - Profile";

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
            <h1 class="title-single">Our Profile</h1>
            <span class="color-text-a">Learn about the profile of the Port Harcourt University Medical Students' Association</span>
          </div>
        </div>
        <div class="col-md-12 col-lg-4">
          <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="index.php">Home</a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">
                Profile
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
            <img src="img/profile.jpg" alt="PUMSA Profile" class="img-fluid" width="100%">
          </div>
        </div>
        <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2">
          <div class="post-information">
          </div>

          <div class="post-content color-text-a" style="text-align: justify;">
            <p class="post-intro" style="text-align: center;">
              <strong>Let us introduce ourselves…</strong> <br>
              We are a community of purpose-driven and selfless individuals (medical students and others of allied profession) with a commitment to bettering the quality of life beginning from the medical student to the community at large.
            </p>

            <p>
            <blockquote class="blockquote">
              <p class="mb-4">Our Motivation.</p>
              <footer class="blockquote-footer">
              <strong>Our motivation</strong>
              <cite title="Source Title"> is the desire to have an all-round healthy society.</cite>
            </footer>
            </blockquote>
            We are inspired and driven by an ardent desire for a medical program where mentorship is the mainstay of the medical education and learning is at its peak and for a society where the holistic health of its citizens is well-compensated.
            </p>

            <p>
            <blockquote class="blockquote">
              <p class="mb-4">Our Goal.</p>
              <footer class="blockquote-footer">
              <strong>Our goal</strong>
              <cite title="Source Title"> is selfless service to mankind.</cite>
            </footer>
            </blockquote>
            We seek to promote and serve the interest of medical students of the University of Pot Harcourt; to create a safe and enabling space for learning and mentorship and also to be a leader in the pursuit of holistic community health- within and without the university.
            </p>

            <p>
            <blockquote class="blockquote">
              <p class="mb-4">Our Activities.</p>
              <footer class="blockquote-footer">
              <cite title="Source Title">We are passionate, fast-adapting and open to novel ideas. Our activities fall under the following categories:</cite> <br>
              <strong>Academics and Leadership development | Outreach | Welfare</strong>
            </footer>
            </blockquote>
            <strong>Academics and Leadership development</strong>
            <p>
              We are actively engaged in organizing tutorials and mock tests with the various tools available to us. <br>
              We organize program in which students are the given the opportunity to lead and learn practically the vicissitudes of leadership. Also by our affiliation with the Nigerian Medical Student association we engage our members in capacity building programs. <br>
              We also create and take advantage of different forums that bring the medical student close to the medical doctor both for mentorship and capacity building.
            </p>
            <strong>Outreaches</strong>
            <p>
              We engage in health outreaches to rural communities where we engage in health screening activities, diagnosis and treatment of carry out health education programs. <br>
              Through our online campaigns, radio talk shows and visits to various departments in the school, surrounding communities (schools, markets etc.), we carry out health education and promotion campaigns. <br>
              Through our various strategic partnerships and bilateral understandings we carry out public health assessments and others.
            </p>
            <strong>Welfare</strong>
            <p>
              We offer scholarships to our members and welfare support covering for health challenges and other financial needs all in the bid to ease the learning process of the medical student. <br>
              We take special interest in the mental and social life of our members, by organizing events that addresses the stress of the physical and mental of the Nigerian medical student. 
            </p>
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ News Single End /-->

<?php include(ROOT_PATH . '/app/includes/footer.php'); ?>