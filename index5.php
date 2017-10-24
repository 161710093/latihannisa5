<?php
require_once 'robot5.php';

$robot1= new robot ('ahaiahaiahai',40);
$robot2= new robot ('hiyahiyahiya',50);

$robot1->set_berat(20);
$robot2->set_suara('hahahalucu');

echo 'Berat robot adalah : '.$robot1->get_berat().'<br>';
echo 'Suara robot adalah :'.$robot2->get_suara().'<br>';