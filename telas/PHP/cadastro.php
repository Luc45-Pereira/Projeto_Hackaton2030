<?php
header('Content-Type: text/html; charset=utf-8');
$cpfaux = $texto = ($_POST['cpf']);
$emailaux= $texto = ($_POST['nome']);
$senhaaux= $texto = ($_POST['senha']);

session_start();
$_SESSION["nome"] = $emailaux;
$_SESSION["CPF"] = $cpfaux;
$_SESSION["senha"] = $senhaaux;


echo $cpfaux;
echo "<br>";
echo $senhaaux;
include 'Comunicacao_bd.php';
$sql="INSERT INTO `login` (`Cpf`, `Nome`, `Senha`) VALUES ('$cpfaux','$emailaux', '$senhaaux')";
$rs=mysqli_query($conexao,$sql);
echo"<script language='javascript' type='text/javascript'>
alert('Bem Vindo/a');</script>"; 
//if($rs){
//print("Dados cadastrados com sucesso");
//}
//else{
//print("Erro na hora de cadastrar");
//}
print"<meta http-equiv='refresh' content='2;url=Sessao.php'>";
mysqli_close($conexao);
?>