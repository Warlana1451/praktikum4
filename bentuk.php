<?php 
require 'lingkaran.php';

$lingkaran1 = new Lingkaran(4);
$lingkaran2 = new Lingkaran(8);

echo "jari-jari lingkaran adalah : ".$lingkaran1->jari2;
echo "<br>Nilai PHI adalah : ".Lingkaran::PHI;
echo "<br>Luas lingkarannya adalah : ".$lingkaran1->getLuas();
echo "<br>Keliling lingkarannya adalah : ".$lingkaran1->getKeliling();
echo "<hr>";
$lingkaran1->cetak();
echo "<hr>";
$lingkaran2->cetak();

?>