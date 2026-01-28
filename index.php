<!DOCTYPE html>
<html lang="en">

<head>
    <title>HappyCows – Ahimsa A2 Milk</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- SEO Meta -->
    <meta name="description"
        content="HappyCows provides 100% pure Ahimsa A2 milk from protected cows, cared for with love and devotion. No artificial insemination, no slaughter — only compassion.">
    <meta name="keywords" content="HappyCows, Ahimsa Milk, A2 Milk, ISKCON, Cow Protection, Dairy Farm, Organic Milk">
    <meta name="author" content="HappyCows Team">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="assets/images/logo/02.png">
    <link rel="apple-touch-icon" href="assets/images/logo/02.png">

    <link href="https://fonts.googleapis.com/css?family=Frank+Ruhl+Libre:300,400,500,700,900&display=swap"
        rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Satisfy&display=swap" rel="stylesheet">


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
        .slider-section img {
    cursor: pointer;
}
        /* Fix carousel arrows position */
        .slider-section .carousel {
            position: relative;
        }

        .slider-section .carousel-control {
            position: absolute;
            top: 50%;
            bottom: auto;
            transform: translateY(-50%);
            width: 50px;
            opacity: 1;
        }

        .slider-section .carousel-control.left {
            left: 10px;
        }

        .slider-section .carousel-control.right {
            right: 10px;
        }

        /* Make sure icons are visible */
        .slider-section .carousel-control i {
            font-size: 40px;
            color: #fff;
        }
        /* Our Farm – mobile image fix */
        @media (max-width: 767px) {
            .blog .post-thumb img {
                width: 100%;
                height: 220px;           /* same height for all */
                object-fit: cover;       /* crop nicely, no stretch */
                border-radius: 8px;      /* optional, looks clean */
            }

            /* Remove uneven spacing */
            .blog-right .post-item,
            .blog-left .post-item {
                margin-bottom: 15px;
            }
        }

    </style>


    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script> -->
</head>

