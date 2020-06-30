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
											<span class="cat-links"><a href="http://drivelywp/category/news/"><?php echo $lol['kategori_blog']; ?></a></span>
											<img src="<?php echo $lol['img_blog']; ?>" alt="">
										</div>
										<div class="entry-content">
											<header class="entry-header single-post">
												<div class="entry-meta color-darkgrey">
													<span class="byline">
													<span class="author vcard">
													<a class="url fn n" href="blog-%40%40type.html" style="color: white;"><?php echo $lol['nama_admin_blog']; ?> </a>
													</span>
													</span>
													<span class="posted-on">
													<a href="blog-single-%40%40type.html" rel="bookmark">
													<time class="entry-date published updated" datetime="<?php echo $lol['tanggal_blog']; ?>"><?php echo $lol['tanggal_blog']; ?></time>
													</a>
													</span>
												</div>
												<h1 class="entry-title" style="color: white;"><?php echo $lol['judul_blog']; ?></h1>
											</header>
											<blockquote style="color: white;">
												<img src="<?php echo base_url('/inti/images/team/avatar.png'); ?>" alt="">
												<p><?php echo $lol['quotes_blog']; ?>
													<span class="name" style="color: white;"><?php echo $lol['quotes_author_blog']; ?></span>
												</p>
											</blockquote>
											<p style="color: white;">
												<?php echo $lol['deskripsi_blog']; ?>
											</p>
										</div>
									</div>
								</article>
								<div id="comments" class="comments-area" style="background-color: black;">
									<div id="respond" class="comment-respond ls">
										<h3 id="reply-title" class="comment-reply-title"><span>Leave</span> Comment</h3>
										<form action="http://webdesign-finder.com/" method="post" id="commentform" class="comment-form" novalidate="">
											<a href="<?php echo site_url('nyoba/index/'.$lol['id_blog']); ?>" class="btn btn-success">Comment disini</a>
										</form>
									</div>
									<ol class="children">
										<li class="comment">
											<?php echo $comments; ?>
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