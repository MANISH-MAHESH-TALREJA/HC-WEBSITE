<?php
	// --- CONFIGURATION ---
	$PASSWORD = "9833137409"; // Change this to your desired password
	$JSON_FILE = 'seo-data.json';

	session_start();

	// Handle Logout
	if (isset($_GET['logout'])) {
		session_destroy();
		header("Location: admin-seo.php");
		exit;
	}

	// Handle Login
	$error = "";
	if (isset($_POST['login_password'])) {
		if ($_POST['login_password'] === $PASSWORD) {
			$_SESSION['authenticated'] = true;
		} else {
			$error = "Invalid password!";
		}
	}

	// Check Authentication
	if (!isset($_SESSION['authenticated']) || $_SESSION['authenticated'] !== true): ?>
		<!DOCTYPE html>
		<html lang="en">
		<head>
			<meta charset="UTF-8">
			<script src="https://cdn.tailwindcss.com"></script>
			<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
			<title>Login | HappyCows SEO</title>
			<style>body { font-family: 'Roboto', sans-serif; }</style>
		</head>
		<body class="bg-gray-100 flex items-center justify-center h-screen">
		<div class="bg-white p-8 rounded-xl shadow-2xl w-96 border-t-4 border-green-600">
			<h2 class="text-2xl font-bold mb-6 text-gray-800 text-center">Admin Access</h2>
			<?php if($error): ?>
				<p class="text-red-500 text-sm mb-4 text-center"><?php echo $error; ?></p>
			<?php endif; ?>
			<form method="POST">
				<input type="password" name="login_password" placeholder="Enter Password"
					   class="w-full p-3 border rounded-lg mb-4 focus:outline-none focus:ring-2 focus:ring-green-500">
				<button type="submit" class="w-full bg-green-600 text-white py-3 rounded-lg font-semibold hover:bg-green-700 transition">Unlock</button>
			</form>
		</div>
		</body>
		</html>
		<?php exit; endif;

	// --- AUTHENTICATED LOGIC ---

	// Load JSON
	$seoData = json_decode(file_get_contents($JSON_FILE), true);

	// Handle Global & Social Updates
	if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['update_type'])) {
		if ($_POST['update_type'] === 'page') {
			$page = $_POST['page_key'];
			$seoData['pages'][$page] = [
				'title' => $_POST['title'],
				'description' => $_POST['description'],
				'page_specific_keywords' => $_POST['page_specific_keywords'],
				'canonical' => $_POST['canonical'],
				'og_type' => $_POST['og_type']
			];
		} elseif ($_POST['update_type'] === 'global') {
			$seoData['global']['author'] = $_POST['author'];
			$seoData['global']['site_name'] = $_POST['site_name'];
			$seoData['global']['keywords'] = $_POST['global_keywords'];
		}

		file_put_contents($JSON_FILE, json_encode($seoData, JSON_PRETTY_PRINT));
		$success_msg = "SEO data updated successfully!";
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>HappyCows SEO Dashboard</title>
	<script src="https://cdn.tailwindcss.com"></script>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<style>
        body { font-family: 'Roboto', sans-serif; background-color: #f8fafc; }
        .material-card { background: white; border-radius: 12px; box-shadow: 0 4px 6px -1px rgba(0,0,0,0.1); }
	</style>
</head>
<body class="pb-10">

<nav class="bg-green-700 text-white p-4 shadow-lg flex justify-between items-center mb-8 px-8">
	<div class="flex items-center gap-2">
		<span class="material-icons">eco</span>
		<span class="text-xl font-bold uppercase tracking-wider">HappyCows SEO Portal</span>
	</div>
	<a href="?logout=1" class="flex items-center gap-1 hover:text-red-200 transition">
		<span class="material-icons text-sm">logout</span> Logout
	</a>
</nav>

<div class="max-w-5xl mx-auto px-4">

	<?php if(isset($success_msg)): ?>
		<div class="mb-6 p-4 bg-green-100 border-l-4 border-green-500 text-green-700 rounded shadow-sm">
			<?php echo $success_msg; ?>
		</div>
	<?php endif; ?>

	<div class="grid grid-cols-1 md:grid-cols-3 gap-8">

		<div class="md:col-span-1">
			<div class="material-card p-6">
				<h3 class="text-lg font-bold mb-4 flex items-center gap-2 text-gray-700">
					<span class="material-icons">public</span> Global Config
				</h3>
				<form method="POST">
					<input type="hidden" name="update_type" value="global">
					<div class="space-y-4">
						<div>
							<label class="text-xs font-semibold text-gray-500 uppercase">Site Name</label>
							<input type="text" name="site_name" value="<?php echo $seoData['global']['site_name']; ?>" class="w-full border-b-2 border-gray-200 focus:border-green-500 outline-none py-1 transition">
						</div>
						<div>
							<label class="text-xs font-semibold text-gray-500 uppercase">Author</label>
							<input type="text" name="author" value="<?php echo $seoData['global']['author']; ?>" class="w-full border-b-2 border-gray-200 focus:border-green-500 outline-none py-1 transition">
						</div>
						<div>
							<label class="text-xs font-semibold text-gray-500 uppercase">Global Keywords</label>
							<textarea name="global_keywords" rows="3" class="w-full border-2 border-gray-100 rounded p-2 text-sm focus:border-green-500 outline-none"><?php echo $seoData['global']['keywords']; ?></textarea>
						</div>
						<button class="w-full bg-gray-800 text-white py-2 rounded shadow hover:bg-black transition">Update Global</button>
					</div>
				</form>
			</div>
		</div>

		<div class="md:col-span-2">
			<div class="material-card p-6">
				<h3 class="text-lg font-bold mb-6 flex items-center gap-2 text-gray-700">
					<span class="material-icons">description</span> Page Specific SEO
				</h3>

				<form method="POST" id="pageForm">
					<input type="hidden" name="update_type" value="page">

					<label class="block text-sm font-medium text-gray-700 mb-2">Select Page to Edit</label>
					<select name="page_key" id="pageSelector" class="w-full p-3 bg-gray-50 border rounded-lg mb-8 focus:ring-2 focus:ring-green-500 outline-none">
						<?php foreach($seoData['pages'] as $key => $page): ?>
							<option value="<?php echo $key; ?>"><?php echo $key; ?> (<?php echo $page['title']; ?>)</option>
						<?php endforeach; ?>
					</select>

					<div class="grid grid-cols-1 gap-6">
						<div class="relative">
							<label class="text-xs font-bold text-green-700 uppercase">Meta Title</label>
							<input type="text" name="title" id="inp_title" class="w-full border-b-2 border-gray-200 focus:border-green-600 outline-none py-2 text-lg">
						</div>

						<div>
							<label class="text-xs font-bold text-green-700 uppercase">Meta Description</label>
							<textarea name="description" id="inp_desc" rows="3" class="w-full border-2 border-gray-100 rounded-lg p-3 mt-1 focus:border-green-600 outline-none"></textarea>
						</div>

						<div class="grid grid-cols-1 md:grid-cols-2 gap-4">
							<div>
								<label class="text-xs font-bold text-green-700 uppercase">Canonical URL</label>
								<input type="text" name="canonical" id="inp_canon" class="w-full border-b-2 border-gray-200 focus:border-green-600 outline-none py-1">
							</div>
							<div>
								<label class="text-xs font-bold text-green-700 uppercase">OG Type</label>
								<input type="text" name="og_type" id="inp_og" class="w-full border-b-2 border-gray-200 focus:border-green-600 outline-none py-1">
							</div>
						</div>

						<div>
							<label class="text-xs font-bold text-green-700 uppercase">Page Keywords</label>
							<input type="text" name="page_specific_keywords" id="inp_keys" class="w-full border-b-2 border-gray-200 focus:border-green-600 outline-none py-1">
						</div>

						<button type="submit" class="mt-4 bg-green-600 text-white px-8 py-3 rounded-full font-bold shadow-lg hover:bg-green-700 hover:-translate-y-1 transition-all flex items-center justify-center gap-2 w-max">
							<span class="material-icons">save</span> Save Changes
						</button>
					</div>
				</form>
			</div>
		</div>

	</div>
</div>

<script>
    // Store JSON in JS
    const seoData = <?php echo json_encode($seoData['pages']); ?>;
    const selector = document.getElementById('pageSelector');

    function updateForm() {
        const page = selector.value;
        const data = seoData[page];

        document.getElementById('inp_title').value = data.title;
        document.getElementById('inp_desc').value = data.description;
        document.getElementById('inp_keys').value = data.page_specific_keywords;
        document.getElementById('inp_canon').value = data.canonical;
        document.getElementById('inp_og').value = data.og_type;
    }

    // Listen for changes
    selector.addEventListener('change', updateForm);

    // Init on load
    window.onload = updateForm;
</script>
</body>
</html>