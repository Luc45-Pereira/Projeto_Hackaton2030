<?php
    include 'PHP/Comunicacao_bd.php';
?>


<!DOCTYPE html>
<html>
    <head>
        <title>Projeto Hackaton</title>
        <link rel="stylesheet" type="text/css" href="index.css" media="screen" />
        <meta http-equiv=”Content-Type” content=”text/html; charset="utf-8"/>
        <script language="javascript">
            function confirmacao(id,nome,valor){
                var resposta = confirm("Deseja resgatar" + " "+ "Produto:" + " " + nome + " " + "Valor em Pontos:" + " " + valor + "?");
                if(resposta == true)
                {
                    window.location.href = "../nota.php?id="+id;
                }

            }
        </script>
        <script src="js/menu.js"></script>
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
                    <li><a href="PontosUser.php">Pontos</a></li>
                    <li><a href="PHP/PerfilUser.php">Perfil</a></li>
                    <li><a href="../index.html">SAIR</a></li>
                </ul> 
            </nav>
            
        </header>
        <section class="flex">
        <?php
            $sql = "SELECT * FROM `produtos`";
            $rs = mysqli_query($conexao,$sql);
            while($reg = mysqli_fetch_array($rs))
            {
                $id = $reg["id"];
                $nome = $reg["nome"];
                $desc = $reg["descricao"];
                $point = $reg["pontos"];
        ?> 
        <div>
            
                <img src="upload/<?php echo $nome; ?>" id="prod">   
                <p><?php echo $desc;?></p>
                <h1><?php echo $point; ?> Pts</h1>
                <input type="submit" name="id" onclick="confirmacao('<?PHP echo $id; ?>','<?PHP echo $desc; ?>','<?PHP echo $point; ?>')" value="Resgatar">
        </div>
        <?php   
           }
        ?>       
        </section>
        
    </body>
</html>
<!-- 2B*LhEd!SS1b6ZlVphwn
w^9<8NQKCY-trL/2   -->