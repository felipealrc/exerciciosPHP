<?php

if(isset($_POST['num']))
    switch ($_POST['num']){
        case 1 :
            echo 'Jan';
            break;
        case 2 :
            echo 'Feb';
            break;
        case 3 :
            echo 'Mar';
            break;
        case 4 :
            echo 'Abr';
            break;
        case 5 :
            echo 'Mai';
            break;
        case 6 :
            echo 'Jun';
            break;
        case 7 :
            echo 'Jul';
            break;
        case 8 :
            echo 'Ago';
            break;
        case 9 :
            echo 'Set';
            break;
        case 10 :
            echo 'Out';
            break;
        case 11 :
            echo 'Nov';
            break;
        case 12 :
            echo 'Dez';
            break;
        default:
            echo 'NOPE!';
            break;
    }
        

?>
<form action='exercicio13.php' method='post'>
    <input name='num' type='int'>
    <input type='submit'>
</form>