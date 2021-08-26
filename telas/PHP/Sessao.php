<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		session_cache_expire(1);
		session_start();
        include "comunicacao_bd.php";
		$_SESSION["lendo"] = "sim";
		print"<meta http-equiv='refresh' content='2;url=../catalogo.php'>";
	?>
</body>
</html>