<?php 

if(isset($_POST['idade'])&& isset($_POST['sexo'])){
    $idade = $_POST['idade'];
    $sexo = $_POST['sexo'];

    if($sexo = 'F'  && $idade < 25 ){
        echo 'aceita';
    }
    else
        echo 'não aceito(a)';
}
?>

<form action=exercicio12.php method='post'>
    idade <input type=number name="idade"/>
    <select name='sexo'>
        <option value ='M'>Masculino</option>
        <option value ='F'>Feminino</option>
    </select>

    <input type='submit'/>
</form>


