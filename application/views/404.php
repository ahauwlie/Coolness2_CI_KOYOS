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
				<section class="ds s-py-sm-190 s-py-100 error-404 not-found">
					<div class="container">
						<div class="row">
							<div class="col-sm-12 text-center">
								<header class="page-header">
									<h6>Page Not Found</h6>
									<h3>404</h3>
									<p>error</p>
								</header>
								<div class="page-content">
									<p>
										<a href="<?php echo site_url('home'); ?>" class="btn btn-outline-maincolor">Go Home</a>
									</p>
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