<!DOCTYPE html>
<html lang="zxx">

<head>
    <head>
        <title>HappyCows – Products</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <?php
            // Include the SEO helper
            require_once 'seo-helper.php';

            // Get SEO data for current page
            $currentPage = getCurrentPage();
            $seo = getSEOData($currentPage);
        ?>

        <title><?php echo htmlspecialchars($seo['title']); ?></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Dynamic SEO Meta -->
        <meta name="description" content="<?php echo htmlspecialchars($seo['description']); ?>">
        <meta name="keywords" content="<?php echo htmlspecialchars($seo['keywords']); ?>">
        <meta name="author" content="<?php echo htmlspecialchars($seo['author']); ?>">

        <!-- Canonical URL -->
        <link rel="canonical" href="<?php echo htmlspecialchars($seo['canonical']); ?>">

        <!-- Generate Open Graph Tags -->
        <?php echo generateOpenGraphTags($seo); ?>

        <!-- Favicon -->
        <link rel="icon" type="image/png" href="<?php echo htmlspecialchars($seo['favicon']); ?>">
        <link rel="apple-touch-icon" href="<?php echo htmlspecialchars($seo['apple_touch_icon']); ?>">

        <link href="https://fonts.googleapis.com/css?family=Frank+Ruhl+Libre:300,400,500,700,900&display=swap"
		rel="stylesheet">

	<link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i"
		rel="stylesheet">

	<link rel="shortcut icon" type="image/x-icon" href="assets/images/x-icon.png">
	<link rel="stylesheet" type="text/css" href="assets/css/animate.css">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/lightcase.css">
	<link rel="stylesheet" type="text/css" href="assets/flaticon/flaticon.css">
	<link rel="stylesheet" type="text/css" href="assets/css/swiper.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/slick.css">
	<link rel="stylesheet" type="text/css" href="assets/css/slick-theme.css">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="assets/css/popup.css">
        <style>
            /* --- Global Card Improvements --- */
            .product-item {
                background: #fff;
                border-radius: 15px;
                overflow: hidden;
                box-shadow: 0 10px 20px rgba(0,0,0,0.05);
                transition: all 0.3s ease;
                border: 1px solid #f0f0f0;
            }

            .product-item:hover {
                transform: translateY(-5px);
                box-shadow: 0 15px 30px rgba(125, 185, 49, 0.15);
            }

            /* --- Featured Large Card --- */
            .product-featured {
                padding: 20px;
                border: 2px solid #7db931;
            }

            .product-featured .product-thumb {
                position: relative;
                border-radius: 10px;
                overflow: hidden;
            }

            .badge-featured {
                position: absolute;
                top: 15px;
                left: 15px;
                background: #7db931;
                color: white;
                padding: 5px 15px;
                border-radius: 20px;
                font-size: 12px;
                font-weight: bold;
            }

            .product-featured .brand-tag {
                color: #7db931;
                text-transform: uppercase;
                font-size: 13px;
                font-weight: 700;
                letter-spacing: 1px;
            }

            .product-featured h3 a {
                font-size: 28px;
                color: #333;
                margin: 10px 0;
                display: block;
            }

            .product-featured .features span {
                display: inline-block;
                margin-right: 15px;
                font-size: 14px;
                color: #666;
            }

            .product-featured .price-action {
                margin-top: 25px;
                display: flex;
                align-items: center;
                gap: 20px;
            }

            .product-featured .price {
                color: #7db931;
                font-weight: 900;
                margin-bottom: 0;
            }

            .btn-subscribe {
                background: #7db931;
                color: white !important;
                padding: 10px 25px;
                border-radius: 50px;
                font-weight: bold;
                transition: 0.3s;
            }

            .btn-subscribe:hover {
                background: #5a8a20;
                box-shadow: 0 4px 12px rgba(125, 185, 49, 0.3);
            }

            /* --- Small Card Refinement --- */
            .product-card-sm .product-content {
                padding: 15px;
                text-align: center;
            }

            .product-card-sm h5 {
                font-size: 16px;
                height: 40px; /* Ensures alignment if titles are long */
                overflow: hidden;
            }

            .product-card-sm h6 {
                color: #7db931;
                font-weight: 700;
                font-size: 18px;
            }

            /* --- Featured Card Advanced Styling --- */
            .product-featured {
                border: none;
                border-radius: 20px;
                background: #ffffff;
                box-shadow: 0 15px 40px rgba(0,0,0,0.08);
            }

            .featured-img-wrapper {
                padding: 30px;
                background: #f9fbf7; /* Light greenish tint background for image */
                display: flex;
                justify-content: center;
                align-items: center;
            }

            .featured-img-wrapper img {
                max-height: 400px;
                object-fit: contain;
                filter: drop-shadow(0 10px 15px rgba(0,0,0,0.1));
            }

            .featured-details {
                padding: 40px !important;
            }

            .featured-details h3 {
                font-size: 32px;
                font-weight: 900;
                margin: 10px 0 20px 0;
            }

            /* The Details Grid inside the card */
            .detail-grid {
                display: grid;
                grid-template-columns: repeat(2, 1fr);
                gap: 20px;
                margin: 25px 0;
                border-top: 1px solid #eee;
                padding-top: 25px;
            }

            .detail-item {
                display: flex;
                align-items: flex-start;
                gap: 12px;
            }

            .detail-item i {
                color: #7db931;
                font-size: 18px;
                background: #f1f8e9;
                padding: 10px;
                border-radius: 8px;
            }

            .detail-item span {
                font-size: 13px;
                line-height: 1.4;
                color: #555;
            }

            /* Price and Action Styling */
            .price-action-section {
                display: flex;
                align-items: center;
                justify-content: flex-start;
                gap: 30px;
                margin-top: 30px;
            }

            .price-tag .amount {
                font-size: 36px;
                font-weight: 900;
                color: #333;
            }

            .price-tag .currency, .price-tag .unit {
                color: #7db931;
                font-weight: 700;
            }

            .btn-subscribe-large {
                background: #7db931;
                color: white !important;
                padding: 15px 35px;
                border-radius: 50px;
                font-size: 18px;
                font-weight: bold;
                box-shadow: 0 8px 20px rgba(125, 185, 49, 0.3);
                transition: all 0.3s ease;
            }

            .btn-subscribe-large:hover {
                background: #6a9e2a;
                transform: translateY(-3px);
                box-shadow: 0 12px 25px rgba(125, 185, 49, 0.4);
            }

            /* Mobile Adjustments */
            @media (max-width: 768px) {
                .detail-grid { grid-template-columns: 1fr; }
                .price-action-section { flex-direction: column; align-items: flex-start; gap: 15px; }
                .featured-details { padding: 25px !important; }
            }
            .product-featured {
                border: 1px solid #7db931; /* Thin primary border */
                outline: 5px solid rgba(125, 185, 49, 0.05); /* Soft outer "air" border */
                border-radius: 20px;
                box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08); /* Soft elevation */
                transition: all 0.4s ease;
            }

            .product-featured:hover {
                border-color: #5a8a20;
                outline-color: rgba(125, 185, 49, 0.15); /* Glow intensifies on hover */
                box-shadow: 0 15px 40px rgba(125, 185, 49, 0.2);
            }
            /* --- ENHANCE BIG CARD IMAGE --- */

            /* 1. Remove padding from the left side so image can touch edges if desired */
            .product-featured .featured-img-wrapper {
                padding: 0;
                overflow: hidden;
                height: 100%; /* Ensures it matches the content height */
                background: #f9fbf7;
                display: flex;
                align-items: center;
                justify-content: center;
            }

            /* 2. Scale the image size up */
            .product-featured .featured-img-wrapper img {
                width: 100%;
                height: auto;
                max-height: 500px; /* Increased from 400px */
                object-fit: contain;
                padding: 20px; /* Small cushion so it doesn't look cramped */
                transform: scale(1.1); /* Subtle boost to the actual image size */
                transition: transform 0.5s ease;
            }

            /* 3. Hover effect for the big image */
            .product-featured:hover .featured-img-wrapper img {
                transform: scale(1.15); /* Slightly zooms on hover */
            }

            /* 4. Ensure the layout proportions are balanced on Desktop */
            @media (min-width: 992px) {
                .product-featured .col-lg-5 {
                    flex: 0 0 45%; /* Makes the image column wider */
                    max-width: 45%;
                }
                .product-featured .col-lg-7 {
                    flex: 0 0 55%;
                    max-width: 55%;
                }
            }

            /* Makes the container the reference point for the stretched link */
            .position-relative {
                position: relative;
            }

            /* Stretches the link to fill the entire parent container */
            .stretched-link::after {
                position: absolute;
                top: 0;
                right: 0;
                bottom: 0;
                left: 0;
                z-index: 1;
                pointer-events: auto;
                content: "";
                background-color: rgba(0,0,0,0); /* Invisible overlay */
            }

            /* Optional: Improve the hover feel since the whole card is now a button */
            .product-item:hover {
                cursor: pointer;
                transform: translateY(-5px);
                box-shadow: 0 10px 20px rgba(0,0,0,0.1);
            }

        </style>
