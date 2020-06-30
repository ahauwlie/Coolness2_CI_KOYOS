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
											<div data-thumb="<?php echo $lol['img_1_bar']; ?>">
												<a href="<?php echo $lol['img_1_bar']; ?>">
												<img src="<?php echo $lol['img_1_bar']; ?>" alt="" data-caption="" data-src="<?php echo $lol['img_1_bar']; ?>" data-large_image="<?php echo $lol['img_1_bar']; ?>" data-large_image_width="1000" data-large_image_height="1000">
												</a>
											</div>
											<div data-thumb="<?php echo $lol['img_2_bar']; ?>">
												<a href="<?php echo $lol['img_2_bar']; ?>">
												<img src="<?php echo $lol['img_2_bar']; ?>" alt="" data-caption="" data-src="<?php echo $lol['img_2_bar']; ?>" data-large_image="<?php echo $lol['img_2_bar']; ?>" data-large_image_width="1000" data-large_image_height="1000">
												</a>
											</div>
											<div data-thumb="<?php echo $lol['img_3_bar']; ?>">
												<a href="<?php echo $lol['img_3_bar']; ?>">
												<img src="<?php echo $lol['img_3_bar']; ?>" alt="" data-caption="" data-src="<?php echo $lol['img_3_bar']; ?>" data-large_image="<?php echo $lol['img_3_bar']; ?>" data-large_image_width="1000" data-large_image_height="1000">
												</a>
											</div>
											<div data-thumb="<?php echo $lol['img_4_bar']; ?>">
												<a href="<?php echo $lol['img_4_bar']; ?>">
												<img src="<?php echo $lol['img_4_bar']; ?>" alt="" data-caption="" data-src="<?php echo $lol['img_4_bar']; ?>" data-large_image="<?php echo $lol['img_4_bar']; ?>" data-large_image_width="1000" data-large_image_height="1000">
												</a>
											</div>
										</figure>
									</div>
									<div class="summary entry-summary">
										<h1 class="product_title entry-title"><?php echo $lol['nama_bar']; ?> </h1>
										<div>
											<?php echo $lol['deskripsi_bar']; ?>
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
											<span><?php echo "Rp ".number_format($lol['harga_bar'], 0,",","."); ?>
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
										</ul>
										<div class="panel wc-tab" id="tab-description" role="tabpanel" aria-labelledby="tab-title-description">
											<h2>Description</h2>
											<?php echo $lol['deskripsi_bar']; ?>
										</div>
										<div class="panel wc-tab" id="tab-additional_information" role="tabpanel" aria-labelledby="tab-title-additional_information">
											<h2>Additional information</h2>
											<table class="shop_attributes">
												<tbody>
													<tr>
														<th>Size</th>
														<td>
															<?php echo $lol['size_bar']; ?>
														</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
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