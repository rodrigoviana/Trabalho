<style media="all" type="text/css">@import "css/tabela.css";</style>
<?php
	include "bd/conecta_banco.php";
	$idcotacao = $_GET["id"];
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
    	Proposta da Cotação <?php echo $idcotacao; ?>
	</caption>
	
		
			<form action="principal.php?acao=propostabd&id=<?php echo $idcotacao;?>" method="post">
			
				<tr>
				<td>
					<label for="fornecedor">Fornecedor:</label>
				     <?php
		// Consulta a tabela institui��es no banco de dados, para o preenchimento do select instituicoes, com as siglas, no formulario
			$res=mysql_query("SELECT idfornecedores, razaofantasia FROM fornecedores ORDER BY razaofantasia");
			echo "<select name='fornecedor'>";
			echo "<option value=''>Selecione</option>";
			while($res2=mysql_fetch_array($res))
		    {
				$razaofantasia=$res2["razaofantasia"];
				$idfornecedores=$res2["idfornecedores"];
			    echo "<option value='".$idfornecedores."'> ".$razaofantasia."</option>" ;
		     }
		    echo "</select>";
		?>   	
				</td>
			</tr>
			</tr>
			<tr>
				<td>
					<label for="tipoproduto">Tipo de Produto:</label>
					 <select name="tipoproduto" id="tipoproduto" >
          <option value="">--</option>
		  <option value="saude">Saude</option>         
		  <option value="escritorio">escritorio</option>
	      <option value="alimenticio">alimenticio</option>
	      <option value="educacional">educacional</option>
	      <option value="limpeza">limpeza</option>
	       </select>
				</td>
			</tr>
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
			</tr>
			<tr>
				<td>
					<label for="valor">Valor Proposto</label>
					<input type="text" size="71" name="valor">
				</td>
			</tr>
			<tr>
				<td>
					<label for="quantidade"> Quantidade: </label>
					<input type="text" size="71" name="quantidade">
				</td>
			</tr>
			<tr>
				<td>
					<label for="observacao">Observação:</label>
					<textarea name="observacao" rows="8" cols="40"></textarea>
				</td>
			</tr>
			<tr>
				<td>
					<label for="dataentrega">Data de Entrega:</label>
					<input type="text" size="71" name="dataentrega">
				</td>
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
