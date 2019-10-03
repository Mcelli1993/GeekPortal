<?php

$servidor= "localhost";
$usuario = "seuUsuario";
$senha   = "suaSenha";
$banco = "comentarios";
$conexao = mysql_connect($servidor, $usuario, $senha, $banco);
$conecta = mysql_select_db($banco);

if (!$conecta) {
	echo "Não foi possível se conectar ao banco!";
} else {
	echo "Conectado com sucesso ao banco <strong>$banco!</strong>";
}
?>