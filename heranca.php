<?php
class pessoa{
    public $nome;
    public $idade;

    public function __construct($nome, $idade)
    {
        $this->nome = $nome;
        $this->idade = $idade;

    }
 
    public function apresentar (){
        echo "Eu sou o {$this->nome} e tenho um BatMovel que tem {$this->idade} anos de existencia";
    }
}
// a classe aluno herda de pessoas
    class Aluno extends pessoa{

        public function estudar (){
          echo "{$this->nome} está lavando o Alfred Pennyworth <br> ";
        }
    }

    class mordomo extends pessoa{

        public function ensinar (){
            echo "{$this->nome} esta pagando a conta de luz da BatCaverna";
        }
    }

    $Batman = new Aluno ("Batman", 40, 0);
    $Alfred = new mordomo ("Alfred Pennyworth", 45);

    $Batman->estudar();
    $Alfred->ensinar();
?>