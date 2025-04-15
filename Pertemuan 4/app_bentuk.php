<?php 
require_once("lingkaran.php");

$lingkaran1 = new lingkaran(8.4);
$lingkaran2 = new lingkaran(10);

echo "jari-jari lingkaran adalah", $lingkaran1->jari;
echo "<br>nilai PHI adalah", lingkaran::PHI;
echo "<br>Luas lingkaran1 adalah", $lingkaran1->getluas();
echo "<br>Keliling lingkaran1 adalah", $lingkaran1->getkeliling();
echo "<hr>";
$lingkaran1->cetak();
echo "<hr>";
$lingkaran2->cetak();

?>