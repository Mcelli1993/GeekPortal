<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Sistema de comentários</title>
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
</head>

<body>

<div id="seguraConteudo">

<?php

error_reporting(0);

require 'conexao.php';

$nome          = $_POST['nome'];
$email 		   = $_POST['email'];
$site 		   = $_POST['site'];
$comentario    = $_POST['comentario'];
$identificacao = $_POST['identificacao'];
$moderacao	   = $_POST['moderar'];

if (($nome == "") || ($email == "") || ($comentario == "")){
echo "<p>Caro usuário, nenhum campo pode ficar em branco! Preencha corretamente!</p>";
echo "<p><a href='index.php'>Voltar</a></p>";
return false;
}
if(substr_count($email, "@") == 0 || substr_count($email, ".") == 0) {
echo "<p>Caro usuário, nenhum campo pode ficar em branco! Preencha corretamente!</p>";
echo "<p><a href='index.php'>Voltar</a></p>";
return false;
}

$headers = "Content-type:text/html; charset=UTF-8";
$headers = "From: $email";
$para 	 = "seuEmail@seuDominio.com.br";
$mensagem .= "De: $nome";
$mensagem .= "E-mail: $email";
$mensagem .= "Site: $site";
$mensagem .= "Comentário: $comentario";

$envia = mail($para, "Comentário efetuado no site", $mensagem, $headers);					

$insere = ("INSERT INTO comentarios (id, nome, email, site, comentario, identificacao, moderacao) VALUES ('NULL', '$nome', '$email', '$site', '$comentario', '$identificacao', '$moderacao')");

$insereBanco = mysql_query($insere);

echo "<p><strong>$nome</strong>, seu comentário foi enviado com sucesso, porém, aguarda liberação pelo administrador do site! Obrigado!";
echo "<p><a href='index.php'>Voltar</a></p>";

?>					
</div>

</body>

</html>