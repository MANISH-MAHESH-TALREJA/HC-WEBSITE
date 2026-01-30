<!DOCTYPE html>
<html lang="zxx">

<head>

    <head>
        <title>HappyCows – Subscribe</title>
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
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
        <style>
            .contact-form {
                gap: 10px;
            }

            /* Uniform style for all fields */
            .contact-form select,
            .contact-form input,
            .contact-form textarea {
                width: 48%;
                padding: 12px 16px;
                margin-bottom: 15px;
                border: 1px solid #dcdcdc;
                border-radius: 8px;
                font-size: 16px;
                background-color: #f9f9f9;
                color: #333;
                background-color: white;
                transition: all 0.3s ease;
                box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05);
            }

            /* Full width for textarea */
            .contact-form textarea {
                width: 100%;
                resize: none;
                min-height: 100px;
            }

            /* Match select style exactly with inputs */
            .contact-form select {
                appearance: none;
                background-image: url("data:image/svg+xml;utf8,<svg fill='gray' height='12' viewBox='0 0 24 24' width='12' xmlns='http://www.w3.org/2000/svg'><path d='M7 10l5 5 5-5z'/></svg>");
                background-repeat: no-repeat;
                background-position: right 12px center;
                background-size: 16px;
                cursor: pointer;
            }

            /* Hover and focus effects — same for all */
            .contact-form select:focus,
            .contact-form input:focus,
            .contact-form textarea:focus,
            .contact-form select:hover,
            .contact-form input:hover,
            .contact-form textarea:hover {
                border-color: #3aa856;
                box-shadow: 0 0 6px rgba(58, 168, 86, 0.25);
                background-color: #ffffff;
                outline: none;
            }

            /* Placeholder style */
            .contact-form ::placeholder {
                color: #888;
            }

            /* Submit button */
            .contact-form .btn {
                width: 100%;
                background-color: #3aa856;
                color: #fff;
                border: none;
                padding: 14px 0;
                border-radius: 8px;
                font-size: 18px;
                font-weight: 600;
                letter-spacing: 0.5px;
                cursor: pointer;
                transition: all 0.3s ease;
                box-shadow: 0 3px 6px rgba(58, 168, 86, 0.3);
            }

            /* Button hover */
            .contact-form .btn:hover {
                background-color: #2d8744;
                box-shadow: 0 4px 10px rgba(58, 168, 86, 0.4);
                transform: translateY(-1px);
            }

            #formMsg {
                width: 100%;
                margin-bottom: 10px;
                font-weight: 600;
                text-align: center;
            }

            /* 1. Bold borders for all form elements */
            .contact-form select,
            .contact-form input,
            .contact-form textarea,
            .select2-container--default .select2-selection--single {
                border: 2px solid #dcdcdc !important; /* Increased from 1px to 2px */
                border-radius: 8px !important;
            }

            /* 2. Style the Select2 container to match height and padding */
            .select2-container .select2-selection--single {
                height: 50px !important; /* Matches your padding/font-size height */
                display: flex;
                align-items: center;
                background-color: white !important;
            }

            /* 3. Style the text inside Select2 */
            .select2-container--default .select2-selection--single .select2-selection__rendered {
                color: #333 !important;
                padding-left: 16px !important;
                font-size: 16px;
            }

            /* 4. Match the custom arrow icon */
            .select2-container--default .select2-selection--single .select2-selection__arrow {
                height: 48px !important;
                right: 12px !important;
            }

            /* 5. Focus state for Select2 to match other inputs */
            .select2-container--default.select2-container--focus .select2-selection--single {
                border-color: #3aa856 !important;
                box-shadow: 0 0 6px rgba(58, 168, 86, 0.25) !important;
            }

            /* 6. Fix dropdown search and list styling (Optional but recommended) */
            .select2-dropdown {
                border: 2px solid #3aa856 !important;
                border-radius: 8px !important;
                overflow: hidden;
            }

        </style>
    </head>

