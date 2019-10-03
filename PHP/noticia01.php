<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link href="style.css" rel="stylesheet" media="screen" type="text/css" />
<div id="seguraConteudo">
<h1>Aprendendo a criar um sistema de comentários em PHP</h1>

<p>Integer sapien magna, aliquet imperdiet ultricies quis, egestas ultricies nunc. Ut pharetra magna ut purus ullamcorper porttitor. Donec in metus est, a rhoncus odio. In mollis eleifend eleifend. Sed suscipit ullamcorper commodo. Nulla quis ante vel lorem ornare consectetur. Cras pretium, est id consectetur tincidunt, ante sapien molestie nulla, vel eleifend erat neque at lorem! Curabitur quam purus; accumsan nec adipiscing et, mattis vel tellus. Duis sollicitudin placerat justo, vel ultricies libero dapibus vel. In hac habitasse platea dictumst. Ut interdum justo at mauris congue eu feugiat lorem malesuada. Quisque tellus erat, eleifend id accumsan nec, convallis id ipsum.</p>

<p>Aliquam nunc enim, bibendum sed consectetur ut; rutrum eget mauris. Cras nunc turpis, bibendum id lacinia in, ultrices ut mi. Ut dapibus tortor at augue egestas laoreet. Donec vitae nisl ipsum. Nulla massa eros, rutrum a mollis sit amet, pretium quis erat. Ut condimentum mi ac nunc eleifend viverra. Fusce elit metus, feugiat eget gravida eget, vestibulum eu elit. Nullam tincidunt luctus neque, at luctus dui pellentesque varius. Donec eleifend orci ac justo viverra aliquet. Sed pulvinar placerat varius. In at sem in tellus tristique ullamcorper. Proin hendrerit arcu sit amet sem fermentum non facilisis eros tincidunt.</p>

<p>Vestibulum eu ligula turpis, quis vestibulum metus. Vestibulum lobortis mauris et mi tristique tincidunt. Vivamus scelerisque commodo velit ut convallis. Fusce tincidunt purus sit amet eros vestibulum hendrerit. Aenean id tortor risus. Quisque feugiat rhoncus arcu eu congue. In hac habitasse platea dictumst. Duis in purus lectus. Nulla gravida malesuada nulla in vestibulum. Vivamus non nisi vitae augue tristique accumsan. Vivamus viverra lectus et nisi consequat et eleifend erat tincidunt. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Maecenas vel nunc leo. Aliquam quis lacus a lectus dignissim tempor. Curabitur dapibus varius accumsan. Vivamus consectetur varius tortor vel volutpat. Vestibulum diam tortor, porttitor nec auctor porta, hendrerit sit amet mi. Phasellus eget nunc feugiat nisl tristique fermentum?</p>

<hr />
<h2>Comentários para essa notícia</h2>
<?php

require 'conexao.php';

//Aqui vou iniciar a busca dos comentários dentro do banco de dados!
$buscaComentarios = mysql_query("SELECT * FROM comentarios WHERE identificacao = '1' AND moderacao = 'sim' ORDER BY id ASC");
while ($lista = mysql_fetch_array($buscaComentarios)){

$nome	= $lista['nome'];
$site	= $lista['site'];
$comentario = $lista['comentario'];

echo "
<div class='seguraComentario'>
<p><strong>Nome:</strong> $nome</p>
<p><strong>Site:</strong> <a href='$site'>$site</a></p>
<p><strong>Comentário:</strong> $comentario</p>
<div class='clear'></div>
</div>
<hr />
";

}

?>

<hr />

<h2>Deixe seu comentário</h2>
<form action="cadastraComentario.php" method="post">
<fieldset><legend>Preencha os campos abaixo:</legend>
<label for="Nome">Nome:</label>
<input type="text" name="nome" />
<div class="clear"></div>
<label for="Email">E-mail:</label>
<input type="text" name="email" />
<div class="clear"></div>
<label for="Site">Site (opcional):</label>
<input type="text" name="site" />
<div class="clear"></div>
<label for="Comentario">Deixe seu comentário:</label>
<textarea cols="60" name="comentario" rows="10"></textarea>
<div class="clear"></div>
<input type="submit" value="Comente!" /> <input type="hidden" name="identificacao" value="1" /> <input type="hidden" name="moderar" value="nao" /></fieldset>
</form><a href="index.php">Voltar</a>

</div>