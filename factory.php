<?php 

require_once 'interface.php';
require_once 'class.php';

class FigurasFactory
{
    public static function crear($tipo,$parametros)
    {
        switch ($tipo) {
            case "cuadrado":
                $figura = new Cuadrado($parametros['base'],$parametros['altura']);
            break;
            case "triangulo":
                $figura = new Triangulo($parametros['base'],$parametros['altura']);
            break;
            case "circulo":
                $figura = new Circulo($parametros['diametro']);
            break;     
        }     
        return $figura;
    }
}



?>