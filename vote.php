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
	<form action="tulemus.html" method="GET">

	<?php
    $files = glob("pildid/*.*");

    for ($i=0; $i<count($files); $i++) {
    $image = $files[$i];
	echo '<p>'.'<label for="'.$image .'">'.'<img src="'.$image .'" alt="Random image" height="100"/>'.'</label>'.'<input type="radio" value="'.$i .'" id="'.$image .'" name="pilt"/>'.'</p>';


}

?>
	</div>
<br/>
		<input type="submit" value="Valin!"/>
	</form>
</div>
<div id="footer">&copy; 2015</div>
</body>
</html>
