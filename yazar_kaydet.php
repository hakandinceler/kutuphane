<?php

require 'lib/connection.php';

$yazar = mysql_real_escape_string($_POST['yazar']);

$sql = "SELECT COUNT(1) FROM yazarlar WHERE isim = '$yazar'";


$varMiYokMu = mysql_query($sql);

$kontrol = mysql_fetch_array($varMiYokMu);

if($kontrol[0] == "0") {
	$sql = "INSERT INTO yazarlar (isim) VALUES ('$yazar')";

	if(mysql_query($sql)) {
		$sonuc = 'Yazar kayıt edildi';
	} else {
		$sonuc = 'Yazar kayıt edilemedi!!!';
	}

} else {
	$sonuc = "Bu yazar daha önce eklenmiş.";
}

include 'layout/header.php';
include 'view/yazar_kaydet.php';
include 'layout/footer.php';
