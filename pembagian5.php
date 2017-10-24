<?php
 class pembagian{
 	public $bil1,$bil2;

 	function set_nilai3($bilangan1,$bilangan2){
 		$this->bil1=$bilangan1;
 		$this->bil2=$bilangan2;
 	}
	function get_nilai3 (){
 		return $this->bil1 / $this->bil2;
 	}
 }

 $pembagian1 = new pembagian;
 $pembagian1->set_nilai3(22,2);
 echo "===============================".'<br>';
 echo "Perhitungan bilangan 22 dengan bilangan 2".'<br>';
 echo "===============================".'<br>';
  echo "Hasil Pembagian :".$pembagian1->get_nilai3().'<br>';
?>
