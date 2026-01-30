<?php
	// admin-seo.php - Simple admin to update SEO JSON
	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
		$seoData = json_decode(file_get_contents('seo-data.json'), true);

		// Update data based on form submission
		$seoData['pages'][$_POST['page']] = [
			'title' => $_POST['title'],
			'description' => $_POST['description'],
			'page_specific_keywords' => $_POST['page_specific_keywords']
		];

		file_put_contents('seo-data.json', json_encode($seoData, JSON_PRETTY_PRINT));
		echo "SEO data updated!";
	}
?>
<form method="POST">
	<select name="page">
		<option value="index.php">Home Page</option>
		<option value="faq.php">FAQ Page</option>
		<option value="about.php">About Page</option>
		<option value="products.php">Products Page</option>
		<option value="subscribe.php">Subscribe Page</option>
		<option value="contact.php">Contact Page</option>
	</select><br>
	Title: <input type="text" name="title"><br>
	Description: <textarea name="description"></textarea><br>
	Keywords: <input type="text" name="page_specific_keywords"><br>
	<button type="submit">Update SEO</button>
</form>