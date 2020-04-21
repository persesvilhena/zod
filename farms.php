<title>Zone Of Death - Farms</title>
<?php include "includes/cabeca.dll" ?>
<?php include "includes/selectfarms.dll" ?>
<div id="corpo">
	<div id="publicidade" style="position: relative; left: 0px; top: 3px; width: 200px; height: 10px;">
		<span class="texto"><?php include "includes/ct.dll" ?><strong><center>Publicidade</center></strong><?php include "includes/ft.dll" ?></span>
		<?php include "includes/cb.dll" ?>
		<?php include "publicidade/anuncio.dll" ?>
		<?php include "includes/fb.dll" ?>
	</div>
	<div id="news" style="position: relative; left: 205px; top: -7px; width: 795px;">
		<span class="texto"><?php include "includes/ct.dll" ?><strong>Farms (inativos) Travian TX2</strong><?php include "includes/ft.dll" ?></span>
		<?php include "includes/cb.dll" ?>Jogadores inativos do Travian TX2<br>

<div align="left">
<?php
$servidor = "localhost"; 
$usuario = "root";
$senha = "369875"; 
$banco = "map_travian";
$conexao = mysql_connect($servidor,$usuario,$senha);
mysql_select_db($banco); 
$res = mysql_query("SELECT * FROM `x_world` where ativo='0';");

echo "<table><tr><td width=100><div class=bordaBox1><b class=c1></b><b class=c2></b><b class=c3></b><b class=c4></b><div class=conteudo1>Id</div></div></td><td><div class=bordaBox1><b class=c1></b><b class=c2></b><b class=c3></b><b class=c4></b><div class=conteudo1>Coordenadas</div></div></td><td width=335><div class=bordaBox1><b class=c1></b><b class=c2></b><b class=c3></b><b class=c4></b><div class=conteudo1>Aldeia</td><td width=150><div class=bordaBox1><b class=c1></b><b class=c2></b><b class=c3></b><b class=c4></b><div class=conteudo1>Jogador</div></div></td><td><div class=bordaBox1><b class=c1></b><b class=c2></b><b class=c3></b><b class=c4></b><div class=conteudo1>População</div></div></td></tr>";


 while($escrever=mysql_fetch_array($res)){
 echo "<tr><td>" . $escrever['id'] . "</td><td>" . $escrever['coordx'] . " | " . $escrever['coordy'] . "</td><td>" . $escrever['nomealdeia'] . "</td><td>" . $escrever['nomejogador'] . "</td><td>" . $escrever['pop'] . "</td></tr>";
}
echo "</table>";
mysql_close(conexao);
?>
</div>
by Perses


		<?php include "includes/fb.dll" ?>
	</div>

<?php include "includes/fimcabeca.dll" ?>