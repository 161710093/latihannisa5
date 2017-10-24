<?php

class kelinci {
	public $telinga = "panjang";
	public $jalan = "melompat";
}
$kelinci1 = new kelinci;
echo "Kelinciku mempunyai telinga : ".$kelinci1->telinga. '<br>';
echo "Dan berjalan dengan cara : ".$kelinci1->jalan; 
echo "<br>". "<br>";

	class ayam{
	public $suara = "kukuruyuk";
	public $kaki = 2;
}
$ayam1 = new ayam;
echo "Saya mempunyai empat ayam ia bersuara : ".$ayam1->suara. '<br>';
echo "Dan berjalan dengan  : ".$ayam1->kaki. 'kakinya'; 
echo "<br>". "<br>";

class kuda{
	public $suara = "iiihhaaa";
	public $kaki = 4;
}
$kuda1 = new kuda;
echo "Saya mempunyai kuda ia bersuara : ".$kuda1->suara. '<br>';
echo "Dan berjalan dengan  : ".$kuda1->kaki. 'kakinya'; 
echo "<br>". "<br>";

?>