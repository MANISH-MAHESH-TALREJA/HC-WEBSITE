<!DOCTYPE html>
<html lang="en">

<head>

	<head>
		<title>HappyCows – About Us</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- SEO Meta -->
		<meta name="description"
			content="HappyCows provides 100% pure Ahimsa A2 milk from protected cows, cared for with love and devotion. No artificial insemination, no slaughter — only compassion.">
		<meta name="keywords"
			content="HappyCows, Ahimsa Milk, A2 Milk, ISKCON, Cow Protection, Dairy Farm, Organic Milk">
		<meta name="author" content="HappyCows Team">

		<!-- Favicon -->
		<link rel="icon" type="image/png" href="assets/images/logo/02.png">
		<link rel="apple-touch-icon" href="assets/images/logo/02.png">

		<link href="https://fonts.googleapis.com/css?family=Frank+Ruhl+Libre:300,400,500,700,900&display=swap"
			rel="stylesheet">

		<link
			href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i"
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
			.fw-bold{
				font-weight: bold;
			}
		</style>
	</head>
    <script>
        (function () {
            const POPUP_KEY = "happycows_popup_submitted_at";
            const COOLDOWN_TIME = 30 * 60 * 1000; // 30 minutes
            const SHOW_DELAY = 5000; // 5 seconds

            function shouldShowPopup() {
                const submittedAt = localStorage.getItem(POPUP_KEY);
                if (!submittedAt) return true;

                const elapsed = Date.now() - parseInt(submittedAt, 10);
                return elapsed > COOLDOWN_TIME;
            }

            function showPopupWithDelay() {
                setTimeout(() => {
                    if (shouldShowPopup()) {
                        const popup = document.getElementById("popupOverlay");
                        if (popup) popup.style.display = "flex";
                    }
                }, SHOW_DELAY);
            }

            document.addEventListener("DOMContentLoaded", showPopupWithDelay);
        })();
    </script>

