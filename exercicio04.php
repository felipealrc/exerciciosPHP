
<?php

echo "Utilizando o que vimos na última aula, imprima, utilizando-se de variáveis, os dados de uma pessoa como: Nome, sobrenome, endereço, idade e telefone.";

$nome = $sobrenome = $idade = $telefone = $endereco;

$nome = 'felipe';
$sobrenome = 'alarcon';
$idade = 24;
$telefone = '(11)91234-5678';
$endereco = 'rua de papel, n123123';

echo "{$nome} {$sobrenome} mora na {$endereco}, tem {$idade} anos e o seu zap eh {$telefone}";

