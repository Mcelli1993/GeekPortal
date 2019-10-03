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

//Aqui vou iniciar a busca dos comentários dentro do banco de dados!
$buscaComentarios = mysql_query("SELECT * FROM comentarios WHERE moderacao = 'nao'");
while ($lista = mysql_fetch_array($buscaComentarios)){

$idComentario = $lista['id'];
$nome	      = $lista['nome'];
$site	      = $lista['site'];
$comentario   = $lista['comentario'];

echo "
<p><strong>Nome:</strong> $nome</p>
<p><strong>Site:</strong> <a href='$site'>$site</a></p>
<p><strong>Comentário:</strong> $comentario</p>
<p>Deseja aprovar esse comentário?<br />
<span><a href='liberaComentario.php?id=$idComentario'>Sim!</a></span> || <span><a href='deletaComentario.php?id=$idComentario'>Não</a></span></p>
<hr />
";

}

?>

<p><a href="index.php">Voltar</a></p>

</div>

</body>

</html>