<?php
//inclusão da biblioteca
require('fpdf.php');
include 'telas/PHP/Comunicacao_bd.php';
$id = $_GET['id'];
//criamos então um objeto FPDF com os valores padrões, já que não foi especificado
//nenhum parâmetro como tamanho da página, a unidade de media entre outros que veremos posteriormente
$pdf = new FPDF();
//Inserimos uma página
$pdf->AddPage();
#aplicamos então a formatação informando o tipo de fonte, o estilo e o tamanho dela
$pdf->SetFont('Arial','B',16);
#é aqui que criamos o conteúdo da página, esse método só deve ser inserido 
#após formatar a página
#são informadas as distâncias da margem (superior e esquerda) e em seguida colocamos 
#o texto a ser impresso

date_default_timezone_set('America/Sao_Paulo');
$dia = date("d/");
$mes = date("m/");
$ano = date("Y");
$pdf -> cell(5,5,$dia,0,0,"C",0);
$pdf -> cell(11,5,$mes,0,0,"C",0);
$pdf -> cell(9,5,$ano,0,0,"C",0);
$pdf -> setlinewidth(0.7);
$pdf -> line(40,22,200,23);
$pdf -> setxy(20,26);
$pdf -> cell(100,6,"Descricao",1,0,"C",0);

$pdf->Cell(65,6,'Produtos Resgatados:',1,0,"C",0);
$pdf->Ln();

$sql="select * from produtos where id like '$id'";
$rs = mysqli_query($conexao,$sql);
$pdf -> setfont("Arial","",12);
$linha=0;
while($reg = mysqli_fetch_array($rs)){
	$desc = $reg["descricao"];
	$pontos = $reg["pontos"];
	

	$py=32+(6*$linha);
	$pdf -> setxy(20,$py);
	$pdf -> cell(100,6,iconv("UTF-8","ISO-8859-1",$desc),1,0,"C",0);
	$pdf -> cell(65,6,iconv("UTF-8","ISO-8859-1",$pontos),1,0,"C",0);
	$pdf->Ln();
	$linha++;
}

session_start();

$idUser=$_SESSION['id'];
$sql="select * from pontos where IdUser like '$idUser'";
$rs = mysqli_query($conexao,$sql);
$pdf -> setfont("Arial","",12);
$linha=0;
while($reg = mysqli_fetch_array($rs)){
	$point = $reg["Pontuacao"];
}
$calc=$point-$pontos;
if($calc>=0){
	$sql = "UPDATE pontos SET pontuacao='$calc' WHERE IdUser='$idUser'";
	$rs = mysqli_query($conexao,$sql);
}else{
	echo"<script language='javascript' type='text/javascript'>
        alert('erro pontos insuficientes');window.location
        .href='telaS/Catalogo.php';</script>";
        die(); 
}


//aqui encerramos o arquivo e enviamos o mesmo para o navegador
//esta linha não deve estar antes de terminar de escrever o conteúdo da página,
//pois ela é responsável por gerar a  saída do arquivo PDF
$pdf->Output();
?>