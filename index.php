<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

require 'classes/carro.php';

$carros = [];
$carros[] = new Carro(1,'GM','Gol 1.0','HGG-5014','Prata');
$carros[] = new Carro(2,'BMW','Série X3','AAA-3097','Vermelha');
$carros[] = new Carro(3,'Chevrolet','Celta 1.0','BAS-3512','Preta');


?>
