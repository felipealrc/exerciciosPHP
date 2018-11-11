<?php  
    if(isset($_POST['nome']) && isset($_POST['turma']) &&
        isset($_POST['sobrenome']) && isset($_POST['periodo'])){
        echo "o aluno {$_POST['nome']} {$_POST['sobrenome']} esta matriculado em {$_POST['turma']} no perido da {$_POST['periodo']}";
    }
