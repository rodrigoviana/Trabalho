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
			Usu&aacute;rio
	</caption>
<?php
	session_start();
	include "bd/conecta_banco.php";	
    // pega os dados digitados pelo usuÃ¡rio no formulÃ¡rio
	$usuario = $_SESSION["login_usuario"];
	$tipo_usuario = $_SESSION["tipo_usuario"];
	
	$login = $_GET["login"];
		 
		// acesso ao banco de dados
		$query = "
			select * from usuario where login = '$login'
		";
		$resultado = mysql_query($query);
		$linhas = mysql_num_rows($resultado);	
		if ($linhas>0)
		{
			?>
			<tr>
			<td>
				<p><b>Nome: </b><?=mysql_result($resultado, 0,"nome")?></p>
			</td>
			</tr>
			<tr>
			<td>
				<p><b>Login: </b><?=mysql_result($resultado, 0,"login")?></p>
			</td>
			</tr>
			<tr>
			<td>
				<p><b>Email: </b><?=mysql_result($resultado, 0,"email")?></p>
			</td>
			</tr>
			<tr>
			<td>
				<p><b>CPF: </b><?=mysql_result($resultado, 0,"cpf")?></p>
			</td>
			</tr>
			<tr>
			<td align="center">
				<p><a href="principal.php?acao=ExcluirUsuario&login=<?=$login?>">Excluir este usu&aacute;rio</a></p>
				<p><a href="principal.php?acao=AltUsuario&login=<?=$login?>">Alterar este Usu&aacute;rio</a></p>
			</td>
			</tr>
				<form action="processaAtualizacao.php" method="post">
				<input type="hidden" value="<?=$login?>" name="usuario">
				</form>
				
		<?php 
		}
		else
		{
			?>
				<p>Usuário não encontrado</p>
			<?php
		}

	
?>
	</table>

</div>
<b class="b4"></b><b class="b3"></b><b class="b2"></b><b class="b1"></b>
</div>

</center>
</body>
</html>
