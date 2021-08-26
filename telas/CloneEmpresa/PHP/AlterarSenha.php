<?php
header('Content-Type: text/html; charset=utf-8');
$senhaaux= $texto = ($_POST['senha']);

session_start();
$_SESSION["senha"] = $senhaaux;
$id = $_SESSION['id'];

echo $senhaaux;
include 'Comunicacao_bd.php';
$sql= "UPDATE login SET Senha='$senhaaux' WHERE Id='$id'";
$rs=mysqli_query($conexao,$sql);
echo"<script language='javascript' type='text/javascript'>
alert('Bem Vindo/a');</script>"; 
//if($rs){
//print("Dados cadastrados com sucesso");
//}
//else{
//print("Erro na hora de cadastrar");
//}
print"<meta http-equiv='refresh' content='2;url=PerfilUser.php'>";
mysqli_close($conexao);
?>