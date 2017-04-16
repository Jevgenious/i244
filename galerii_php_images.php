<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Praktikum  - Ülesanne</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div id="header">
	<ul>
		<li><a href="pealeht.html">Pealeht</a></li>
		<li><a href="galerii_php_images.php">Galerii</a></li>
		<li><a href="vote.php">Hääletamine</a></li>
	</ul>
</div>
<div id="banner">
	<img src="banner1.jpg" alt="banner">
</div>

<div id="wrap">
	<h3>Fotod</h3>
	<div id="gallery">
	<?php
    $files = glob("pildid/*.*");

    for ($i=0; $i<count($files); $i++) {
    $image = $files[$i];
    echo '<img src="'.$image .'" alt="Random image" />'."<br /><br />";
}

?>
	</div>
</div>
<div id="footer">&copy; 2015</div>
</body>
</html>