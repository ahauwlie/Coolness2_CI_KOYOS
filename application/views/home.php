<?php
/**
 * Created by PhpStorm.
 * User: Hauw
 * Date: 06/25/2020
 * Time: 12:11 PM
 */
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html class="no-js">
	<head>
		<title>Coolness</title>
		<meta charset="utf-8">
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- favicon.ico and apple-touch-icon.png'); ?>-->
		<?php echo $css; ?>
		<script src="<?php echo base_url('/inti/js/vendor/modernizr-custom.js'); ?>"></script>
	</head>
	<body>
		<div class="preloader">
			<div class="preloader_image"></div>
		</div>
		<div class="modal" tabindex="-1" role="dialog" aria-labelledby="search_modal" id="search_modal">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			</button>
			<div class="widget widget_search">
				<form method="get" class="searchform search-form" action="http://webdesign-finder.com/">
					<div class="form-group">
						<input type="text" value="" name="search" class="form-control" placeholder="Search keyword" id="modal-search-input">
					</div>
					<button type="submit" class="btn">Search</button>
				</form>
			</div>
		</div>
		<div class="modal" tabindex="-1" role="dialog" aria-labelledby="search_modal" id="sign_in_modal">
			<div class="container">
				<div class="row c-gutter-0 align-items-center">
					<div class="ls col-12 col-sm-6">
						<form class="contact-form sign-in c-mb-10 c-gutter-10" method="post" action="http://webdesign-finder.com/">
							<div class="row">
								<div class="col-sm-12">
									<h4><span class="color-main">Sign In</span>
									<div class="divider-sm-0 divider-md-30"></div>
									<div class="form-group has-placeholder">
										<label for="signname">Full Name <span class="required">*</span></label>
										<input type="text" aria-required="true" size="30" value="" name="name" id="signname" class="form-control" placeholder="Full Name">
									</div>
									<div class="form-group has-placeholder">
										<label for="signpassword">Password<span class="required">*</span></label>
										<input type="password" aria-required="true" size="30" value="" name="password" id="signpassword" class="form-control" placeholder="Password">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-12">
									<div class="form-group">
										<button type="submit" id="contact_signinform_submit" name="contact_submit" class="btn btn-outline-darkgrey">Login</button>
									</div>
								</div>
							</div>
						</form>
					</div>
					<div class="col-12 col-sm-6 d-none d-sm-block">
						<img src="<?php echo base_url('/inti/images/sing-in-modal.jpg'); ?>" alt="">
					</div>
				</div>
			</div>
		</div>
		<svg style="display:none" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
			<defs>
				<symbol id="icon-1" viewBox="0 0 226 32">
					<title>1</title>
					<path d="M18.942 13.058c-0.244-0.244-0.64-0.244-0.884 0l-2.683 2.683-0.808-0.808c-0.244-0.244-0.64-0.244-0.884 0s-0.244 0.64 0 0.884l1.25 1.25c0.122 0.122 0.282 0.183 0.442 0.183s0.32-0.061 0.442-0.183l3.125-3.125c0.244-0.244 0.244-0.64 0-0.884z"></path>
				</symbol>
				<symbol id="icon-2" viewBox="0 0 248 32">
					<title>2</title>
					<path d="M18.942 13.058c-0.244-0.244-0.64-0.244-0.884 0l-2.683 2.683-0.808-0.808c-0.244-0.244-0.64-0.244-0.884 0s-0.244 0.64 0 0.884l1.25 1.25c0.122 0.122 0.282 0.183 0.442 0.183s0.32-0.061 0.442-0.183l3.125-3.125c0.244-0.244 0.244-0.64 0-0.884z"></path>
				</symbol>
				<symbol id="icon-aim" viewBox="0 0 32 32">
					<title>aim</title>
					<path d="M29.776 13.776h-1.393c-0.265-6.424-5.442-11.601-11.866-11.866v-1.393c0-0.286-0.232-0.517-0.517-0.517s-0.517 0.232-0.517 0.517v1.393c-6.424 0.265-11.601 5.442-11.866 11.866h-1.393c-0.286 0-0.517 0.232-0.517 0.517s0.232 0.517 0.517 0.517h1.393c0.265 6.424 5.442 11.601 11.866 11.866v4.806c0 0.286 0.232 0.517 0.517 0.517s0.517-0.232 0.517-0.517v-4.806c6.424-0.265 11.601-5.442 11.866-11.866h1.393c0.286 0 0.517-0.232 0.517-0.517s-0.232-0.517-0.517-0.517zM15.483 25.641c-5.853-0.264-10.567-4.977-10.831-10.831h4.53c0.252 3.359 2.942 6.049 6.301 6.301v4.53zM15.483 20.072c-2.788-0.247-5.014-2.474-5.262-5.262h2.979c0.213 1.156 1.126 2.070 2.283 2.283v2.979zM15.483 16.031c-0.585-0.174-1.046-0.636-1.221-1.221h1.221v1.221zM14.262 13.776c0.174-0.585 0.636-1.046 1.221-1.221v1.221h-1.221zM13.2 13.776h-2.979c0.248-2.788 2.474-5.014 5.262-5.262v2.979h0c-1.156 0.213-2.069 1.126-2.283 2.283zM15.483 7.475c-3.359 0.252-6.049 2.942-6.301 6.301h-4.53c0.264-5.853 4.977-10.567 10.831-10.831v4.53zM16.517 8.514c2.788 0.248 5.014 2.474 5.262 5.262l-2.979 0c-0.213-1.156-1.126-2.070-2.283-2.283v-2.979zM16.517 12.555c0.585 0.174 1.046 0.636 1.221 1.221h-1.221v-1.221zM16.517 14.81h1.221c-0.174 0.585-0.636 1.046-1.221 1.221v-1.221zM18.8 14.81h2.979c-0.247 2.788-2.474 5.014-5.262 5.262v-2.979h-0c1.156-0.213 2.070-1.126 2.283-2.283zM16.517 25.641v-4.53c3.359-0.252 6.049-2.942 6.301-6.301h4.53c-0.264 5.853-4.977 10.567-10.831 10.831zM22.818 13.776c-0.252-3.359-2.942-6.049-6.301-6.301v-4.53c5.853 0.264 10.567 4.977 10.831 10.831h-4.53z"></path>
				</symbol>
			</defs>
		</svg>
		<div id="canvas">
			<div id="box_wrapper">
				<?php echo $header; ?>
				<section class="page_slider">
					<div class="flexslider">
						<ul class="slides">
							<li class="cs cover-image flex-slide">
								<img src="<?php echo base_url('/inti/images/slider/slide1.jpg'); ?>" alt="">
								<div class="container">
									<div class="row">
										<div class="col-md-12">
											<div class="intro_layers_wrapper">
												<div class="intro_layers">
													<div class="intro_layer" data-animation="fadeInRight">
														<div class="fw-divider-special-slider"></div>
														<a href="#" class="btn btn-outline-maincolor"><span>Learn More</span></a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</li>
							<li class="cs cover-image flex-slide">
								<img src="<?php echo base_url('/inti/images/slider/slide2.jpg'); ?>" alt="">
								<div class="container">
									<div class="row">
										<div class="col-md-12">
											<div class="intro_layers_wrapper">
												<div class="intro_layers">
													<div class="intro_layer" data-animation="fadeInRight">
														<div class="fw-divider-special-slider"></div>
														<a href="#" class="btn btn-outline-maincolor"><span>Learn More</span></a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</li>
						</ul>
					</div>
				</section>
				<section class="ds s-pb-60 s-pb-md-80 s-pb-xl-130 c-gutter-5 c-mb-70 service-isotope top-minus">
					<div class="container">
						<div class="row">
							<div class="col-md-4 col-sm-12">
								<div class="ls icon-box text-center">
									<div class="icon-styled fs-40">
										<i class="color-main ico icon-aircraft"></i>
									</div>
									<h4>
										<a href="service-single.html">isi apa hayooo</a>
									</h4>
									<p>
										isi apa hayooo.
									</p>
									<a href="service-single.html" class="simple_link">learn more</a>
								</div>
								<div class="divider-40 d-sm-block d-md-none"></div>
							</div>
							<div class="col-md-4 col-sm-12">
								<div class="ls icon-box text-center">
									<div class="icon-styled fs-40">
										<i class="color-main ico icon-supplies"></i>
									</div>
									<h4>
										<a href="service-single.html">isi apa hayooo</a>
									</h4>
									<p>
										isi apa hayooo.
									</p>
									<a href="service-single.html" class="simple_link">learn more</a>
								</div>
								<div class="divider-40 d-sm-block d-md-none"></div>
							</div>
							<div class="col-md-4 col-sm-12">
								<div class="ls icon-box text-center">
									<div class="icon-styled fs-40">
										<i class="color-main ico icon-radar"></i>
									</div>
									<h4>
										<a href="service-single.html">isi apa hayooo</a>
									</h4>
									<p>
										isi apa hayooo.
									</p>
									<a href="service-single.html" class="simple_link">learn more</a>
								</div>
								<div class="divider-40 d-sm-block d-md-none"></div>
							</div>
						</div>
					</div>
				</section>
				<section class="ds s-pb-60 s-pb-md-80 s-pb-xl-150 ">
					<div class="cover-image s-cover-left"></div>
					<div class="container">
						<div class="row align-items-center c-gutter-60">
							<div class="col-md-12 col-lg-7">
								<div class="item-media">
									<div class="embed-responsive">
										<img src="<?php echo base_url('/inti/images/tank.jpg'); ?>" alt="">
									</div>
								</div>
							</div>
							<div class="col-md-12 col-lg-5">
								<div class="divider-30 divider-md-70 divider-xl-75"></div>
								<h1><span class="color-main">isi apa</span><br> hayooo</h1>
								<div class="fw-divider-special">
									<p class="special"></p>
								</div>
								<div class="divider-40 divider-sm-50"></div>
								<p>
									isi apa hayoooo.
								</p>
								<div>
									<div class="divider-40 divider-sm-65"></div>
									<div class="widget widget_social_buttons">
										<a href="#" class="fa fa-facebook" title="facebook"></a>
										<a href="#" class="fa fa-twitter" title="twitter"></a>
										<a href="#" class="fa fa-google" title="google"></a>
										<a href="#" class="fa fa-youtube-play" title="youtube-play"></a>
										<a href="#" class="fa fa-rss" title="rss"></a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="divider-0 divider-lg-60"></div>
				</section>
				<section id="service-home" class="ls s-pt-60 s-pt-md-70 s-pt-xl-141 s-pb-60 s-pb-md-80 s-pb-xl-150 service-isotope">
					<div class="container">
						<div class="row">
							<div class="col-sm-12 text-center">
								<h1 style="color: white;"><span class="color-main">Our </span>Services</h1>
								<div class="divider-20"></div>
								<div class="fw-divider-special-center">
									<p class="special"></p>
								</div>
								<div class="divider-35 divider-md-75"></div>
							</div>
							<div class="col-md-4 col-sm-12">
								<div class="ls icon-box text-center">
									<div class="icon-styled fs-40">
										<i class="color-main ico icon-secure-shield"></i>
									</div>
									<h4>
										<a href="service-single.html">ISI APA HAYOO</a>
									</h4>
									<p>
										ISI APA HAYOO.
									</p>
									<a href="service-single.html" class="simple_link">learn more</a>
								</div>
								<div class="divider-40 d-sm-block d-md-none"></div>
							</div>
							<div class="col-md-4 col-sm-12">
								<div class="ls icon-box text-center">
									<div class="icon-styled fs-40">
										<i class="color-main ico icon-aim"></i>
									</div>
									<h4>
										<a href="service-single.html">ISI APA HAYOO</a>
									</h4>
									<p>
										ISI APA HAYOO.
									</p>
									<a href="service-single.html" class="simple_link">learn more</a>
								</div>
								<div class="divider-40 d-sm-block d-md-none"></div>
							</div>
							<div class="col-md-4 col-sm-12">
								<div class="ls icon-box text-center">
									<div class="icon-styled fs-40">
										<i class="color-main ico icon-id"></i>
									</div>
									<h4>
										<a href="service-single.html">ISI APA HAYOO</a>
									</h4>
									<p>
										ISI APA HAYOO.
									</p>
									<a href="service-single.html" class="simple_link">learn more</a>
								</div>
								<div class="divider-40 d-sm-block d-md-none"></div>
							</div>
							<div class="divider-0 divider-md-30"></div>
						</div>
						<div class="row">
							<div class="col-md-4 col-sm-12">
								<div class="ls icon-box text-center">
									<div class="icon-styled fs-40">
										<i class="color-main ico icon-medal"></i>
									</div>
									<h4>
										<a href="service-single.html">ISI APA HAYOO</a>
									</h4>
									<p>
										ISI APA HAYOO.
									</p>
									<a href="service-single.html" class="simple_link">learn more</a>
								</div>
								<div class="divider-40 d-sm-block d-md-none"></div>
							</div>
							<div class="col-md-4 col-sm-12">
								<div class="ls icon-box text-center">
									<div class="icon-styled fs-40">
										<i class="color-main ico icon-shield"></i>
									</div>
									<h4>
										<a href="service-single.html">ISI APA HAYOO</a>
									</h4>
									<p>
										ISI APA HAYOO.
									</p>
									<a href="service-single.html" class="simple_link">learn more</a>
								</div>
								<div class="divider-40 d-sm-block d-md-none"></div>
							</div>
							<div class="col-md-4 col-sm-12">
								<div class="ls icon-box text-center">
									<div class="icon-styled fs-40">
										<i class="color-main ico icon-jet"></i>
									</div>
									<h4>
										<a href="service-single.html">ISI APA HAYOO</a>
									</h4>
									<p>
										ISI APA HAYOO.
									</p>
									<a href="service-single.html" class="simple_link">learn more</a>
								</div>
							</div>
						</div>
					</div>
				</section>
				<section id="our-gallery" class="ds s-py-60 s-py-md-80 s-py-xl-150">
					<div class="divider-60 divider-md-80 divider-xl-140"></div>
					<div class="row">
						<div class="col-sm-12 text-center">
							<h1><span class="color-main">Our </span>Gallery</h1>
							<div class="divider-20"></div>
							<div class="fw-divider-special-center">
								<p class="special"></p>
							</div>
							<div class="divider-35 divider-md-55"></div>
						</div>
						<div class="col-md-12">
							<div id="demo" class="accordion">
								<ul class="accordion__ul">
									<li class="accordion__li">
										<img class="accordion__img" src="<?php echo base_url('/inti/images/'); ?>" alt="PHOTO">
										<a href="#"><span>ISI APA HAYOO </span></a>
									</li>
									<li class="accordion__li">
										<img class="accordion__img" src="<?php echo base_url('/inti/images/'); ?>" alt="PHOTO">
										<a href="#"><span>ISI APA HAYOO </span></a>
									</li>
									<li class="accordion__li">
										<img class="accordion__img" src="<?php echo base_url('/inti/images/'); ?>" alt="PHOTO">
										<a href="#"><span>ISI APA HAYOO </span></a>
									</li>
									<li class="accordion__li">
										<img class="accordion__img" src="<?php echo base_url('/inti/images/'); ?>" alt="PHOTO">
										<a href="#"><span>ISI APA HAYOO </span></a>
									</li>
									<li class="accordion__li">
										<img class="accordion__img" src="<?php echo base_url('/inti/images/'); ?>" alt="PHOTO">
										<a href="#"><span>ISI APA HAYOO </span></a>
									</li>
									<li class="accordion__li">
										<img class="accordion__img" src="<?php echo base_url('/inti/images/'); ?>" alt="PHOTO">
										<a href="#"><span>ISI APA HAYOO </span></a>
									</li>
									<li class="accordion__li">
										<img class="accordion__img" src="<?php echo base_url('/inti/images/'); ?>" alt="PHOTO">
										<a href="#"><span>ISI APA HAYOO </span></a>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="divider-60 divider-md-80 divider-xl-150"></div>
				</section>
				<section id="blog" class="ds blog-home s-pt-60 s-pt-md-70 s-pt-xl-141 s-pb-60 s-pb-md-80 s-pb-xl-150">
					<div class="container">
						<div class="row">
							<div class="col-sm-12 text-center">
								<h1><span class="color-main">Our </span>Blog</h1>
								<div class="divider-20"></div>
								<div class="fw-divider-special-center">
									<p class="special"></p>
								</div>
								<div class="divider-35 divider-md-55"></div>
							</div>
							<div class="col-md-12">
								<div class="row justify-content-center" id="abis">
									<h2 class="special-heading">
									Coming Soon!
									<span>Stay Tuned!</span>
									</h2>
									<div style="background-color: white;" class="is-countdown" id="abis">
										<span class="countdown-row countdown-show4">
											<span class="countdown-section">
												<span class="countdown-amount"><p id="hari"></p></span><span class="countdown-period">Days</span>
											</span>
											<span class="countdown-section">
												<span class="countdown-amount"><p id="jam"></p></span><span class="countdown-period">Hours</span>
											</span>
											<span class="countdown-section">
												<span class="countdown-amount"><p id="menit"></p></span><span class="countdown-period">Minutes</span>
											</span>
											<span class="countdown-section">
												<span class="countdown-amount"><p id="detik"></p></span><span class="countdown-period">Seconds</span>
											</span>
										</span>
									</div>
									<script>
										var countDownDate = new Date("Aug 17, 2020 09:30:00").getTime();
										var x = setInterval(function() {
										  	var now = new Date().getTime();
										  	var distance = countDownDate - now;
										 	var days = Math.floor(distance / (1000 * 60 * 60 * 24));
										  	var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
										  	var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
										  	var seconds = Math.floor((distance % (1000 * 60)) / 1000);
										  	document.getElementById("hari").innerHTML = days;
										  	document.getElementById("jam").innerHTML = hours;
										  	document.getElementById("menit").innerHTML = minutes;
										  	document.getElementById("detik").innerHTML = seconds;
										  	if (distance < 0) {
											    clearInterval(x);
											    document.getElementById("abis").innerHTML = '<div class="col-lg-4 col-md-6"><article class="ls content-padding post type-post status-publish format-standard has-post-thumbnaills"><div class="item-media post-thumbnail"><span class="cat-links"><a href="http://drivelywp/category/news/">charity</a></span><img src="<?php echo base_url('/inti/images/blog/01.jpg'); ?>" alt=""><div class="media-links"><a class="abs-link" title="" href="blog-left.html"></a></div></div><div class="item-content"><header class="entry-header"><a href="blog-single-right.html" rel="bookmark"><time class="entry-date published updated" datetime="2018-03-18T15:15:12+00:00">tanggal</time></a><h3 class="entry-title"><a href="blog-single-right.html" rel="bookmark">contoh</a></h3></header><div class="entry-content"><p>contoh...</p></div><div class="entry-meta"><span class="byline"><span class="author-img"><img alt="" src="<?php echo base_url('/inti/images/team/author-img.jpg'); ?>"></span><span class="author vcard"><a class="url fn n" href="blog-right.html">admin</a></span></span></div></div></article></div><div class="divider-60 d-block d-md-none d-xl-none"></div><div class="col-lg-4 col-md-6"><article class="ls content-padding post type-post status-publish format-standard has-post-thumbnaills"><div class="item-media post-thumbnail"><span class="cat-links"><a href="http://drivelywp/category/news/">security</a></span><img src="<?php echo base_url('/inti/images/blog/02.jpg'); ?>" alt=""><div class="media-links"><a class="abs-link" title="" href="blog-left.html"></a></div></div><div class="item-content"><header class="entry-header"><a href="blog-single-right.html" rel="bookmark"><time class="entry-date published updated" datetime="2018-03-18T15:15:12+00:00">tanggal</time></a><h3 class="entry-title"><a href="blog-single-right.html" rel="bookmark">contoh</a></h3></header><div class="entry-content"><p>contoh...</p></div><div class="entry-meta"><span class="byline"><span class="author-img"><img alt="" src="<?php echo base_url('/inti/images/team/author-img.jpg'); ?>"></span><span class="author vcard"><a class="url fn n" href="blog-right.html">admin</a></span></span></div></div></article></div><div class="divider-60 d-md-block d-lg-none "></div><div class="col-lg-4 col-md-6"><article class="ls content-padding post type-post status-publish format-standard has-post-thumbnaills"><div class="item-media post-thumbnail"><span class="cat-links"><a href="http://drivelywp/category/news/">charity</a></span><img src="<?php echo base_url('/inti/images/blog/03.jpg'); ?>" alt=""><div class="media-links"><a class="abs-link" title="" href="blog-left.html"></a></div></div><div class="item-content"><header class="entry-header"><a href="blog-single-right.html" rel="bookmark"><time class="entry-date published updated" datetime="2018-03-18T15:15:12+00:00">tanggal</time></a><h3 class="entry-title"><a href="blog-single-right.html" rel="bookmark">contoh</a></h3></header><div class="entry-content"><p>contoh...</p></div><div class="entry-meta"><span class="byline"><span class="author-img"><img alt="" src="<?php echo base_url('/inti/images/team/author-img.jpg'); ?>"></span><span class="author vcard"><a class="url fn n" href="blog-right.html">admin</a></span></span></div></div></article></div>';
										  	}
										}, 1000);
									</script>
								</div>
							</div>
						</div>
					</div>
				</section>
				<section id="team-home" class="ls s-pt-60 s-pt-md-70 s-pt-xl-141 s-pb-60 s-pb-md-80 s-pb-xl-150">
					<div class="container">
						<div class="row">
							<div class="col-sm-12 text-center">
								<h1 style="color: white;"><span class="color-main">Our </span>management</h1>
								<div class="divider-20"></div>
								<div class="fw-divider-special-center">
									<p class="special"></p>
								</div>
								<div class="divider-35 divider-md-55"></div>
							</div>
							<div class="col-md-4 col-sm-12">
								<div class="team-style-1">
									<div class="card text-center">
										<img class="card-img-top" src="<?php echo base_url('/inti/images/'); ?>" alt="foto">
										<div class="card-body">
											<h4 class="card-title">
												<a href="team-single.html">Anthony S. Felt</a>
											</h4>
											<p class="card-text">
												support
											</p>
											<p class="card-text">
												<a href="#" class="fa fa-facebook " title="facebook"></a>
												<a href="#" class="fa fa-twitter " title="twitter"></a>
												<a href="#" class="fa fa-instagram " title="instagram"></a>
												<a href="#" class="fa fa-google " title="google"></a>
											</p>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-4 col-sm-12">
								<div class="divider-30 divider-md-0"></div>
								<div class="team-style-1">
									<div class="card text-center">
										<img class="card-img-top" src="<?php echo base_url('/inti/images/'); ?>" alt="foto">
										<div class="card-body">
											<h4 class="card-title">
												<a href="team-single.html">Viola J. Feliciano</a>
											</h4>
											<p class="card-text">
												Support
											</p>
											<p class="card-text">
												<a href="#" class="fa fa-facebook " title="facebook"></a>
												<a href="#" class="fa fa-twitter " title="twitter"></a>
												<a href="#" class="fa fa-instagram " title="instagram"></a>
												<a href="#" class="fa fa-google " title="google"></a>
											</p>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-4 col-sm-12">
								<div class="divider-30 divider-md-0"></div>
								<div class="team-style-1">
									<div class="card text-center">
										<img class="card-img-top" src="<?php echo base_url('/inti/images/'); ?>" alt="foto">
										<div class="card-body">
											<h4 class="card-title">
												<a href="team-single.html">Sally S. Buelow</a>
											</h4>
											<p class="card-text">
												Support
											</p>
											<p class="card-text">
												<a href="#" class="fa fa-facebook " title="facebook"></a>
												<a href="#" class="fa fa-twitter " title="twitter"></a>
												<a href="#" class="fa fa-instagram " title="instagram"></a>
												<a href="#" class="fa fa-google " title="google"></a>
											</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<section id="information-block" class="ds s-pt-60 s-pt-md-70 s-pt-xl-141 s-pb-60 s-pb-md-80 s-pb-xl-150">
					<div class="container">
						<div class="row c-gutter-50">
							<div class="divider-10 divider-lg-10 divider-xl-5"></div>
							<div class="col-md-9 col-lg-6 col-sm-12">
								<h1><span class="color-main">Contact</span> Us</h1>
								<div class="fw-divider-special">
									<p class="special"></p>
								</div>
								<div class="divider-40 divider-md-65"></div>
								<div class="form-group">
									<label for="form-name">Name</label>
									<input type="text" aria-required="true" size="30" value="" name="name" id="form-name" class="form-control" placeholder="Enter Your Name">
								</div>
								<div class="form-group">
									<label for="email-name">Email</label>
									<input type="email" aria-required="true" size="30" value="" name="email" id="email-name" class="form-control" placeholder="Enter Your Email">
								</div>
								<div class="form-group">
									<label for="form-message">Message</label>
									<textarea aria-required="true" rows="3" cols="20" name="message" id="form-message" class="form-control" placeholder="Enter Your Message here"></textarea>
								</div>
								<div class="form-group">
									<button type="submit" id="form_submit" name="contact_submit" class="btn btn-outline-darkgrey mt-30">Send</button>
								</div>
							</div>
						</div>
					</div>
				</section>
				<?php echo $footer; ?>
				<section class="page_copyright ds s-py-10">
					<div class="container">
						<div class="row align-items-center">
							<div class="col-md-12 text-center">
								<p><span class="copyright_year">develop by</span> GOX Team</p>
							</div>
						</div>
					</div>
				</section>
			</div>
		</div>
		<?php echo $js; ?>
	</body>
</html>