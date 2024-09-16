<?php

    class Pessoa{
        public $nome;
        public $idade;
        public $dia_nasc;
        public $mes_nasc;
        public $ano_nasc;

        public function calculaIdade(){
            $this->ano_nasc;
            return "Idade: ". 2024 - $this->ano_nasc . " anos\n";
        }
        public function informaIdade(){
            return $this->calculaIdade;
        }
        public function informaNome(){
            $this->nome;
            return "Nome: \n". $this->nome;
        }
        public function ajustaDataDeNascimento(){
            $this->dia_nasc;
            $this->mes_nasc;
            $this->ano_nasc;
            return "$this->dia_nasc / $this->mes_nasc / $this->ano_nasc";
        }
    }

    $pessoa1 = new Pessoa;
    $pessoa1->nome = readline("Digite seu nome: ");
    $pessoa1->dia_nasc = readline("Digite o dia do nascimento: ");
    $pessoa1->mes_nasc = readline("Digite o mês de nascimento: ");
    $pessoa1->ano_nasc = readline("Digite o ano do nascimento: ");

    echo $pessoa1->calculaIdade();
    echo $pessoa1->informaNome();
    echo $pessoa1->ajustaDataDeNascimento();
