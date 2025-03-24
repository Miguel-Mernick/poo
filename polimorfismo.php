<?php
    class pessoa {
        public $nome;
        public function __construct($nome)
        {
            $this->nome = $nome;
        }
        public function apresentar(){
            echo "Olá, sou {$this->nome}";
        }
    }
    // a classe aluno herda de pessoa e sobrescreve o metodo apresentar

    class Aluno extends pessoa{
        public function apresentar(){
            echo "oi! meu nome é {$this->nome} e sou aluno <br>";
        }
    }

    class professor extends pessoa{
        public function apresentar(){
            echo "oi! meu nome é {$this->nome} e sou professor";
        }
    }

    $miguel = new Aluno ("miguel");
    $raul = new professor ("raul");


$miguel->apresentar(); 
$raul->apresentar(); 
?>