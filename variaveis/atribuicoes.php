<div class="titulo">Atribuições</div>
<span>
<?php
$title = 'Atribuições $title = Atribuições;<br>';

$numero = 10;
echo '<br>' . $numero;
$numero = $numero -3;
echo '<br>' . $numero;
$numero = $numero + 1.5;
echo '<br>' . $numero;
$numero--;
echo '<br>' . $numero;
--$numero;
echo '<br>'. $numero;
$numero++;
echo '<br>'. $numero;
++ $numero;
echo '<br>'. $numero;
$numero-= 5;
echo '<br>'. $numero;
$numero+= 7;
echo '<br>'. $numero;
$numero*= 8;
echo '<br>'. $numero;
$numero/= 2;
echo '<br>'. $numero;
$numero%= 6;
echo '<br>'. $numero;
$numero**= 3;
echo '<br>'. $numero;

$texto = 'Esse é um texto';
echo '<br>'. $texto;
$texto = $texto . ' qualquer ';
echo '<br>'. $texto;
$texto .= 'de verdade';
echo '<br>'. $texto;
echo '<br><br><br>';

//$variavelInexistente = 'valor existente';
echo '<br>' . $variavelInexistente;
$valor = $variavelInexistente ?? 'Valor default';
echo '<br>'. $valor;



?>
</span>
<span>
<?php
print('<br><br><br>$title = Atribuições;<br>

$numero = 10;<br>
echo  . $numero;<br>
$numero = $numero -3;<br>
echo  . $numero;<br>
$numero = $numero + 1.5;<br>
echo   . $numero;<br>
$numero--;<br>
echo  . $numero;<br>
--$numero;<br>
echo . $numero;<br>
$numero++;<br>
echo . $numero;<br>
++ $numero;<br>
echo . $numero;<br>
$numero-= 5;<br>
echo . $numero;<br>
$numero+= 7;<br>
echo . $numero;<br>');
?>
</span>