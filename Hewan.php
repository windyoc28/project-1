<?php

class Kucing {
	public $jumlah_kaki, $bisa_terbang, $bersuara;

	public function jumlahKaki(){
		return $this->jumlah_kaki;
	}
}

$moci = new Kucing;
$moci->jumlah_kaki = 4;
echo "Moci adalah kucing <br>";
echo "Punya kaki sebanyak : ".$moci->jumlah_kaki."<br>";
echo $moci->bisa_terbang."<br>";
echo "Suaranya : ".$moci->bersuara()."<br>";

