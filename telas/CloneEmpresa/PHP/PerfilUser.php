<!DOCTYPE html>
<html>
    <head>
        <title>Projeto Hackaton</title>
        <link rel="stylesheet" type="text/css" href="../index.css" media="screen" />
        <meta http-equiv=”Content-Type” content=”text/html; charset="utf-8"/>
        <script src="../js/menu.js"></script>
        <script type="text/javascript" src="http://livejs.com/live.js"></script>
    </head>
    <body>
        <header class="top">
            <img src="https://www.gerar.org.br/wp-content/uploads/logo-gerar.png" id="logo">
            <nav id="nav">
                <button id="btn" onclick="togleMenu()">menu
                <span id="h"></span>
                </button>
                <ul class="menu">
                    <li><a href="../CadPontosUser.html">Cadastrar Pontos</a></li>
                    <li><a href="../Upload.html">Novo Produto</a></li>
                    <li><a href="../../../index.html">SAIR</a></li>
                </ul> 
            </nav>
            <?php
                session_start();
            ?>
        </header>
        <section>
            <form action="../AlterarSenha.html">
                <h1>Nome: <?php echo $_SESSION["nome"];?></h1>
                <h1>Cpf: <?php echo $_SESSION["Cpf"];?></h1>
                <h1>Senha: <?php echo $_SESSION["senha"];?></h1>
                <input Type="submit" value="Alterar Senha">
            </form>
            
        </section>
    </body>
</html>
<!--id17421290_l  user
2B*LhEd!SS1b6ZlVphwn senha
id17421290_projetogerar bd-->