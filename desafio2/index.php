<?php

// Classe base Pessoa
class Pessoa {
    public $nome;
    public $idade;

    public function __construct($nome, $idade) {
        $this->nome = $nome;
        $this->idade = $idade;
    }

    public function apresentar() {
        return "Olá, meu nome é " . $this->nome . " e tenho " . $this->idade . " anos.";
    }
}

// Classe Aluno herda de Pessoa
class Aluno extends Pessoa {
    public function __construct($nome, $idade) {
        parent::__construct($nome, $idade);
    }

    // Método específico de Aluno
    public function falar() {
        return $this->nome . " diz: 'Estou estudando para a prova!'";
    }
}

// Classe Professor herda de Pessoa e implementa encapsulamento
class Professor extends Pessoa {
    // Atributo privado
    private $disciplina;

    public function __construct($nome, $idade, $disciplina) {
        parent::__construct($nome, $idade);
        $this->disciplina = $disciplina;
    }

    // Método específico de Professor
    public function falar() {
        return $this->nome . " diz: 'Hoje vamos aprender sobre " . $this->disciplina . ".'";
    }

    // Método getter para acessar o valor da disciplina
    public function getDisciplina() {
        return $this->disciplina;
    }
}

// Criando instâncias de Alunos
$aluno1 = new Aluno("Lucas", 18);
$aluno2 = new Aluno("Maria", 20);
$aluno3 = new Aluno("Pedro", 17); // Novo Aluno
$aluno4 = new Aluno("Joana", 19); // Novo Aluno

// Criando instâncias de Professores
$professor1 = new Professor("Dr. José", 45, "Matemática");
$professor2 = new Professor("Prof. Ana", 38, "Física");
$professor3 = new Professor("Prof. Carla", 50, "Química"); // Novo Professor
$professor4 = new Professor("Prof. Luís", 42, "História"); // Novo Professor

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Herança e Encapsulamento</title>

</head>
<body>

    <h1>Bem-vindo ao Sistema de Alunos e Professores!</h1>
    <div id="resultados">

        <div class="personagem">
            <h2>Aluno <?= $aluno1->nome ?></h2>
            <p><?= $aluno1->falar(); ?></p>
        </div>
        <div class="personagem">
            <h2>Aluno <?= $aluno2->nome ?></h2>
            <p><?= $aluno2->falar(); ?></p>
        </div>
        <div class="personagem">
            <h2>Aluno <?= $aluno3->nome ?></h2>
            <p><?= $aluno3->falar(); ?></p>
        </div>
        <div class="personagem">
            <h2>Aluno <?= $aluno4->nome ?></h2>
            <p><?= $aluno4->falar(); ?></p>
        </div>

        <div class="personagem">
            <h2>Professor <?= $professor1->nome ?></h2>
            <p><?= $professor1->falar(); ?></p>
        </div>
        <div class="personagem">
            <h2>Professor <?= $professor2->nome ?></h2>
            <p><?= $professor2->falar(); ?></p>
        </div>
        <div class="personagem">
            <h2>Professor <?= $professor3->nome ?></h2>
            <p><?= $professor3->falar(); ?></p>
        </div>
        <div class="personagem">
            <h2>Professor <?= $professor4->nome ?></h2>
            <p><?= $professor4->falar(); ?></p>
        </div>

        <!-- Informações do Professor -->
        <div class="personagem">
            <h2>Informações do Professor <?= $professor1->nome ?></h2>
            <p>Disciplina: <?= $professor1->getDisciplina(); ?></p>
        </div>
    </div>

</body>
</html>
