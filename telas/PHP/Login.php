<?php
header('Content-Type: text/html; charset=utf-8');
$cpfaux = $texto = ($_POST['nome']);
$emailaux= $texto = ($_POST['nome']);
$senhaaux= $texto = ($_POST['senha']);

session_start();

include 'Comunicacao_bd.php';
//captura dados
$sql = "SELECT * FROM login WHERE Cpf LIKE '$emailaux' or Nome LIKE '$cpfaux'";
$result = mysqli_query($conexao,$sql);
while ($row = mysqli_fetch_array($result)){
    $_SESSION['id'] = $row['Id'];
    $_SESSION['Cpf'] = $row['Cpf'];
    $_SESSION["nome"] = $row['Nome'];
    $_SESSION["senha"] = $row['Senha'];
}

$id = $_SESSION['id'];

$sql = "SELECT * FROM pontos WHERE IdUser LIKE '$id'";
$result = mysqli_query($conexao,$sql);
while ($row = mysqli_fetch_array($result)){
    $_SESSION['KgLix'] = $row['KgLixo'];
    $_SESSION['ponto'] = $row['Pontuacao'];
}


$sql="SELECT * FROM `login` WHERE `Cpf` like '$cpfaux' OR `Nome` like '$emailaux' AND `Senha` like '$senhaaux'";
$rs=mysqli_query($conexao,$sql);
if (mysqli_num_rows($rs)==0){
   
    echo"<script language='javascript' type='text/javascript'>
        alert('Login e/ou senha incorretos');window.location
        .href='../../index.html';</script>";
        die(); 
}
else{
  if($_SESSION['Cpf'] == '12345678910' && $_SESSION["senha"] == '12345')
    {
        setcookie("login",$login);
        header("Location:../CloneEmpresa/PHP/Sessao.php");
    }else{
       setcookie("login",$login);
        header("Location:Sessao.php");
    }
}
mysqli_close($conexao);
?>