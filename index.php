<?php

include_once('path.php');
include(ROOT_PATH . '/app/database/db.php');

$posts = array();

$posts = selectAll('posts', ['published' => 1]);
$newss = selectAll('news', ['published' => 1]);
$sliders = selectAll('sliders', ['published' => 1]);

$PageTitle = "PUMSA - Selfless Service to Mankind";

function customPageHeader()
{
}

include(ROOT_PATH . '/app/includes/header.php');

?>

<!--/ Carousel Home /-->
<div class="intro intro-carousel">
	<div id="carousel" class="owl-carousel owl-theme">

		<div class="carousel-item-a intro-item bg-image" style="background-image: url(img/gallery-4.jpg)">
			<div class="overlay overlay-a"></div>
			<div class="intro-content display-table">
				<div class="table-cell">
					<div class="container">
						<div class="row">
							<div class="col-lg-8">
								<div class="intro-body">
									<h1 class="intro-title mb-4">
										Welcome to <br>
										<span class="color-b"> PUMSA </span>
									</h1>
									<p class="intro-title-top"> Official Website of the Port Harcourt University Medical Students' Association
										<br> Selfless Service to mankind </p>
									<p class="intro-subtitle intro-price">
										<a href="history.php"><span class="price-a">Learn More</span></a>
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="carousel-item-a intro-item bg-image" style="background-image: url(img/gallery-67.jpg)">
			<div class="overlay overlay-a"></div>
			<div class="intro-content display-table">
				<div class="table-cell">
					<div class="container">
						<div class="row">
							<div class="col-lg-8">
								<div class="intro-body">
									<h1 class="intro-title mb-4" style="background: rgba(0, 0, 0, 0.5);">
										Who are we?
									</h1>
									<p class="intro-title-top" style="background: rgba(0, 0, 0, 0.5);">We are a community of purpose-driven and selfless individuals (medical students and others of allied profession)
										<br> with a commitment to bettering the quality of life beginning from the medical student to the community at large. </p>
									<p class="intro-subtitle intro-price">
										<a href="profile.php"><span class="price-a">Learn More</span></a>
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="carousel-item-a intro-item bg-image" style="background-image: url(img/executives.jpg)">
			<div class="overlay overlay-a"></div>
			<div class="intro-content display-table">
				<div class="table-cell">
					<div class="container">
						<div class="row">
							<div class="col-lg-8">
								<div class="intro-body">
									<h1 class="intro-title mb-4">
										Meet Our Executives
									</h1>
									<p class="intro-subtitle intro-price">
										<a href="executives.php"><span class="price-a">Click Here</span></a>
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="carousel-item-a intro-item bg-image" style="background-image: url(img/news_img/1576376726-aidsdayhome.jpg)">
			<div class="overlay overlay-a"></div>
			<div class="intro-content display-table">
				<div class="table-cell">
					<div class="container">
						<div class="row">
							<div class="col-lg-8">
								<div class="intro-body">
									<h1 class="intro-title mb-4">
										<span class="color-b"> VC, DVC </span> Joins Walk as PUMSA Participates in 2019 WORLD AIDS DAY Celebration </h1>
									<p class="intro-title-top"> 2nd December,
										<br> 2019 </p>
									<p class="intro-subtitle intro-price">
										<a href="aidsday.php"><span class="price-a">Learn More </span></a>
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<?php foreach ($sliders as $slider) : ?>
			<div class="carousel-item-a intro-item bg-image" style="background-image: url(<?php echo BASE_URL . '/img/slider_img/' . $slider['image']; ?>)">
				<div class="overlay overlay-a"></div>
				<div class="intro-content display-table">
					<div class="table-cell">
						<div class="container">
							<div class="row">
								<div class="col-lg-8">
									<div class="intro-body">
										<h1 class="intro-title mb-4"> <?php echo $slider['title']; ?> </h1>
										<p class="intro-title-top"> <?php echo html_entity_decode($slider['body']); ?> </p>
										<p class="intro-subtitle intro-price">
											<a href="<?php echo $slider['link']; ?>"><span class="price-a">Learn More</span></a>
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		<?php endforeach; ?>

	</div>
