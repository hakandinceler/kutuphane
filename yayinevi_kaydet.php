<?php

require 'lib/connection.php';

$yayinevi = trim(mysql_real_escape_string($_POST['yayinevi']));

if($yayinevi != "" && !is_numeric($yayinevi) && mb_strlen($yayinevi, 'UTF8') >= 2) {

	$sql = "SELECT COUNT(1) FROM basim_evi WHERE isim = '$yayinevi'";

	$varMiYokMu = mysql_query($sql);

	$kontrol = mysql_fetch_array($varMiYokMu);

	if($kontrol[0] == "0") {
		$sql = "INSERT INTO basim_evi (isim) VALUES ('$yayinevi')";

		if(mysql_query($sql)) {
			$sonuc = 'yayınevi kayıt edildi';
		} else {
			$sonuc = 'yayınevi kayıt edilemedi!!!';
		}

	} else {
		$sonuc = "Bu yayınevi daha önce eklenmiş.";
	}
} else {
	$sonuc = "Lütfen kurallara uygun bir isim yazın.";
}

include 'layout/header.php';
include 'view/yayinevi_kaydet.php';
include 'layout/footer.php';
