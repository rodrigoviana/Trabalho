<style media="all" type="text/css">@import "css/tabela.css";</style>
<?php
	session_start();
	include "login/head.html";	
	include "bd/conecta_banco.php";	
?>
	<link href="style.css" rel="stylesheet" type="text/css" media="screen">
	<script language="javascript" type="text/javascript" src="ajaxUser.js"></script>
	<script language="javascript" type="text/javascript" src="funcoesUser.js"></script>
	<script>
		function validaForm()
		{
			d = document.cadastro;
			if (d.nome.value == "")
			{
				alert("O nome do usuario deve ser preenchido.");
				d.nome.focus();
				return false;
			}			
			if (d.email.value == "")
			{
				alert("O email do usuario deve ser preenchido.");
				d.email.focus();
				return false;
			}
			if (d.cpf.value == "")
			{
				alert("O CPF do usuario deve ser preenchido.");
				d.cpf.focus();
				return false;
			}			
			if (d.login.value == "")
			{
				alert("O login do usuario deve ser preenchido.");
				d.login.focus();
				return false;
			}
			if (d.senha.value == "")
			{
				alert("A senha do usuario deve ser preenchido.");
				d.senha.focus();
				return false;
			}
			return true;
		}
		
			
	</script>
	</head>
	
	<body>
<center>		

<div class="bordaBox">
	<b class="b1"></b><b class="b2"></b><b class="b3"></b><b class="b4"></b>
		<div class="conteudo">
		 <table cellspacing="1" class="tabela">
    <caption>
    	Cadastro de Usu&aacute;rio
	</caption>
		<?php
	        $nome_usuario = $_SESSION['nome_usuario'];
		$login = $_SESSION['login_usuario'];
		
		if ($login == NULL)
		{
			echo 'Voc&ecirc; n&atilde;o tem permiss&atilde;o para acessar essa &aacute;rea do sistema.';
		}
		else
		{
			?>

				<form action="principal.php?acao=CadastroUsuariobd" method="post" name="cadastro" onsubmit="return validaForm()">
					<tr>
					<td>
					<p>Nome: <input type="text" size="70" name="nome"></p>
					</tr>
					</td>

					<tr>
					<td>
					<p>Email: <input type="text" size="70" name="email"></p>
					</tr>
					</td>

					<tr>
					<td>
					<p>CPF: <input type="text" size="25" name="cpf"></p>
					</tr>
					</td>

					<tr>
					<td>
					Login: <input name="login" id="login" type="text" size="24" maxlength="15" onblur="javascript:envia('principal.php?acao=VerificaUsuario', 'POST', false, 'login');" onChange="javascript:naoPermiteAcento(this);"/>&nbsp;&nbsp;&nbsp;<span id="alertaLogin"></span></p>
					</tr>
					</td>

					<tr>
					<td>
					<p>Senha: <input type="password" name='senha' size="24"></p>
					</tr>
					</td>

					<tr>
					<td align"center">
						<input type="submit" value="Enviar">
					</tr>
					</td>
				</form>
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
