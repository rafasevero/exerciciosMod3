<?php

class Objeto{

    public $largura;
    public $altura;

    public function __construct($largura,$altura){
        $this->largura = $largura;
        $this->altura = $altura;
    }

    public function calculaArea() {
        return 0; 
    }
}

class Triangulo extends Objeto{
    protected $tipo;
    
    public function __construct($largura, $altura, $tipo) {
        parent::__construct($largura, $altura);
        $this->tipo = $tipo;
    }
    public function calculaArea() {
        return ($this->largura * $this->altura) / 2;
    }
    public function getTipo() {
        return $this->tipo;
    }

}

class Retangulo extends Objeto{

    public function calculaArea() {
        return $this->largura * $this->altura;
    }

    public function verificaQuadrado(){
        return $this->largura === $this->altura;
    }
}

$triangulo = new Triangulo(5, 10, "Isósceles");
$retangulo = new Retangulo(4, 4);

echo "Área do triângulo: " . $triangulo->calculaArea() . "\n";
echo "Tipo do triângulo: " . $triangulo->getTipo() . "\n";

echo "Área do retângulo: " . $retangulo->calculaArea() . "\n";
echo "O retângulo é quadrado? " . ($retangulo->verificaQuadrado() ? "Sim" : "Não") . "\n";