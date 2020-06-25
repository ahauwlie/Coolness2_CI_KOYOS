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
		<title>Fortex - Bootstrap 4 premium MultePage HTML template</title>
		<meta charset="utf-8">
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
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
									<h1 class="bold">Contact Page</h1>
									<ul class="breadcrumb">
										<li class="breadcrumb-item">
											<a href="<?php echo site_url('home'); ?>">Home</a>
										</li>
										<li class="breadcrumb-item active">
											About Us
										</li>
									</ul>
								</div>
							</div>
						</div>
					</section>
				</div>
				<section class="ls">
					<div class="container">
						<div class="row">
							<div class="divider-40 divider-lg-150"></div>
							<div class="col-lg-6  mt-35 animate" data-animation="pullDown">
								<h3 class="title_block"><span>Our</span> Contacts</h3>
								<p class="pb-25">We provide free pick up and drop off at home or school for all behind-the-wheel lessons. And, we offer a payment plan at no additional charge. </p>
								<div class="row">
									<div class="col-sm-6">
										<div class="icon-box">
											<div class="media">
												<div class="icon-styled color-main fs-40">
													<i class="ico icon-smartphone"></i>
												</div>
												<div class="media-body">
													<h6 class="fw-300">
														Phone 24/7
													</h6>
													<p>
														800-123-4567<br>
														Fax: 718-724-3312
													</p>
												</div>
											</div>
										</div>
										<div class="icon-box">
											<div class="media">
												<div class="icon-styled color-main fs-40">
													<i class="ico icon-placeholder"></i>
												</div>
												<div class="media-body">
													<h6 class="fw-300">
														Our address
													</h6>
													<p>
														412 Memory Lane
														Hopkins Park, IL 60944
													</p>
												</div>
											</div>
										</div>
									</div>
									<div class="divider-30 d-block d-sm-none"></div>
									<div class="col-sm-6">
										<div class="icon-box">
											<div class="media">
												<div class="icon-styled color-main fs-40">
													<i class="ico icon-schedule-button"></i>
												</div>
												<div class="media-body">
													<h6 class="fw-300">
														Operating Hours
													</h6>
													<p>
														Mon-Fri: 9:00 am - 5:00 pm
														Sat-Sun: 11:00 am - 16:00 pm
													</p>
												</div>
											</div>
										</div>
										<div class="icon-box">
											<div class="media">
												<div class="icon-styled color-main fs-40">
													<i class="ico icon-email"></i>
												</div>
												<div class="media-body">
													<h6 class="fw-300">
														Email address
													</h6>
													<p>
														support@fortex.com
														info@fortex.com
													</p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="divider-40 d-lg-none d-md-block"></div>
							<div class="padding-mobile-small col-lg-6 cs px-70 py-66 animate" data-animation="scaleAppear">
								<form class="contact-form c-mb-10 c-gutter-10" method="post" action="http://webdesign-finder.com/">
									<div class="row">
										<div class="col-sm-12">
											<h4 class="title_block">Email<span> Us</span></h4>
											<div class="form-group has-placeholder">
												<label for="name">Full Name <span class="required">*</span></label>
												<input type="text" aria-required="true" size="30" value="" name="name" id="name" class="form-control" placeholder="Full Name">
											</div>
											<div class="form-group has-placeholder">
												<label for="email">Email address<span class="required">*</span></label>
												<input type="email" aria-required="true" size="30" value="" name="email" id="email" class="form-control" placeholder="Email">
											</div>
											<div class="form-group has-placeholder">
												<label for="message">Message</label>
												<textarea aria-required="true" rows="6" cols="45" name="message" id="message" class="form-control" placeholder="Message"></textarea>
											</div>
										</div>
									</div>
									<div class="row mt-30">
										<div class="col-sm-12">
											<div class="form-group">
												<button type="submit" id="contact_form_submit" name="contact_submit" class="btn btn-outline-darkgrey">Email Us</button>
											</div>
										</div>
									</div>
								</form>
							</div>
							<div class="divider-100 divider-lg-130"></div>
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