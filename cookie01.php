<?php
	$value = "achmatin";
	$value2 = "Achmad Solichin";

	setcookie("username", $value);
	setcookie("namalengkap", $value2, time()+3600);

	echo "<h1>Ini Halaman Pengesetan Cookies</h1>";
	echo "<h2>Klik <a href='cookie02.php'>di sini</a> Untuk Pemeriksaan Cookies</h2>";
?>