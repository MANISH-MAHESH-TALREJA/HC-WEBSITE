<!DOCTYPE html>
<html lang="en">

<head>
	<title>HappyCows – Contact Us</title>
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
</head>

<body>
<?php require_once('nav.php'); ?>
<?php require_once('popup.php'); ?>

	<!-- page header section ending here -->
	<section class="page-header padding-tb page-header-bg-1">
		<div class="container">
			<div class="page-header-item d-flex align-items-center justify-content-center">
				<div class="post-content">
					<h3>Contact Us</h3>
					<div class="breadcamp">
						<ul class="d-flex flex-wrap justify-content-center align-items-center">
							<li><a href="index.php">Home</a> </li>
							<li><a class="active">Contact Us</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- page header section ending here -->

	<!-- contact us section start here -->
	<div class="contact padding-tb">
		<div class="container">
			<div class="section-wrapper row">
				<div class="col-lg-8 col-12">
					<div class="contact-part">
						<div class="contact-title">
							<h4>Send Message us</h4>
						</div>
						<form id="contactForm" class="contact-form d-flex flex-wrap justify-content-between">
							<input type="hidden" name="form_type" value="contact_form">

							<input type="text" name="name" id="name" placeholder="Your Name" required>
							<input type="email" name="email" id="email" placeholder="Your Email" required>
							<input type="tel" name="phone" placeholder="Phone" id="phone2" required> <!-- Fixed -->

							<input type="text" name="subject" placeholder="Subject" required> <!-- Fixed -->

							<textarea name="message" rows="7" placeholder="Enter Your Message" required></textarea>
							<!-- Fixed -->

							<div class="gdprs">
								<label><input type="checkbox" name="not_robot" checked> I’m not a robot </label>
								<img src="assets/images/contact/icon/01.png" alt="contact">
							</div>

							<input class="btn" type="submit" value="Submit Now">
						</form>

					</div>
				</div>
				<div class="col-lg-4 col-12">
					<div class="contact-info">
						<h3>Quick Contact</h3>
						<p>Continually deliver pure Desi cow milk and organic products, promoting cruelty-free farming,
							sustainable living, and natural wellness for every family.
						</p>
						<ul class="contact-location">
							<li>
								<div class="icon-part">
									<i class="fas fa-phone-volume"></i>
								</div>
								<div class="content-part">
									<p>+91 92229 88818</p>
								</div>
							</li>
							<li>
								<div class="icon-part">
									<i class="fas fa-clock"></i>
								</div>
								<div class="content-part">
									<p>Mon - Fri 09:00 - 18:00</p>
									<p>(except public holidays)</p>
								</div>
							</li>
							<li>
								<div class="icon-part">
									<i class="fas fa-map-marker-alt"></i>
								</div>
								<div class="content-part">
									<p>
										Hrishikesh Amrutalaya Pvt Ltd. B-111, Nikisha Industrial Estate, Off Western
										Express Highway, Near Aqua Lodha, Mira Road (East), District – Thane, Mumbai
										India, Pincode – 401107</p>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="loadingSpinner" style="display:none; text-align:center;">
		<img src="https://i.gifer.com/ZZ5H.gif" alt="Loading..." width="60">
		<p>Submitting...</p>
	</div>
	<!-- contact us section ending here -->

	<!-- gmap section start here -->

	<iframe
		src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3766.3566524976254!2d72.8739816!3d19.2668504!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2aefca347ad9f45b%3A0x22b3266179cffc93!2sHappy%20Cows%20Milk!5e0!3m2!1sen!2sin!4v1765171537471!5m2!1sen!2sin"
		class="w-100" height="450" style="border:0;" allowfullscreen="" loading="lazy"
		referrerpolicy="no-referrer-when-downgrade"></iframe>
	<!-- gmap section ending here -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
        $(document).ready(function () {

            function validateName(input) {
                let val = input.value.replace(/[^a-zA-Z\s]/g, '');
                input.value = val;

                if (val.length < 3) {
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

            function validateEmail(input) {
                const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                if (!emailRegex.test(input.value)) {
                    input.setCustomValidity("Please enter a valid email address");
                } else {
                    input.setCustomValidity("");
                }
            }

            function validateMinLength(input, min, message) {
                if (input.value.trim().length < min) {
                    input.setCustomValidity(message);
                } else {
                    input.setCustomValidity("");
                }
            }

            function validateRobotCheckbox() {
                const checkbox = document.querySelector('input[name="not_robot"]');
                if (!checkbox.checked) {
                    checkbox.setCustomValidity("Please confirm you are not a robot");
                } else {
                    checkbox.setCustomValidity("");
                }
            }

            // Bind events
            $('#name').on('input', function () { validateName(this); });
            $('#phone2').on('input', function () { validatePhone(this); });
            $('#email').on('input', function () { validateEmail(this); });

            $('input[name="subject"]').on('input', function () {
                validateMinLength(this, 10, "Subject must be at least 10 characters");
            });

            $('textarea[name="message"]').on('input', function () {
                validateMinLength(this, 10, "Message must be at least 10 characters");
            });

            $('input[name="not_robot"]').on('change', function () {
                validateRobotCheckbox();
            });

            // Final submit validation
            $('#contactForm').on('submit', function () {
                validateRobotCheckbox();
            });

        });


    </script>
    <script>


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