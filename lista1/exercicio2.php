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
        return "Nome da Universidade: " . $this->nomeFacul;
    }
}

class Pessoa extends Universidade{
    public $nome;

    public function __construct($nome,$nomeFacul){
        $this->nome = $nome;
        $this->nomeFacul = $nomeFacul;
        parent::informaFacul();

    }


    public function apresentar() {
        return "Olá, meu nome é {$this->nome} e a faculdade que eu estudo é {$this->nomeFacul}";
    }
}

$aluno1 = new Pessoa("Rafa","Univille");
$aluno1->apresentar();
