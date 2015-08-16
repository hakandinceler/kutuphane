<?php
require 'lib/connection.php';

$kategoriler_sorgu = mysql_query("SELECT * FROM kategoriler");
$kategoriler = array();
while ($sonuc = mysql_fetch_array($kategoriler_sorgu)) {
	$kategoriler[] = $sonuc;
}

include 'layout/header.php';
include 'view/kategoriler.php';
include 'layout/footer.php';