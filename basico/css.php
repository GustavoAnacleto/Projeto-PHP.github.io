<div class="titulo">Integração CSS</div>

<h1 center>
    <?php
        echo"Aqui vou começar um texto e depois vou continua-lo coma a tag small logo depois daqui ";
        echo"<small>" ;
        echo "Apartir daqui estamos dentro da tag small que acaba aqui";
        echo "</small>";
        echo " Assim mostramos um pouco da interação entre HTML e PHP ";
    ?>
</h1>
<?= "<div center azul> Aqui estou dentro de uma div na tag de php que faz apenas uma sentência</div>"?>
<br>
<div center><button dobro><?= "criei um botão para receber código php ao clicar ele executa o código php"?></button></div>

<style>
    button{
        padding: 5px <?= 2*10 ?>px;
        background-color: #4286f4;
        color: #EEE;
        font-weight: bold;
        border-radius: 10px;
    }
    [center]{
        display: flex;
        justify-content: center;
    }
    [azul]{
        color: #4286f4;
    }
    [dobro]{
        font-size: 2rem;
    }
</style>