<body>
    <?php include 'popup.php'; ?>
    <div class="search-area">
        <div class="search-input">
            <div class="search-close">
                <span></span>
                <span></span>
            </div>
            <form>
                <input type="text" name="text" placeholder="*Search Here">
            </form>
        </div>
    </div>
    <div class="mobile-menu">
        <nav class="mobile-header primary-menu d-lg-none">
            <div class="header-logo">
                <a href="index.php" class="logo"><img src="assets/images/logo/02.png" alt="logo"></a>
            </div>
            <div class="header-bar" id="open-button">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </nav>
        <nav class="menu">
            <div class="mobile-menu-area d-lg-none">
                <div class="mobile-menu-area-inner" id="scrollbar">
                    <ul class="m-menu">

                        <li><a href="index.php">Home</a></li>
                        <li><a href="about.php">About us</a></li>
                        <li><a href="faq.php">FAQ</a></li>
                        <li><a href="products.php">Our Products</a></li>
                        <li><a href="subscribe.php">Subscribe</a></li>
                        <li><a href="contact.php">Contact us</a></li>
                    </ul>
                    <ul class="social-link-list d-flex flex-wrap">
                        <li><a href="https://apple.co/3qKeMP7"
                                class="apple d-flex justify-content-center align-items-center"><i
                                    class="fab fa-apple"></i></a></li>
                        <li><a href="https://play.google.com/store/apps/details?id=com.happycowsmilk"
                                class="google-play d-flex justify-content-center align-items-center"><i
                                    class="fab fa-google-play"></i></a></li>
                        <li><a href="https://www.instagram.com/happycowsa2milk?igsh=MWx1aXQzNGRqdDRxYw=="
                                class="instagram d-flex justify-content-center align-items-center"><i
                                    class="fab fa-instagram"></i></a></li>
                        <li><a href="https://www.instagram.com/happycowsa2milk?igsh=MWx1aXQzNGRqdDRxYw=="
                                class="facebook d-flex justify-content-center align-items-center"><i
                                    class="fab fa-facebook"></i></a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <!-- mobile-nav section ending here -->

    <!-- header section start here -->
    <header class="header-section d-none d-lg-block style-5">
        <div class="header-top">
            <div class="container">
                <div class="htop-area row">
                    <div class="htop-left">
                        <ul class="htop-information">
                            <li><i class="far fa-envelope"></i> info.happycows@gmail.com</li>
                            <li><i class="fas fa-phone-volume"></i> +91 92229 88818</li>
                            <li><i class="far fa-clock"></i> Mon - Fri 09:00 - 18:00</li>
                        </ul>
                    </div>
                    <div class="htop-right">
                        <ul class="d-flex justify-content-center align-items-center">
                            <li>
                                <a href="https://apple.co/3qKeMP7" target="_blank">
                                    <i class="fab fa-apple" style="font-size: 1.8em;"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://play.google.com/store/apps/details?id=com.happycowsmilk"
                                    target="_blank">
                                    <i class="fab fa-google-play" style="font-size: 1.5em;"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/happycowsa2milk?igsh=MWx1aXQzNGRqdDRxYw=="
                                    target="_blank">
                                    <i class="fab fa-instagram" style="font-size: 1.5em;"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/happycowsa2milk?igsh=MWx1aXQzNGRqdDRxYw=="
                                    target="_blank">
                                    <i class="fab fa-facebook" style="font-size: 1.5em;"></i>
                                </a>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-bottom transparent-bottom">
            <div class="container">
                <div class="row">
                    <nav class="primary-menu">
                        <div class="menu-area">
                            <div class="row justify-content-between align-items-center">
                                <a href="index.php" class="logo">
                                    <img src="assets/images/logo/02.png" alt="logo">
                                </a>
                                <div class="main-menu-area d-flex align-items-center">
                                    <ul class="main-menu d-flex align-items-center">

                                        <li><a href="index.php"><B>Home</B></a></li>
                                        <li><a href="about.php"><B>About us</B></a></li>
                                        <li><a href="faq.php"><B>FAQ</B></a></li>
                                        <li><a href="products.php"><B>Our Products</B></a></li>
                                        <li><a href="subscribe.php"><B>Subscribe</B></a></li>
                                        <li><a href="contact.php"><B>Contact us</B></a></li>
                                    </ul>

                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- header section ending here -->

    <!-- banner section start here -->
   <section class="slider-section banner style-1">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner" role="listbox">

            <div class="carousel-item active">
                <a href="subscribe.php">
                    <img src="assets/images/banner/03.jpg" alt="Slider One Image">
                </a>
            </div>

            <div class="carousel-item">
                <a href="subscribe.php">
                    <img src="assets/images/banner/002.jpg" alt="Slider One Image">
                </a>
            </div>

        </div>

        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <i class="fa fa-angle-left" aria-hidden="true"></i>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <i class="fa fa-angle-right" aria-hidden="true"></i>
        </a>
    </div>
