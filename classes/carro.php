<?php
class Carro {

    private $id;
    private $fabricante;
    private $modelo;
    private $placa;
    private $cor;

    function __construct($id=null, $fabricante=null, $modelo=null, $placa=null, $cor=null)
    {
        $this->id = $id;
        $this->fabricante = $fabricante;
        $this->modelo = $modelo;
        $this->placa = $placa;
        $this->cor = $cor;

    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function setFabricante($fabricante)
    {
        $this->fabricante = $fabricante;
    }

    public function setModelo($modelo)
    {
        $this->modelo = $modelo;
    }

    public function setPlaca($placa)
    {
        $this->placa = $placa;
    }

    public function setCor($cor)
    {
        $this->cor = $cor;
    }


    public function getFabricante()
    {
        return $this->fabricante;
    }

    public function getModelo()
    {
        return $this->modelo;
    }

    public function getPlaca()
    {
        return $this->placa;
    }

    public function getCor()
    {
        return $this->cor;
    }
}
?>
