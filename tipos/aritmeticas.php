<div class="titulo">Op. Aritméticas</div>

<?php
echo 1 + 1, '=> 1 + 1 <br>';
var_dump(1 + 1);
echo '<br>';
echo 1 + 2.5, '=> 1 + 2.5 <br>';
echo 10 - 2, '=> 10 - 2 <br>';
echo 2 * 5, '=> 2 * 5 <br>';
echo 7 / 4, '=> 7 / 4 <br>';
echo intdiv(7,4), '=> aqui usamos intdiv(7,4) que retorna a divisão inteira. <br>';
echo round(7/4), '=> aqui usamos round(7/4) que retorna o inteiro mais próximo ex: 1.51 volta 2 ** 1.49 volta 1 <br>';
echo 7 % 4, '=> Aqui usamos 7%4 que retorna o resto da divisão<br>';
echo 4 ** 2, '=> aqui usamos potencialização 42 elevado a 4 <br>';

echo '<p>Precedência</p>';
echo ' ** potencialização <br>  / Divisão, * multiplicação e % resto da divisão <br>  + adição e - subtração';