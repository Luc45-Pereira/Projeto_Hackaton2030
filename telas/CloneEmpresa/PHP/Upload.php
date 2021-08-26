<?php
    header('Content-Type: text/html; charset=utf-8');
    $pontosaux = $texto = ($_POST['pontos']);
    $nomeaux = $texto = ($_POST['nome']);
    $sql = "";
    include 'Comunicacao_bd.php';
    $msg = false;
    if(isset($_FILES['img'])){
        $extensao = strtolower(substr($_FILES['img']['name'], -4));
        $novo_nome = md5(time()). $extensao;
        $diretorio = "../../upload/";

        move_uploaded_file($_FILES['img']['tmp_name'], $diretorio.$novo_nome);
        $sql = "INSERT INTO `produtos` (`nome`,`descricao`, `pontos`) VALUES ('$novo_nome', '$nomeaux', '$pontosaux')";
        echo $sql;
        $rs=mysqli_query($conexao,$sql);
        mysqli_close($conexao);
        print"<meta http-equiv='refresh' content='2;url=../Upload.html'>";
    }
?>