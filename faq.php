<!DOCTYPE html>
<html lang="zxx">

<head>

    <head>
        <title>HappyCows – FAQ</title>
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
    </head>

<body>
    <?php require_once('nav.php'); ?>
    <?php require_once('popup.php'); ?>

    <!-- page header section ending here -->
    <section class="page-header padding-tb page-header-bg-1">
        <div class="container">
            <div class="page-header-item d-flex align-items-center justify-content-center">
                <div class="post-content">
                    <h3>Happy Cows FAQ</h3>
                    <div class="breadcamp">
                        <ul class="d-flex flex-wrap justify-content-center align-items-center">
                            <li><a href="index.php">Home</a></li>
                            <li><a class="active">FAQ</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- page header section ending here -->

    <!-- testimonial section ending here -->
    <section class="blog style-2 faq-section padding-top" style="width:100%;">
        <div class="container-fluid px-4"> <!-- full width -->
            <div class="">
                <!--<div class="section-header w-100 wow fadeInDown" data-wow-duration="1s" data-wow-delay=".1s">
                    <h2>FAQ</h2>
                    <h2><span>Frequently Asked Questions</span></h2>
                    <p>Find answers to common questions about our Happy Cows products and natural dairy process.</p>
                </div>-->

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

                            <div class="faq-item wow fadeInUp" data-wow-duration="1s" data-wow-delay=".7s">
                                <div class="faq-question">6. What is meant by SNF value and Fat content?</div>
                                <div class="faq-answer">
                                    <ul>
                                        <li><strong>Milk SNF (Solids-Not-Fat):</strong> Comprises protein,
                                            carbohydrates, vitamins, minerals, etc., in milk other than milk fat. This
                                            is where the nutrition comes from.</li>
                                        <li><strong>“Whole milk”:</strong> Natural composition of milk without any
                                            processing.</li>
                                        <li><strong>“Homogenized” milk:</strong> Refers to milk which is 3.25% butterfat
                                            (or milk fat).</li>
                                        <li>Milk quality should ideally be based on SNF.</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="faq-item wow fadeInUp" data-wow-duration="1s" data-wow-delay=".8s">
                                <div class="faq-question">7. Why prefer cow milk over buffalo milk for urban
                                    consumption?</div>
                                <div class="faq-answer">
                                    <ul>
                                        <li>Buffalo milk has higher fat content (7.5) compared to cow milk (4.3).</li>
                                        <li>Cow milk contains saturated fat (SF) 55-58%.</li>
                                        <li>The melting point of cow milk SF is **37 degrees** (close to human body
                                            temperature of 37.2 degrees), making it easily digestible, unlike buffalo
                                            milk SF (40 degrees).</li>
                                        <li>Cow milk is suitable for all, infants and adults alike.</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="faq-item wow fadeInUp" data-wow-duration="1s" data-wow-delay=".9s">
                                <div class="faq-question">8. Why is Cow milk yellowish in color?</div>
                                <div class="faq-answer">
                                    <p>Cow milk fat contains a coloring pigment called **Beta-carotene** (a carotenoid
                                        which is a precursor of vitamin-A). Buffalo milk lacks this pigment, thus it is
                                        white, not yellowish.</p>
                                </div>
                            </div>

                            <div class="faq-item wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.0s">
                                <div class="faq-question">9. What is Pasteurized Milk?</div>
                                <div class="faq-answer">
                                    <p>Pasteurization is a method to control bacterial activity where milk is first
                                        boiled to a certain temperature and then rapidly cooled. Happy Cows milk is
                                        **minimally pasteurized** to ensure safety.</p>
                                </div>
                            </div>

                            <div class="faq-item wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.1s">
                                <div class="faq-question">10. What is Homogenised Milk?</div>
                                <div class="faq-answer">
                                    <p>Homogenization uses high heat, agitation, and filtration to break down and mix
                                        fat molecules, which can alter how they act in the body and is believed to pose
                                        a threat to heart health. Happy Cows milk is **non-homogenized**.</p>
                                </div>
                            </div>

                            <div class="faq-item wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.2s">
                                <div class="faq-question">11. What is Toned Milk?</div>
                                <div class="faq-answer">
                                    <p>Toned milk (developed in India) involves treating buffalo milk by adding skim
                                        milk, powdered skim milk, and water to decrease fat and reduce cost. Happy Cows
                                        milk is **non-toned**.</p>
                                </div>
                            </div>

                            <div class="faq-item wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.3s">
                                <div class="faq-question">12. What is Whole Milk?</div>
                                <div class="faq-answer">
                                    <p>Milk containing all its constituents as received from the cow, with no
                                        unsaturated fats or essential minerals removed. Happy Cows milk is **Whole
                                        Milk**.</p>
                                </div>
                            </div>

                            <div class="faq-item wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.4s">
                                <div class="faq-question">13. What are Gir cows? (All Indian cows have similar basic
                                    traits)</div>
                                <div class="faq-answer">
                                    <p>The Gir is a famous Indian milk cattle breed native to the Gir hills and forests
                                        of Kathiawar, Gujarat. Key characteristics:</p>
                                    <ul>
                                        <li>Coat color varies from red/white to almost black/white.</li>
                                        <li>Forehead is prominent, convex, and broad, often overhanging the eyes (sloppy
                                            appearance).</li>
                                        <li>Ears are long, pendulous, and folded like a leaf.</li>
                                        <li>Udder in cows is well developed and round.</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="faq-item wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.5s">
                                <div class="faq-question">14. Uniqueness of Happy Cows milk?</div>
                                <div class="faq-answer">
                                    <ul>
                                        <li>First hygienically packaged Gir cow A2 milk in Mumbai.</li>
                                        <li>Whole milk, non-homogenized, non-toned, minimally pasteurized.</li>
                                        <li>Caring for cows as community members (cruelty-free, no adulteration, no
                                            injection, no hormone).</li>
                                        <li>Ahimsa process: service continues even after motherhood.</li>
                                        <li>Open grazing, nutritious fodder, natural insemination.</li>
                                        <li>Hygienic packaging and door step delivery (4 am-9 am).</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="faq-item wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.6s">
                                <div class="faq-question">15. Where does the milk come from?</div>
                                <div class="faq-answer">
                                    <p>Milk is collected from cowherds living in the Satara-Kamshet belt. It is then
                                        transported to the pasteurization and packaging unit at Manchar before leaving
                                        for Mumbai in insulated vans.</p>
                                </div>
                            </div>

                            <div class="faq-item wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.7s">
                                <div class="faq-question">16. What is the milk quality?</div>
                                <div class="faq-answer">
                                    <ul>
                                        <li>Supreme quality, fresh, mild sweet, light cream, medium thick, 0.5mm malai.
                                        </li>
                                        <li>No visible particles, no adverse smells; curd is pleasing sour.</li>
                                        <li>SNF range of 8.7-9.4 and Fat average 3.6-4.3.</li>
                                        <li>Which milk type is Happy Cows milk? **A2 type milk**.</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="faq-item wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.8s">
                                <div class="faq-question">17. How is the cow milked?</div>
                                <div class="faq-answer">
                                    <ul>
                                        <li>Calf gets the first right to drink.</li>
                                        <li>Cowherd hand milk's the cow (no use of machines).</li>
                                        <li>Hygiene is maintained by the cowherd throughout the process.</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="faq-item wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.9s">
                                <div class="faq-question">18. Do you use organic fodder?</div>
                                <div class="faq-answer">
                                    <ul>
                                        <li>Nutritional and pesticide residue testing confirms the milk is organic,
                                            chemical-free, and pure.</li>
                                        <li>Grazing grass is organic, growing under natural conditions.</li>
                                        <li>Cows are given a combination of green and dry fodder, sometimes including
                                            sugarcane for energy and mild sweetness in milk.</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="faq-item wow fadeInUp" data-wow-duration="1s" data-wow-delay="2.0s">
                                <div class="faq-question">19. How are dead/old/diseased/non-milking cows handled?</div>
                                <div class="faq-answer">
                                    <ul>
                                        <li><strong>Dead:</strong> Buried with respect.</li>
                                        <li><strong>Old:</strong> Taken to Gaushala for service.</li>
                                        <li><strong>Diseased:</strong> Treated safely (natural+allopathy); cow is not
                                            milked during treatment.</li>
                                        <li><strong>Non-milking:</strong> Kept at the farm till the next milking
                                            process.</li>
                                        <li>We follow the **Ahimsa** (protective) process of serving cows even after
                                            their motherhood.</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="faq-item wow fadeInUp" data-wow-duration="1s" data-wow-delay="2.1s">
                                <div class="faq-question">20. What is the importance of cow grazing?</div>
                                <div class="faq-answer">
                                    <p>Grazing allows cows to:</p>
                                    <ul>
                                        <li>Have a variety of grass with different medicinal qualities.</li>
                                        <li>Get direct contact with sunlight.</li>
                                        <li>Exercise.</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="faq-item wow fadeInUp" data-wow-duration="1s" data-wow-delay="2.2s">
                                <div class="faq-question">21. Duration of Happy Cow milk preservation?</div>
                                <div class="faq-answer">
                                    <p>24 hours if refrigerated under 4 degrees Celsius. It may last up to 48 hours, but
                                        we prioritize providing fresh cow milk.</p>
                                </div>
                            </div>

                            <div class="faq-item wow fadeInUp" data-wow-duration="1s" data-wow-delay="2.3s">
                                <div class="faq-question">22. Who takes care of the cows?</div>
                                <div class="faq-answer">
                                    <p>The **cowherd (Gowli-Maldhari) community** specializes in cow keeping. They care
                                        for the cow not as a commodity but as a core part of their community, ensuring a
                                        personal connection and purity of consciousness.</p>
                                </div>
                            </div>

                            <div class="faq-item wow fadeInUp" data-wow-duration="1s" data-wow-delay="2.4s">
                                <div class="faq-question">23. Why is the milk priced as it is?</div>
                                <div class="faq-answer">
                                    <p>The price reflects several factors:</p>
                                    <ul>
                                        <li>Free of any adulteration (Whole Milk).</li>
                                        <li>Fair-trade process (paying a premium to cowherds).</li>
                                        <li>Lower yield of Indian cows.</li>
                                        <li>Hygienic process and better cow keeping standards.</li>
                                    </ul>
                                    <p>Happy Cows Milk is fresh and economical at **Rs.74 per liter**.</p>
                                </div>
                            </div>

                            <div class="faq-item wow fadeInUp" data-wow-duration="1s" data-wow-delay="2.5s">
                                <div class="faq-question">24. Fat content and SNF value of Happy Cows?</div>
                                <div class="faq-answer">
                                    <p>SNF: 9.0-9.4 and Fat: 4.7-5.9.</p>
                                </div>
                            </div>

                            <div class="faq-item wow fadeInUp" data-wow-duration="1s" data-wow-delay="2.6s">
                                <div class="faq-question">25. Which type of packaging is used?</div>
                                <div class="faq-answer">
                                    <p>3- layer food grade **recyclable plastic pouch packaging**.</p>
                                    <p>Advantages: Low pouch weight, better for transportation and distribution, high
                                        durability, recyclable and low carbon footprint.</p>
                                </div>
                            </div>

                            <div class="faq-item wow fadeInUp" data-wow-duration="1s" data-wow-delay="2.7s">
                                <div class="faq-question">26. How do you assure consistency in quality?</div>
                                <div class="faq-answer">
                                    <ul>
                                        <li>Premium pricing (60% more than average) to ensure cowherds do not
                                            adulterate.</li>
                                        <li>Testing for SNF, FAT, and water using checking machines at the packaging
                                            unit.</li>
                                        <li>Adulteration testing with the Test-o-Milk kit.</li>
                                        <li>Daily cleaning of equipment, 3-layer food grade packaging, and
                                            transportation in insulated vans.</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="faq-item wow fadeInUp" data-wow-duration="1s" data-wow-delay="2.8s">
                                <div class="faq-question">27. What is the Billing Process?</div>
                                <div class="faq-answer">
                                    <ul>
                                        <li>Monthly postpaid (Online preferred or Cheque).</li>
                                        <li>Billing cycle is between the 10th-17th of every month.</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="faq-item wow fadeInUp" data-wow-duration="1s" data-wow-delay="2.9s">
                                <div class="faq-question">28. What is the Delivery process?</div>
                                <div class="faq-answer">
                                    <ul>
                                        <li>Delivery is done between **4 am-9 am**.</li>
                                        <li>Alterations received before 1 PM are considered to prevent milk wastage.
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="faq-item wow fadeInUp" data-wow-duration="1s" data-wow-delay="3.0s">
                                <div class="faq-question">29. How do I place an order, make alterations, or submit a
                                    query?</div>
                                <div class="faq-answer">
                                    <h3>Ordering:</h3>
                                    <p>Whatsapp or SMS on community care number **9222 9888 18**. Text content: Customer
                                        name, address, quantity alteration.</p>

                                    <h3>Alteration or changes in daily milk quantity:</h3>
                                    <p>Whatsapp or SMS on **9222 9888 18** before 1 PM. (Alterations post 1 PM will be
                                        charged the daily order rate to prevent milk wastage). Text content: Customer
                                        number_address_alteration quantity.</p>

                                    <h3>Query:</h3>
                                    <p>Community service: Whatsapp or SMS on **9222 9888 18** or mail us on <a
                                            href="mailto:info.happycows@gmail.com">info.happycows@gmail.com</a>. We
                                        ensure a revert within 24 hours.</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <br /><br /><br />
    <div id="loadingSpinner" style="display:none; text-align:center;">
        <img src="https://i.gifer.com/ZZ5H.gif" alt="Loading..." width="60">
        <p>Submitting...</p>
    </div>
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