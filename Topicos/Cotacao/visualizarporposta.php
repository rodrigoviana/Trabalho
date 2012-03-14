<style media="all" type="text/css">@import "css/tabela.css";</style>
<?php

	include "bd/conecta_banco.php";

	
	$idcotacao = $_GET["ip"];
	$idproposta = $_GET["id"];
	// Consulta a tabela curso de extensao para o preenchimento da p�gina de visualiza��o do registro
	$res=mysql_query("SELECT * FROM proposta WHERE idproposta='$idproposta'") or die (mysql_error()); 
     	while($res2=mysql_fetch_array($res))
        {
		$idproposta1=$res2["idproposta"];
		$idfornecedor=$res2["idfornecedor"];
		$tipoproduto=$res2["tipoproduto"];
		$idproduto=$res2["idproduto"];
		$valor=$res2["valor"];
		$quantidade=$res2["quantidade"];
		$data=$res2["data"];
		$dataentrega=$res2["dataentrega"];
		$observacao=$res2["observacao"];
		
    } 
		
	$res=mysql_query("SELECT * FROM produto WHERE idproduto='$idproduto'" ) or die (mysql_error());
    	while($res2=mysql_fetch_array($res)) {
		 		  $nome=$res2["nome"];
		}
		
		$res=mysql_query("SELECT * FROM fornecedores WHERE idfornecedores='$idfornecedor'" ) or die (mysql_error());
    	while($res2=mysql_fetch_array($res)) {
		 		  $nomefantasia=$res2["razaofantasia"];
		}	
?>

 <script language="javascript">
 
 function ganhadora()
{
	window.location="principal.php?acao=encerramento&id=<?php echo $idcotacao;?>&if=<?php echo $idfornecedor;?>&ip=<?php echo $idproposta;?>";	
}

 
 
</script>


<center>		

<div class="bordaBox">
	<b class="b1"></b><b class="b2"></b><b class="b3"></b><b class="b4"></b>
		<div class="conteudo">
		 <table cellspacing="1" class="tabela">
    <caption>
    	Proposta da Cotacao <?php echo $idcotacao; ?>
	</caption>
			<tr>
				<td> 
					<label for="Fornecedor">Fornecedor: </label>
						<?php echo $nomefantasia; ?>
				</td>
			</tr>
			<tr>
				<td>
					<label for="tipoproduto">Tipo de Produto:</label>
						<?php echo $tipoproduto; ?>
				</td>
			</tr>
			<tr>
			<tr>
				<td>
					<label for="produto">Produto:</label>
						<?php echo $nome ?>
				</td>
			</tr>
						<tr>
				<td>
					<label for="valorsugerido">Valor Proposto:</label>
						<?php echo $valor ?>
				</td>
			</tr>
						<tr>
				<td>
					<label for="quantidade">Quantidade:</label>
						<?php echo $quantidade ?>
				</td>
			</tr>
						<tr>
				<td>
					<label for="data">Data:</label>
						<?php echo $data; ?>
				</td>
			</tr>
			<tr>
				<td>
					<label for="dataentrega">Data de Entrega:</label>
						<?php echo $dataentrega; ?>
				</td>
			</tr>
					<tr>
				<td>
					<label for="observacao">Observacao:</label>
						<?php echo $observacao; ?>
				</td>
			</tr>
	
			<tr>
				<td align="center">
					<input type="button" class="botao" name="botao2" value="Finalizar a Cotacao" onClick="ganhadora();">
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
