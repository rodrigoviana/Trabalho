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
    	Saida de Produto
	</caption>
	
		
			<form action="principal.php?acao=saidabd" method="post">
			<tr>
				<td>
					<label for="produto">Produto:</label>
				     <?php
		// Consulta a tabela institui��es no banco de dados, para o preenchimento do select instituicoes, com as siglas, no formulario
			$res=mysql_query("SELECT idproduto, nome FROM produto ORDER BY nome");
			echo "<select name='produto'>";
			echo "<option value=''>Selecione</option>";
			while($res2=mysql_fetch_array($res))
		    {
				$nome=$res2["nome"];
				$idproduto=$res2["idproduto"];
			    echo "<option value='".$idproduto."'> ".$nome."</option>" ;
		     }
		    echo "</select>";
		?>   	
				</td>
				
		
			<tr>
				<td>
					<label for="setor">setor:</label>
				     <?php
		// Consulta a tabela institui��es no banco de dados, para o preenchimento do select instituicoes, com as siglas, no formulario
			$res=mysql_query("SELECT idsetor, setor FROM setor ORDER BY setor");
			echo "<select name='setor'>";
			echo "<option value=''>Selecione</option>";
			while($res2=mysql_fetch_array($res))
		    {
				$setor=$res2["setor"];
				$idsetor=$res2["idsetor"];
			    echo "<option value='".$idsetor."'> ".$setor."</option>" ;
		     }
		    echo "</select>";
		?>   	
				</td>
			
			<tr>
				<td>
					<label for="quantidade">Quantidade: </label>
					<input type="text" size="71" name="quantidade">
				</td>
			</tr>
			<tr>
			
			
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
