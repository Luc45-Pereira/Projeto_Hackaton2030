<?php
header('Content-Type: text/html; charset=utf-8');
$pesoaux = $texto = ($_POST['peso']);
$nomeaux = $texto = ($_POST['nome']);

include 'Comunicacao_bd.php';
$sql = "SELECT * FROM login WHERE Cpf LIKE '$nomeaux' or Nome LIKE '$nomeaux'";
$result = mysqli_query($conexao,$sql);
while ($row = mysqli_fetch_array($result)){
    $_SESSION['idcol'] = $row['Id'];
}
$id = $_SESSION['idcol'];

$sql = "SELECT * FROM pontos WHERE IdUser LIKE '$id'";
$result = mysqli_query($conexao,$sql);
while ($row = mysqli_fetch_array($result)){
    $pontosatual = $row['Pontuacao'];
    $kgLixo = $row['KgLixo'];
}

$peso = $pesoaux+$kgLixo;
$ponto = ($pesoaux * 100) + $pontosatual;




$sql="INSERT INTO `pontos` (`IdUser`, `KgLixo`, `Pontuacao`) VALUES ('$id','$peso', '$ponto')";
$rs=mysqli_query($conexao,$sql);
echo"<script language='javascript' type='text/javascript'>
alert('Bem Vindo/a');</script>"; 
//if($rs){
//print("Dados cadastrados com sucesso");
//}
//else{
//print("Erro na hora de cadastrar");
//}
print"<meta http-equiv='refresh' content='2;url=../CadPontosUser.html'>";
mysqli_close($conexao);
?>