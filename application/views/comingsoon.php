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
									<h4><span class="color-main">Sign In</span> / Sign Up</h4>
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
										<button type="submit" id="contact_signinform_submit" name="contact_submit" class="btn btn-outline-darkgrey">Email Us</button>
									</div>
								</div>
								<a class="sign_up_modal close-modal" data-dismiss="modal" aria-label="Close" href="#sign_up_modal"><span aria-hidden="true">Forgot Password?</span></a>
							</div>
						</form>
					</div>
					<div class="col-12 col-sm-6 d-none d-sm-block">
						<img src="images/sing-in-modal.jpg" alt="">
					</div>
				</div>
			</div>
		</div>
		<div id="canvas">
			<div id="box_wrapper">
				<div class="header_absolute ds cover-background">
					<?php echo $header; ?>
					<section class="page_title padding-mobile cs s-py-60 s-py-md-80 s-py-xl-150">
						<div class="container">
							<div class="row">
								<div class="col-md-12">
									<h1 class="bold">Coming Soon</h1>
									<ul class="breadcrumb">
										<li class="breadcrumb-item">
											<a href="index.html">Home</a>
										</li>
										<li class="breadcrumb-item">
											<a href="#">Pages</a>
										</li>
										<li class="breadcrumb-item active">
											Coming Soon
										</li>
									</ul>
								</div>
							</div>
						</div>
					</section>
				</div>
				<section class="ls s-py-75 s-overlay page_title">
					<div class="container">
						<div class="row">
							<div class="d-none d-lg-block divider-70"></div>
							<div class="col-sm-12 text-center">
								<h2 class="special-heading">
									Coming Soon!
								</h2>
								<p>Stay Tuned!</p>
								<div id="comingsoon-countdown"></div>
							</div>
							<div class="d-none d-lg-block divider-70"></div>
						</div>
					</div>
				</section>
				<footer class="page_footer ds s-pt-77 s-pb-40 c-gutter-150">
					<div class="container">
						<div class="row">
							<div class="divider-20 d-none d-xl-block"></div>
							<div class="col-md-4 animate" data-animation="fadeInUp">
								<div class="widget widget_icons_list">
									<h3>Contacts</h3>
									<div class="media side-icon-box">
										<div class="icon-styled color-main fs-14">
											<i class="ico icon-map-pin-silhouette"></i>
										</div>
										<p class="media-body">USA, 3280 Cabell Avenue Alexandria, VA 22301</p>
									</div>
									<div class="media side-icon-box">
										<div class="icon-styled color-main fs-14">
											<i class="ico icon-phone-receiver"></i>
										</div>
										<p class="media-body"> +1 703 518 60 99 <span>+1 234 056 78 90</span></p>
									</div>
									<div class="media side-icon-box">
										<div class="icon-styled color-main fs-14">
											<i class="fa fa-envelope"></i>
										</div>
										<p class="media-body">
											<a href="#">info@fortex.com</a>
										</p>
									</div>
								</div>
							</div>
							<div class="col-md-4 animate" data-animation="fadeInUp">
								<div class="widget widget_text">
									<img src="images/logo.png" alt="">
									<p>
										A security agency is a governmental organization which conducts intelligence activities for the internal security of a nation.
									</p>
									<div class="divider-20 d-none d-xl-block"></div>
									<div class="fw-divider-special">
										<p class="special"></p>
									</div>
									<div class="divider-25 d-none d-xl-block"></div>
									<div class="widget widget_social_buttons">
										<a href="#" class="fa fa-facebook" title="facebook"></a>
										<a href="#" class="fa fa-twitter" title="twitter"></a>
										<a href="#" class="fa fa-google" title="google"></a>
										<a href="#" class="fa fa-youtube-play" title="youtube-play"></a>
										<a href="#" class="fa fa-rss" title="rss"></a>
									</div>
								</div>
							</div>
							<div class="col-md-4 animate" data-animation="fadeInUp">
								<div class="widget widget_recent_posts">
									<h3 class="widget-title">Recent Posts</h3>
									<ul class="list-unstyled">
										<li class="media">
											<a class="media-image" href="blog-single-right.html">
											<img src="images/events/01.jpg" alt="">
											</a>
											<div class="media-body">
												<h4>
													<a href="blog-single-right.html">Eod tempor invidunt labore dolore magna</a>
												</h4>
												<p class="item-meta">
													Dec 18, 2018
												</p>
											</div>
										</li>
										<li class="media">
											<a class="media-image" href="blog-single-right.html">
											<img src="images/events/02.jpg" alt="">
											</a>
											<div class="media-body">
												<h4>
													<a href="blog-single-right.html">Aliquyam erat, sed voluptua vero eos </a>
												</h4>
												<p class="item-meta">
													Nov 22, 2018
												</p>
											</div>
										</li>
									</ul>
								</div>
							</div>
							<div class="divider-40 d-none d-xl-block"></div>
						</div>
					</div>
				</footer>
				<section class="page_copyright ds s-py-10">
					<div class="container">
						<div class="row align-items-center">
							<div class="col-md-12 text-center">
								<p><span class="copyright_year">&copy;</span> Copyright Fortex</p>
							</div>
						</div>
					</div>
				</section>
			</div>
		</div>
		<script src="js/compressed.js"></script>
		<script src="js/main.js"></script>
		<script src="js/switcher.js"></script>
	</body>
</html>