</head>

<body>
	<?php require_once('nav.php'); ?>
	<?php require_once('popup.php'); ?>

	<!-- page header section ending here -->
	<section class="page-header padding-tb page-header-bg-1">
		<div class="container">
			<div class="page-header-item d-flex align-items-center justify-content-center">
				<div class="post-content">
					<h3>Happy Cows Products</h3>
					<div class="breadcamp">
						<ul class="d-flex flex-wrap justify-content-center align-items-center">
							<li><a href="index.php">Home</a></li>
							<li><a class="active">Products</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- page header section ending here -->

	<!-- Shop Page Section start here -->
	<section class="shop-page padding-tb">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-12 sticky-widget">
					<!-- <div class="shop-title d-flex flex-wrap justify-content-between">
							<p>Showing 01 - 12 of 139 Results</p>
							<div class="product-view-mode">
								<a class="active" data-target="grid"><i class="fas fa-th"></i></a>
								<a data-target="list"><i class="fas fa-list"></i></a>
							</div>
						</div> -->
                    <div class="col-12 mb-5">
                        <div class="product-item product-featured">
                            <div class="row g-0 align-items-center">
                                <div class="col-lg-5 col-md-6">
                                    <div class="product-thumb featured-img-wrapper">
                                        <img src="assets/images/shop/00.jpg" alt="Desi Cow Milk" class="img-fluid">
                                        <span class="badge-featured"><i class="fas fa-star"></i> Most Subscribed</span>
                                    </div>
                                </div>
                                <div class="col-lg-7 col-md-6">
                                    <div class="product-content featured-details">
                                        <div class="brand-tag">Premium Ahimsa A2 Milk</div>
                                        <h3><a href="subscribe.php">Desi Cow Milk (500 ml)</a></h3>

                                        <p class="description">
                                            Pure, unprocessed A2 milk from our happy, grass-fed Desi cows.
                                            Produced using traditional <b>Ahimsa</b> methods where the calf gets its full share first.
                                        </p>

                                        <div class="detail-grid">
                                            <div class="detail-item">
                                                <i class="fas fa-truck-moving"></i>
                                                <span><b>Farm to Home</b><br>Delivered within 4-6 hours</span>
                                            </div>
                                            <div class="detail-item">
                                                <i class="fas fa-flask"></i>
                                                <span><b>No Hormones</b><br>Zero Oxytocin or Antibiotics</span>
                                            </div>
                                            <div class="detail-item">
                                                <i class="fas fa-vial"></i>
                                                <span><b>Lab Tested</b><br>Rigorous quality checks daily</span>
                                            </div>
                                            <div class="detail-item">
                                                <i class="fas fa-heart"></i>
                                                <span><b>Ethical</b><br>No Slaughter, Lifetime Care</span>
                                            </div>
                                        </div>

                                        <div class="price-action-section">
                                            <div class="price-tag">
                                                <span class="currency">Rs.</span>
                                                <span class="amount">42</span>
                                                <span class="unit">/ 500ml</span>
                                            </div>
                                            <a href="subscribe.php" class="btn-subscribe-large">
                                                Start Subscription <i class="fas fa-chevron-right ml-2"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
					<div class="shop-product-wrap grid row">

						<!--<div class="col-lg-4 col-md-6 col-12">
							<div class="product-item">
								<div class="product-thumb">
									<img src="assets/images/shop/00.jpg" alt="shop">
								</div>
								<div class="product-content">
									<h5><a href="subscribe.php">Desi Cow Milk 500 ml</a></h5>
									<p>
										<span><i class="fas fa-leaf"></i> 100% Natural & Fresh</span>
									</p>
									<h6>Rs. 42/-</h6>
								</div>
							</div>
						</div>-->
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="product-item position-relative">
                                <div class="product-thumb">
                                    <img src="assets/images/shop/10.jpg" alt="shop">
                                </div>
                                <div class="product-content">
                                    <h5>
                                        <a href="https://ecomytra.com/products?cat=16" target="_blank" class="stretched-link">
                                            Gaulakshmi Cow Ghee 1000ml
                                        </a>
                                    </h5>
                                    <p>
                                        <span><i class="fas fa-leaf"></i> 100% Natural & Fresh</span>
                                    </p>
                                    <h6>Rs. 2500/-</h6>
                                </div>
                            </div>
                        </div>
						<div class="col-lg-4 col-md-6 col-12">
							<div class="product-item position-relative">
								<div class="product-thumb">
									<img src="assets/images/shop/09.jpg" alt="shop">
								</div>
								<div class="product-content">
									<h5><a href="https://ecomytra.com/products?cat=16" target="_blank" class="stretched-link">Ecomytra Desi Cow Milk 1000ml</a></h5>
									<p>
										<span><i class="fas fa-leaf"></i> 100% Natural & Fresh</span>
									</p>
									<h6>Rs. 1200/-</h6>
								</div>
								<!-- <div class="product-btn mt-3">
									<a href="/cart.php?action=add&id=9" class="w-100 btn btn-primary" style="border: none; border-radius: 0%;">Buy Now</a>
								</div> -->
							</div>
						</div>
						<div class="col-lg-4 col-md-6 col-12">
							<div class="product-item position-relative">
								<div class="product-thumb">
									<img src="assets/images/shop/01.jpg" alt="shop">
								</div>
								<div class="product-content">
									<h5><a href="https://ecomytra.com/products?cat=27" target="_blank" class="stretched-link">Ayur Nasal Ghee 10 ml</a></h5>
									<p>
										<span><i class="fas fa-leaf"></i> 100% Natural & Fresh</span>
									</p>
									<h6>Rs. 100/-</h6>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 col-12">
							<div class="product-item position-relative">
								<div class="product-thumb">
									<img src="assets/images/shop/02.jpg" alt="shop">
								</div>
								<div class="product-content">
									<h5><a href="https://ecomytra.com/products?cat=27" target="_blank" class="stretched-link">Gaunyle 1000 ml</a></h5>
									<p>
										<span><i class="fas fa-leaf"></i> 100% Natural & Fresh</span>
									</p>
									<h6>Rs. 100/-</h6>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 col-12">
							<div class="product-item position-relative">
								<div class="product-thumb">
									<img src="assets/images/shop/08.jpg" alt="shop">
								</div>
								<div class="product-content">
									<h5><a href="https://ecomytra.com/products?cat=27" target="_blank" class="stretched-link">Dant Manjan 50 gm</a></h5>
									<p>
										<span><i class="fas fa-leaf"></i> 100% Natural & Fresh</span>
									</p>
									<h6>Rs. 65/-</h6>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 col-12">
							<div class="product-item position-relative">
								<div class="product-thumb">
									<img src="assets/images/shop/07.jpg" alt="shop">
								</div>
								<div class="product-content">
									<h5><a href="https://ecomytra.com/products?cat=27" target="_blank" class="stretched-link">Dhoop Big Size 36 Pcs in Box</a></h5>
									<p>
										<span><i class="fas fa-leaf"></i> 100% Natural & Fresh</span>
									</p>
									<h6>Rs. 100/-</h6>
								</div>
							</div>
						</div>

						<div class="col-lg-4 col-md-6 col-12">
							<div class="product-item position-relative">
								<div class="product-thumb">
									<img src="assets/images/shop/03.jpg" alt="shop">
								</div>
								<div class="product-content">
									<h5><a href="https://ecomytra.com/products?cat=27" target="_blank" class="stretched-link">Gobar Kanda Small Size Loose 1 pc.</a>
									</h5>
									<p>
										<span><i class="fas fa-leaf"></i> 100% Natural & Fresh</span>
									</p>
									<h6>Rs. 2/-</h6>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 col-12">
							<div class="product-item position-relative">
								<div class="product-thumb">
									<img src="assets/images/shop/04.jpg" alt="shop">
								</div>
								<div class="product-content">
									<h5><a href="https://ecomytra.com/products?cat=27" target="_blank" class="stretched-link">Gobar Kanda Big Size Loose 1 pc.</a></h5>
									<p>
										<span><i class="fas fa-leaf"></i> 100% Natural & Fresh</span>
									</p>
									<h6>Rs. 5/-</h6>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 col-12">
							<div class="product-item position-relative">
								<div class="product-thumb">
									<img src="assets/images/shop/05.jpg" alt="shop">
								</div>
								<div class="product-content">
									<h5><a href="https://ecomytra.com/products?cat=27" target="_blank" class="stretched-link">Gobar Kanda Small Packet 20 pcs.</a></h5>
									<p>
										<span><i class="fas fa-leaf"></i> 100% Natural & Fresh</span>
									</p>
									<h6>Rs. 40/-</h6>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 col-12">
							<div class="product-item position-relative">
								<div class="product-thumb">
									<img src="assets/images/shop/06.jpg" alt="shop">
								</div>
								<div class="product-content">
									<h5><a href="https://ecomytra.com/products?cat=27" target="_blank" class="stretched-link">Gobar Kanda Big Packet 20 pcs.</a></h5>
									<p>
										<span><i class="fas fa-leaf"></i> 100% Natural & Fresh</span>
									</p>
									<h6>Rs. 100/-</h6>
								</div>
							</div>
						</div>

					</div>
					<!-- <div class="pagination-area  d-flex flex-wrap justify-content-center">
							<ul class="pagination  d-flex flex-wrap m-0">
								<li class="prev">
									<a href="#"><i class="fas fa-angle-double-left"></i></a>
								</li>
								<li><a href="#">1</a></li>
								<li><a href="#"  class="active d-none d-md-block">2</a></li>
								<li><a href="#" class="d-none d-md-block">3</a></li>
								<li class="dot">....</li>
								<li><a href="#" class="d-none d-md-block">4</a></li>
								<li class="next">
									<a href="#"><i class="fas fa-angle-double-right"></i></a>
								</li>
							</ul>
						</div> -->
				</div>
			</div>
		</div>
	</section>
    <div id="loadingSpinner" style="display:none; text-align:center;">
        <img src="https://i.gifer.com/ZZ5H.gif" alt="Loading..." width="60">
        <p>Submitting...</p>
    </div>
	<!-- Shop Page Section ending here -->

	<!-- footer section start here -->
	<?php require_once('footer.php'); ?>
	<!-- footer section start here -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<script src="assets/js/jquery.js"></script>
	<script src="assets/js/fontawesome.min.js"></script>
	<script src="assets/js/jquery.counterup.min.js"></script>
	<script src='assets/js/jquery.easing.js'></script>
	<script src='assets/js/slick.min.js'></script>
	<script src="assets/js/lightcase.js"></script>
	<script src="assets/js/map-custom.js"></script>
	<script src="assets/js/circular-countdown.js"></script>
	<script src="assets/js/jquery.countdown.min.js"></script>
	<script src="assets/js/waypoints.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/isotope.pkgd.min.js"></script>
	<script src="assets/js/wow.min.js"></script>
	<script src="assets/js/theia-sticky-sidebar.js"></script>
	<script src="assets/js/swiper.min.js"></script>
	<script src="assets/js/functions.js"></script>
	<script src="assets/js/popup.js"></script>
    <script src="assets/js/subscription-form-submission.js"></script>
    <script>
        /* $(document).ready(function () {

             $('#fullname').on('input', function () {
                 this.value = this.value.replace(/[^a-zA-Z\s]/g, '');
             });
             $('#phone').on('input', function () {
                 this.value = this.value.replace(/\D/g, '').slice(0, 10);
             });
             $('#pincode').on('input', function () {
                 this.value = this.value.replace(/\D/g, '').slice(0, 6);
             });
         });

         $(document).ready(function () {

             $('#fullname1').on('input', function () {
                 this.value = this.value.replace(/[^a-zA-Z\s]/g, '');
             });
             $('#phone1').on('input', function () {
                 this.value = this.value.replace(/\D/g, '').slice(0, 10);
             });
             $('#pincode1').on('input', function () {
                 this.value = this.value.replace(/\D/g, '').slice(0, 6);
             });
         });*/


        $(document).ready(function () {

            function validateName(input) {
                let val = input.value.replace(/[^a-zA-Z\s]/g, '');
                input.value = val;

                if (val.length > 0 && val.length < 3) {
                    input.setCustomValidity("Name must be at least 3 characters");
                } else {
                    input.setCustomValidity("");
                }
            }

            function validatePhone(input) {
                let val = input.value.replace(/\D/g, '').slice(0, 10);
                input.value = val;

                if (val.length !== 10) {
                    input.setCustomValidity("Mobile number must be exactly 10 digits");
                } else {
                    input.setCustomValidity("");
                }
            }

            function validatePincode(input) {
                let val = input.value.replace(/\D/g, '').slice(0, 6);
                input.value = val;

                if (val.length !== 6) {
                    input.setCustomValidity("Pincode must be exactly 6 digits");
                } else {
                    input.setCustomValidity("");
                }
            }

            // Normal fields
            $('#fullname').on('input', function () { validateName(this); });
            $('#phone').on('input', function () { validatePhone(this); });
            $('#pincode').on('input', function () { validatePincode(this); });

            // Fields with 1
            $('#fullname1').on('input', function () { validateName(this); });
            $('#phone1').on('input', function () { validatePhone(this); });
            $('#pincode1').on('input', function () { validatePincode(this); });

        });


        function closePopup() {
            $('#popupOverlay').fadeOut();
        }
    </script>
    <script>
        function showDropdown() {
            const ul = document.getElementById("locationList");
            ul.style.display = "block";

            // Ensure all items are visible when first clicked
            const li = ul.getElementsByTagName("li");
            for (let i = 0; i < li.length; i++) {
                li[i].style.display = "";
            }
        }

        function filterLocations() {
            const input = document.getElementById("locationInput");
            const filter = input.value.toUpperCase();
            const ul = document.getElementById("locationList");
            const li = ul.getElementsByTagName("li");

            ul.style.display = "block";

            for (let i = 0; i < li.length; i++) {
                let txtValue = li[i].textContent || li[i].innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    li[i].style.display = "";
                } else {
                    li[i].style.display = "none";
                }
            }
        }

        function selectLocation(val) {
            document.getElementById("locationInput").value = val;
            document.getElementById("locationValue").value = val;
            document.getElementById("locationList").style.display = "none";
        }

        // Close dropdown when clicking outside
        document.addEventListener("click", function(event) {
            const dropdown = document.querySelector(".searchable-dropdown");
            if (!dropdown.contains(event.target)) {
                document.getElementById("locationList").style.display = "none";
            }
        });
    </script>
</body>

</html>