<body>


	<?php require_once('nav.php'); ?>
	<?php require_once('popup.php'); ?>

	<!-- page header section ending here -->
	<section class="page-header padding-tb page-header-bg-1">
		<div class="container">
			<div class="page-header-item d-flex align-items-center justify-content-center">
				<div class="post-content">
					<h3>About Us</h3>
					<div class="breadcamp">
						<ul class="d-flex flex-wrap justify-content-center align-items-center">
							<li><a href="index.php">Home</a> </li>
							<li><a class="active">About Us</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- page header section ending here -->

	<!-- about section start here -->
	<section class="about style-2 padding-tb">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="about-left">
						<div class="section-header wow fadeInDown" data-wow-duration="1s" data-wow-delay=".1s">
							<h2><span>Welcome to Our Happy Cows</span></h2>
							<p>Happy Cows is a premium dairy brand committed to delivering pure, natural, and nutritious
								milk products. Our cows are free-grazing and cruelty-free, raised in lush green pastures
								to ensure the highest quality of milk. From fresh milk to ghee, paneer, and yogurt, all
								our products are 100% natural, chemical-free, and packed with essential nutrients. We
								follow sustainable farming practices and maintain strict hygiene in daily collection and
								processing, ensuring that every product reaches your home fresh and wholesome. At Happy
								Cows, we believe in promoting healthy living, happy animals, and satisfied customers,
								bringing you the true taste of nature in every glass.</p>
						</div>
						<div class="section-wrapper">
							<ul class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".2s">
								<li><i class="far fa-check-square"></i>We deliver fresh Desi cow milk daily with free
									delivery.</li>
								<li><i class="far fa-check-square"></i>We are one of leading company</li>
								<li><i class="far fa-check-square"></i>We connect traditional cow care with modern
									health-conscious living.</li>
								<li><i class="far fa-check-square"></i>We provide organic Panchgavya products made from
									pure cow ingredients.
								</li>
								<li><i class="far fa-check-square"></i>We ensure cruelty-free, ethical dairy practices
									for every product.</li>
								<li><i class="far fa-check-square"></i>We care for our cows with love, purity, and
									compassion.</li>
								<li><i class="far fa-check-square"></i>We offer trusted Desi cow milk and organic
									wellness products.</li>
								<li><i class="far fa-check-square"></i>We are committed to quality, purity, and ethical
									dairy care.</li>
							</ul>
							<!-- <a href="#" class="btn wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">Read
								More</a> -->
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="about-right wow fadeInUp m-0" data-wow-duration="1s" data-wow-delay=".4s">
						<div class="video-post text-center">
							<div class="video-thumb">
								<img src="assets/images/about/01.jpg" alt="about-us">
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row gap-2 mt-5">
				<div class="col-lg-6">
					<div class="about-right wow fadeInUp m-0" data-wow-duration="1s" data-wow-delay=".4s">
						<div class="video-post text-center">
							<div class="video-thumb">
								<img src="assets/images/about/0001.jpg" alt="about-us">
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="about-left">
						<div class="section-header wow fadeInDown" data-wow-duration="1s" data-wow-delay=".1s">
							<h2><span>Our Commitment to Quality & Ethics</span></h2>
							<p>Happy Cows is dedicated to providing dairy products of unmatched <span class="fw-bold">purity and quality</span>.
								We prioritize <span class="fw-bold">ethical and sustainable farming</span>, ensuring our indigenous Gir cows are
								free-grazing and cared for in a cruelty-free environment. Every product, from our
								naturally nutrient-rich A2 milk to our wholesome ghee and paneer, is 100% natural and
								free of chemicals. Our robust quality checks and strict hygiene protocols govern every
								stage—from collection to processing—guaranteeing that only the freshest, most wholesome
								products reach your family. Choosing Happy Cows means supporting happy animals,
								sustainable practices, and embracing a truly natural, high-quality dairy experience.</p>
						</div>
						<div class="section-wrapper">
							<ul class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".2s">
								<li><i class="far fa-check-square"></i>Ethical sourcing from <span class="fw-bold">free-grazing</span> Indigenous
									Indian Cow Breeds.</li>
								<li><i class="far fa-check-square"></i>100% <span class="fw-bold">natural</span> and <span class="fw-bold">chemical-free</span> dairy
									products.</li>
								<li><i class="far fa-check-square"></i>Focus on <span class="fw-bold">A2 Milk</span> protein known for better
									digestion.</li>
								<li><i class="far fa-check-square"></i>Products rich in <span class="fw-bold">essential nutrients</span> and
									Pro-Vitamin A.</li>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="row mt-5">
				<div class="col-lg-6">
					<div class="about-left">
						<div class="section-header wow fadeInDown" data-wow-duration="1s" data-wow-delay=".1s">
							<h2><span>The A2 Milk Advantage</span></h2>
							<p>At Happy Cows, we exclusively provide <span class="fw-bold">A2 milk</span>, sourced from indigenous Indian breeds,
								primarily Gir cows. Unlike A1 milk (found in foreign breeds) which releases the
								potentially harmful peptide BCM-7 during digestion, A2 milk is easily digestible and
								supports overall wellness. We are committed to delivering this superior form of milk,
								allowing your family to experience dairy without the digestive issues or associated
								health risks linked to A1 protein. Choosing Happy Cows A2 milk is choosing natural
								purity, better digestion, and authentic Indian nourishment. This A2 milk is a source of
								<span class="fw-bold">A2 Beta-Casein Protein</span>, free from BCM-7, sourced only from <span class="fw-bold">Indigenous Indian Cow
								Breeds</span>, linked to benefits like <span class="fw-bold">improved digestion and immunity</span>, contributes to
								preventing issues like Type-1 diabetes and cardiovascular disease (IHD), is a wholesome
								choice for infants and adults, is <span class="fw-bold">Whole Milk</span class="fw-bold"> (none of the essential nutrients
								removed), and gets its yellowish color from <span class="fw-bold">Beta-Carotene</span> (Pro-Vitamin A).</p>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="about-right wow fadeInUp m-0" data-wow-duration="1s" data-wow-delay=".4s">
						<div class="video-post text-center">
							<div class="video-thumb">
								<img src="assets/images/about/001.jpg" alt="about-us">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- about section ending here -->

	<!-- about section start here -->
	<section class="about style-3 padding-tb">
		<div class="container p-xl-0">
			<div class="section-wrapper row justify-content-center">

				<div class="col-xl-4 col-sm-6 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".1s">
					<div class="post-item-inner text-center">
						<div class="post-thumb">
							<img src="assets/images/about/02.png" alt="Happy Cows Farm">
						</div>
						<div class="post-content">
							<div class="title">
								<h5>Happy Cows Farm</h5>
								<h5>Natural & Ethical Care</h5>
							</div>
							<p>Our Desi cows live happily in open, green pastures—fed with organic fodder and cared for
								with love. We follow cruelty-free practices ensuring every drop of milk comes from a
								healthy and happy cow.</p>
						</div>
					</div>
				</div>

				<div class="col-xl-4 col-sm-6 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
					<div class="post-item-inner text-center">
						<div class="post-thumb">
							<img src="assets/images/about/03.png" alt="Desi Cow Milk">
						</div>
						<div class="post-content">
							<div class="title">
								<h5 class="m-0">Daily Fresh Milk</h5>
								<h5 class="m-0">Free Home Delivery</h5>
							</div>
							<p>Get pure, unadulterated Desi cow milk delivered to your doorstep every morning—absolutely
								free of delivery charges. Experience the true taste of nature in every glass.</p>
						</div>
					</div>
				</div>

				<div class="col-xl-4 col-sm-6 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
					<div class="post-item-inner text-center">
						<div class="post-thumb">
							<img src="assets/images/about/06.png" alt="Panchgavya Products">
						</div>
						<div class="post-content">
							<div class="title">
								<h5>Organic Panchgavya</h5>
								<h5>For a Healthier Life</h5>
							</div>
							<p>Explore our range of 100% natural Panchgavya products—crafted from milk, ghee, gomutra,
								dung, and curd. From skincare to home care, our organic collection supports holistic
								living and sustainability.</p>
						</div>
					</div>
				</div>

			</div>
		</div>
	</section>

	<!-- about section ending here -->

	<!-- certification section start here -->
	<section class="certification padding-tb">
		<div class="container">
			<div class="section-header wow fadeInDown" data-wow-duration="1s" data-wow-delay=".1s">
				<h2><span>A2 Milk</span> Certification & Report Section</h2>
			</div>
			<div class="section-wrapper">
				<div class="row gap-2">
					<div class="col-lg-6 wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".1s">
						<img src="assets/images/SCAN001.jpg"
							alt="A2 Milk Certification Report" class="w-100">
					</div>
					<div class="col-lg-6 wow fadeInRight" data-wow-duration="1s" data-wow-delay=".2s">
						<img src="assets/images/SCAN002.jpg"
							alt="A2 Milk Certification Certificate" class="w-100">
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- certification section ending here -->
	<!-- histori section start here -->
	<section class="histori padding-tb">
		<div class="container">
			<div class="section-header wow fadeInDown" data-wow-duration="1s" data-wow-delay=".1s">
				<h2><span>History</span></h2>
				<h2>40 Years Farm Traditions</h2>
			</div>
			<div class="section-wrapper">
				<div class="row no-gutters">
					<div class="col-lg-8 wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".1s">
						<div class="histori-slider">
							<div class="swiper-wrapper">

								<!-- 1975 -->
								<div class="swiper-slide">
									<div class="histori-item">
										<div class="histori-thumb">
											<img src="assets/images/histori/01.jpg" alt="Happy Cows History 1975">
										</div>
										<div class="histori-content">
											<div class="histori-left">
												<h2>Since</h2>
												<h3>1975</h3>
											</div>
											<div class="histori-right">
												<p>Happy Cows began its journey in 1975 with a small group of farmers
													dedicated to preserving Desi cow breeds and promoting natural dairy
													practices. Our mission started with love, purity, and respect for
													every cow.</p>
											</div>
										</div>
									</div>
								</div>

								<!-- 1985 -->
								<div class="swiper-slide">
									<div class="histori-item">
										<div class="histori-thumb">
											<img src="assets/images/histori/01.jpg" alt="Happy Cows History 1985">
										</div>
										<div class="histori-content">
											<div class="histori-left">
												<h2>Since</h2>
												<h3>1985</h3>
											</div>
											<div class="histori-right">
												<p>By 1985, Happy Cows expanded its farms and adopted cruelty-free
													milking methods, ensuring that our cows live stress-free, healthy
													lives. We began supplying fresh Desi cow milk directly to local
													communities.</p>
											</div>
										</div>
									</div>
								</div>

								<!-- 1995 -->
								<div class="swiper-slide">
									<div class="histori-item">
										<div class="histori-thumb">
											<img src="assets/images/histori/01.jpg" alt="Happy Cows History 1995">
										</div>
										<div class="histori-content">
											<div class="histori-left">
												<h2>Since</h2>
												<h3>1995</h3>
											</div>
											<div class="histori-right">
												<p>In 1995, we introduced organic Panchgavya products — ghee, dung-based
													fertilizers, soaps, and wellness items — made from the five sacred
													elements of the cow, promoting health and sustainable living.</p>
											</div>
										</div>
									</div>
								</div>

								<!-- 2010 -->
								<div class="swiper-slide">
									<div class="histori-item">
										<div class="histori-thumb">
											<img src="assets/images/histori/01.jpg" alt="Happy Cows History 2010">
										</div>
										<div class="histori-content">
											<div class="histori-left">
												<h2>Since</h2>
												<h3>2010</h3>
											</div>
											<div class="histori-right">
												<p>With growing trust, Happy Cows launched doorstep delivery of fresh
													milk and organic products, ensuring every family experiences
													nature’s purity daily. Technology met tradition to deliver freshness
													with love.</p>
											</div>
										</div>
									</div>
								</div>

								<!-- 2025 -->
								<div class="swiper-slide">
									<div class="histori-item">
										<div class="histori-thumb">
											<img src="assets/images/histori/01.jpg" alt="Happy Cows History 2025">
										</div>
										<div class="histori-content">
											<div class="histori-left">
												<h2>Now</h2>
												<h3>2025</h3>
											</div>
											<div class="histori-right">
												<p>Today, Happy Cows stands as a trusted brand for pure Desi cow milk
													and organic Panchgavya products, delivering health, happiness, and
													harmony across thousands of homes — naturally and ethically.</p>
											</div>
										</div>
									</div>
								</div>

							</div>
						</div>
					</div>

					<div class="col-lg-4 wow fadeInRight" data-wow-duration="1s" data-wow-delay=".1s">
						<div class="achievement">
							<div class="title">
								<h2>Our Achievement</h2>
							</div>
							<div class="achieve-wrapper">
								<div class="post-item">
									<div class="post-inner">
										<div class="post-thumb">
											<img src="assets/images/histori/achievement/01.png" alt="achievement">
										</div>
										<div class="post-content">
											<span class="counter">5000</span>
											<p>Customers</p>
										</div>
									</div>
								</div>
								<div class="post-item">
									<div class="post-inner">
										<div class="post-thumb">
											<img src="assets/images/histori/achievement/02.png" alt="achievement">
										</div>
										<div class="post-content">
											<span class="counter">10</span>
											<p>Award Won</p>
										</div>
									</div>
								</div>
								<div class="post-item">
									<div class="post-inner">
										<div class="post-thumb">
											<img src="assets/images/histori/achievement/03.png" alt="achievement">
										</div>
										<div class="post-content">
											<span class="counter">50</span>
											<p>volunteer</p>
										</div>
									</div>
								</div>
								<div class="post-item">
									<div class="post-inner">
										<div class="post-thumb">
											<img src="assets/images/histori/achievement/04.png" alt="achievement">
										</div>
										<div class="post-content">
											<span class="counter">10,000</span>
											<p>Cow</p>
										</div>
									</div>
								</div>
							</div>
							<div class="histori-navigation">
								<div class="histori-button-prev"><i class="fas fa-arrow-left"></i></div>
								<div class="histori-button-next active"><i class="fas fa-arrow-right"></i></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- histori section ending here -->

	<!-- sponsor section start here -->

	<!-- sponsor section ending here -->

	<!-- footer section start here -->
	<?php require_once('footer.php'); ?>
	<!-- footer section start here -->


	<script src="assets/js/jquery.js"></script>
	<script src="assets/js/fontawesome.min.js"></script>
	<script src="assets/js/jquery.counterup.min.js"></script>
	<script src='assets/js/jquery.easing.js'></script>
	<script src='assets/js/slick.min.js'></script>
	<script src="assets/js/lightcase.js"></script>
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