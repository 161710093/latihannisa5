<?php

require_once 'identitas.php';
$identitas = new identitas('Annisa','Bandung','XI RPL 2','Single');
echo "Namanya..".$identitas->get_nama()."<br>";
echo "Tempat Lahir..".$identitas->get_tempatlahir()."<br>";
echo "Kelas..".$identitas->get_kelas()."<br>";
echo "Status..".$identitas->get_status()."<br>"."<br>";

$identitas = new identitas('lina','Jakarta','XI RPL 1','Jomblo');
echo "Namanya..".$identitas->get_nama()."<br>";
echo "Tempat Lahir..".$identitas->get_tempatlahir()."<br>";
echo "Kelas..".$identitas->get_kelas()."<br>";
echo "Status..".$identitas->get_status()."<br>"."<br>";

$identitas = new identitas('lovelia','Garut','XI TKR 1','Menikah');
echo "Namanya..".$identitas->get_nama()."<br>";
echo "Tempat Lahir..".$identitas->get_tempatlahir()."<br>";
echo "Kelas..".$identitas->get_kelas()."<br>";
echo "Status..".$identitas->get_status()."<br>"."<br>";

$identitas = new identitas('lidya','Majalaya','XI TKR 2','Pacaran');
echo "Namanya..".$identitas->get_nama()."<br>";
echo "Tempat Lahir..".$identitas->get_tempatlahir()."<br>";
echo "Kelas..".$identitas->get_kelas()."<br>";
echo "Status..".$identitas->get_status()."<br>"."<br>";

?>