</section>


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
                                    <input type="text" class="w-100" name="fullname" id="fullname"
                                        placeholder="Full Name" required>
                                </div>

                                <div class="col-md-12 mb-3">
                                    <input type="tel" class="w-100" name="phone" id="phone" placeholder="Phone Number"
                                        required>
                                </div>

                                <div class="col-md-12 mb-3">
                                    <textarea name="address" id="address" class="w-100" rows="3" placeholder="Address"
                                        required></textarea>
                                </div>

                                <div class="col-md-12 mb-3">
                                    <input type="number" class="w-100" name="pincode" id="pincode"
                                        placeholder="Pin Code" required>
                                </div>

                                <div class="col-md-6 mb-3">
                                    <select name="how_much" id="how_much" required class="w-100">
                                        <option value="" disabled selected>How Much</option>
                                        <option value="500ml">500 ml</option>
                                        <option value="1litre">1 Litre</option>
                                        <option value="2litre">2 Litres</option>
                                        <option value="5litre">5 Litres</option>
                                        <option value="other">Other</option>
                                    </select>
                                </div>

                                <div class="col-md-6 mb-3">
                                    <select name="how_often" id="how_often" required class="w-100">
                                        <option value="" disabled selected>How Often</option>
                                        <option value="daily">Daily</option>
                                        <option value="alternate">Alternate Days</option>
                                        <option value="weekly">Weekly</option>
                                    </select>
                                </div>

                                <div class="col-md-6 mb-3">
                                    <select name="location" id="location" class="location-select" required class="w-100">
                                        <option value="" disabled selected>Choose Location</option>
                                        <option value="colaba">Colaba</option>
                                        <option value="fort">Fort</option>
                                        <option value="marine_lines">Marine Lines</option>
                                        <option value="charni_road">Charni Road</option>
                                        <option value="grant_road">Grant Road</option>
                                        <option value="mumbai_central">Mumbai Central</option>
                                        <option value="byculla">Byculla</option>
                                        <option value="dadar">Dadar</option>
                                        <option value="prabhadevi">Prabhadevi</option>
                                        <option value="lower_parel">Lower Parel</option>
                                        <option value="bandra">Bandra</option>
                                        <option value="khar">Khar</option>
                                        <option value="santacruz">Santacruz</option>
                                        <option value="vile_parle">Vile Parle</option>
                                        <option value="andheri">Andheri</option>
                                        <option value="jogeshwari">Jogeshwari</option>
                                        <option value="goregaon">Goregaon</option>
                                        <option value="malad">Malad</option>
                                        <option value="kandivali">Kandivali</option>
                                        <option value="borivali">Borivali</option>
                                        <option value="dahisar">Dahisar</option>
                                        <option value="mira_road">Mira Road</option>
                                        <option value="bhayandar">Bhayandar</option>
                                        <option value="vasai">Vasai</option>
                                        <option value="virar">Virar</option>
                                        <option value="sion">Sion</option>
                                        <option value="kurla">Kurla</option>
                                        <option value="vidyavihar">Vidyavihar</option>
                                        <option value="ghatkopar">Ghatkopar</option>
                                        <option value="vikhroli">Vikhroli</option>
                                        <option value="kanjurmarg">Kanjurmarg</option>
                                        <option value="bhandup">Bhandup</option>
                                        <option value="mulund">Mulund</option>
                                        <option value="chembur">Chembur</option>
                                        <option value="govandi">Govandi</option>
                                        <option value="mankhurd">Mankhurd</option>
                                        <option value="thane_city">Thane City (General)</option>
                                        <option value="kalwa">Kalwa</option>
                                        <option value="mumbra">Mumbra</option>
                                        <option value="kalyan">Kalyan</option>
                                        <option value="dombivli">Dombivli</option>
                                        <option value="ambarnath">Ambernath</option>
                                        <option value="badlapur">Badlapur</option>
                                        <option value="bhiwandi">Bhiwandi</option>
                                        <option value="vashi">Vashi</option>
                                        <option value="belapur">Belapur</option>
                                        <option value="nerul">Nerul</option>
                                        <option value="kharghar">Kharghar</option>
                                        <option value="panvel">Panvel</option>
                                        <option value="airoli">Airoli</option>
                                        <option value="koparkhairane">Koparkhairane</option>
                                        <option value="ulwe">Ulwe</option>
                                        <option value="dronagiri">Dronagiri</option>
                                        <option value="other">Other / Not Listed</option>
                                    </select>
                                </div>

                                <div class="col-md-6 mb-3">
                                    <select name="how_long" id="how_long" required class="w-100">
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

    <!-- about section start here -->
    <section class="about style-2 ">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-left wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".1s">
                        <div class="section-header wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
                            <h2>About us</h2>
                            <h2><span>Welcome to Our Happy Cows</span></h2>
                            <p class="text-justify">Happy Cows is a premium dairy brand committed to delivering pure,
                                natural, and nutritious milk products. Our cows are free-grazing and cruelty-free,
                                raised in lush green pastures to ensure the highest quality of milk. From fresh milk to
                                ghee, paneer, and yogurt, all our products are 100% natural, chemical-free, and packed
                                with essential nutrients. We follow sustainable farming practices and maintain strict
                                hygiene in daily collection and processing, ensuring that every product reaches your
                                home fresh and wholesome. At Happy Cows, we believe in promoting healthy living, happy
                                animals, and satisfied customers, bringing you the true taste of nature in every glass.
                            </p>
                        </div>
                        <div class="section-wrapper wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".5s">
                            <ul>
                                <li><i class="far fa-check-square"></i>We deliver fresh Desi cow milk daily with free
                                    delivery.
                                </li>
                                <li><i class="far fa-check-square"></i>We are providing different services</li>
                                <li><i class="far fa-check-square"></i>We are one of leading company</li>
                            </ul>
                            <a href="about.php" class="btn wow fadeInUp" data-wow-duration="1s"
                                data-wow-delay=".7s">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-right wow fadeInRight" data-wow-duration="1s" data-wow-delay=".1s">
                        <div class="video-post text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay=".1s">
                            <div class="">
                                <img src="assets/images/video/01.jpg" alt="video-post">
                                <!-- <a href="https://www.youtube.com/embed/cZh0nsrkHh8" class="video-icon"
                            data-rel="lightcase">
                            <i class="far fa-play-circle"></i>
                        </a> -->
                            </div>
                        </div>
                        <div class="experience-part">
                            <div class="post-item wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
                                <div class="post-inner">
                                    <div class="post-thumb">
                                        <img src="assets/images/about/exp/01.png" alt="about-exp">
                                    </div>
                                    <div class="post-content">
                                        <h5>20 Years of Experience</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="post-item wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">
                                <div class="post-inner">
                                    <div class="post-thumb">
                                        <img src="assets/images/about/exp/02.png" alt="about-exp">
                                    </div>
                                    <div class="post-content">
                                        <h5>Natural & Organic</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="post-item wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">
                                <div class="post-inner">
                                    <div class="post-thumb">
                                        <img src="assets/images/about/exp/03.png" alt="about-exp">
                                    </div>
                                    <div class="post-content">
                                        <h5>5000+ Customers</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="post-item wow fadeInUp" data-wow-duration="1s" data-wow-delay=".6s">
                                <div class="post-inner">
                                    <div class="post-thumb">
                                        <img src="assets/images/about/exp/04.png" alt="about-exp">
                                    </div>
                                    <div class="post-content">
                                        <h5>20+ <br> Service Areas</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about section ending here -->


    <!-- blog section start here -->
    <section class="blog style-2 padding-tb">
        <div class="container">
            <div class="row">
                <div class="section-header w-100 wow fadeInDown" data-wow-duration="1s" data-wow-delay=".1s">
                    <h2>Our Farm</h2>
                    <h2><span>Best Milk Recipe You have Ever seen</span></h2>
                    <p>Continually productize compelling quality for packed with Elated
                        Themes Setting up to website and it crating pages .</p>
                </div>
                <div class="section-wrapper row no-gutters justify-content-center">
                    <div class="col-lg-5">
                        <div class="blog-left wow fadeInUp" data-wow-duration="1s" data-wow-delay=".1s">
                            <div class="post-item">
                                <div class="post-inner">
                                    <div class="post-thumb">
                                        <img src="assets/images/blog/03.jpg" alt="blog">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="blog-right">
                            <div class="post-item wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
                                <div class="post-inner">
                                    <div class="post-thumb">
                                        <img src="assets/images/blog/04.jpg" alt="blog">
                                    </div>
                                </div>
                            </div>
                            <div class="post-item wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
                                <div class="post-inner">
                                    <div class="post-thumb">
                                        <img src="assets/images/blog/05.jpg" alt="blog">
                                    </div>
                                </div>
                            </div>
                            <div class="post-item wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">
                                <div class="post-inner">
                                    <div class="post-thumb">
                                        <img src="assets/images/blog/06.jpg" alt="blog">
                                    </div>
                                </div>
                            </div>
                            <div class="post-item wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">
                                <div class="post-inner">
                                    <div class="post-thumb">
                                        <img src="assets/images/blog/07.jpg" alt="blog">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- blog section ending here -->
    <!-- Include Bootstrap CSS and JS if not already added -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script> -->


    <!-- testimonial section start here -->
    <section class="testimonial padding-tb bg-image-4">
        <div class="container">
            <div class="section-wrapper">
                <div class="testimonial-slider">
                    <div class="swiper-wrapper wow fadeInUp" data-wow-duration="2s" data-wow-delay=".1s">
                        <div class="swiper-slide">
                            <div class="testi-item">
                                <div class="testi-content">
                                    <div class="testimonial-author">
                                        <div class="author-thumb">
                                            <img src="assets/images/logo/02.png" alt="testimonial">
                                        </div>
                                        <div class="author-name-des">
                                            <h4>Anita Sharma</h4>
                                            <p>Posted on September 12, 2025 at 8:45 am</p>
                                        </div>
                                    </div>
                                    <p><span>I recently switched to Happy Cows Desi Cow Milk and I can actually feel the
                                            difference in taste and freshness! It reminds me of the milk we used to get
                                            back in our village. My kids love it too — very creamy and pure. Totally
                                            worth the price and perfect for tea or drinking directly.</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testi-item">
                                <div class="testi-content">
                                    <div class="testimonial-author">
                                        <div class="author-thumb">
                                            <img src="assets/images/logo/02.png" alt="testimonial">
                                        </div>
                                        <div class="author-name-des">
                                            <h4>Rahul Verma</h4>
                                            <p>Posted on August 20, 2025 at 9:10 pm</p>
                                        </div>
                                    </div>
                                    <p><span>This Ayur Nasal Ghee is truly amazing! I’ve been using two drops every
                                            night before sleeping and my sinuses have improved drastically. Breathing
                                            feels lighter and I wake up more fresh. You can tell it’s made from pure
                                            desi cow ghee. Highly recommend for those dealing with dryness or
                                            pollution-related issues.</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testi-item">
                                <div class="testi-content">
                                    <div class="testimonial-author">
                                        <div class="author-thumb">
                                            <img src="assets/images/logo/02.png" alt="testimonial">
                                        </div>
                                        <div class="author-name-des">
                                            <h4>Priya Nair</h4>
                                            <p>Posted on July 05, 2025 at 11:30 am</p>
                                        </div>
                                    </div>
                                    <p><span>I started using Happy Cows Gaunyle instead of chemical floor cleaners and
                                            it’s fantastic! The fragrance is natural, no headache or harsh smell. It
                                            cleans really well and gives a peaceful feeling at home. Plus, it’s safe for
                                            my baby and our pet dog. I’m so glad such eco-friendly options are available
                                            in India now.</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testi-item">
                                <div class="testi-content">
                                    <div class="testimonial-author">
                                        <div class="author-thumb">
                                            <img src="assets/images/logo/02.png" alt="testimonial">
                                        </div>
                                        <div class="author-name-des">
                                            <h4>Sanjay Mehta</h4>
                                            <p>Posted on October 01, 2025 at 6:57 am</p>
                                        </div>
                                    </div>
                                    <p><span>This Dant Manjan took me back to childhood! I’ve stopped using toothpaste
                                            completely — gums feel stronger and mouth stays fresh for hours. It has a
                                            mild clove and neem taste and feels totally natural. Even my dentist
                                            appreciated the herbal ingredients. Great job by Happy Cows for reviving our
                                            traditional formulas.</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testi-item">
                                <div class="testi-content">
                                    <div class="testimonial-author">
                                        <div class="author-thumb">
                                            <img src="assets/images/logo/02.png" alt="testimonial">
                                        </div>
                                        <div class="author-name-des">
                                            <h4>Meena Reddy</h4>
                                            <p>Posted on September 14, 2025 at 5:40 pm</p>
                                        </div>
                                    </div>
                                    <p><span>The Dhoop sticks are really big and long-lasting. I use them daily during
                                            pooja and the fragrance fills my entire home with calm energy. It smells
                                            pure and natural, not artificial like market dhoop. Perfect for temples and
                                            meditation rooms. Absolutely love supporting such authentic, desi
                                            products!</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-pagination"></div>
                    <div class="testimonial-button-prev"><i class="fas fa-chevron-left"></i></div>
                    <div class="testimonial-button-next"><i class="fas fa-chevron-right"></i></div>
                </div>
            </div>
        </div>
    </section>
    <!-- testimonial section ending here -->
    <section class="blog style-2 faq-section padding-top" style="width:100%;">
        <div class="container-fluid px-4"> <!-- full width -->
            <div class="">
                <div class="section-header w-100 wow fadeInDown" data-wow-duration="1s" data-wow-delay=".1s">
                    <h2>FAQ</h2>
                    <h2><span>Frequently Asked Questions</span></h2>
                    <p>Find answers to common questions about our Happy Cows products and natural dairy process.</p>
                </div>

                <div class="section-wrapper row justify-content-center">
                    <div class="col-lg-10 col-md-11 col-sm-12">
                        <div class="faq-wrapper">

                            <div class="faq-item wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
                                <div class="faq-question">1. Difference between A1 and A2 type milk?</div>
                                <div class="faq-answer">
                                    <p>Casein is the largest group of proteins in milk, making up about 80% of total
                                        protein content. Beta-casein is the second most common type.</p>
                                    <p>The two most common forms are A1 beta-casein and A2 beta-casein:</p>
                                    <ul>
                                        <li>Milk from **foreign breeds** (Jersey and Holstein Friesian) contain **A1
                                            protein**.</li>
                                        <li>Milk from **Indian cow breeds** contain **A2 protein**. Happy Cows Milk is
                                            A2 milk.</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="faq-item wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
                                <div class="faq-question">2. What makes Happy Cows milk special?</div>
                                <div class="faq-answer">Our milk comes from free-grazing, cruelty-free cows, ensuring
                                    purity and natural nutrition in every drop.
                                </div>
                            </div>
                            <div class="faq-item wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">
                                <div class="faq-question">3. Harmful effects of A1 milk?</div>
                                <div class="faq-answer">
                                    <p>The presence of an amino acid called **BCM 7** makes A1 milk potentially harmful
                                        for consumption. Few reported effects include:</p>
                                    <ul>
                                        <li>Type-1 diabetes</li>
                                        <li>Cardiovascular disease (IHD)</li>
                                        <li>Delayed psychomotor development among children, autism, schizophrenia,
                                            sudden infant death syndrome (SIDS)</li>
                                        <li>Auto-immune diseases, intolerances and allergies.</li>
                                        <li>Higher risk for those with digestive disorders like stomach ulcers,
                                            ulcerative colitis, Crohn’s disease, Celiac disease, or those on long-term
                                            medication/antibiotic treatment.</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="faq-item wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">
                                <div class="faq-question">4. Benefits of A2 type of milk?</div>
                                <div class="faq-answer">
                                    <ul>
                                        <li>Prevent obesity among children and adults</li>
                                        <li>Improve brain function</li>
                                        <li>Promotes digestion</li>
                                        <li>Increase breast milk production in feeding mothers.</li>
                                        <li>Prevents joint pain, asthma and mental problems.</li>
                                        <li>Promotes good kidney health</li>
                                        <li>Increases immunity</li>
                                        <li>Reduces acidity</li>
                                        <li>Helps in reducing chances of colon, breast and skin cancer</li>
                                        <li>One of the best natural anti-oxidants</li>
                                        <li>Detoxifies Body, Enhances Memory Power, Increases clarity of Voice</li>
                                        <li>Helps in reduction against PMS symptoms in the menstruation cycle</li>
                                        <li>Prevents migraine headache, Good for thyroid</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="faq-item wow fadeInUp" data-wow-duration="1s" data-wow-delay=".6s">
                                <div class="faq-question">5. Comparison of Indigenous Indian Cows (A2) and Foreign Cows
                                    (A1)?</div>
                                <div class="faq-answer">
                                    <h3>Foreign Breed Cows (Jersey and Holstein Friesian - A1):</h3>
                                    <ul>
                                        <li>Milk contains a poisonous chemical called Casomorphine.</li>
                                        <li>Lesser and smaller sweat glands, not suitable for tropical climates like
                                            India.</li>
                                        <li>Higher maintenance cost and more prone to diseases.</li>
                                        <li>Give A1 type of milk and carry more pathogens.</li>
                                        <li>Lazy in nature and not suitable for hard work.</li>
                                    </ul>
                                    <h3>Indigenous Indian Cow Breeds (A2):</h3>
                                    <ul>
                                        <li>Intelligent and prefer clean areas, avoiding diseases.</li>
                                        <li>Maintenance cost is less; they eat limited fodder and respond to local
                                            Indian medicines.</li>
                                        <li>Can survive food shortages and rarely suffer from long-term diseases.</li>
                                    </ul>
                                </div>
                            </div>
                            <br /><br />
                            <center>
                                <a href="faq.php" class="btn wow fadeInUp" data-wow-duration="1s"
                                    data-wow-delay=".7s">View All FAQ</a>
                            </center>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div id="loadingSpinner" style="display:none; text-align:center;">
        <img src="https://i.gifer.com/ZZ5H.gif" alt="Loading..." width="60">
        <p>Submitting...</p>
    </div>

    <!-- sponsor section start here -->
    <!--<div class="sponsor padding-sponsor-top padding-bottom">
