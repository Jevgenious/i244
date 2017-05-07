<!DOCTYPE html>

<html lang="et" xml:lang="et" xmlns="http://www.w3.org/1999/xhtml">
<head>
 <meta charset="utf-8">
 <title>Kodune ulesanne nr.11</title>
</head>
<body>
<?php
  function connect_db(){
	global $connection;
	$host="localhost";
	$user="test";
	$pass="t3st3r123";
	$db="test";
	$connection = mysqli_connect($host, $user, $pass, $db) or die("ei saa ühendust mootoriga- ".mysqli_error());
	mysqli_query($connection, "SET CHARACTER SET UTF8") or die("Ei saanud baasi utf-8-sse - ".mysqli_error($connection));
	if($connection) echo "Connected to database {$db}" . "<br>";
}
connect_db();

function kuva_puurid(){
	// siia on vaja funktsionaalsust
	global $connection;
	$query = "SELECT DISTINCT puur FROM 10163539_loomaaed";
	$result = mysqli_query($connection, $query) or die("$query - ".mysqli_error($connection));
	$row = mysqli_fetch_assoc($result);
	$count=mysqli_num_rows($result);
	//$puurid = array();
    for($i=0;$i<$count;$i++)
    {
        $puurid[$i]= $row['puur'];
		echo "<br>"
        echo $puurid[$i];
        $row=mysqli_fetch_array($result);
    }
	 

	include_once('views/puurid.html');
	
}
kuva_puurid();

?>
</body>
</html>