<body>
    <?php require_once('nav.php'); ?>


    <!-- page header section ending here -->
    <section class="page-header padding-tb page-header-bg-1">
        <div class="container">
            <div class="page-header-item d-flex align-items-center justify-content-center">
                <div class="post-content">
                    <h3>Subscribe To Happy Cows Milk</h3>
                    <div class="breadcamp">
                        <ul class="d-flex flex-wrap justify-content-center align-items-center">
                            <li><a href="index.php">Home</a></li>
                            <li><a class="active">Subscribe</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- page header section ending here -->

    <!-- Shop Page Section start here -->

    <div class="contact padding-tb">
        <div class="container">
            <div class="section-wrapper row">
                <div class="col-lg-6 col-12">
                    <img src="assets/images/contact/00.png" class="w-100" alt="Milk">
                </div>
                <div class="col-lg-6 col-12">
                    <div class="contact-part">
                        <form class="contact-form subscribeForm">
                            <div id="formMsg"></div>
                            <input type="hidden" name="secret" value="SASYAMRIT123">

                            <div class="row">
                                <div class="col-md-12 mb-3">
                                    <input type="text" class="w-100" name="fullname" id="fullname" placeholder="Full Name" required>
                                </div>

                                <div class="col-md-12 mb-3">
                                    <input type="tel" class="w-100" name="phone" id="phone" placeholder="Phone Number" required>
                                </div>

                                <div class="col-md-12 mb-3">
                                    <textarea name="address" class="w-100" rows="3" placeholder="Address"
                                        required></textarea>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <input type="number" class="w-100" name="pincode" id="pincode"
                                        placeholder="Pin Code" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <select name="how_much" required class="w-100">
                                        <option value="" disabled selected>How Much</option>
                                        <option value="500ml">500 ml</option>
                                        <option value="1litre">1 Litre</option>
                                        <option value="2litre">2 Litres</option>
                                        <option value="5litre">5 Litres</option>
                                        <option value="other">Other</option>
                                    </select>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <select name="how_often" required class="w-100">
                                        <option value="" disabled selected>How Often</option>
                                        <option value="daily">Daily</option>
                                        <option value="alternate">Alternate Days</option>
                                        <option value="weekly">Weekly</option>
                                    </select>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <select name="location"  required class="w-100 location-select" id="popup_location">
                                        <option value="">Choose Location</option>

                                        <option value="Airoli">Airoli</option>
                                        <option value="Ambernath">Ambernath</option>
                                        <option value="Andheri">Andheri</option>
                                        <option value="Badlapur">Badlapur</option>
                                        <option value="Bandra">Bandra</option>
                                        <option value="Belapur">Belapur</option>
                                        <option value="Bhandup">Bhandup</option>
                                        <option value="Bhayandar">Bhayandar</option>
                                        <option value="Bhiwandi">Bhiwandi</option>
                                        <option value="Borivali">Borivali</option>
                                        <option value="Byculla">Byculla</option>
                                        <option value="Charni Road">Charni Road</option>
                                        <option value="Chembur">Chembur</option>
                                        <option value="Colaba">Colaba</option>
                                        <option value="Dadar">Dadar</option>
                                        <option value="Dahisar">Dahisar</option>
                                        <option value="Dombivli">Dombivli</option>
                                        <option value="Dronagiri">Dronagiri</option>
                                        <option value="Fort">Fort</option>
                                        <option value="Ghatkopar">Ghatkopar</option>
                                        <option value="Govandi">Govandi</option>
                                        <option value="Grant Road">Grant Road</option>
                                        <option value="Jogeshwari">Jogeshwari</option>
                                        <option value="Kalwa">Kalwa</option>
                                        <option value="Kalyan">Kalyan</option>
                                        <option value="Kandivali">Kandivali</option>
                                        <option value="Kanjurmarg">Kanjurmarg</option>
                                        <option value="Khar">Khar</option>
                                        <option value="Kharghar">Kharghar</option>
                                        <option value="Koparkhairane">Koparkhairane</option>
                                        <option value="Kurla">Kurla</option>
                                        <option value="Lower Parel">Lower Parel</option>
                                        <option value="Malad">Malad</option>
                                        <option value="Mankhurd">Mankhurd</option>
                                        <option value="Marine Lines">Marine Lines</option>
                                        <option value="Mira Road">Mira Road</option>
                                        <option value="Mulund">Mulund</option>
                                        <option value="Mumbra">Mumbra</option>
                                        <option value="Mumbai Central">Mumbai Central</option>
                                        <option value="Nerul">Nerul</option>
                                        <option value="Panvel">Panvel</option>
                                        <option value="Prabhadevi">Prabhadevi</option>
                                        <option value="Santacruz">Santacruz</option>
                                        <option value="Sion">Sion</option>
                                        <option value="Thane City">Thane City</option>
                                        <option value="Ulwe">Ulwe</option>
                                        <option value="Vasai">Vasai</option>
                                        <option value="Vashi">Vashi</option>
                                        <option value="Vidyavihar">Vidyavihar</option>
                                        <option value="Vikhroli">Vikhroli</option>
                                        <option value="Virar">Virar</option>

                                        <option value="Other / Not Listed">Other / Not Listed</option>
                                    </select>

                                </div>

                                <div class="col-md-6 mb-3">
                                    <select name="how_long" required class="w-100">
                                        <option value="" disabled selected>How Long</option>
                                        <option value="Not Decided Yet">Not Decided Yet</option>
                                        <option value="7days">7 Days</option>
                                        <option value="15days">15 Days</option>
                                        <option value="30days">30 Days</option>
                                        <option value="90days">3 Months</option>
                                    </select>
                                </div>
                                <div class="col-12 text-center">
                                    <input class="btn" type="submit" value="Subscribe Now">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="loadingSpinner" style="display:none; text-align:center;">
        <img src="https://i.gifer.com/ZZ5H.gif" alt="Loading..." width="60">
        <p>Submitting...</p>
    </div>
    <!-- Shop Page Section ending here -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- footer section start here -->
    <?php require_once('footer.php'); ?>
    <!-- footer section start here -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="assets/js/jquery.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $(document).ready(function () {
            // Target the element using its class or ID
            $('.location-select').select2({
                width: '100%',
                placeholder: "Select a Location", // Optional: Add a placeholder
                allowClear: true // Optional: Allow the user to clear the selection
            });
        });

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

        });

    </script>
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
    <!--<script src="assets/js/popup.js"></script>-->
    <script src="assets/js/subscription-form-submission.js"></script>
    
</body>

</html>