</div>
<!--/ Carousel end /-->

<!--/ What we do Star /-->
<section class="section-services section-t8">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="title-wrap d-flex justify-content-between">
					<div class="title-box">
						<h2 class="title-a">What We Do</h2>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4">
				<div class="card-box-c foo">
					<div class="card-header-c d-flex">
						<div class="card-box-ico">
							<span class="fa fa-book"></span>
						</div>
						<div class="card-title-c align-self-center">
							<h2 class="title-c">Academics and Leadership Development</h2>
						</div>
					</div>
					<div class="card-body-c">
						<p class="content-c">
							We are actively engaged in organizing tutorials and mock tests with the various tools available to us. <br>
							We organize program in which students are the given the opportunity to lead and learn practically the vicissitudes of leadership. Also by our affiliation with the Nigerian Medical Student association we engage our members in capacity building programs.
						</p>
					</div>
					<div class="card-footer-c">
						<a href="profile.php" class="link-c link-icon">Read more
							<span class="ion-ios-arrow-forward"></span>
						</a>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="card-box-c foo">
					<div class="card-header-c d-flex">
						<div class="card-box-ico">
							<span class="fa fa-plus"></span>
						</div>
						<div class="card-title-c align-self-center">
							<h2 class="title-c">Outreach</h2>
						</div>
					</div>
					<div class="card-body-c">
						<p class="content-c">
							We engage in health outreaches to rural communities where we engage in health screening activities, diagnosis and treatment of carry out health education programs. <br>
							Through our online campaigns, radio talk shows and visits to various departments in the school, surrounding communities (schools, markets etc.), we carry out health education and promotion campaigns.
						</p>
					</div>
					<div class="card-footer-c">
						<a href="profile.php" class="link-c link-icon">Read more
							<span class="ion-ios-arrow-forward"></span>
						</a>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="card-box-c foo">
					<div class="card-header-c d-flex">
						<div class="card-box-ico">
							<span class="fa fa-home"></span>
						</div>
						<div class="card-title-c align-self-center">
							<h2 class="title-c">Welfare</h2>
						</div>
					</div>
					<div class="card-body-c">
						<p class="content-c">
							We offer scholarships to our members and welfare support covering for health challenges and other financial needs all in the bid to ease the learning process of the medical student. <br>
							We take special interest in the mental and social life of our members, by organizing events that addresses the stress of the physical and mental of the Nigerian medical student.
						</p>
					</div>
					<div class="card-footer-c">
						<a href="profile.php" class="link-c link-icon">Read more
							<span class="ion-ios-arrow-forward"></span>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--/ What we do End /-->


<!--/ News Star /-->
<section class="section-property section-t8">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="title-wrap d-flex justify-content-between">
					<div class="title-box">
						<h2 class="title-a">Latest News</h2>
						<p>Swipe right <span class="ion-ios-arrow-forward"></span></p>
					</div>
					<div class="title-link">
						<a href="news.php">All
							<span class="ion-ios-arrow-forward"></span>
						</a>
					</div>
				</div>
			</div>
		</div>
		<div id="property-carousel" class="owl-carousel owl-theme">

			<?php foreach ($newss as $news) : ?>
				<div class="carousel-item-b">
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
									<!-- <div class="price-box d-flex">
										<span class="price-a"><?php echo html_entity_decode(substr($news['body'], 0, 100) . '...'); ?></span>
									</div> -->
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
<!--/ News End /-->


<!--/ Blog Star /-->
<section class="section-news section-t8">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="title-wrap d-flex justify-content-between">
					<div class="title-box">
						<h2 class="title-a">Latest Blog Posts</h2>
						<p>Swipe right <span class="ion-ios-arrow-forward"></span></p>
					</div>
					<div class="title-link">
						<a href="blog.php">Blog
							<span class="ion-ios-arrow-forward"></span>
						</a>
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
										<a href="singleblog.php?id=<?php echo $post['id']; ?>"><?php echo $post['title']; ?></a>
									</h2>
								</div>
								<div class="card-date">
									<span class="date-b"><?php echo $post['author']; ?></span>
								</div>
								<div class="card-category-b" style="margin-top: 10px">
									<a href="singleblog.php?id=<?php echo $post['id']; ?>" class="category-b"> <?php echo date('F j, Y', strtotime($post['created_at'])); ?> </a>
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


