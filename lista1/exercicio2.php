<?php
//Fazer um programa com as seguintes características:
//Uma classe chamada Universidade que terá como atributo um nome e terá um método para informar o seu nome.
//Relacionar a classe Pessoa com a classe Universidade. Cada pessoa poderá ser associada a uma Universidade.
//A classe Pessoa, por sua vez, terá um método que dirá seu nome e em que universidade trabalha.
//Criar dois ou mais objetos Universidade e dois ou mais objetos Pessoa (uma para cada universidade).

class Universidade{
    public $nomeFacul;

    public function __construct($nomeFacul){
        $this->nomeFacul = $nomeFacul;
    }

    public function informaFacul(){
        return $this->nomeFacul;
    }
}

class Pessoa extends Universidade{
    public $nome; 
    private $universidade;

    public function __construct($nome,Universidade $universidade){
        $this->nome = $nome;
        $this->universidade = $universidade;

    }


    public function apresentar() {
        return "Olá, meu nome é {$this->nome} e a faculdade que trabalho é {$this->universidade->informaFacul()}\n";
    }
}

$universidade1 = new Universidade("UFSC");
$universidade2 = new Universidade("Unicentro");

$pessoa1 = new Pessoa("Rafael Amaral",$universidade1);
$pessoa2 = new Pessoa("Rafaela Severo",$universidade2);

echo $pessoa1->apresentar();
echo $pessoa2->apresentar();