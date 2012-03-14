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
    	Setor
	</caption>
	
		
			<form action="principal.php?acao=setorbd" method="post">
			<tr>
				<td>
					<label for="setor">Setor: </label>
					<input type="text" size="71" name="setor">
				</td>
			</tr>
			<tr>
				<td>
					<label for="responsavel">Responsavel:</label>
					<input type="text" size="71" name="responsavel">
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