<!--/ Testimonials Star /-->
<section class="section-testimonials section-t8 nav-arrow-a">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="title-wrap d-flex justify-content-between">
					<div class="title-box">
						<h2 class="title-a">Testimonials</h2>
					</div>
				</div>
			</div>
		</div>
		<div id="testimonial-carousel" class="owl-carousel owl-arrow">
			<div class="carousel-item-a">
				<div class="testimonials-box">
					<div class="row">
						<div class="col-sm-12 col-md-12">
							<div class="testimonial-ico">
								<span class="ion-ios-quote"></span>
							</div>
							<div class="testimonials-content">
								<p class="testimonial-text">
									PUMSA, since my first year has been a beacon of support. From the tutorials, to the sports festivals, to outreach exposures, to political exposure upto the national level, she has repeatedly impacted positively on me.
								</p>
							</div>
							<div class="testimonial-author-box">
								<img src="img/ezinwa.jpg" alt="" class="testimonial-avatar">
								<h5 class="testimonial-author">Ezinwa Kelvin</h5>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="carousel-item-a">
				<div class="testimonials-box">
					<div class="row">
						<div class="col-sm-12 col-md-12">
							<div class="testimonial-ico">
								<span class="ion-ios-quote"></span>
							</div>
							<div class="testimonials-content">
								<p class="testimonial-text">
									PUMSA is a family every medical student should identify oneself with because the value of the association strives to protect the welfare of the individual. In terms of academics, PUMSA has been a strong force and encouragement through her tutorials and other structured programs geared towards achieving maximum success of the medical student.
									PUMSA has also balanced academics with socially entertaing activities and capacity building events/programs. I think every medical student should benefit maximally by being committed and active in PUMSA related activities.
								</p>
							</div>
							<div class="testimonial-author-box">
								<img src="img/henry.jpg" alt="" class="testimonial-avatar">
								<h5 class="testimonial-author">Henry Okpulor</h5>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--/ Testimonials End /-->


<!--/ Footer Star /-->
<section class="section-footer">
	<div class="container">
		<div class="row">
			<div class="col-sm-5 col-md-5">
				<div class="widget-a">
					<div class="w-header-a">
						<h3 class="w-title-a text-brand">PUMSA</h3>
					</div>
					<div class="w-body-a">
						<p class="w-text-a color-text-a">
							The Port Harcourt Medical Students' Association was launched formally in 1985, with her motto being "selfless service to mankind". She has over 40 years been taking giant strides to achieving it.
						</p>
					</div>
					<div class="w-footer-a">
						<ul class="list-unstyled">
							<li class="color-a">
								<span class="color-text-a">Email . </span> info@pumsa.org</li>
							<li class="color-a">
								<span class="color-text-a">Phone . </span> +234 814 786 5382, +234 810 388 6585</li>
						</ul>
					</div>
				</div>

				<br>
				<br>

				<div class="widget-a">
					<div class="w-header-a">
						<h3 class="w-title-a text-brand">Quick Links</h3>
					</div>
					<div class="w-body-a">
						<div class="w-body-a">
							<ul class="list-unstyled">
								<li class="item-list-a">
									<i class="fa fa-angle-right"></i> <a href="yellowpage.php"> <span style="color: #f4ca16;"> <strong> Yellow Page </strong></span></a>
								</li>
								<li class="item-list-a">
									<i class="fa fa-angle-right"></i> <a href="live.php">Live Events</a>
								</li>
								<li class="item-list-a">
									<i class="fa fa-angle-right"></i> <a href="history.php">Our History</a>
								</li>
								<li class="item-list-a">
									<i class="fa fa-angle-right"></i> <a href="principles.php">Our Principles</a>
								</li>
								<li class="item-list-a">
									<i class="fa fa-angle-right"></i> <a href="gallery.php">Gallery</a>
								</li>
								<li class="item-list-a">
									<i class="fa fa-angle-right"></i> <a href="events.php">Events</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>

			<div class="col-sm-7 col-md-7 section-md-t3">
				<div class="col-sm-12">
					<div class="contact-map box">
						<div id="map" class="contact-map">
							<div class="mapouter">
								<div class="gmap_canvas">
									<iframe class="lazyload" width="100%" height="450px" id="gmap_canvas" src="" data-src="https://maps.google.com/maps?q=university%20of%20port%20harcourt&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>Google Maps Generator by <a href="https://www.embedgooglemap.net">embedgooglemap.net</a></div>
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
		</div>
	</div>
