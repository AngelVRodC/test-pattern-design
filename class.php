<?php
class Circulo implements Figura 
{
    const TIPO ="Circulo";
    private $diametro;

    function __construct($diametro)
    {
        $this->diametro=$diametro;

    }

    public function getBase()
    {
        return null;
    }
    public function getAltura()
    {
        return null;
    }
    public function getDiametro()
    {
        return $this->diametro;
    }
    public function getSuperficie()
    {
        return ((pow(($this->diametro/2),2))*3.14);
    }
    public function getTipo()
    {
        return self::TIPO;
    }

}



class Triangulo implements Figura 
{
    const TIPO ="Triangulo";
    private $base;
    private $altura;

    function __construct($base,$altura)
    {
        $this->base=$base;
        $this->altura=$altura;      

    }

    public function getBase()
    {
        return $this->base;
    }
    public function getAltura()
    {
        return $this->altura;
    }
    public function getDiametro()
    {
        return null;
    }
    public function getSuperficie()
    {
        return ($this->base*$this->altura)/2;
    }
    public function getTipo()
    {
        return self::TIPO;
    }

}

class Cuadrado implements Figura 
{
    private $base;
    private $altura;

    function __construct($base,$altura)
    {
        $this->base=$base;
        $this->altura=$altura;
    }

    const TIPO ="Cuadrado";

    public function getBase()
    {
        return $this->base;
    }
    public function getAltura()
    {
        return $this->altura;
    }
    public function getDiametro()
    {
        return null;
    }
    public function getSuperficie()
    {
        return ($this->base*$this->altura);
    }
    public function getTipo()
    {
        return self::TIPO;
    }

}
?>