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
									<?php foreach ($blog as $row) : ?>
										<div class="col-xl-4 col-md-6">
											<article class="vertical-item text-center content-padding padding-small post type-post status-publish format-standard has-post-thumbnail">
												<div class="item-media post-thumbnail">
													<a href="<?php echo site_url('Blog/single/'.$row->id_blog); ?>">
													<img src="<?=  $row->img_blog  ?>" alt="">
													</a>
												</div>
												<div class="item-content">
													<header class="entry-header">
														<h5 class="entry-title">
															<a href="<?php echo site_url('Blog/single/'.$row->id_blog); ?>" rel="bookmark" style="color: white;">
															<?=  $row->judul_blog  ?>
															</a>
														</h5>
													</header>
													<div class="entry-meta">
														<span class="screen-reader-text">Posted on</span>
														<a href="<?php echo site_url('Blog/single/'.$row->id_blog); ?>" rel="bookmark" style="color: white;">
														<time class="entry-date published updated" datetime="<?=  $row->tanggal_blog  ?>"><?=  $row->tanggal_blog  ?></time>
														</a>
													</div>
												</div>
											</article>
										</div>
									<?php endforeach; ?>
								</div>
								<nav class="navigation pagination justify-content-center" role="navigation">
									<h2 class="screen-reader-text">Posts navigation</h2>
									<div class="nav-links">
										<?php echo $links; ?>
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