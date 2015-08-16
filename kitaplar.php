<?php
require 'lib/connection.php';

$sql = "SELECT 
			*,
			kit.id AS kitapId,
			kit.isim AS kitapIsim, 
			yaz.isim AS yazarIsim,
			basim.isim AS basimEviIsim,
			kat.isim AS kategoriIsim,
			CONCAT_WS(' ',raf.seri, raf.kat) AS kitapRafYeri
		FROM kitaplar kit
		JOIN yazarlar yaz ON kit.yazar_id = yaz.id
		JOIN basim_evi basim ON basim.id = kit.basim_evi_id
		INNER JOIN kategoriler kat ON kat.id = kit.kategori_id
		JOIN raflar raf ON raf.id = kit.raf_id
";

$kitaplar_sorgu = mysql_query($sql);
$kitaplar = array();
while ($sonuc = mysql_fetch_array($kitaplar_sorgu)) {
	$kitaplar[] = $sonuc;
}


include 'layout/header.php';
include 'view/kitaplar.php';
include 'layout/footer.php';