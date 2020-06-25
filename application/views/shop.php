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
										Showing all 23 results
									</p>
									<form class="woocommerce-ordering" method="get">
										<select name="orderby" class="orderby">
											<option value="menu_order" selected="selected">Default sorting</option>
											<option value="popularity">Sort by popularity</option>
											<option value="rating">Sort by average rating</option>
											<option value="date">Sort by newness</option>
											<option value="price">Sort by price: low to high</option>
											<option value="price-desc">Sort by price: high to low</option>
										</select>
									</form>
									<ul class="products">
										<li class="product">
											<div class="product-inner">
												<a href="<?php echo site_url('shop/detail'); ?>">
													<span class="onsale">Sale!</span>
													<img src="<?php echo base_url('/inti/images/shop/01.jpg'); ?>" alt="">
													<h2>Perfect Point Throwing Axe Overall Satin Stainless Steel</h2>
													<span class="price">
													<del>
													<span class="woocommerce-Price-amount amount">
													<span class="woocommerce-Price-currencySymbol">$</span>25<span>00</span>
													</span>
													</del>
													<ins>
													<span class="woocommerce-Price-amount amount">
													<span class="woocommerce-Price-currencySymbol">$</span>15<span>00</span>
													</span>
													</ins>
													</span>
												</a>
												<a rel="nofollow" href="shop-cart.html" class="button product_type_simple add_to_cart_button">Add to
												cart
												</a>
											</div>
										</li>
										<li class="product">
											<div class="product-inner">
												<a href="<?php echo site_url('shop/detail'); ?>">
													<img src="<?php echo base_url('/inti/images/shop/02.jpg'); ?>" alt="">
													<h2>Airsoft pistol CZ 75 D DuoTone CO2 4.5 mm, black</h2>
													<span class="price">
													<span>
													<span>$</span>18.00
													</span>
													</span>
												</a>
												<a rel="nofollow" href="shop-cart.html" class="button product_type_simple add_to_cart_button">Add to
												cart</a>
											</div>
										</li>
										<li class="product">
											<div class="product-inner">
												<a href="<?php echo site_url('shop/detail'); ?>">
													<img src="<?php echo base_url('/inti/images/shop/04.jpg'); ?>" alt="">
													<h2>Ear protection Peltor ComTac XP</h2>
													<span class="price">
													<span>
													<span>$</span>35.00
													</span>
													</span>
												</a>
												<a rel="nofollow" href="shop-cart.html" class="button product_type_simple add_to_cart_button">Add to
												cart</a>
											</div>
										</li>
										<li class="product">
											<div class="product-inner">
												<a href="<?php echo site_url('shop/detail'); ?>">
													<img src="<?php echo base_url('/inti/images/shop/03.jpg'); ?>" alt="">
													<h2>Pellets nr. 10, 300 pcs, cal. 4.46 mm</h2>
													<span class="price">
													<span>
													<span>$</span>20.00
													</span>
													</span>
												</a>
												<a rel="nofollow" href="shop-cart.html" class="button product_type_simple add_to_cart_button">Add to
												cart</a>
											</div>
										</li>
										<li class="product">
											<div class="product-inner">
												<a href="<?php echo site_url('shop/detail'); ?>">
													<img src="<?php echo base_url('/inti/images/shop/05.jpg'); ?>" alt="">
													<h2>Bow compound Buster 15 - 29 lbs black Bow </h2>
													<span class="price">
													<span>
													<span>$</span>35.00
													</span>
													</span>
												</a>
												<a rel="nofollow" href="shop-cart.html" class="button product_type_simple add_to_cart_button">Add to
												cart</a>
											</div>
										</li>
										<li class="product">
											<div class="product-inner">
												<a href="<?php echo site_url('shop/detail'); ?>">
													<img src="<?php echo base_url('/inti/images/shop/06.jpg'); ?>" alt="">
													<h2>Stun gun UZI 650 000 Volts Stun gun UZI 650 </h2>
													<span class="price">
													<span>
													<span>$</span>35.00
													</span>
													</span>
												</a>
												<a rel="nofollow" href="shop-cart.html" class="button product_type_simple add_to_cart_button">Add to
												cart</a>
											</div>
										</li>
										<li class="product">
											<div class="product-inner">
												<a href="<?php echo site_url('shop/detail'); ?>">
													<img src="<?php echo base_url('/inti/images/shop/09.jpg'); ?>" alt="">
													<h2>Tactical flashlight Perfecta Searcher 200 Tactical </h2>
													<span class="price">
													<span>
													<span>$</span>20.00
													</span>
													</span>
												</a>
												<a rel="nofollow" href="shop-cart.html" class="button product_type_simple add_to_cart_button">Add to
												cart</a>
											</div>
										</li>
										<li class="product">
											<div class="product-inner">
												<a href="<?php echo site_url('shop/detail'); ?>">
													<span class="onsale">Sale!</span>
													<img src="<?php echo base_url('/inti/images/shop/07.jpg'); ?>" alt="">
													<h2>Gas pistol Smith&Wesson M&P 9C black</h2>
													<span class="price">
													<del>
													<span class="woocommerce-Price-amount amount">
													<span class="woocommerce-Price-currencySymbol">$</span>20<span>00</span>
													</span>
													</del>
													<ins>
													<span class="woocommerce-Price-amount amount">
													<span class="woocommerce-Price-currencySymbol">$</span>18<span>00</span>
													</span>
													</ins>
													</span>
												</a>
												<a rel="nofollow" href="shop-cart.html" class="button product_type_simple add_to_cart_button">Add to
												cart</a>
											</div>
										</li>
										<li class="product">
											<div class="product-inner">
												<a href="<?php echo site_url('shop/detail'); ?>">
													<img src="<?php echo base_url('/inti/images/shop/08.jpg'); ?>" alt="">
													<h2>Airsoft submachine Heckler&Koch MP5 A5 </h2>
													<span class="price">
													<span>
													<span>$</span>20.00
													</span>
													</span>
												</a>
												<a rel="nofollow" href="<?php echo site_url('shop/detail'); ?>" class="button product_type_variable add_to_cart_button">Select options</a>
											</div>
										</li>
										<li class="product">
											<div class="product-inner">
												<a href="<?php echo site_url('shop/detail'); ?>">
													<span class="onsale">Sale!</span>
													<img src="<?php echo base_url('/inti/images/shop/09.jpg'); ?>" alt="">
													<h2>Replica submachine gun PPS 41</h2>
													<span class="price">
													<span>
													<span>$</span>30.00
													</span> – <span class="woocommerce-Price-amount amount">
													<span>$</span>35.00
													</span>
													</span>
												</a>
												<a rel="nofollow" href="<?php echo site_url('shop/detail'); ?>" class="button product_type_variable add_to_cart_button">Select options</a>
											</div>
										</li>
										<li class="product">
											<div class="product-inner">
												<a href="<?php echo site_url('shop/detail'); ?>">
													<img src="<?php echo base_url('/inti/images/shop/10.jpg'); ?>" alt="">
													<h2>Pellets Crosman Premium Pointed, 500 pcs, cal. 4,5</h2>
													<span class="price">
													<span>
													<span>$</span>15.00
													</span>
													</span>
												</a>
												<a rel="nofollow" href="shop-cart.html" class="button product_type_simple add_to_cart_button">Add to
												cart</a>
											</div>
										</li>
										<li class="product">
											<div class="product-inner">
												<a href="<?php echo site_url('shop/detail'); ?>">
													<img src="<?php echo base_url('/inti/images/shop/11.jpg'); ?>" alt="">
													<h2>Carbine conversions KPOS G2 for Glock 17</h2>
													<span class="price">
													<span>
													<span>$</span>9.00
													</span>
													</span>
												</a>
												<a rel="nofollow" href="shop-cart.html" class="button product_type_simple add_to_cart_button">Add to
												cart</a>
											</div>
										</li>
										<li class="product">
											<div class="product-inner">
												<a href="<?php echo site_url('shop/detail'); ?>">
													<img src="<?php echo base_url('/inti/images/shop/12.jpg'); ?>" alt="">
													<h2>Perfect Point Throwing Axe Overall Satin Stainless Steel</h2>
													<span class="price">
													<span>
													<span>$</span>9.00
													</span>
													</span>
												</a>
												<a rel="nofollow" href="shop-cart.html" class="button product_type_simple add_to_cart_button">Add to
												cart</a>
											</div>
										</li>
										<li class="product">
											<div class="product-inner">
												<a href="<?php echo site_url('shop/detail'); ?>">
													<img src="<?php echo base_url('/inti/images/shop/01.jpg'); ?>" alt="">
													<h2>Airsoft pistol CZ 75 D DuoTone CO2 4.5 mm, black</h2>
													<span class="price">
													<span>
													<span>$</span>9.00
													</span>
													</span>
												</a>
												<a rel="nofollow" href="shop-cart.html" class="button product_type_simple add_to_cart_button">Add to
												cart</a>
											</div>
										</li>
										<li class="product">
											<div class="product-inner">
												<a href="<?php echo site_url('shop/detail'); ?>">
													<img src="<?php echo base_url('/inti/images/shop/02.jpg'); ?>" alt="">
													<h2>Ear protection Peltor ComTac XP</h2>
													<span class="price">
													<span>
													<span>$</span>9.00
													</span>
													</span>
												</a>
												<a rel="nofollow" href="shop-cart.html" class="button product_type_simple add_to_cart_button">Add to
												cart</a>
											</div>
										</li>
										<li class="product">
											<div class="product-inner">
												<a href="<?php echo site_url('shop/detail'); ?>">
													<img src="<?php echo base_url('/inti/images/shop/06.jpg'); ?>" alt="">
													<h2>Bow compound Buster 15 - 29 lbs black Bow </h2>
													<span class="price">
													<span>
													<span>$</span>35.00
													</span>
													</span>
												</a>
												<a rel="nofollow" href="shop-cart.html" class="button product_type_simple add_to_cart_button">Add to
												cart</a>
											</div>
										</li>
										<li class="product">
											<div class="product-inner">
												<a href="<?php echo site_url('shop/detail'); ?>">
													<img src="<?php echo base_url('/inti/images/shop/03.jpg'); ?>" alt="">
													<h2>Stun gun UZI 650 000 Volts Stun gun UZI 650 000 Volts</h2>
													<span class="price">
													<span>
													<span>$</span>15.00
													</span>
													</span>
												</a>
												<a rel="nofollow" href="shop-cart.html" class="button product_type_simple add_to_cart_button">Add to
												cart</a>
											</div>
										</li>
										<li class="product">
											<div class="product-inner">
												<a href="<?php echo site_url('shop/detail'); ?>">
													<span class="onsale">Sale!</span>
													<img src="<?php echo base_url('/inti/images/shop/08.jpg'); ?>" alt="">
													<h2>Tactical flashlight Perfecta Searcher 200</h2>
													<span class="price">
													<del>
													<span class="woocommerce-Price-amount amount">
													<span class="woocommerce-Price-currencySymbol">$</span>30<span>00</span>
													</span>
													</del>
													<ins>
													<span class="woocommerce-Price-amount amount">
													<span class="woocommerce-Price-currencySymbol">$</span>22<span>00</span>
													</span>
													</ins>
													</span>
												</a>
												<a rel="nofollow" href="shop-cart.html" class="button product_type_simple add_to_cart_button">Add to
												cart</a>
											</div>
										</li>
										<li class="product">
											<div class="product-inner">
												<a href="<?php echo site_url('shop/detail'); ?>">
													<img src="<?php echo base_url('/inti/images/shop/04.jpg'); ?>" alt="">
													<h2>Gas pistol Smith&Wesson M&P 9C black</h2>
													<span class="price">
													<span>
													<span>$</span>20.00
													</span>
													</span>
												</a>
												<a rel="nofollow" href="shop-cart.html" class="button product_type_simple add_to_cart_button">Add to
												cart</a>
											</div>
										</li>
										<li class="product">
											<div class="product-inner">
												<a href="<?php echo site_url('shop/detail'); ?>">
													<img src="<?php echo base_url('/inti/images/shop/12.jpg'); ?>" alt="">
													<h2>Airsoft submachine Heckler&Koch MP5 A5 </h2>
													<span class="price">
													<span>
													<span>$</span>35.00
													</span>
													</span>
												</a>
												<a rel="nofollow" href="shop-cart.html" class="button product_type_simple add_to_cart_button">Add to
												cart</a>
											</div>
										</li>
										<li class="product">
											<div class="product-inner">
												<a href="<?php echo site_url('shop/detail'); ?>">
													<img src="<?php echo base_url('/inti/images/shop/06.jpg'); ?>" alt="">
													<h2>Pellets Crosman Premium Pointed, 500 pcs, cal. 4,5 mm</h2>
													<span class="price">
													<span>
													<span>$</span>15.00
													</span>
													</span>
												</a>
												<a rel="nofollow" href="shop-cart.html" class="button product_type_simple add_to_cart_button">Add to
												cart</a>
											</div>
										</li>
										<li class="product">
											<div class="product-inner">
												<a href="<?php echo site_url('shop/detail'); ?>">
													<img src="<?php echo base_url('/inti/images/shop/07.jpg'); ?>" alt="">
													<h2>Carbine conversions KPOS G2 for Glock 17</h2>
													<span class="price">
													<span>
													<span>$</span>3.00
													</span>
													</span>
												</a>
												<a rel="nofollow" href="shop-cart.html" class="button product_type_simple add_to_cart_button">Add to
												cart</a>
											</div>
										</li>
										<li class="product">
											<div class="product-inner">
												<a href="<?php echo site_url('shop/detail'); ?>">
													<span class="onsale">Sale!</span>
													<img src="<?php echo base_url('/inti/images/shop/08.jpg'); ?>" alt="">
													<h2>Bow compound Buster 15 - 29 lbs black</h2>
													<span class="price">
													<del>
													<span class="woocommerce-Price-amount amount">
													<span class="woocommerce-Price-currencySymbol">$</span>10<span>00</span>
													</span>
													</del>
													<ins>
													<span class="woocommerce-Price-amount amount">
													<span class="woocommerce-Price-currencySymbol">$</span>8<span>00</span>
													</span>
													</ins>
													</span>
												</a>
												<a rel="nofollow" href="shop-cart.html" class="button product_type_simple add_to_cart_button">Add to
												cart</a>
											</div>
										</li>
									</ul>
								</div>
								<nav class="woocommerce-pagination">
									<ul class="page-numbers">
										<li>
											<span class="page-numbers current">1</span>
										</li>
										<li>
											<a class="page-numbers" href="shop-left.html">2</a>
										</li>
										<li>
											<a class="next page-numbers" href="shop-left.html">→</a>
										</li>
									</ul>
								</nav>
							</main>
							<aside class="col-lg-4 col-xl-3 order-lg-1">
								<div class="widget woocommerce widget_product_categories">
									<h3 class="widget-title">Categories</h3>
									<ul class="product-categories">
										<li class="cat-item cat-parent">
											<a href="shop-right.html">Clothing</a>
											<span class="count">(12)</span>
											<ul class="children">
												<li class="cat-item">
													<a href="shop-right.html">Hoodies</a>
													<span class="count">(46)</span>
												</li>
												<li class="cat-item">
													<a href="shop-right.html">T-shirts</a>
													<span class="count">(165)</span>
												</li>
											</ul>
										</li>
										<li class="cat-item cat-parent">
											<a href="shop-right.html">Music</a>
											<span class="count">(16)</span>
											<ul class="children">
												<li class="cat-item">
													<a href="shop-right.html">Albums</a>
													<span class="count">(24)</span>
												</li>
												<li class="cat-item">
													<a href="shop-right.html">Singles</a>
													<span class="count">(2)</span>
												</li>
											</ul>
										</li>
										<li class="cat-item">
											<a href="shop-right.html">Posters</a>
											<span class="count">(45)</span>
										</li>
									</ul>
								</div>
								<div class="widget woocommerce widget_top_rated_products">
									<h3 class="widget-title">Top Products</h3>
									<ul class="product_list_widget">
										<li>
											<a href="shop-product-right.html">
											<img src="<?php echo base_url('/inti/images/shop/01.jpg'); ?>" alt="">
											<span class="product-title">Ninja Silhouette</span>
											</a>
											<div class="star-rating">
												<span style="width:100%">Rated
												<strong class="rating">5.00 </strong>
												out of 5
												</span>
											</div>
											<span class="woocommerce-Price-amount amount">
											<span class="woocommerce-Price-currencySymbol">$</span>
											20.00
											</span>
										</li>
										<li>
											<a href="shop-product-right.html">
											<img src="<?php echo base_url('/inti/images/shop/02.jpg'); ?>" alt="">
											<span class="product-title">Woo Album #4</span>
											</a>
											<div class="star-rating">
												<span style="width:100%">Rated
												<strong class="rating">5.00</strong>
												out of 5
												</span>
											</div>
											<span class="woocommerce-Price-amount amount">
											<span class="woocommerce-Price-currencySymbol">$</span>
											9.00
											</span>
										</li>
										<li>
											<a href="shop-product-right.html">
											<img src="<?php echo base_url('/inti/images/shop/03.jpg'); ?>" alt="">
											<span class="product-title">Happy Ninja</span>
											</a>
											<div class="star-rating">
												<span style="width:100%">Rated
												<strong class="rating">5.00</strong>
												out of 5
												</span>
											</div>
											<span class="woocommerce-Price-amount amount">
											<span class="woocommerce-Price-currencySymbol">$</span>
											18.00
											</span>
										</li>
										<li>
											<a href="shop-product-right.html">
											<img src="<?php echo base_url('/inti/images/shop/04.jpg'); ?>" alt="">
											<span class="product-title">Patient Ninja</span>
											</a>
											<div class="star-rating">
												<span style="width:93.4%">Rated
												<strong class="rating">4.67</strong>
												out of 5
												</span>
											</div>
											<span class="woocommerce-Price-amount amount">
											<span class="woocommerce-Price-currencySymbol">$</span>
											35.00
											</span>
										</li>
										<li>
											<a href="shop-product-right.html">
											<img src="<?php echo base_url('/inti/images/shop/05.jpg'); ?>" alt="">
											<span class="product-title">Premium Quality</span>
											</a>
											<div class="star-rating">
												<span style="width:90%">Rated
												<strong class="rating">4.50</strong>
												out of 5
												</span>
											</div>
											<span class="woocommerce-Price-amount amount">
											<span class="woocommerce-Price-currencySymbol">$</span>
											20.00
											</span>
										</li>
									</ul>
								</div>
								<div class="widget woocommerce widget_price_filter">
									<h3 class="widget-title">Price Filter</h3>
									<form method="get" action="http://webdesign-finder.com/">
										<div class="price_slider_wrapper">
											<div class="price_slider ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all" style="">
												<div class="ui-slider-range ui-widget-header ui-corner-all" style="left: 10%; width: 70%;">
												</div>
												<span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0" style="left: 10%;">
												</span>
												<span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0" style="left: 80%;">
												</span>
											</div>
											<div class="price_slider_amount">
												<input type="text" id="min_price" name="min_price" value="" data-min="20" placeholder="Min price" style="display: none;">
												<input type="text" id="max_price" name="max_price" value="" data-max="30" placeholder="Max price" style="display: none;">
												<button type="submit" class="button">Filter</button>
												<div class="price_label" style="">
													Price: <span class="from">$21</span> - <span class="to">$28</span>
												</div>
												<div class="clear"></div>
											</div>
										</div>
									</form>
								</div>
								<div class="widget woocommerce widget_layered_nav">
									<h3 class="widget-title">Filters</h3>
									<ul>
										<li class="wc-layered-nav-term chosen">
											<a href="shop-right.html">Black</a>
											<span class="count">(85)</span>
										</li>
										<li class="wc-layered-nav-term">
											<a href="#">Blue</a>
											<span class="count">(12)</span>
										</li>
										<li class="wc-layered-nav-term">
											<a href="#">Green</a>
											<span class="count">(41)</span>
										</li>
										<li class="wc-layered-nav-term">
											<a href="#">Yellow</a>
											<span class="count">(12)</span>
										</li>
										<li class="wc-layered-nav-term">
											<a href="#">Red</a>
											<span class="count">(26)</span>
										</li>
									</ul>
								</div>
								<div class="widget woocommerce widget_product_tag_cloud">
									<h3 class="widget-title">Price Tags</h3>
									<div class="tagcloud">
										<a href="shop-right.html" class="tag-cloud-link" aria-label="album (1 product)">
										Album
										</a>
										<a href="shop-right.html" class="tag-cloud-link" aria-label="premium (1 product)">
										Premium
										</a>
										<a href="shop-right.html" class="tag-cloud-link" aria-label="product (1 product)">
										Product
										</a>
										<a href="shop-right.html" class="tag-cloud-link" aria-label="single (1 product)">
										Single
										</a>
									</div>
								</div>
								<div class="widget woocommerce widget_layered_nav dropdown">
									<h3 class="widget-title">Colors Filter</h3>
									<select class="dropdown_layered_nav_color">
										<option value="">Any color</option>
										<option value="black">Black</option>
										<option value="blue">Blue</option>
										<option value="green">Green</option>
									</select>
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