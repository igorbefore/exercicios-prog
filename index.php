<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

require 'classes/carro.php';

$carros[] = new Carro();
$carros = [];
$carros[] = new Carro(1,'GM','Gol 1.0','HGG-5014','Prata');
$carros[] = new Carro(2,'BMW','Série X3','AAA-3097','Vermelha');
$carros[] = new Carro(3,'Chevrolet','Celta 1.0','BAS-3512','Preta');

$carro = new Carro();
$carro->setId(4);
$carro->setFabricante('Fiat');
$carro->setModelo('Palio');
$carro->setPlaca('HRE-1987');
$carro->setCor('Branco');
$carros[] = $carro;

?>

<html>
<head>
<title>Desafio programador</title>
    <style>
        table,th,td{
            border: 1px solid black;
        }
    </style>
</head>
<body>
<table>


    <tr>
        <th>Registro</th>
        <th>Fabricante</th>
        <th>Modelo</th>
        <th>Placa</th>
        <th>Cor</th>

        <?php
        for ($i =0; $i < 4;$i++)
        {
            echo "<tr>";
            echo "<td>".$carros[$i]->getId()."</td>";
            echo "<td>".$carros[$i]->getFabricante()."</td>";
            echo "<td>".$carros[$i]->getModelo()."</td>";
            echo "<td>".$carros[$i]->getPlaca()."</td>";
            echo "<td>".$carros[$i]->getCor()."</td>";
            echo "</tr>";

        }
        ?>

</table>
</body>
</html>

<?php
