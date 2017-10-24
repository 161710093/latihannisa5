<?php
 class bangundatar{
 	public $a,$t;

 	function set_luas3($alas,$tinggi){
 		$this->a=$alas;
 		$this->t=$tinggi;
 		 	}
 	function get_luas3(){
 		return 1/2 * $this->a * $this->t;
 	}
 	function get_luas33(){
 		return 3 * $this->a;
 	}
 }
 $bangundatar = new bangundatar;
 $bangundatar->set_luas3(10,40);
 echo "Luas Segitiga :".$bangundatar->get_luas3().'<br>';
 echo "Keliling Segitiga :".$bangundatar->get_luas33().'<br>';
?>