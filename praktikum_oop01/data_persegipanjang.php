<?php
require_once "class_persegipanjang.php";
echo "NILAI PP " . Persegi::PP;
$panjang1 = new Persegi( 19 );
$panjang2 = new Persegi( 6 );
echo "<br/>Luas Persegi Panjang 1 Memiliki Nilai :  ".$panjang1->getLuas();
echo "<br>Luas Persegi Panjang 2 Memiliki Nilai : ".$panjang2->getLuas();
echo "<br>Keliling Persegi Panjang 1 : ".$panjang1->getKeliling();
echo "<br>Keliling Persegi Panjang 2 : ".$panjang2->getKeliling();
?>