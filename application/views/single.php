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
		<!-- Place favicon.ico and apple-touch-icon.png'); ?> in the root directory -->
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
						<img src="<?php echo base_url('/inti/images/sing-in-modal.jpg'); ?>" alt="">
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
									<h1 class="bold">Blog Post without Sidebar</h1>
									<ul class="breadcrumb">
										<li class="breadcrumb-item">
											<a href="<?php echo site_url('home'); ?>">Home</a>
										</li>
										<li class="breadcrumb-item">
											<a href="<?php echo site_url('blog'); ?>">Blog</a>
										</li>
										<li class="breadcrumb-item active">
											<!-- nama blog yaa -->
										</li>
									</ul>
								</div>
							</div>
						</div>
					</section>
				</div>
				<section class="ls s-py-60 s-py-md-80 s-py-xl-150 c-gutter-60">
					<div class="container">
						<div class="row">
							<main class="col-lg-12">
								<article class="vertical-item post type-post status-publish format-standard has-post-thumbnail single single-post" style="background-color: black;">
									<div class="item-content">
										<div class="item-media post-thumbnail">
											<span class="cat-links"><a href="http://drivelywp/category/news/">charity</a></span>
											<img src="<?php echo base_url('/inti/images/gallery/01.jpg'); ?>" alt="">
										</div>
										<div class="entry-content">
											<header class="entry-header single-post">
												<div class="entry-meta color-darkgrey">
													<span class="byline">
													<span class="author-img">
													<img alt="" src="<?php echo base_url('/inti/images/team/author-img.jpg'); ?>">
													</span>
													<span class="author vcard">
													<a class="url fn n" href="blog-%40%40type.html" style="color: white;">Emma Johnson </a>
													</span>
													</span>
													<span class="posted-on">
													<a href="blog-single-%40%40type.html" rel="bookmark">
													<time class="entry-date published updated" datetime="2018-01-03T10:11:37+00:00">June 18, 2019</time>
													</a>
													</span>
												</div>
												<h1 class="entry-title" style="color: white;">Fortex recognized as a LinkedIn Top Company</h1>
											</header>
											<p style="color: white; text-indent: 50px;">
												At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata
												sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor amet consetetur sadipscing elitr, sed diam
												nonumy eirmod tempor invidunt. Labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores etea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum
												dolor sit amet, consetetur sadipscing elitr, At accusam aliquyam diam diam dolore dolores duo eirmod eos
												erat, et nonumy sed tempor et et invidunt justo labore Stet clita ea et gubergren, kasd magna no rebum.
												<p style="color: white; text-indent: 50px;">
													Labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores etea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsumdolor sit amet, consetetur sadipscing elitr, At accusam aliquyam diam diam dolore dolores duo eirmod eoserat, et nonumy sed tempor et et invidunt justo labore Stet clita ea et gubergren, kasd magna no rebum.Labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores etea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsumdolor sit amet, consetetur sadipscing elitr, At accusam aliquyam diam diam dolore dolores duo eirmod eoserat, et nonumy sed tempor et et invidunt justo labore Stet clita ea et gubergren, kasd magna no rebum.
												</p>
											</p>
											<blockquote style="color: white;">
												<img src="<?php echo base_url('/inti/images/team/avatar.png'); ?>" alt="">
												<p>We are self-funded association of veterans. There is no charge for any of our service and membership.
													Wish to become involved or assist in some way. Please write, call, or send us an email message.
													<span class="name" style="color: white;">Kerry L. Valencia</span>
													<span class="profession">support</span>
												</p>
											</blockquote>
											<p style="color: white;">
												Lorem ipsum dolor sit amet, consetetur sadipscing elitr, At accusam aliquyam diam diam dolore dolores
												duo eirmod eos erat, et nonumy sed tempor et et invidunt justo labore Stet clita ea et gubergren, kasd
												magna no rebum.
											</p>
											<ul class="list-styled" style="color: white;">
												<li>Consetetur sadipscing elitr, sed diam nonumy</li>
												<li>Eirmod tempor invidunt ut labore</li>
												<li>Dolore magna aliquyam erat</li>
												<li>Sed diam voluptua. At vero eos accusam</li>
											</ul>
											<p>
												<img class="alignleft" alt="" src="<?php echo base_url('/inti/images/side-image.jpg'); ?>">
											</p>
											<p style="color: white;">
												At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata
												sanctusamet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
												invidunt ut labore et dolore magna aliquyam erat.
											</p>
											<p style="color: white;">
												At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata
												sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, At
												accusam aliquyam diam diam dolore dolores duo eirmod eos erat, et nonumy sed tempor et et invidunt justo
												labore Stet clita ea et gubergren, kasd magna no rebum. sanctus sesed takimata vero voluptua est ipsum
												dolor.
											</p>
											<p style="color: white;">
												Consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam
												erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd
												gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet,
												consetetur sadipscing elitr.
											</p>
										</div>
									</div>
								</article>
								<div id="comments" class="comments-area" style="background-color: black;">
									<div id="respond" class="comment-respond ls">
										<h3 id="reply-title" class="comment-reply-title"><span>Leave</span> Comment</h3>
										<form action="http://webdesign-finder.com/" method="post" id="commentform" class="comment-form" novalidate="">
											<p class="comment-notes">
												<span id="email-notes">Your email address will not be published.</span> Required
												fields are marked <span class="required">*</span>
											</p>
											<p class="comment-form-author">
												<label for="author">Name
												<span class="required">*</span>
												</label>
												<input id="author" placeholder="Name" name="author" type="text" value="" size="30" maxlength="245" aria-required="true" required="required">
											</p>
											<p class="comment-form-email">
												<label for="email">Email <span class="required">*</span>
												</label>
												<input id="email" placeholder="Email" name="email" type="email" value="" size="30" maxlength="100" aria-describedby="email-notes" aria-required="true" required="required">
											</p>
											<p class="comment-form-url">
												<label for="url">Website</label>
												<input id="url" placeholder="Website" name="url" type="url" value="" size="30" maxlength="200">
											</p>
											<p class="comment-form-comment">
												<label for="comment">Comment</label>
												<textarea id="comment" name="comment" cols="45" rows="8" maxlength="65525" placeholder="Comment" aria-required="true" required="required"></textarea>
											</p>
											<p class="form-submit">
												<input name="submit" type="submit" class="submit" value="Send">
											</p>
										</form>
									</div>
									<ol class="comment-list">
										<li class="comment">
											<article class="comment-body">
												<div class="comment-meta">
													<img alt="" src="<?php echo base_url('/inti/images/team/02.jpg'); ?>">
												</div>
												<div class="comment-content">
													<div class="comment-author vcard">
														<a href="#" rel="nofollow" class="url" style="color: white;">Amy Heider</a>
													</div>
													<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis</p>
													<footer class="comment-meta">
														<div class="edit-link">
															<a rel="nofollow" class="comment-like" href="#" aria-label="Reply to John Doe">Edit</a>
														</div>
														<div class="reply">
															<a rel="nofollow" class="comment-reply-link" href="#comments" aria-label="Reply to John Doe">Reply</a>
														</div>
														<div class="comment-metadata">
															<a href="#">
															<time datetime="2017-09-03T10:18:04+00:00">
															10 Sep, 10:18 AM
															</time>
															</a>
														</div>
													</footer>
												</div>
												<div class="clearfix"></div>
											</article>
											<ol class="children">
												<li class="comment">
													<article class="comment-body">
														<div class="comment-meta">
															<img alt="" src="<?php echo base_url('/inti/images/team/03.jpg'); ?>">
														</div>
														<div class="comment-content">
															<div class="comment-author vcard">
																<a href="#" rel="nofollow" class="url" style="color: white;">Jane Bloggs</a>
															</div>
															<p>Architecto, deserunt, maxime! Aliquam animi autem deleniti, eaque id ipsam laborum magnam
																modi, pariatur provident quis temporibus.
															</p>
															<footer class="comment-meta">
																<div class="edit-link">
																	<a rel="nofollow" class="comment-like" href="#" aria-label="Reply to John Doe">Edit</a>
																</div>
																<div class="reply">
																	<a rel="nofollow" class="comment-reply-link" href="#comments" aria-label="Reply to John Doe">Reply</a>
																</div>
																<div class="comment-metadata">
																	<a href="#">
																	<time datetime="2017-09-03T10:18:04+00:00">
																	13 Sep, 10:18 AM
																	</time>
																	</a>
																</div>
															</footer>
														</div>
														<div class="clearfix"></div>
													</article>
													<ol class="children">
														<li class="comment">
															<article class="comment-body">
																<div class="comment-meta">
																	<img alt="" src="<?php echo base_url('/inti/images/team/04.jpg'); ?>">
																</div>
																<div class="comment-content">
																	<div class="comment-author vcard">
																		<a href="#" rel="nofollow" class="url" style="color: white;">Fred Bloggs</a>
																	</div>
																	<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, </p>
																	<footer class="comment-meta">
																		<div class="edit-link">
																			<a rel="nofollow" class="comment-like" href="#" aria-label="Reply to John Doe">Edit</a>
																		</div>
																		<div class="reply">
																			<a rel="nofollow" class="comment-reply-link" href="#comments" aria-label="Reply to John Doe">Reply</a>
																		</div>
																		<div class="comment-metadata">
																			<a href="#">
																			<time datetime="2017-09-03T10:18:04+00:00">
																			25 Sep, 10:18 AM
																			</time>
																			</a>
																		</div>
																	</footer>
																</div>
																<div class="clearfix"></div>
															</article>
														</li>
													</ol>
												</li>
											</ol>
										</li>
									</ol>
								</div>
							</main>
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