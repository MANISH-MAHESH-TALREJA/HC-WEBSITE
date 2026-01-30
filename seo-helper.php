<?php
// seo-helper.php

	function getSEOData($pageName) {
		// Load the JSON data
		$seoFile = __DIR__ . '/seo-data.json';

		if (!file_exists($seoFile)) {
			return getDefaultSEOData($pageName);
		}

		$jsonData = file_get_contents($seoFile);
		$seoData = json_decode($jsonData, true);

		// Get global data
		$globalData = $seoData['global'] ?? [];

		// Get page-specific data
		$pageData = $seoData['pages'][$pageName] ?? $seoData['pages']['index.php'];

		// Get social data
		$socialData = $seoData['social'] ?? [];

		// Get open graph data
		$openGraphData = $seoData['open_graph'] ?? [];

		// Merge all data
		$result = array_merge($globalData, $pageData, $socialData, $openGraphData);

		// Combine keywords (global + page-specific)
		if (isset($globalData['keywords']) && isset($pageData['page_specific_keywords'])) {
			$result['keywords'] = $globalData['keywords'] . ', ' . $pageData['page_specific_keywords'];
		}

		// Set canonical URL
		if (!isset($result['canonical'])) {
			$result['canonical'] = $pageName;
		}

		// Set Open Graph type
		if (!isset($result['og_type'])) {
			$result['og_type'] = 'website';
		}

		return $result;
	}

	function getDefaultSEOData($pageName) {
		$defaults = [
			'index.php' => [
				'title' => 'HappyCows – Ahimsa A2 Milk',
				'description' => 'HappyCows provides 100% pure Ahimsa A2 milk from protected cows',
				'keywords' => 'HappyCows, Ahimsa Milk, A2 Milk, hrishikesh',
			],
			'faq.php' => [
				'title' => 'FAQ – HappyCows A2 Milk',
				'description' => 'Frequently asked questions about HappyCows A2 milk',
				'keywords' => 'FAQ, questions, happycows',
			],
			'about.php' => [
				'title' => 'About Us – HappyCows',
				'description' => 'Learn about HappyCows mission and cow protection',
				'keywords' => 'about, story, mission',
			],
			'products.php' => [
				'title' => 'Our Products – HappyCows A2 Milk',
				'description' => 'Pure A2 milk products from HappyCows',
				'keywords' => 'products, milk, ghee, paneer',
			],
			'subscribe.php' => [
				'title' => 'Subscribe – HappyCows A2 Milk',
				'description' => 'Subscribe for A2 milk delivery',
				'keywords' => 'subscribe, delivery, order',
			],
			'contact.php' => [
				'title' => 'Contact Us – HappyCows',
				'description' => 'Contact HappyCows team',
				'keywords' => 'contact, support, help',
			],
			'terms-and-conditions.php' => [
				'title' => 'Terms & Conditions – HappyCows',
				'description' => 'Terms and conditions for HappyCows services',
				'keywords' => 'terms, conditions, policy',
			]
		];

		$pageData = $defaults[$pageName] ?? $defaults['index.php'];

		return array_merge([
			'author' => 'HappyCows Team',
			'keywords' => 'HappyCows, Ahimsa Milk, A2 Milk, hrishikesh',
			'favicon' => 'assets/images/logo/02.png',
			'apple_touch_icon' => 'assets/images/logo/02.png',
			'canonical' => $pageName,
			'og_type' => 'website'
		], $pageData);
	}

// Function to get current page name
	function getCurrentPage() {
		$currentFile = basename($_SERVER['PHP_SELF']);
		return $currentFile;
	}

// Function to generate full Open Graph tags
	function generateOpenGraphTags($seo) {
		$currentUrl = "https://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

		$ogTags = "\n";
		$ogTags .= '<!-- Open Graph / Facebook -->' . "\n";
		$ogTags .= '<meta property="og:type" content="' . htmlspecialchars($seo['og_type'] ?? 'website') . '">' . "\n";
		$ogTags .= '<meta property="og:url" content="' . htmlspecialchars($currentUrl) . '">' . "\n";
		$ogTags .= '<meta property="og:title" content="' . htmlspecialchars($seo['title']) . '">' . "\n";
		$ogTags .= '<meta property="og:description" content="' . htmlspecialchars($seo['description']) . '">' . "\n";
		$ogTags .= '<meta property="og:image" content="' . htmlspecialchars($seo['favicon']) . '">' . "\n";
		$ogTags .= '<meta property="og:site_name" content="' . htmlspecialchars($seo['site_name'] ?? 'HappyCows A2 Milk') . '">' . "\n";

		$ogTags .= '<!-- Twitter -->' . "\n";
		$ogTags .= '<meta property="twitter:card" content="summary_large_image">' . "\n";
		$ogTags .= '<meta property="twitter:url" content="' . htmlspecialchars($currentUrl) . '">' . "\n";
		$ogTags .= '<meta property="twitter:title" content="' . htmlspecialchars($seo['title']) . '">' . "\n";
		$ogTags .= '<meta property="twitter:description" content="' . htmlspecialchars($seo['description']) . '">' . "\n";
		$ogTags .= '<meta property="twitter:image" content="' . htmlspecialchars($seo['favicon']) . '">' . "\n";

		if (isset($seo['twitter_site'])) {
			$ogTags .= '<meta property="twitter:site" content="' . htmlspecialchars($seo['twitter_site']) . '">' . "\n";
		}

		return $ogTags;
	}
?>