<div class="titulo">Operadores Lógicos</div>

<?php
echo "<p class='divisao'>V ou F</p><hr>";
var_dump(true);

var_dump(!true);

echo "<p class='divisao'>Tabela Verdade 'AND' (E)</p><hr>";
var_dump(true && true); //verdade
var_dump(true && false); //falso
var_dump(false && true); //falso
var_dump(false && false); //falso
echo "<br>";
var_dump(true and true); //verdade
var_dump(true and false); //falso
var_dump(false and true); //falso
var_dump(false and false); //falso

echo "<p class='divisao'>Tabela Verdade 'OR' (OU)</p><hr>";
var_dump(true || true); // verdade
var_dump(true || false); // verdade
var_dump(false || true); // verdade
var_dump(false || false); // falso
echo "<br>";
var_dump(true or true); // verdade
var_dump(true or false); // verdade
var_dump(false or true); // verdade
var_dump(false or false); // falso

echo "<p class='divisao'Tabela Verdade 'SOR' (OU Exclusivo)</p><hr>";
var_dump(true xor true); // falso
var_dump(true xor false); // verdade
var_dump(false xor true); // verdade
var_dump(false xor false); // falso
echo "<br>";
var_dump(true != true); // falso
var_dump(true != false); // verdade
var_dump(false != true); // verdade
var_dump(false != false); // falso

echo "<p class='divisao'>Exemplo</p><hr>";
$idade = 54;
$sexo = 'M';

if($idade >= 60 && $sexo === 'F'){
    echo "Pode se aposentar -> $sexo";
}elseif($idade >=60 && $sexo === 'M'){
    echo "Pode se aposentar -> $sexo";
}else{
    echo "Vai ter que trabalhar mais um pouco...";
}