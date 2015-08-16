<?php

require 'lib/connection.php';

$kat = trim(mysql_real_escape_string($_POST['kat']));
$seri = trim(mysql_real_escape_string($_POST['seri']));

$sql = "SELECT COUNT(1)
		FROM raflar
		WHERE kat = '$kat'
		AND seri = '$seri'";

$varMiYokMu = mysql_query($sql);

$kontrol = mysql_fetch_array($varMiYokMu);

if($kontrol[0] == "0") {
	$sql = "INSERT INTO raflar (kat, seri)
			VALUES ('$kat', '$seri')";

	if(mysql_query($sql)) {
		$sonuc = 'raf kayıt edildi';
	} else {
		$sonuc = 'raf kayıt edilemedi!!!';
	}

} else {
	$sonuc = "Bu raf daha önce eklenmiş.";
}

include 'layout/header.php';
include 'view/raf_kaydet.php';
include 'layout/footer.php';
