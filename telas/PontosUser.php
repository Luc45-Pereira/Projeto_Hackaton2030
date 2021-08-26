<!DOCTYPE html>
<html>
    <head>
        <title>Projeto Hackaton</title>
        <link rel="stylesheet" type="text/css" href="index.css" media="screen" />
        <link rel="stylesheet" type="text/css" href="Css_files/alterar.css" media="screen" />
        <meta http-equiv=”Content-Type” content=”text/html; charset="utf-8"/>
        <script src="js/menu.js"></script>
        <script type="text/javascript" src="http://livejs.com/live.js"></script>
    </head>
    <body>
        <?php
            session_start();
        ?>
        <header class="top">
            <img src="https://www.gerar.org.br/wp-content/uploads/logo-gerar.png" id="logo">
            <nav id="nav">
                <button id="btn" onclick="togleMenu()">menu
                <span id="h"></span>
                </button>
                <ul class="menu">
                    <li><a href="PHP/PerfilUser.php">Perfil</a></li>
                    <li><a href="catalogo.php">Resgatar</a></li>
                    <li><a href="../index.html">SAIR</a></li>
                </ul> 
            </nav>
        </header>
        <section>
            <h1>Quantidade de Lixo descartado</h1>
            <input type="submit" value="<?php echo $_SESSION['KgLix']; ?>">
            <h1>Pontos</h1>
            <input type="submit" value="<?php echo $_SESSION['ponto']; ?>">
        </section>
    </body>
</html>