<?php
require 'lib/connection.php';

$raflar_sorgu = mysql_query("SELECT * FROM raflar");
$raflar = array();
while ($sonuc = mysql_fetch_array($raflar_sorgu)) {
	$raflar[] = $sonuc;
}

include 'layout/header.php';
include 'view/raflar.php';
include 'layout/footer.php';