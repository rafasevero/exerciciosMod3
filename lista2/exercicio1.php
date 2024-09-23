<?php

class Funcionario {
    public $id;
    public $nome;
    public $cargo;
    public $salario;

    public function __construct($id, $nome, $cargo, $salario) {
        $this->id = $id;
        $this->nome = $nome;
        $this->cargo = $cargo;
        $this->salario = $salario;
    }

    public function calculaSalario() {
        return $this->salario;
    }
}

class Gerente extends Funcionario {
    public $quantColaboradores;

    public function __construct($id, $nome, $cargo, $salario, $quantColaboradores) {
        parent::__construct($id, $nome, $cargo, $salario);
        $this->quantColaboradores = $quantColaboradores;
    }

    public function calculaSalario() {
        return $this->salario + ($this->quantColaboradores * 50);
    }
}

// Exemplo de uso
$funcionario1 = new Funcionario(1, "Rafaela", "Programadora", 4000);
$gerente1 = new Gerente(2, "Rafael", "Gerente", 78000, 10); // Passando a quantidade de colaboradores

echo $funcionario1->nome . " Cargo: " . $funcionario1->cargo . " Salário: R$" . $funcionario1->calculaSalario() . "\n";
echo $gerente1->nome . " Cargo: " . $gerente1->cargo . " Salário: R$" . $gerente1->calculaSalario() . "\n";

