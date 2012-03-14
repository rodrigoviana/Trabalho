<style media="all" type="text/css">@import "css/tabela.css";</style>
<?php
	session_start();
	include "login/head.html";
?>
<body>
<center>

<div class="bordaBox">
	<b class="b1"></b><b class="b2"></b><b class="b3"></b><b class="b4"></b>
		<div class="conteudo">
		 <table cellspacing="1" class="tabela">
    <caption>
    	Excluir de Tiket
	</caption>
	<tr>
	<td>
<?php
	session_start();
	include "bd/conecta_banco.php";	
    // pega os dados digitados pelo usuário no formulário
	$usuario = $_SESSION["login_usuario"];
	
	$tipo_usuario = $_SESSION["tipo_usuario"];
		
	
		$login = $_GET["login"];
		if ($login<>NULL)
		{
			$update = "
			update usuario set ativo = 0 where login = '$login'
			";
			$resultado = mysql_query($update);
			
			echo "<p>Usu&aacute;rio exclu&iacute;do com sucesso</p>";	
		}
		
		
?>

</tr>
</td>
</table>
</div>
<b class="b4"></b><b class="b3"></b><b class="b2"></b><b class="b1"></b>
</div>

</center>
</body>
</html>
