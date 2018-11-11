<?php

$funcionarios =  array('renan','juan','luis','felipe','martins','alarcon','joão','arruda','renato','jose');
$i = 0;

do{
    echo "$funcionarios[$i]<br>";
    $i++;
}while($i< count($funcionarios));


