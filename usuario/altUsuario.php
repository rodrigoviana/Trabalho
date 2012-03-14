<?php
	session_start();
	include "login/head.html";	
	include "bd/conecta_banco.php";
?>

<style media="all" type="text/css">@import "css/tabela.css";</style>
<html>
<body>
	<center>		

<div class="bordaBox">
	<b class="b1"></b><b class="b2"></b><b class="b3"></b><b class="b4"></b>
		<div class="conteudo">

	<table cellspacing="1" class="tabela">
    <caption>
	Alterar Usu&aacute;rio
	</caption>

<?php
	$login = $_SESSION['login_usuario'];
		
	if ($login == NULL)
	{
		echo 'Voc&ecirc; n&atilde;o tem permiss&atilde;o para acessar essa &aacute;rea do sistema.';die();
	}
	include "bd/conecta_banco.php";
	$login = $_GET["login"];
   	$sql = "select * from usuario where login='$login';";
  	 $resultado = mysql_query($sql);
   	$linha = mysql_fetch_row($resultado);
 ?>
					

	<form method="post" action="principal.php?acao=AlterarUsuario">
<tr>
			<td>
			<p>Nome:<input type="text" name="nome" size="49" value="<?php echo strtoupper($linha[1]); ?>"></p>
			</td>
		</tr>
		<tr>
			<td>
			<p>Email:<input type="text" name="email" size="49" value="<?php echo strtoupper($linha[2]); ?>"></p>
			</td>
		</tr>
		<tr>
			<td>
			<p>CPF:<input type="text" name="cpf" size="49" value="<?php echo strtoupper($linha[3]); ?>"></p>
			</td>
		</tr>
						
		<tr>
			<td align="center">	
		<input type="hidden" value="<?php echo $linha[0]; ?>" name="login">
		<input type="submit" value="Salvar Altera&ccedil;&otilde;es" name="B1">
		<input type="reset" value="Limpar Altera&ccedil;&otilde;es" name="B2"></p>
			</td>
		</tr>
	</form>

	</table>
</div>
<b class="b4"></b><b class="b3"></b><b class="b2"></b><b class="b1"></b>
</div>

</center>	
</body>
</html>
