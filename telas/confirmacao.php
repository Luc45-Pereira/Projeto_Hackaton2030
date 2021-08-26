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
        header('Content-Type: text/html; charset=utf-8');
        $nome = $texto = ($_POST['nome']);
        $img = $texto = ($_POST['img']);
    ?>

        <header class="top">
            <img src="https://www.gerar.org.br/wp-content/uploads/logo-gerar.png" id="logo">
            <nav id="nav">
                <button id="btn" onclick="togleMenu()">menu
                <span id="h"></span>
                </button>
                <ul class="menu">
                    <li><a href="PontosUser.php">Pontos</a></li>
                    <li><a href="catalogo.html">Resgatar</a></li>
                    <li><a href="PHP/PerfilUser.php">Perfil</a></li>
                    <li><a href="../index.html">SAIR</a></li>
                </ul> 
            </nav>  
        </header>
        <section class="flex">
            <div>
                <form method="POST" action="PHP/AlterarSenha.php">
                    <img id="prod1" src="<?php echo $img; ?>" alt="">
                    <p><?php echo $nome; ?></p>
                    <input type="submit" value="Confirmar">
                </form>
            </div>
            
        </section>
    </body>
</html>