<div class="container">
    <div class="section-wrapper">
        <div class="sponsor-slider">
            <div class="swiper-wrapper wow fadeInUp" data-wow-duration="1s" data-wow-delay=".1s">
                <div class="swiper-slide">
                    <div class="sponsor-thumb">
                        <a href="#"><img src="assets/images/sponsor/01.png" alt="sponsor"></a>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="sponsor-thumb">
                        <a href="#"><img src="assets/images/sponsor/02.png" alt="sponsor"></a>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="sponsor-thumb">
                        <a href="#"><img src="assets/images/sponsor/03.png" alt="sponsor"></a>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="sponsor-thumb">
                        <a href="#"><img src="assets/images/sponsor/04.png" alt="sponsor"></a>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="sponsor-thumb">
                        <a href="#"><img src="assets/images/sponsor/05.png" alt="sponsor"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>-->
    <!-- sponsor section ending here -->
    <br /><br /><br />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- footer section start here -->
    <?php require_once('footer.php'); ?>
    <!-- footer section start here -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script src="assets/js/jquery.js"></script>
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
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
    <script src="assets/js/subscription-form-submission.js"></script>
    <script>
        $(document).ready(function () {
            // Target the element using its class or ID
            $('.location-select').select2({
                width: '100%',
                placeholder: "Select a Location", // Optional: Add a placeholder
                allowClear: true // Optional: Allow the user to clear the selection
            });
        });
    </script>
    <script>
        $("#service").click(function () {
            $('#service').val("4");
        });
    </script>
    <script>
        document.querySelectorAll('.faq-question').forEach(q => {
            q.addEventListener('click', () => {
                q.classList.toggle('active');
                const answer = q.nextElementSibling;
                if (answer.style.maxHeight) {
                    answer.style.maxHeight = null;
                } else {
                    answer.style.maxHeight = answer.scrollHeight + "px";
                }
            });
        });
    </script>

    <script>
        $(document).ready(function () {

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