<?php
$capitais = array('Rio Branco',
'Maceió',
'Macapá',
'Manaus',
'Salvador',
'Fortaleza',
'Brasília',
'Vitória',
'Goiânia',
'São Luís',
'Cuiabá',
'Campo Grande',
'Belo Horizonte',
'Belém',
'João Pessoa',
'Curitiba',
'Recife',
'Teresina',
'Rio de Janeiro',
'Natal',
'Porto Alegre',
'Porto Velho',
'Boa Vista',
'Florianópolis',
'São Paulo',
'Aracaju',
'Palmas');

if(isset($_POST['cidade'])){
    echo (in_array($_POST['cidade'],$capitais)?"eh uma capital": "apenas uma cidade");
}
?>

<form action='exercicio20.php' method="post">
    <input type="text" name="cidade"/>
    <input type="submit"/>
</form>