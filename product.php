<?php
// Step 1: All product data in an array

$products = [
	0 => [
		"name" => "Desi Cow Milk 500 ml",
		"price" => 42,
		"mrp" => 45,
		"desc" => "Experience the purity of nature with our Desi Cow Milk, sourced from indigenous Gir and Sahiwal cows. This milk is rich in A2 protein, calcium, and essential nutrients that help build strong bones and boost immunity. Free from preservatives and chemicals, it’s collected fresh every morning to ensure superior quality and natural sweetness. Perfect for daily consumption, tea, coffee, or desserts, our Desi Cow Milk brings you the authentic taste of traditional Indian dairy goodness.",
		"image" => "00.jpg",
		"href" => "https://forms.gle/GczVxgFa1FKf5nsGA"
	],
	1 => [
		"name" => "Ayur Nasal Ghee 10 ml",
		"price" => 100,
		"mrp" => 120,
		"desc" => "Ayur Nasal Ghee is a traditional Ayurvedic formulation made from pure desi cow ghee infused with healing herbs. Regular use helps cleanse the nasal passages, relieve sinus congestion, improve breathing, and promote mental clarity. It’s especially beneficial in balancing Vata and Pitta doshas, enhancing focus, and supporting restful sleep. A few drops in each nostril daily keep your mind refreshed and your respiratory system healthy — an ancient wellness secret for modern living.",
		"image" => "01.jpg",
		"href" => "https://forms.gle/GczVxgFa1FKf5nsGA"
	],
	2 => [
		"name" => "Gaunyle 1000 ml",
		"price" => 100,
		"mrp" => 110,
		"desc" => "Gaunyle is a natural disinfectant and floor cleaner made from Gomutra (cow urine) of indigenous cows, blended with herbal extracts and essential oils. It effectively removes stains, kills germs, and leaves your home with a refreshing natural fragrance. Safe for children and pets, it contains no harmful chemicals or synthetic agents. A perfect eco-friendly alternative to chemical cleaners, Gaunyle purifies your surroundings while promoting a clean, sattvic environment inspired by Vedic traditions.",
		"image" => "02.jpg",
		"href" => "https://forms.gle/GczVxgFa1FKf5nsGA"
	],
	3 => [
		"name" => "Dant Manjan 50 gm",
		"price" => 65,
		"mrp" => 75,
		"desc" => "Our herbal Dant Manjan is a time-tested Ayurvedic tooth powder that strengthens gums, whitens teeth, and prevents bad breath naturally. Made with powerful herbs like neem, clove, babool, and mulethi, it helps fight tooth decay and gum infections. Free from fluoride and artificial foaming agents, it ensures complete oral care without side effects. Use daily for fresh breath, healthy gums, and strong teeth — experience the ancient Indian way of oral hygiene.",
		"image" => "08.jpg",
		"href" => "https://forms.gle/GczVxgFa1FKf5nsGA"
	],
	4 => [
		"name" => "Dhoop Big Size 36 Pcs in Box",
		"price" => 100,
		"mrp" => 115,
		"desc" => "Fill your home with positivity and divine fragrance using our Dhoop Big Size sticks, made from natural cow dung, ghee, herbs, and aromatic resins. Each stick burns slowly, purifying the air and creating a peaceful, spiritual atmosphere ideal for meditation and prayers. Free from chemicals and charcoal, this eco-friendly dhoop eliminates negativity while connecting your space with sacred, sattvic energy. Each box contains 36 large sticks for long-lasting freshness and spiritual upliftment.",
		"image" => "07.jpg",
		"href" => "https://forms.gle/GczVxgFa1FKf5nsGA"
	],
	5 => [
		"name" => "Gobar Kanda Small Size Loose 1 pc.",
		"price" => 2,
		"mrp" => 5,
		"desc" => "Our Small Gobar Kanda is made from sun-dried cow dung collected from indigenous cows, preserving its natural antibacterial and purifying properties. Ideal for daily havan, agnihotra, or traditional cooking, it produces minimal smoke and leaves a divine aroma when burnt. 100% natural and handmade by rural artisans, each kanda supports sustainable living and rural empowerment. Use it to maintain a pure, sattvic environment in your home or workplace.",
		"image" => "03.jpg",
		"href" => "https://forms.gle/GczVxgFa1FKf5nsGA"
	],
	6 => [
		"name" => "Gobar Kanda Big Size Loose 1 pc.",
		"price" => 5,
		"mrp" => 8,
		"desc" => "Our Big Size Gobar Kanda is carefully prepared from sun-dried desi cow dung, known for its air-purifying and spiritual benefits. It burns evenly with a mild, soothing fragrance, ideal for large yajnas, agnihotra rituals, or eco-friendly fuel use. Free from chemicals or synthetic materials, it promotes clean energy and a sacred ambiance. Every kanda is handmade by village women, supporting traditional practices and sustainable livelihoods.",
		"image" => "04.jpg",
		"href" => "https://forms.gle/GczVxgFa1FKf5nsGA"
	],
	7 => [
		"name" => "Gobar Kanda Small Packet 20 pcs.",
		"price" => 40,
		"mrp" => 50,
		"desc" => "This pack of 20 small Gobar Kandas brings purity and tradition to your home. Made from 100% natural desi cow dung, each piece is sun-dried to retain its natural antimicrobial properties. Ideal for havan, agnihotra, or lighting sacred fires, these kandas emit a purifying aroma and reduce air pollution naturally. The eco-friendly packaging and handmade quality ensure you support rural artisans and promote sustainable Indian culture.",
		"image" => "05.jpg",
		"href" => "https://forms.gle/GczVxgFa1FKf5nsGA"
	],
	8 => [
		"name" => "Gobar Kanda Big Packet 20 pcs.",
		"price" => 100,
		"mrp" => 110,
		"desc" => "Our Big Gobar Kanda Packet contains 20 large pieces of sun-dried desi cow dung cakes — perfect for daily havans, agnihotra rituals, and traditional cooking. Each kanda burns steadily, releasing a soothing, purifying aroma that cleanses the environment and promotes positivity. Completely eco-friendly and handmade by rural women, these kandas are chemical-free and sustainable, helping preserve India’s rich Vedic heritage while supporting village livelihoods.",
		"image" => "06.jpg",
		"href" => "https://forms.gle/GczVxgFa1FKf5nsGA"
	],
	9 => [
		"name" => "Ecomytra Desi Cow Ghee 1000ml",
		"price" => 1200,
		"mrp" => 1350,
		"desc" => "Ecomytra Desi Cow Ghee is made from fresh, A2-rich milk of indigenous cows, hand-churned to preserve its natural aroma, nutrients, and therapeutic properties. Ideal for cooking, Ayurvedic remedies, and daily consumption, this ghee is rich in healthy fats, vitamins A, D, E, and K, and supports digestion, immunity, and brain health. Free from preservatives, chemicals, or additives, it offers the authentic taste of traditional desi ghee while promoting a sattvic and healthy lifestyle.",
		"image" => "09.jpg",
		"href" => "https://forms.gle/GczVxgFa1FKf5nsGA"
	],
	10 => [
		"name" => "Gaulakshmi Gir Cow Ghee 1000ml",
		"price" => 2500,
		"mrp" => 2700,
		"desc" => "Gaulakshmi Gir Cow Ghee is crafted from the rich, A2 milk of Gir cows, hand-churned to retain its natural flavor, aroma, and nutrients. Perfect for cooking, Ayurvedic practices, and daily use, this ghee is packed with healthy fats, vitamins A, D, E, and K, and supports digestion, immunity, and overall wellness. Free from additives, chemicals, and preservatives, it delivers authentic traditional taste while promoting a healthy, sattvic lifestyle and is made with care to preserve India’s heritage.",
		"image" => "10.jpg",
		"href" => "https://forms.gle/GczVxgFa1FKf5nsGA"
	],

];


