<?php
	require_once "usesession.php";
	require_once "../../../conf.php";
	require_once "fnc_gallery.php";
	
	//$gallery = readAllSemiPublicPictureThumbsPage($page, $limit);
	$gallery = read_all_semi_public_photo_thumbs();
?>
<!DOCTYPE html>
<html lang="et">
<head>
	<meta charset="utf-8">
	<title>Veebirakendused ja nende loomine 2021</title>
	<link rel="stylesheet" type="text/css" href="style/gallery.css">
</head>
<body>
	<h1>Fotogalerii</h1>
	<p>See leht on valminud õppetöö raames!</p>
	<hr>
	<p><a href="?logout=1">Logi välja</a></p>
	<p><a href="home.php">Avalehele</a></p>
	<hr>
	<div class="gallery" id="gallery">
		<?php echo $gallery; ?>
	</div>
</body>
</html>