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
    	Processo de Cadastro
	</caption>
<tr>
<td>
<?php
	session_start();
	include "bd/conecta_banco.php";	
	$nome = $_POST["nome"];
	$login = $_POST["login"];
	$email = $_POST["email"];
	$cpf = $_POST["cpf"];
	$senha = md5($_POST["senha"]);
	
		$resultado = mysql_query("SELECT login FROM usuario WHERE login = '$login'");
		$linhas = mysql_num_rows($resultado);
		if ($linhas==0)
		{
			$resultado = mysql_query("INSERT INTO usuario (login,nome,email,cpf,senha,ativo) values ('$login','$nome','$email','$cpf','$senha',1)");
			if ($resultado)
			{
				?>
			<p>Usu&aacute;rio criado com sucesso...</p>
			<p><a href="cadastro.php">Cadastrar outro usu&aacute;rio</a></p>
			<p><a href="principal.php">Voltar</a></p>
			<?php
			}
			else
			{
				?>
				<p>Houve um erro ao tentar incluir o usu&aacuterio</p>
				<p><a href="cadastro.php">Cadastrar outro usu&aacute;rio</a></p>
				<p><a href="principal.php">Voltar</a></p>
				<?php
			}
		}
		else
		{
		?>
			<p>J&aacute; existe um usu&aacute;rio cadastrado com este login.</p>
			<?php
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
