<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
</head>
<body>
<?php
echo (new \DateTime())->format('Y-m-d _ H:i:s');
echo "</br></br>Test1 21:51</br></br>";
$dbhost = "db113820.sql-pro.online.net";
$login = "db113820";
$password = "kimpaSenda31";
$base = "db347923_kimpa";
$base_url = "https://db113820.sql-pro.online.net";
echo '$dbhost = ' . $dbhost . '</br>$login = ' . $login . '</br>$password = ' . $password . '</br>$base_url = ' . $base_url;
echo '</br>$base = ' . $base . '</br></br>';

// on se connecte à MySQL et on sélectionne la base http://php.net/manual/fr/mysqli.query.php

$connect = mysqli_connect($dbhost, $login, $password, $base);

if (mysqli_connect_errno()) {
	echo '<p>La connexion au serveur MySQL a échoué: ' . mysqli_connect_error() . '</p>';
} else {
	echo '<p>Connexion au serveur MySQL établie avec succès.</p>';
}

// on ferme la connexion
$mysqli->close();
?>

</body>
</html>