// Step 2: Get product ID from URL
$id = isset($_GET['id']) ? (int) $_GET['id'] : 0;

// Step 3: Check if product exists
if (!isset($products[$id])) {
	echo "<h3>Product not found!</h3>";
	exit;
}

// Step 4: Get the product data
$product = $products[$id];
?>


<!DOCTYPE html>
<html lang="zxx">

<head>
	<title><?php echo htmlspecialchars($product['name']); ?> | Happy cows</title>
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
</head>

<body>
	<?php require_once('nav.php'); ?>

	<!-- page header section ending here -->
	<section class="page-header padding-tb page-header-bg-1">
		<div class="container">
			<div class="page-header-item d-flex align-items-center justify-content-center">
				<div class="post-content">
					<h3><?php echo htmlspecialchars($product['name']); ?></h3>
					<div class="breadcamp">
						<ul class="d-flex flex-wrap justify-content-center align-items-center">
							<li><a href="index.html">Home</a></li>
							<li><a href="#">Pages</a></li>
							<li><a class="active">Product</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- page header section ending here -->

	<!-- Shop Page Section start here -->
	<section class="shop-single padding-tb">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-12 sticky-widget">
					<div class="product-details">
						<div class="row">
							<div class="col-md-6 col-12">
								<div class="product-thumb">
									<div class="thumb">
										<img id="myimage" class="w-100"
											src="assets/images/shop/<?php echo htmlspecialchars($product['image']); ?>"
											alt="shopZoom">
									</div>
								</div>
							</div>
							<div class="col-md-6 col-12">
								<div class="post-content">
									<h4 class="product-name">
										<a href="#"><?php echo htmlspecialchars($product['name']); ?></a>
									</h4>

									<p class="quality-badge">
										<span><i class="fas fa-certificate"></i> Verified Quality</span>
										<span class="divider">|</span>
										<span><i class="fas fa-leaf"></i> 100% Natural & Fresh</span>
									</p>

									<h4 class="product-price">
										<del>₹<?php echo htmlspecialchars($product['mrp']); ?></del>
										₹<?php echo htmlspecialchars($product['price']); ?>
									</h4>
									<h5>
										Product Description
									</h5>
									<p>
										<?php echo htmlspecialchars($product['desc']); ?>
									</p>
									<form>
										<!-- <div class="select-product size">
												<select>
													<option>Select Size</option>
													<option>SM</option>
													<option>MD</option>
													<option>LG</option>
													<option>XL</option>
													<option>XXL</option>
												</select>
												<i class="fas fa-angle-down"></i>
											</div>
											<div class="select-product color">
												<select>
													<option>Select Color</option>
													<option>Pink</option>
													<option>Ash</option>
													<option>Red</option>
													<option>White</option>
													<option>Blue</option>
												</select>
												<i class="fas fa-angle-down"></i>
											</div>
											<div class="cart-plus-minus">
												<div class="dec qtybutton">-</div>
												<input class="cart-plus-minus-box" type="text" name="qtybutton" value="1">
												<div class="inc qtybutton">+</div>
											</div>
											<div class="discount-code">
												<input type="text" placeholder="Enter Discount Code">
											</div> -->
										<button type="button" class="btn"
											onclick="window.location.href='<?= $product['href']; ?>'">
											Buy Now
										</button>

									</form>
								</div>
							</div>
						</div>
					</div>
					<?php require_once('review.php'); ?>
				</div>
			</div>
		</div>
	</section>
	<!-- Shop Page Section ending here -->

	<!-- footer section start here -->
	<?php require_once('footer.php'); ?>
	<!-- footer section start here -->

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
</body>

</html>