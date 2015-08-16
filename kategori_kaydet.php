<?php

require 'lib/connection.php';

$kategori = trim(mysql_real_escape_string($_POST['kategori']));

if($kategori != "" && !is_numeric($kategori) && mb_strlen($kategori, 'UTF8') >= 2) {

	$sql = "SELECT COUNT(1) FROM kategoriler WHERE isim = '$kategori'";

	$varMiYokMu = mysql_query($sql);

	$kontrol = mysql_fetch_array($varMiYokMu);

	if($kontrol[0] == "0") {
		$sql = "INSERT INTO kategoriler (isim) VALUES ('$kategori')";

		if(mysql_query($sql)) {
			$sonuc = 'kategori kayıt edildi';
		} else {
			$sonuc = 'kategori kayıt edilemedi!!!';
		}

	} else {
		$sonuc = "Bu kategori daha önce eklenmiş.";
	}
} else {
	$sonuc = "Lütfen kurallara uygun bir isim yazın.";
}

include 'layout/header.php';
include 'view/kategori_kaydet.php';
include 'layout/footer.php';
