<?php
require 'lib/connection.php';

$yayinEvleriSorgu = mysql_query("SELECT * FROM basim_evi");
$yayinEvleri = array();
while ($sonuc = mysql_fetch_array($yayinEvleriSorgu)) {
	$yayinEvleri[] = $sonuc;
}

include 'layout/header.php';
include 'view/yayin_evleri.php';
include 'layout/footer.php';