<?php
$times = array('Palmeiras',
                'Internacional',
                'Flamengo',
                'São',
                'Grêmio',
                'Atlético',
                'Atlético',
                'Santos',
                'Cruzeiro',
                'Botafogo',
                'Fluminense',
                'Corinthians',
                'Bahia',
                'Vasco',
                'Ceará',
                'Sport',
                'Vitória',
                'América',
                'Chapecoense',
                'Paraná');
echo "<table>";
foreach($times as $time){
    echo "<tr><td>{$time}</td></tr>";
}
echo "</table>";