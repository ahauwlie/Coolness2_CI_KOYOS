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
									<h1 class="bold">Shop Product with Left Sidebar</h1>
									<ul class="breadcrumb">
										<li class="breadcrumb-item">
											<a href="<?php echo site_url('home'); ?>">Home</a>
										</li>
										<li class="breadcrumb-item">
											<a href="<?php echo site_url('shop'); ?>">Shop</a>
										</li>
										<li class="breadcrumb-item active">
											<!-- nama barang -->
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
								<div class="product">
									<div class="images" data-columns="4">
										<figure>
											<div data-thumb="<?php echo base_url('/inti/images/shop/11.jpg'); ?>">
												<a href="<?php echo base_url('/inti/images/shop/11.jpg'); ?>">
												<img src="<?php echo base_url('/inti/images/shop/11.jpg'); ?>" alt="" data-caption="" data-src="<?php echo base_url('/inti/images/shop/11.jpg'); ?>" data-large_image="<?php echo base_url('/inti/images/shop/11.jpg'); ?>" data-large_image_width="1000" data-large_image_height="1000">
												</a>
											</div>
											<div data-thumb="<?php echo base_url('/inti/images/shop/12.jpg'); ?>">
												<a href="<?php echo base_url('/inti/images/shop/12.jpg'); ?>">
												<img src="<?php echo base_url('/inti/images/shop/12.jpg'); ?>" alt="" data-caption="" data-src="<?php echo base_url('/inti/images/shop/12.jpg'); ?>" data-large_image="<?php echo base_url('/inti/images/shop/12.jpg'); ?>" data-large_image_width="1000" data-large_image_height="1000">
												</a>
											</div>
											<div data-thumb="<?php echo base_url('/inti/images/shop/06.jpg'); ?>">
												<a href="<?php echo base_url('/inti/images/shop/06.jpg'); ?>">
												<img src="<?php echo base_url('/inti/images/shop/06.jpg'); ?>" alt="" data-caption="" data-src="<?php echo base_url('/inti/images/shop/06.jpg'); ?>" data-large_image="<?php echo base_url('/inti/images/shop/06.jpg'); ?>" data-large_image_width="1000" data-large_image_height="1000">
												</a>
											</div>
											<div data-thumb="<?php echo base_url('/inti/images/shop/10.jpg'); ?>">
												<a href="<?php echo base_url('/inti/images/shop/10.jpg'); ?>">
												<img src="<?php echo base_url('/inti/images/shop/10.jpg'); ?>" alt="" data-caption="" data-src="<?php echo base_url('/inti/images/shop/10.jpg'); ?>" data-large_image="<?php echo base_url('/inti/images/shop/10.jpg'); ?>" data-large_image_width="1000" data-large_image_height="1000">
												</a>
											</div>
										</figure>
									</div>
									<div class="summary entry-summary">
										<h1 class="product_title entry-title">Bow compound Buster 15 - 29 lbs black </h1>
										<div class="woocommerce-product-rating">
											<div class="star-rating">
												<span style="width:72.6%">Rated <strong class="rating">4.33</strong> out of 5 based on <span class="rating">3</span> customer ratings</span>
											</div>
										</div>
										<div>
											<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum
												tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas
												semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.
											</p>
										</div>
										<form>
											<div class="single_variation_wrap">
												<div>
													<div class="quantity">
														<input type="number" class="input-text qty text" step="1" min="1" max="500" name="quantity" value="1" title="Qty" size="4">
													</div>
													<button type="submit" class="single_add_to_cart_button button alt">Add to cart</button>
												</div>
											</div>
										</form>
										<p class="price">
											<span>
											<span>$</span>20.00
											</span>
										</p>
									</div>
									<div class="woocommerce-tabs wc-tabs-wrapper">
										<ul class="tabs wc-tabs" role="tablist">
											<li class="description_tab" id="tab-title-description" role="tab" aria-controls="tab-description">
												<a href="#tab-description">Description</a>
											</li>
											<li class="additional_information_tab active" id="tab-title-additional_information" role="tab" aria-controls="tab-additional_information">
												<a href="#tab-additional_information">Additional information</a>
											</li>
											<li class="reviews_tab" id="tab-title-reviews" role="tab" aria-controls="tab-reviews">
												<a href="#tab-reviews">Reviews (3)</a>
											</li>
										</ul>
										<div class="panel wc-tab" id="tab-description" role="tabpanel" aria-labelledby="tab-title-description">
											<h2>Description</h2>
											<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
												Vestibulum
												tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam
												egestas
												semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.
											</p>
										</div>
										<div class="panel wc-tab" id="tab-additional_information" role="tabpanel" aria-labelledby="tab-title-additional_information">
											<h2>Additional information</h2>
											<table class="shop_attributes">
												<tbody>
													<tr>
														<th>Color</th>
														<td>
															<p>Blue</p>
														</td>
													</tr>
													<tr>
														<th>Size</th>
														<td>
															<p>X Small, Small, Medium, Large, X Large, XX Large, XXX Large</p>
														</td>
													</tr>
												</tbody>
											</table>
										</div>
										<div class="panel wc-tab" id="tab-reviews" role="tabpanel" aria-labelledby="tab-title-reviews">
											<div id="reviews">
												<div id="comments">
													<h2>3 reviews for <span>Ship Your Idea</span>
													</h2>
													<ol class="commentlist">
														<li class="comment even thread-even depth-1" id="li-comment-34">
															<div id="comment-34" class="comment_container">
																<img alt="" src="https://2.gravatar.com/avatar/babdd787a9577a0e615246ac79cf2826?s=60&amp;d=mm&amp;r=g" srcset="http://2.gravatar.com/avatar/babdd787a9577a0e615246ac79cf2826?s=120&amp;d=mm&amp;r=g 2x" class="avatar avatar-60 photo" height="60" width="60">
																<div class="comment-text">
																	<div class="star-rating">
																		<span style="width:80%">Rated <strong
																			class="rating">4</strong> out of 5</span>
																	</div>
																	<p class="meta">
																		<strong>James
																		Koster</strong> <span>–</span>
																		<time datetime="2013-06-07T11:43:13+00:00">June 7, 2013
																		</time>
																	</p>
																	<div class="description">
																		<p>Nice T-shirt, I got one in black. Goes with
																			anything!
																		</p>
																	</div>
																</div>
															</div>
														</li>
														<li class="comment odd alt thread-odd thread-alt depth-1" id="li-comment-35">
															<div id="comment-35" class="comment_container">
																<img alt="" src="https://0.gravatar.com/avatar/f0cde930b42c79145194679d5b6e3b1d?s=60&amp;d=mm&amp;r=g" srcset="http://0.gravatar.com/avatar/f0cde930b42c79145194679d5b6e3b1d?s=120&amp;d=mm&amp;r=g 2x" class="avatar avatar-60 photo" height="60" width="60">
																<div class="comment-text">
																	<div class="star-rating">
																		<span style="width:80%">Rated <strong
																			class="rating">4</strong> out of 5</span>
																	</div>
																	<p class="meta">
																		<strong>Cobus
																		Bester</strong> <span>–</span>
																		<time datetime="2013-06-07T11:55:15+00:00">June 7, 2013
																		</time>
																	</p>
																	<div class="description">
																		<p>Very comfortable shirt, and I love the graphic!</p>
																	</div>
																</div>
															</div>
														</li>
														<li class="comment even thread-even depth-1" id="li-comment-36">
															<div id="comment-36" class="comment_container">
																<img alt="" src="https://1.gravatar.com/avatar/7a6df00789e50714fcde1b759befcc84?s=60&amp;d=mm&amp;r=g" srcset="http://1.gravatar.com/avatar/7a6df00789e50714fcde1b759befcc84?s=120&amp;d=mm&amp;r=g 2x" class="avatar avatar-60 photo" height="60" width="60">
																<div class="comment-text">
																	<div class="star-rating">
																		<span style="width:100%">Rated <strong
																			class="rating">5</strong> out of 5</span>
																	</div>
																	<p class="meta">
																		<strong>Stuart</strong>
																		<span>–</span>
																		<time datetime="2013-06-07T13:02:14+00:00">June 7, 2013
																		</time>
																	</p>
																	<div class="description">
																		<p>Great T-shirt quality, Great Design and Great
																			Service.
																		</p>
																	</div>
																</div>
															</div>
														</li>
													</ol>
												</div>
												<div id="review_form_wrapper">
													<div id="review_form">
														<div id="respond" class="comment-respond">
															<span id="reply-title" class="comment-reply-title">Add a review <small>
															<a rel="nofollow" id="cancel-comment-reply-link" href="#respond" style="display:none;">Cancel reply</a>
															</small>
															</span>
															<form action="http://webdesign-finder.com/" method="post" id="commentform" class="comment-form" novalidate="">
																<p class="comment-notes">
																	<span id="email-notes">Your email address will not be published.</span>
																	Required fields are marked <span class="required">*</span>
																</p>
																<div class="comment-form-rating">
																	<label>Your rating</label>
																	<p class="stars">
																		<span>
																		<a class="star-1" href="#">1</a>
																		<a class="star-2" href="#">2</a>
																		<a class="star-3" href="#">3</a>
																		<a class="star-4" href="#">4</a>
																		<a class="star-5" href="#">5</a>
																		</span>
																	</p>
																</div>
																<p class="comment-form-comment">
																	<label for="comment">Your review <span class="required">*</span>
																	</label>
																	<textarea id="comment" name="comment" cols="45" rows="8" aria-required="true" required="">
																	</textarea>
																</p>
																<p class="comment-form-author">
																	<label for="author">Name <span class="required">*</span>
																	</label>
																	<input id="author" name="author" type="text" value="" size="30" aria-required="true" required="">
																</p>
																<p class="comment-form-email">
																	<label for="woo-email">Email <span class="required">*</span>
																	</label> <input id="woo-email" name="email" type="email" value="" size="30" aria-required="true" required="">
																</p>
																<p class="form-submit">
																	<input name="submit" type="submit" id="submit" class="submit" value="Submit">
																</p>
															</form>
														</div>
													</div>
												</div>
												<div class="clear">
												</div>
											</div>
										</div>
									</div>
									<section class="up-sells upsells products">
										<h2><span class="color-main">You may</span> also like</h2>
										<ul class="products">
											<li class="product">
												<div class="product-inner">
													<a href="shop-product-left.html">
														<span class="onsale">Sale!</span>
														<img src="<?php echo base_url('/inti/images/shop/07.jpg'); ?>" alt="">
														<h2>Ship Your Idea</h2>
														<div class="star-rating">
															<span style="width:80%">Rated <strong class="rating">4.00</strong> out of 5</span>
														</div>
														<span class="price">
														<span>
														<span>$</span>30.00
														</span>
														–
														<span>
														<span>$</span>35.00
														</span>
														</span>
													</a>
													<a rel="nofollow" href="shop-product-left.html" data-quantity="1" data-product_id="40" data-product_sku="" class="button product_type_variable add_to_cart_button">Select
													options</a>
												</div>
											</li>
											<li class="product">
												<div class="product-inner">
													<a href="shop-product-left.html">
														<img src="<?php echo base_url('/inti/images/shop/06.jpg'); ?>" alt="">
														<h2>Woo Logo</h2>
														<div class="star-rating">
															<span style="width:80%">Rated <strong class="rating">4.00</strong> out of 5</span>
														</div>
														<span class="price">
														<span>
														<span>$</span>35.00
														</span>
														</span>
													</a>
													<a rel="nofollow" href="#" data-quantity="1" data-product_id="60" data-product_sku="" class="button product_type_simple add_to_cart_button ajax_add_to_cart">Add to cart</a>
												</div>
											</li>
											<li class="product">
												<div class="product-inner">
													<a href="shop-product-left.html">
														<img src="<?php echo base_url('/inti/images/shop/08.jpg'); ?>" alt="">
														<h2>Woo Logo</h2>
														<div class="star-rating">
															<span style="width:80%">Rated <strong class="rating">4.00</strong> out of 5</span>
														</div>
														<span class="price">
														<span>
														<span>$</span>20.00
														</span>
														</span>
													</a>
													<a rel="nofollow" href="#" data-quantity="1" data-product_id="60" data-product_sku="" class="button product_type_simple add_to_cart_button ajax_add_to_cart">Add to cart</a>
												</div>
											</li>
											<li class="product">
												<div class="product-inner">
													<a href="shop-product-left.html">
														<img src="<?php echo base_url('/inti/images/shop/28.jpg'); ?>" alt="">
														<h2>Woo Logo</h2>
														<div class="star-rating">
															<span style="width:90%">Rated <strong class="rating">4.50</strong> out of 5</span>
														</div>
														<span class="price">
														<span>
														<span>$</span>4.00
														</span>
														</span>
													</a>
													<a rel="nofollow" href="#" data-quantity="1" data-product_id="60" data-product_sku="" class="button product_type_simple add_to_cart_button ajax_add_to_cart">Add to cart</a>
												</div>
											</li>
										</ul>
									</section>
								</div>
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