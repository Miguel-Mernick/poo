<?php
    $aluno = [
        "nome" => "miguel",
        "idade" => 18,

        "estudar" => function() use (&$aluno){
            echo "{$aluno['nome']} está estudando";
        }
    ];

    $aluno ['estudar']();
?>