</section>

<div style="padding-top: 5px; text-align: center; background: #f3f3f3;">
</div>

<footer>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<nav class="nav-footer">
					<ul class="list-inline">
						<li class="list-inline-item">
							<a href="index.php">Home</a>
						</li>
						<li class="list-inline-item">
							<a href="profile.php">About</a>
						</li>
						<li class="list-inline-item">
							<a href="live.php">Live</a>
						</li>
						<li class="list-inline-item">
							<a href="blog.php">Blog</a>
						</li>
						<li class="list-inline-item">
							<a href="contact.php">Contact</a>
						</li>
					</ul>
				</nav>
				<div class="socials-a">
					<ul class="list-inline">
						<li class="list-inline-item">
							<a href="https://facebook.com/Port-Harcourt-University-Medical-Students-Association-Pumsa-112037063596617/?_e_pi_=7%2CPAGE_ID10%2C6421767910">
								<i class="fa fa-facebook" aria-hidden="true"></i>
							</a>
						</li>
						<li class="list-inline-item">
							<a href="https://twitter.com/pumsaofficial">
								<i class="fa fa-twitter" aria-hidden="true"></i>
							</a>
						</li>
						<li class="list-inline-item">
							<a href="https://www.instagram.com/pumsa_official/">
								<i class="fa fa-instagram" aria-hidden="true"></i>
							</a>
						</li>
						<li class="list-inline-item">
							<a href="https://www.youtube.com/channel/UCEbGc713B7Gs1TY-ZG2TArA?view_as=subscriber">
								<i class="fa fa-youtube-play" aria-hidden="true"></i>
							</a>
						</li>
					</ul>
				</div>
				<div class="copyright-footer">
					<p class="copyright color-text-a">
						&copy; Copyright
						<span class="color-a">PUMSA.</span> All Rights Reserved.
					</p>
				</div>
				<div class="credits">
					Developed by <a href="https://patchcastle.com/"> <span class="color-b"> @gamsam | Patch Castle </span></a>
				</div>
			</div>
		</div>
	</div>
</footer>
<!--/ Footer End /-->

<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

<!-- JavaScript Libraries -->
<script defer src="<?php echo BASE_URL . '/lib/combined.min.js' ?>"></script>
<script src="<?php echo BASE_URL . '/lib/lazysizes.min.js' ?>" async></script>

<!--  Main Javascript File -->
<script defer src="js/main.js"></script>

</body>

<!-- Preloader -->
<div id="ctn-preloader" class="ctn-preloader">
	<div class="animation-preloader">
		<div class="spinner"></div>
		<div class="txt-loading">
			<span data-text-preloader="P" class="letters-loading">
				P
			</span>
			<span data-text-preloader="U" class="letters-loading">
				U
			</span>
			<span data-text-preloader="M" class="letters-loading">
				M
			</span>
			<span data-text-preloader="S" class="letters-loading">
				S
			</span>
			<span data-text-preloader="A" class="letters-loading">
				A
		</div>
		<p class="text-center">Loading</p>
	</div>
	<div class="loader">
		<div class="row">
			<div class="col-12 loader-section">
				<div class="bg"></div>
			</div>
		</div>
	</div>
</div>

</html>