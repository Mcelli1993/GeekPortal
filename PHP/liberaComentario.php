<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Sistema de comentários</title>
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
</head>

<body>

<div id="seguraConteudo">

<h1>Moderar comentários</h1>			

<hr />

<p>Selecione abaixo o comentário que deseja aprovar!</p>

<?php

require 'conexao.php';

$recuperaId = $_GET['id'];

$aprova = mysql_query("UPDATE comentarios SET moderacao = 'sim' WHERE id = '$recuperaId'") or die (mysql_error());

?>

<p><a href="moderaComentario.php">Voltar</a></p>

</div>

</body>

</html>