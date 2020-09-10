<?php

include 'Animal.php';

$moci = new Kucing;
$moci->jumlah_kaki = 4;
echo "Moci adalah kucing <br>";
echo "Punya kaki sebanyak : ".$moci->jumlah_kaki."<br>";
echo $moci->bisa_terbang."<br>";
echo "Suaranya : ".$moci->bersuara()."<br>";

echo "<hr>";

$dogy = new Anjing;
$dogy->jumlah_kaki = 4;
echo "Dogy adalah anjing <br>";
echo "Punya kaki sebanyak : ".$dogy->jumlah_kaki."<br>";
echo $dogy->bisa_terbang."<br>";
echo "Suaranya : ".$dogy->bersuara()."<br>";

echo "<hr>";

$marlen = new Elang;
$marlen->jumlah_kaki = 2;
echo "Marlen adalah elang <br>";
echo "Punya kaki sebanyak : ".$marlen->jumlah_kaki."<br>";
echo $marlen->bisa_terbang."<br>";
echo "Suaranya : ".$marlen->bersuara()."<br>";

echo "<hr>";

$swan = new Angsa;
$swan->jumlah_kaki = 2;
echo "Swan adalah angsa <br>";
echo "Punya kaki sebanyak : ".$swan->jumlah_kaki."<br>";
echo $swan->bisa_terbang."<br>";
echo "Suaranya : ".$swan->bersuara()."<br>";