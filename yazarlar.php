<?php
require 'lib/connection.php';

$yazarlar_sorgu = mysql_query("SELECT * FROM yazarlar");
$yazarlar = array();
while ($sonuc = mysql_fetch_array($yazarlar_sorgu)) {
	$yazarlar[] = $sonuc;
}

include 'layout/header.php';
include 'view/yazarlar.php';
include 'layout/footer.php';