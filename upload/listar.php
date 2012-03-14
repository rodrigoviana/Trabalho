<style media="all" type="text/css">@import "css/tabela.css";</style>
<html>
<head>
<style>
a{
:link	{color:Blue;text-decoration:none}
:visited	{color:Blue;text-decoration:none}
:hover   {color:Red;text-decoration:underline}
}
body{background-color:#FFFFFF;}
</style>
</head>
<body>
<center>		

<div class="bordaBox">
	<b class="b1"></b><b class="b2"></b><b class="b3"></b><b class="b4"></b>
		<div class="conteudo">
		 <table cellspacing="1" class="tabela">
<caption>
	Arquivos Existentes
</caption>
<tr>
	<td>
<?php
chdir ('http://ajudadinamica.net76.net/administrator/upload/files');
$diretorio = getcwd(); 
$ponteiro  = opendir($diretorio);
while ($nome_itens = readdir($ponteiro)) {
    $itens[] = $nome_itens;
}
sort($itens);
foreach ($itens as $listar) {
   if ($listar!="." && $listar!=".."){ 

   		if (is_dir($listar)) { 
			$pastas[]=$listar; 
		} else{ 
			$arquivos[]=$listar;
		}
   }
}

if ($pastas != "" ) { 
foreach($pastas as $listar){
   print "Pasta: <a href='upload/files/$listar'>$listar</a><br>";}
   }

if ($arquivos != "") {
foreach($arquivos as $listar){
   print " Arquivo: <a href='upload/files/$listar'>$listar</a><br>";}
   }
?>
	</td>
</tr>
</table>
</div>
<b class="b4"></b><b class="b3"></b><b class="b2"></b><b class="b1"></b>
</div>

</center>
</body>
</html>
