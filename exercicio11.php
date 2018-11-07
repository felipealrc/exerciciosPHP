<?php
$divisores = array(10,5,2);
$num = 90;
$algum = false;
foreach($divisores as $divisor  ){
    if($num%$divisor === 0){
        echo "{$num} eh divisivel por {$divisor}<br/>";
        $algum =true;
    }
}
if(!$algum){
    echo "{$num} não é divisivel por 10,5,2";
}