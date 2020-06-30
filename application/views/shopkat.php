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
		<div id="canvas">
			<div id="box_wrapper">
				<div class="header_absolute ds cover-background">
					<?php echo $header; ?>
					<section class="page_title padding-mobile cs s-py-60 s-py-md-80 s-py-xl-150">
						<div class="container">
							<div class="row">
								<div class="col-md-12">
									<h1 class="bold">Shop</h1>
									<ul class="breadcrumb">
										<li class="breadcrumb-item">
											<a href="<?php echo site_url('home'); ?>">Home</a>
										</li>
										<li class="breadcrumb-item active">
											Shop
										</li>
									</ul>
								</div>
							</div>
						</div>
					</section>
				</div>
				<section class="ls s-py-50 c-gutter-60">
					<div class="container">
						<div class="row">
							<div class="d-none d-lg-block divider-70"></div>
							<main class="col-lg-8 col-xl-9 order-lg-2">
								<div class="columns-3">
									<p class="woocommerce-result-count">
										Showing all 24 results
									</p>
									<form class="woocommerce-ordering" method="get">
										<select name="orderby" class="orderby">
											<option value="menu_order" selected="selected">
											<option value="price">Sort by price: low to high</option>
											<option value="price-desc">Sort by price: high to low</option>
										</select>
									</form>
									<ul class="products">
										<?php foreach ($comes as $row) : ?>
											<li class="product">
												<div class="product-inner">
													<a href="<?php echo site_url('shop/detail'); ?>">
														<span class="onsale"><?=  $row->tag_bar  ?></span>
														<img src="<?php echo base_url('/inti/images/shop/01.jpg'); ?>" alt="">
														<h2><?=  $row->nama_bar  ?></h2>
														<span class="price">
														<ins>
														<span class="woocommerce-Price-amount amount">
														<span class="woocommerce-Price-currencySymbol"><?php echo "Rp ".number_format($row->harga_bar, 2,",","."); ?></span>
														</span>
														</ins>
														</span>
													</a>
													<a rel="nofollow" href="shop-cart.html" class="button product_type_simple add_to_cart_button">Add to
													cart
													</a>
												</div>
											</li>
										<?php endforeach; ?>
									</ul>
								</div>
							</main>
							<aside class="col-lg-4 col-xl-3 order-lg-1">
								<div class="widget woocommerce widget_product_categories">
									<h3 class="widget-title">Categories</h3>
									<ul class="product-categories">
										<li class="cat-item cat-parent">
											<?php foreach ($kategori as $row) : ?>
												<a><?=  anchor('Shop/showme/'.$row->kategori_bar,$row->kategori_bar,['class'=>'btn btn-default']) ?></a>
											<?php endforeach; ?>
										</li>
									</ul>
								</div>
								<div class="widget woocommerce widget_product_tag_cloud">
									<h3 class="widget-title">Price Tags</h3>
									<div class="tagcloud">
										<?php foreach ($tag as $row) : ?>
											<a><?=  anchor('Shop/tag/'.$row->tag_bar,$row->tag_bar,['class'=>'btn btn-default']) ?></a>
										<?php endforeach; ?>
									</div>
								</div>
							</aside>
							<div class="d-none d-lg-block divider-70"></div>
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