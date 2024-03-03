<div class="titulo"> Tipo String</div>

<?php
    echo 'Eu sou uma string';
    echo'<br>';
    var_dump("Eu também");
    echo '<br>Acima usamos o var_dump e encontramos o problema que ele conta o acento como uma string resultando 10 onde <br>
    sabemos que "Eu Também" tem 9 strings com 8letras e 1espaço.';
    echo'<br>';
    echo '<p>Contanação</p>';

    echo 'Para contatenar em php'.' usamos o . "ponto final" <br>';
    echo "'usando aspas simples como texto porque iniciei com aspas duplas'".' <br>"usando aspas duplas para o texto porque iniciei com aspas simples"';
    echo'<br>';
    print(" para usar o \\ no texto precisamos adiciona-lo 2x \\\\ ");
    echo'<br>';
    print("Usando o print() <br>");
    echo'<br>';

    echo '<p>Funções</p>';
    echo'<br>';
    echo strtoupper('colocando todas as letras maiúsculas').'<br>'. strtolower("COLOCANDO TODAS AS LETRAS MINÚSCULAS");
    echo'<br>';
    echo ucfirst('só a primeira letra maiúscula').'<br>'. ucwords('Todas as palavras começam com maiúsculas');
    echo'<br>';
    echo mb_strlen("Eu também"). ' Aqui resolve a contagem de strings 9';
    echo'<br>';
    echo substr('Só uma parte do texto da 7 letra as proximas 6', 7,6);
?>