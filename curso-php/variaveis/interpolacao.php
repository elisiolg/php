<div class="titulo">Interpolação</div>

<?php
$num = 10;
echo $num;
echo '<br> $num';
echo "<br> $num";

$texto = "A sua nota é: $num";
echo "<br> $texto";

$objeto = 'caneta';
echo "<br>Eu tenho 5 $objeto s";
echo "<br>Eu tenho 5 {$objeto}s"; //concatenação em uma variável
echo "<br>Eu tenho 5 { $objeto}s mas perdi 3 {$objeto }s"; //cuidado com chaves no início das chaves