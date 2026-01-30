<?php
// seo-helper.php

	function getSEOData($pageName) {
		// Load the JSON data
		$seoFile = __DIR__ . '/seo-data.json';

		if (!file_exists($seoFile)) {
			// Return default values if file doesn't exist
			return [
				'title' => 'HappyCows – Ahimsa A2 Milk',
				'description' => 'HappyCows provides 100% pure Ahimsa A2 milk',
				'keywords' => 'HappyCows, Ahimsa Milk, A2 Milk, hrishikesh',
				'author' => 'HappyCows Team'
			];
		}

		$jsonData = file_get_contents($seoFile);
		$seoData = json_decode($jsonData, true);

		// Get global data
		$globalData = $seoData['global'] ?? [];

		// Get page-specific data
		$pageData = $seoData['pages'][$pageName] ?? [];

		// Merge global and page-specific data
		$result = array_merge($globalData, $pageData);

		// Combine keywords (global + page-specific)
		if (isset($globalData['keywords']) && isset($pageData['page_specific_keywords'])) {
			$result['keywords'] = $globalData['keywords'] . ', ' . $pageData['page_specific_keywords'];
		}

		return $result;
	}

// Function to get current page name
	function getCurrentPage() {
		$currentFile = basename($_SERVER['PHP_SELF']);
		return $currentFile;
	}
?>