<div class="titulo">Operacionais Relacionais</div>

<?php
var_dump(1 == 1);
var_dump(1 > 1);
var_dump(1 >= 1);
var_dump(1 < 1);
var_dump(1 <= 1);
var_dump(1 != 1); //diferente
var_dump(1 <> 1); //diferente

var_dump(111 == '111'); 
var_dump(111 === '111'); //estritamente iguais
var_dump(111 != '111');
var_dump(111 !== '111'); //estritamente diferentes

echo "<p class='divisao'>Relacionais no if/Else</p><hr>";
$idade = 70;
if($idade < 18){
    echo "Menor de idade = $idade anos<br>";
}else if($idade <= 65){
    echo "Adulto = $idade anos<br>";
}else{
    echo "Terceira idade = $idade anos";
}

echo'<p class="divisao">Spaceship</p><hr>';
var_dump(500 <=> 3); //retorna 1 quando o primeiro é maior
var_dump(50 <=> 50); //retorna 0 quando são iguais
var_dump(5 <=> 50); //retorna -1 quando o segundo é maior

?>

