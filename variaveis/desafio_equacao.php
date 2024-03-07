<div class="titulo">Desafio Equação</div>


<?php
echo '<img src="imagens\equacao.png" alt="imagem da equacao">';
$A1 = (6 *(3+2)) **2;
$A2 = 3*2;
$a3 = $A1 / $A2;

$B1 = ((1-5)*(2-7));
$B2 = 2;
$b3 = (($B1 / $B2) ** 2 );

$C1 = ($a3 - $b3)**3;
$C2 = 10**3;
$result = $C1 / $C2;
echo '<br>';
echo 'Resultado = ', $result;
echo '<br><br><br>';
print('$A1 = (6 *(3+2)) **2;<br>
$A2 = 3*2;<br>
$a3 = $A1 / $A2;<br>
$B1 = ((1-5)*(2-7));<br>
$B2 = 2;<br>
$b3 = (($B1 / $B2) ** 2 );<br>
$C1 = ($a3 - $b3)**3;<br>
$C2 = 10**3;<br>
$result = $C2 / $C1;<br>
echo Resultado = , $result;');


?>