<?php


require 'classes/carro.php';

    $carros[] = new Carro();
    $carros = [];
    $carros[] = new Carro(1,'GM','Gol 1.0','HGG-5014','Prata');
    $carros[] = new Carro(2,'BMW','Série X3','AAA-3097','Vermelha');
    $carros[] = new Carro(3,'Chevrolet','Celta 1.0','BAS-3512','Preta');

    $Id = isset($_GET["Id"])?$_GET["Id"]:"nao informado";
    $Fabricante = isset($_GET["Fabricante"])?$_GET["Fabricante"]:"nao informado";
    $Modelo = isset($_GET["Modelo"])?$_GET["Modelo"]:"nao informado";
    $Placa = isset($_GET["Placa"])?$_GET["Placa"]:"nao informado";
    $Cor = isset($_GET["Cor"])?$_GET["Cor"]:"nao informado";

    $carro = new Carro();
    $carro->setId($Id);
    $carro->setFabricante($Fabricante);
    $carro->setModelo($Modelo);
    $carro->setPlaca($Placa);
    $carro->setCor($Cor);
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
        <a href="index.php">Voltar</a>
    </body>
</html>
