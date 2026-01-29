<style>
    /* Custom styles for the app badges and layout */
    .app-links {
        display: flex;
        flex-wrap: wrap;
        gap: 10px;
        margin-top: 15px;
    }

    .app-badge-img {
        width: 160px; /* Fixed width for better control */
        height: auto;
        border-radius: 5px;
        transition: transform 0.2s;
    }

    .app-badge-img:hover {
        transform: scale(1.05);
    }

    .social-link-list {
        list-style: none;
        padding: 0;
        margin-top: 20px;
    }

    .social-link-list li {
        margin-right: 10px;
    }

    /* Mobile specific adjustments */
    @media (max-width: 767px) {
        .footer-top {
            text-align: center;
        }
        .footer-location li {
            justify-content: center;
        }
        .app-links {
            justify-content: center;
        }
        .social-link-list {
            justify-content: center;
        }
        .post-item {
            margin-bottom: 30px;
        }
    }
</style>

<footer>
    <div class="footer-top">
        <div class="container">
            <div class="section-wrapper row">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".1s">
                    <div class="post-item">
                        <a href="#" class="footer-logo">
                            <img src="assets/images/footer/footer-logo2.png" alt="footer-logo" style="max-width: 180px; margin-bottom: 15px;">
                        </a>
                        <p>Continually deliver high-quality, fresh, and natural dairy products while enriching the Happy Cows experience.</p>
                        <ul class="footer-location" style="list-style: none; padding: 0;">
                            <li class="d-flex align-items-center mb-2">
                                <div class="icon-part me-2">
                                    <img src="https://e7.pngegg.com/pngimages/333/237/png-clipart-food-safety-and-standards-authority-of-india-logo-india-food-text-thumbnail.png" alt="FSSAI" style="width:22px; height:auto;">
                                </div>
                                <div class="content-part">
                                    <p class="mb-0">FSSAI Licence No: 12345678901234</p>
                                </div>
                            </li>
                            <li class="d-flex align-items-center mb-2">
                                <div class="icon-part me-2"><i class="fas fa-phone-volume"></i></div>
                                <div class="content-part"><p class="mb-0">+91 92229 88818</p></div>
                            </li>
                            <li class="d-flex align-items-center mb-2">
                                <div class="icon-part me-2"><i class="fas fa-clock"></i></div>
                                <div class="content-part">
                                    <p class="mb-0">Mon - Fri 09:00 - 18:00</p>
                                    <p class="mb-0" style="font-size: 0.9em; opacity: 0.8;">(except public holidays)</p>
                                </div>
                            </li>
                            <li class="d-flex align-items-start mb-2">
                                <div class="icon-part me-2"><i class="fas fa-map-marker-alt"></i></div>
                                <div class="content-part">
                                    <p class="mb-0">Hrishikesh Amrutalaya Pvt Ltd. B-111, Nikisha Industrial Estate, Mira Road (East), Mumbai 401107</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-2 col-md-6 col-6 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
                    <div class="post-item">
                        <div class="post-title"><h4>Quick Links</h4></div>
                        <ul class="quick-links-list" style="list-style: none; padding: 0;">
                            <li><a href="about.php">About Us</a></li>
                            <li><a href="products.php">All Products</a></li>
                            <li><a href="contact.php">Contact Us</a></li>
                            <li><a href="faq.php">FAQs</a></li>
                            <li><a href="subscribe.php">Subscribe</a></li>
                            <li><a href="terms-and-conditions.php">Terms & Conditions</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-2 col-md-6 col-6 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
                    <div class="post-item">
                        <div class="post-title"><h4>Our Policy</h4></div>
                        <ul class="quick-links-list" style="list-style: none; padding: 0;">
                            <li><a href="#">Become a Distributor</a></li>
                            <li><a href="#">Become a Delivery Associate</a></li>
                            <li><a href="#">Refer & Earn</a></li>
                        </ul>
                        <ul class="social-link-list d-flex">
                            <li><a href="https://www.instagram.com/happycowsa2milk?igsh=MWx1aXQzNGRqdDRxYw==" class="instagram"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="https://play.google.com/store/apps/details?id=com.happycowsmilk" class="google-play"><i class="fab fa-google-play"></i></a></li>
                            <li><a href="https://apple.co/3qKeMP7" class="apple"><i class="fab fa-apple"></i></a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
                    <div class="post-item">
                        <div class="post-title">
                            <h3>We Also Have Apps! 📱</h3>
                        </div>
                        <p>Order fresh products and manage your account on the go.</p>
                        <div class="app-links">
                            <a href="https://apple.co/3qKeMP7" target="_blank">
                                <img src="assets/images/app-store-badge.png" alt="App Store" class="app-badge-img">
                            </a>
                            <a href="https://play.google.com/store/apps/details?id=com.happycowsmilk" target="_blank">
                                <img src="assets/images/play-store-badge.png" alt="Google Play" class="app-badge-img">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom border-top mt-4 pt-3">
        <div class="container text-center">
            <p>&copy; 2026 <a href="index.php">Happy Cows</a>. All Rights Reserved</p>
        </div>
    </div>
</footer>

<div class="contact-buttons-left">
    <div class="phone">
        <a href="tel:919222988818" target="_blank" title="Call Happy Cows">
            <img src="assets/images/phone.gif" alt="Call Happy Cows">
        </a>
    </div>

    <div class="whatsapp">
        <a href="https://api.whatsapp.com/send?phone=919222988818&text=Hello%20Happy%20Cows!%20I’d%20like%20to%20know%20more%20about%20your%20products."
           target="_blank" title="Chat on WhatsApp">
            <img src="assets/images/wpg.gif" alt="WhatsApp Happy Cows">
        </a>
    </div>
</div>