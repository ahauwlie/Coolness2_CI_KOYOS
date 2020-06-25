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
									<h1 class="bold">Blog Grid</h1>
									<ul class="breadcrumb">
										<li class="breadcrumb-item">
											<a href="<?php echo site_url('home'); ?>">Home</a>
										</li>
										<li class="breadcrumb-item active">
											Blog Grid
										</li>
									</ul>
								</div>
							</div>
						</div>
					</section>
				</div>
				<section class="ls s-py-60 s-py-md-80 s-py-xl-150" style="background-color: black;">
					<div class="container">
						<div class="row c-mb-30">
							<main class="offset-lg-1 col-lg-10">
								<div class="row isotope-wrapper masonry-layout blog-grid">
									<div class="col-xl-4 col-md-6">
										<article class="vertical-item text-center content-padding padding-small post type-post status-publish format-standard has-post-thumbnail">
											<div class="item-media post-thumbnail">
												<a href="<?php echo site_url('blog/single'); ?>">
												<img src="<?php echo base_url('/inti/images/gallery/01.jpg'); ?>" alt="">
												</a>
											</div>
											<div class="item-content">
												<header class="entry-header">
													<h5 class="entry-title">
														<a href="<?php echo site_url('blog/single'); ?>" rel="bookmark" style="color: white;">
														Repudiandae sint velit vero voluptas
														</a>
													</h5>
												</header>
												<div class="entry-content">
													<p>Accusamus ad adipisci alias culpa deleniti ducimus, est et ex fugiat iusto laudantium nam ullam.</p>
												</div>
												<div class="entry-meta">
													<span class="screen-reader-text">Posted on</span>
													<a href="<?php echo site_url('blog/single'); ?>" rel="bookmark" style="color: white;">
													<time class="entry-date published updated" datetime="2018-03-11T15:15:12+00:00">June 18, 2019</time>
													</a>
												</div>
											</div>
										</article>
									</div>
									<div class="col-xl-4 col-md-6">
										<article class="vertical-item text-center content-padding padding-small post type-post status-publish format-standard has-post-thumbnail">
											<div class="item-media post-thumbnail">
												<a href="<?php echo site_url('blog/single'); ?>">
												<img src="<?php echo base_url('/inti/images/gallery/02.jpg'); ?>" alt="">
												</a>
											</div>
											<div class="item-content">
												<header class="entry-header">
													<h5 class="entry-title">
														<a href="<?php echo site_url('blog/single'); ?>" rel="bookmark" style="color: white;">
														Consectetur adipisicing elit
														</a>
													</h5>
												</header>
												<div class="entry-content">
													<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A alias et voluptas.</p>
												</div>
												<div class="entry-meta">
													<span class="screen-reader-text">Posted on</span>
													<a href="<?php echo site_url('blog/single'); ?>" rel="bookmark" style="color: white;">
													<time class="entry-date published updated" datetime="2018-03-15T15:15:12+00:00">June 08, 2019</time>
													</a>
												</div>
											</div>
										</article>
									</div>
									<div class="col-xl-4 col-md-6">
										<article class="vertical-item text-center content-padding padding-small post type-post status-publish format-standard has-post-thumbnail">
											<div class="item-media post-thumbnail">
												<a href="<?php echo site_url('blog/single'); ?>">
												<img src="<?php echo base_url('/inti/images/gallery/03.jpg'); ?>" alt="">
												</a>
											</div>
											<div class="item-content">
												<header class="entry-header">
													<h5 class="entry-title">
														<a href="<?php echo site_url('blog/single'); ?>" rel="bookmark" style="color: white;">
														A alias et magni maxime mollitia
														</a>
													</h5>
												</header>
												<div class="entry-content">
													<p>Amet aut debitis deserunt dolor dolorem harum in, inventore magnam modi obcaecati qui quo quos, vel.</p>
												</div>
												<div class="entry-meta">
													<span class="screen-reader-text">Posted on</span>
													<a href="<?php echo site_url('blog/single'); ?>" rel="bookmark" style="color: white;">
													<time class="entry-date published updated" datetime="2018-03-18T15:15:12+00:00">June 28, 2019</time>
													</a>
												</div>
											</div>
										</article>
									</div>
									<div class="col-xl-4 col-md-6">
										<article class="vertical-item text-center content-padding padding-small post type-post status-publish format-standard has-post-thumbnail">
											<div class="item-media post-thumbnail">
												<a href="<?php echo site_url('blog/single'); ?>">
												<img src="<?php echo base_url('/inti/images/gallery/04.jpg'); ?>" alt="">
												</a>
											</div>
											<div class="item-content">
												<header class="entry-header">
													<h5 class="entry-title">
														<a href="<?php echo site_url('blog/single'); ?>" rel="bookmark" style="color: white;">
														Repudiandae sint velit vero voluptas
														</a>
													</h5>
												</header>
												<div class="entry-content">
													<p>Asperiores aut autem deserunt distinctio eius enim et ex fuga hic laudantium mollitia neque quisquam veniam.</p>
												</div>
												<div class="entry-meta">
													<span class="screen-reader-text">Posted on</span>
													<a href="<?php echo site_url('blog/single'); ?>" rel="bookmark" style="color: white;">
													<time class="entry-date published updated" datetime="2018-03-11T15:15:12+00:00">June 11, 2019</time>
													</a>
												</div>
											</div>
										</article>
									</div>
									<div class="col-xl-4 col-md-6">
										<article class="vertical-item text-center content-padding padding-small post type-post status-publish format-standard has-post-thumbnail">
											<div class="item-media post-thumbnail">
												<a href="<?php echo site_url('blog/single'); ?>">
												<img src="<?php echo base_url('/inti/images/gallery/05.jpg'); ?>" alt="">
												</a>
											</div>
											<div class="item-content">
												<header class="entry-header">
													<h5 class="entry-title">
														<a href="<?php echo site_url('blog/single'); ?>" rel="bookmark" style="color: white;">
														Consectetur adipisicing elit
														</a>
													</h5>
												</header>
												<div class="entry-content">
													<p>A amet, architecto aut delectus expedita harum neque perspiciatis quaerat optio quos recusandae tenetur, voluptatem.</p>
												</div>
												<div class="entry-meta">
													<span class="screen-reader-text">Posted on</span>
													<a href="<?php echo site_url('blog/single'); ?>" rel="bookmark" style="color: white;">
													<time class="entry-date published updated" datetime="2018-03-15T15:15:12+00:00">June 12, 2019</time>
													</a>
												</div>
											</div>
										</article>
									</div>
									<div class="col-xl-4 col-md-6">
										<article class="vertical-item text-center content-padding padding-small post type-post status-publish format-standard has-post-thumbnail">
											<div class="item-media post-thumbnail">
												<a href="<?php echo site_url('blog/single'); ?>">
												<img src="<?php echo base_url('/inti/images/gallery/06.jpg'); ?>" alt="">
												</a>
											</div>
											<div class="item-content">
												<header class="entry-header">
													<h5 class="entry-title">
														<a href="<?php echo site_url('blog/single'); ?>" rel="bookmark" style="color: white;">
														A alias et magni maxime mollitia
														</a>
													</h5>
												</header>
												<div class="entry-content">
													<p>Adipisci asperiores assumenda, blanditiis cum cumque dolor, ea ratione repudiandae sequi tempora voluptatibus voluptatum!</p>
												</div>
												<div class="entry-meta">
													<span class="screen-reader-text">Posted on</span>
													<a href="<?php echo site_url('blog/single'); ?>" rel="bookmark" style="color: white;">
													<time class="entry-date published updated" datetime="2018-03-18T15:15:12+00:00">June 15, 2019</time>
													</a>
												</div>
											</div>
										</article>
									</div>
									<div class="col-xl-4 col-md-6">
										<article class="vertical-item text-center content-padding padding-small post type-post status-publish format-standard has-post-thumbnail">
											<div class="item-media post-thumbnail">
												<a href="<?php echo site_url('blog/single'); ?>">
												<img src="<?php echo base_url('/inti/images/gallery/07.jpg'); ?>" alt="">
												</a>
											</div>
											<div class="item-content">
												<header class="entry-header">
													<h5 class="entry-title">
														<a href="<?php echo site_url('blog/single'); ?>" rel="bookmark" style="color: white;">
														Repudiandae sint velit vero voluptas
														</a>
													</h5>
												</header>
												<div class="entry-content">
													<p>Aperiam consequuntur culpa dolorem fugit, nisi quos? Accusamus, aliquam architecto cupiditate, deserunt et fugiat harum Qui!</p>
												</div>
												<div class="entry-meta">
													<span class="screen-reader-text">Posted on</span>
													<a href="<?php echo site_url('blog/single'); ?>" rel="bookmark" style="color: white;">
													<time class="entry-date published updated" datetime="2018-03-11T15:15:12+00:00">June 28, 2019</time>
													</a>
												</div>
											</div>
										</article>
									</div>
									<div class="col-xl-4 col-md-6">
										<article class="vertical-item text-center content-padding padding-small post type-post status-publish format-standard has-post-thumbnail">
											<div class="item-media post-thumbnail">
												<a href="<?php echo site_url('blog/single'); ?>">
												<img src="<?php echo base_url('/inti/images/gallery/08.jpg'); ?>" alt="">
												</a>
											</div>
											<div class="item-content">
												<header class="entry-header">
													<h5 class="entry-title">
														<a href="<?php echo site_url('blog/single'); ?>" rel="bookmark" style="color: white;">
														Consectetur adipisicing elit
														</a>
													</h5>
												</header>
												<div class="entry-content">
													<p>Consectetur adipisicing elit. Atque error ipsa nihil placeat! A dolor fugiat ipsam laborum vitae!</p>
												</div>
												<div class="entry-meta">
													<span class="screen-reader-text">Posted on</span>
													<a href="<?php echo site_url('blog/single'); ?>" rel="bookmark" style="color: white;">
													<time class="entry-date published updated" datetime="2018-03-15T15:15:12+00:00">June 2, 2019</time>
													</a>
												</div>
											</div>
										</article>
									</div>
									<div class="col-xl-4 col-md-6">
										<article class="vertical-item text-center content-padding padding-small post type-post status-publish format-standard has-post-thumbnail">
											<div class="item-media post-thumbnail">
												<a href="<?php echo site_url('blog/single'); ?>">
												<img src="<?php echo base_url('/inti/images/gallery/09.jpg'); ?>" alt="">
												</a>
											</div>
											<div class="item-content">
												<header class="entry-header">
													<h5 class="entry-title">
														<a href="<?php echo site_url('blog/single'); ?>" rel="bookmark" style="color: white;">
														A alias et magni maxime mollitia
														</a>
													</h5>
												</header>
												<div class="entry-content">
													<p>Aliquid commodi consequuntur deleniti eius iste nisi sapiente voluptates. Cum debitis ducimus fuga, illum iusto vitae.</p>
												</div>
												<div class="entry-meta">
													<span class="screen-reader-text">Posted on</span>
													<a href="<?php echo site_url('blog/single'); ?>" rel="bookmark" style="color: white;">
													<time class="entry-date published updated" datetime="2018-03-18T15:15:12+00:00">June 18, 2019</time>
													</a>
												</div>
											</div>
										</article>
									</div>
									<div class="col-xl-4 col-md-6">
										<article class="vertical-item text-center content-padding padding-small post type-post status-publish format-standard has-post-thumbnail">
											<div class="item-media post-thumbnail">
												<a href="<?php echo site_url('blog/single'); ?>">
												<img src="<?php echo base_url('/inti/images/gallery/10.jpg'); ?>" alt="">
												</a>
											</div>
											<div class="item-content">
												<header class="entry-header">
													<h5 class="entry-title">
														<a href="<?php echo site_url('blog/single'); ?>" rel="bookmark" style="color: white;">
														Repudiandae sint velit vero voluptas
														</a>
													</h5>
												</header>
												<div class="entry-content">
													<p>Cumque et neque qui quos tenetur! Ab atque cupiditate excepturi id in iste placeat vel!</p>
												</div>
												<div class="entry-meta">
													<span class="screen-reader-text">Posted on</span>
													<a href="<?php echo site_url('blog/single'); ?>" rel="bookmark" style="color: white;">
													<time class="entry-date published updated" datetime="2018-03-11T15:15:12+00:00">June 18, 2019</time>
													</a>
												</div>
											</div>
										</article>
									</div>
									<div class="col-xl-4 col-md-6">
										<article class="vertical-item text-center content-padding padding-small post type-post status-publish format-standard has-post-thumbnail">
											<div class="item-media post-thumbnail">
												<a href="<?php echo site_url('blog/single'); ?>">
												<img src="<?php echo base_url('/inti/images/gallery/01.jpg'); ?>" alt="">
												</a>
											</div>
											<div class="item-content">
												<header class="entry-header">
													<h5 class="entry-title">
														<a href="<?php echo site_url('blog/single'); ?>" rel="bookmark" style="color: white;">
														Consectetur adipisicing elit
														</a>
													</h5>
												</header>
												<div class="entry-content">
													<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A alias et voluptas.</p>
												</div>
												<div class="entry-meta">
													<span class="screen-reader-text">Posted on</span>
													<a href="<?php echo site_url('blog/single'); ?>" rel="bookmark" style="color: white;">
													<time class="entry-date published updated" datetime="2018-03-15T15:15:12+00:00">June 18, 2019</time>
													</a>
												</div>
											</div>
										</article>
									</div>
									<div class="col-xl-4 col-md-6">
										<article class="vertical-item text-center content-padding padding-small post type-post status-publish format-standard has-post-thumbnail">
											<div class="item-media post-thumbnail">
												<a href="<?php echo site_url('blog/single'); ?>">
												<img src="<?php echo base_url('/inti/images/gallery/12.jpg'); ?>" alt="">
												</a>
											</div>
											<div class="item-content">
												<header class="entry-header">
													<h5 class="entry-title">
														<a href="<?php echo site_url('blog/single'); ?>" rel="bookmark" style="color: white;">
														A alias et magni maxime mollitia
														</a>
													</h5>
												</header>
												<div class="entry-content">
													<p>Aperiam asperiores aut beatae dolorem ex excepturi, fugiat, id inventore laudantium molestias nulla quia totam!</p>
												</div>
												<div class="entry-meta">
													<span class="screen-reader-text">Posted on</span>
													<a href="<?php echo site_url('blog/single'); ?>" rel="bookmark" style="color: white;">
													<time class="entry-date published updated" datetime="2018-03-18T15:15:12+00:00">June 18, 2019</time>
													</a>
												</div>
											</div>
										</article>
									</div>
								</div>
								<nav class="navigation pagination justify-content-center" role="navigation">
									<h2 class="screen-reader-text">Posts navigation</h2>
									<div class="nav-links">
										<a class="prev page-numbers" href="blog-right.html">
										<i class="fa fa-chevron-left"></i>
										<span class="screen-reader-text">Previous page</span>
										</a>
										<a class="page-numbers" href="blog-right.html">
										<span class="meta-nav screen-reader-text">Page </span>
										1
										</a>
										<span class="page-numbers current">
										<span class="meta-nav screen-reader-text">Page </span>
										2
										</span>
										<a class="page-numbers" href="blog-right.html">
										<span class="meta-nav screen-reader-text">Page </span>
										3
										</a>
										<a class="next page-numbers" href="blog-right.html">
										<span class="screen-reader-text">Next page</span>
										<i class="fa fa-chevron-right"></i>
										</a>
									</div>
								</nav>
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