<style media="all" type="text/css">@import "css/tabela.css";</style>
<?php
	include "bd/conecta_banco.php";
?>

	<script language="javascript">

	function voltar()
	{
			window.location="principal.php?acao=filtrarticket";	
		}

	</script>
 

<body>  
<center>		

<div class="bordaBox">
	<b class="b1"></b><b class="b2"></b><b class="b3"></b><b class="b4"></b>
		<div class="conteudo">
		 <table cellspacing="1" class="tabela">
    <caption>
    	Usuário
	</caption>
	
		
			<form action="principal.php?acao=usuariobd" method="post">
			<tr>
				<td>
					<label for="login">Login: </label>
					<input type="text" size="71" name="login">
				</td>
			</tr>
			<tr>
				<td>
					<label for="nome">Nome: </label>
					<input type="text" size="71" name="nome">
				</td>
			</tr>
			<tr>
				<td>
					<label for="email">E-mail</label>
					<input type="text" size="71" name="email">
				</td>
			</tr>
			<tr>
				<td>
					<label for="cpf">CPF: </label>
					<input type="text" size="71" name="cpf">
				</td>
			</tr>
			<tr>
				<td>
					<label for="senha"> Senha: </label>
					<input type="text" size="71" name="senha">
				</td>
			</tr>
			
			<tr>
			<td align="center">
			<input type="submit" value="Enviar">
			<input type="button" value="Voltar" onClick="voltar();" >  
			</tr>
			</td>
			</form>

</table>
</div>
<b class="b4"></b><b class="b3"></b><b class="b2"></b><b class="b1"></b>
</div>

</center>	
	</body>
</html>
