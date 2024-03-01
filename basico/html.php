<div class="titulo">Integração HTML</div>

<h1>
    <?php
        echo"Aqui vou começar um texto e depois vou continua-lo coma a tag small logo depois daqui ";
        echo"<small>" ;
        echo "Apartir daqui estamos dentro da tag small que acaba aqui";
        echo "</small>";
        echo " Assim mostramos um pouco da interação entre HTML e PHP ";
    ?>
</h1>
<?= "<div> Aqui estou dentro de uma div na tag de php que faz apenas uma sentência</div>"?>
<br>
<div><button><?= "criei um botão para receber código php ao clicar ele executa o código php"?></button></div>
