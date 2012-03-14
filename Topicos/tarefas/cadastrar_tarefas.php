<style media="all" type="text/css">@import "css/tabela.css";</style>
<?php

		$data = date('Y-m-d');

		
	session_start();
	include "login/head.html";
	include "bd/conecta_banco.php";

		$nome_usuario = $_SESSION['nome_usuario'];
		$login = $_SESSION['login_usuario'];
		if ($login == NULL)
		{
			echo 'Voc&ecirc; n&atilde;o tem permiss&atilde;o para acessar essa &aacute;rea do sistema.';
		}
		else
		{
			$_SESSION['cadastrando']=1;
			
			
		
?>

<center>		

<div class="bordaBox">
	<b class="b1"></b><b class="b2"></b><b class="b3"></b><b class="b4"></b>
		<div class="conteudo">
		 <table cellspacing="1" class="tabela">
    <caption>
    	Nova Tarefa
	</caption>
			<form action="principal.php?acao=cadastrartarefasbd" method="post" name="cadastro" onsubmit="return validaForm()">
			<tr>
				<td> 
					<label for="data">Data: </label>
					<input name="data" type="text" size="20"  maxlength="14" value="<?php echo $data; ?>" disabled="true">
				</td>
			</tr>
			<tr>
				<td>
					<label for="titulo">Titulo:</label>
					<input type="text" size="60" name="titulo">
				</td>
			</tr>
			<tr>
				<td align="center">
					<input type="submit" value="Enviar">
				</td>
			</tr>
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
