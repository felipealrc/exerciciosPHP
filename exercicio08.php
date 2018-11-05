<?php

echo "Utilizando a instrução SWITCH crie um cardápio com 6 opções de prato que vão ser \"selecioanados\"
 (mostrado em seu programa) de acordo com o número do item (1,2,3..)";
    
if(isset($_POST['menu'])){
    $prato;
    $menu = $_POST['menu'];
    switch ($menu) {
        case "1" : 
            $prato = 'pizza';
            break;
        case "2" :
            $prato = 'macarrao';
            break;        
        case "3" : 
            $prato = 'sorvete';
            break;
        default : 
            $prato = 'pastel';
            break;
    }
    echo "<pre>";
    echo $prato;
    echo "</pre>";
}

?> 

<form method="post" action="exercicio08.php">
    Menu:
    <select name="menu">
        <option value='0'>0</option>
        <option value='1'>1</option>
        <option value='2'>2</option>
        <option value='3'>3</option>
        <option value='4'>4</option>
    </select>
    <input type="submit" />
</form>