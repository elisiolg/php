<div class="titulo">Desafio Switch</div>

<form action="#" method="post">
    <input type="text" name="param">
    <select name="conversao" id="conversao">
        <option value="km-milha">Km > Milha</option>
        <option value="milha-km">Milha > Km</option>
        <option value="metro-km">Metros > Km</option>
        <option value="km-metro">Km > Metros</option><
        <option value="celsius-fahrenheit">Celsius > Fahrenheit</option><
        <option value="fahrenheit-celsius">Fahrenheit > Celsius</option><
    </select>
    <button>Calcular</button>    
</form>

<style>
    form > *{
        font-size : 1.8rem
    }
</style>


<?php
if(isset($_POST['param']) && isset($_POST['conversao'])){
$valor = $_POST['param'];
$medida = $_POST['conversao'];

switch($medida){
    case 'km-milha':
        $convertido = $valor * 1.6;
        echo "<br>$valor Km para Milhas = $convertido Milhas";
    break;
    case 'milha-km':
        $convertido = $valor / 1.6;
        echo "<br>$valor Milhas para Km = $convertido Km";
    break;
    case 'metro-km':
        $convertido = $valor / 1000;
        echo "<br>$valor Metros para Km = $convertido Km";
    break;
    case 'km-metro':
        $convertido = $valor * 1000;
        echo "<br>$valor Km para Metros = $convertido metros";
    break;
    case 'celsius-fahrenheit':
        $convertido = 1.8 * $valor + 32;
        echo "<br>{$valor}° Celsius = {$convertido}° Fahrenheit";
    break;   
    case 'fahrenheit-celsius':
        $convertido = ($valor - 32) / 1.8;
        echo "<br>{$valor}° Fahrenheit = {$convertido}° Celsius";
    break;     
}
}