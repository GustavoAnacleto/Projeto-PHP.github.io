<div class="titulo">Operadores_Relacionais</div>

<?php
var_dump(1 == 1);
echo'<br>';
var_dump(1 > 2);
echo'<br>';
var_dump(1 >= 2);
echo'<br>';
var_dump(1 <> 3);
echo'<br>';
var_dump(1 != 2);
echo'<br>';
var_dump(1 <= 3);
echo'<br>';
var_dump(111 == '111');
echo '<br>';
var_dump('111' === 111);
echo '<br>';
var_dump('222' != 222);
echo '<br>';
var_dump('222' !== 222);
echo '<br>';
echo '<img src="imagens\RELACIONAIS.png" alt="conteúdo"><br>';

echo'<p> Relacionais no If/Else</p><hr>';
$idade = 25;
if($idade <= 10){
    echo 'Criança';
}elseif($idade > 10 && $idade <= 18){
    echo 'Adolecente';
}elseif($idade > 18 && $idade <= 60){
    echo 'Adulto';
}else{
    echo 'Idoso';
}echo '<br><img src="imagens\idade.png" alt="conteúdo"><br>';

echo '<p>Spaceship</p><hr>';
var_dump(500 <=> 3);
var_dump(50 <=> 50);
var_dump(5 <=> 50);
echo '<br><img src="imagens\spaceship.png" alt="conteúdo"><br>';
?>


<style>
    p{
        margin-bottom: -10px;
    }
    hr{
        margin-top: -10px;
    }
</style>