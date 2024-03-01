<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets\css\estilo.css">
    <title>Curso PHP</title>
</head>
<body>
    <header class="cabecalho">
        <h1>Curso PHP</h1>
        <h2>Ìndice dos Exercícios</h2>
    </header>
    <main class="principal">
        <div class="conteudo">
            <nav class="modulos">
                <div class="modulo verde">
                    <h3>modulo 01 - Básico</h3>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=basico&file=ola">
                                Olá php
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=basico&file=html">
                                Integração HTML
                            </a>
                        </li>
                        <li><a href="#">Exercício C</a></li>
                    </ul>
                </div>
                <div class="modulo vermelho">
                    <h3>modulo 02 - Básico</h3>
                    <ul>
                        <li><a href="#">Exercício A</a></li>
                        <li><a href="#">Exercício B</B></a></li>
                        <li><a href="#">Exercício C</a></li>
                    </ul>
                </div>
                <div class="modulo azul">
                    <h3>modulo 03 - Básico</h3>
                    <ul>
                        <li><a href="#">Exercício A</a></li>
                        <li><a href="#">Exercício B</B></a></li>
                        <li><a href="#">Exercício C</a></li>
                    </ul>
                </div>
                <div class="modulo roxo">
                    <h3>modulo 04 - Básico</h3>
                    <ul>
                        <li><a href="#">Exercício A</a></li>
                        <li><a href="#">Exercício B</B></a></li>
                        <li><a href="#">Exercício C</a></li>
                    </ul>
                </div>
                <div class="modulo laranja">
                    <h3>modulo 05 - Básico</h3>
                    <ul>
                        <li><a href="#">Exercício A</a></li>
                        <li><a href="#">Exercício B</B></a></li>
                        <li><a href="#">Exercício C</a></li>
                    </ul>
                </div>
                <div class="modulo verde-escuro">
                    <h3>modulo 06 - Básico</h3>
                    <ul>
                        <li><a href="#">Exercício A</a></li>
                        <li><a href="#">Exercício B</B></a></li>
                        <li><a href="#">Exercício C</a></li>
                    </ul>
                </div>
                <div class="modulo vermelho-escuro">
                    <h3>modulo 07 - Básico</h3>
                    <ul>
                        <li><a href="#">Exercício A</a></li>
                        <li><a href="#">Exercício B</B></a></li>
                        <li><a href="#">Exercício C</a></li>
                    </ul>
                </div>
                <div class="modulo azul-escuro">
                    <h3>modulo 08 - Básico</h3>
                    <ul>
                        <li><a href="#">Exercício A</a></li>
                        <li><a href="#">Exercício B</B></a></li>
                        <li><a href="#">Exercício C</a></li>
                    </ul>
                </div>  <div class="modulo roxo-escuro">
                    <h3>modulo 09 - Básico</h3>
                    <ul>
                        <li><a href="#">Exercício A</a></li>
                        <li><a href="#">Exercício B</B></a></li>
                        <li><a href="#">Exercício C</a></li>
                    </ul>
                </div>
            </nav>

        </div>
    </main>
    <footer class="rodape">
        COD3R & ALUNOS ₢ <?= date('D/M/Y');?>
    </footer>
    
</body>
</html>