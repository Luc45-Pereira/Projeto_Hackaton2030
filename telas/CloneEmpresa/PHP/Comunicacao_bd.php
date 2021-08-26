<?php
	$conexao = mysqli_connect("localhost","root","");
	$bancodedados = "projetogerar";
	$db = mysqli_select_db($conexao,$bancodedados);
?>