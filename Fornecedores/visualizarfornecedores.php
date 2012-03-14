<style media="all" type="text/css">@import "css/tabela.css";</style>
<?php

	include "bd/conecta_banco.php";

	
	$idfornecedor = $_GET["id"];
	// Consulta a tabela curso de extensao para o preenchimento da p�gina de visualiza��o do registro
	$res=mysql_query("SELECT * FROM fornecedores WHERE idfornecedores='$idfornecedor'") or die (mysql_error()); 
     	while($res2=mysql_fetch_array($res))
        {
		$idfornecedores=$res2["idfornecedores"];
		$razaosocial=$res2["razaosocial"];
		$razaofantasia=$res2["razaofantasia"];
		$endereco=$res2["endereco"];
		$numero=$res2["numero"];
		$complemento=$res2["complemento"];
		$cidade=$res2["cidade"];
		$estado=$res2["estado"];
		$telefone=$res2["telefone"];
		$email=$res2["email"];
		$site=$res2["site"];
		$cnpj=$res2["CNPJ"];
		$tipoproduto=$res2["tipoproduto"];
    } 
		
	?>

 <script language="javascript">
 
 function proposta()
{
	window.location="principal.php?acao=proposta&id=<?php echo $idcotacao;?>";	
}

 function receber()
{
	window.location="principal.php?acao=recebimento&id=<?php echo $idcotacao;?>&ip=<?php echo $idproduto;?>";	
}

 
</script>


<center>		

<div class="bordaBox">
	<b class="b1"></b><b class="b2"></b><b class="b3"></b><b class="b4"></b>
		<div class="conteudo">
		 <table cellspacing="1" class="tabela">
    <caption>
    	Fornecedor <?php echo $razaofantasia; ?>
	</caption>
			<tr>
				<td> 
					<label for="razaosocial">Razao Social: </label>
						<?php echo $razaosocial; ?>
				</td>
			</tr>
			<tr>
				<td>
					<label for="endereco">Endereco:</label>
						<?php echo $endereco ?>
				</td>
			</tr>
			<tr>
				<td>
					<label for="numero">numero:</label>
						<?php echo $numero ?>
				</td>
			</tr>
						<tr>
				<td>
					<label for="complemento">Complemento:</label>
						<?php echo $complemento ?>
				</td>
			</tr>
						<tr>
				<td>
					<label for="cidade">Cidade:</label>
						<?php echo $cidade ?>
				</td>
			</tr>
						<tr>
				<td>
					<label for="estado">Estado:</label>
						<?php echo $estado ?>
				</td>
			</tr>
						<tr>
				<td>
					<label for="telefone">Telefone:</label>
						<?php echo $telefone ?>
				</td>
			</tr>
						<tr>
				<td>
					<label for="email">E-mail:</label>
						<?php echo $email; ?>
				</td>
			</tr>
			<tr>
				<td>
					<label for="site">Site:</label>
					<?php echo $site ?>
				</td>
			</tr>
			<tr>
				<td>
					<label for="CNPJ">CNPJ:</label>
					<?php echo $cnpj ?>
				</td>
			</tr>
			
			
 <table cellspacing="1" class="filtros_resultado">
    <thead>
      <th width="15%">NUMERO PROPOSTA</th> 
      <th width="15%" >TIPO DE PRODUTO</th>
      <th width="30%" height="27">QUANTIDADE</th>
      <th width="20%">DATA</th>
    </thead>
	<tbody>
    <?php 
	$i=0;
	//define a busca padr�o, caso nenhum filtro seja selecionado
	$res=mysql_query("SELECT DISTINCT p.idproposta, p.tipoproduto, p.data, p.quantidade, p.idcotacao FROM proposta p ORDER BY p.idfornecedor ") or die (mysql_error());
	$op="";
	for ($i=1;$i<4;$i++){ //reseta as op��es
		$opcao[$i]="";}
	if (isset($_POST['envia']))	{ //checa se o formul�rio foi enviado
		if ($_POST['envia']=="acao") {	//checa se o valor est� correto
			if ((!empty($_POST['numero'])) ||(!empty($_POST['fornecedor']))||(!empty($_POST['dataentrega'])) || (!empty ($_POST["valor"]))){ 
			//checa se algum campo foi preenchido e define a busca sql para cada campo selecionado

				if(!empty($_POST["edital"])){
					$edital=$_POST['edital'];
					$opcao[1]="p.edital like '%$edital%' ";
				} else $edital="";
					
				  for($i=1;$i<4;$i++){ //adiciona as op��es ?or�o vari�vel da busca sql
					if (!empty($opcao[$i])){
						$op=$opcao[$i]."AND ".$op;}}
			
				$op=substr($op,0,strlen($op)-4);
				$op1="SELECT DISTINCT * FROM proposta p WHERE ".$op." ORDER BY p.data";
				$res=mysql_query($op1); 
       		}
		}
	}
	while($res2=mysql_fetch_array($res)){ //populariza os resultados
		$i++;
		$id=$res2["idproposta"];
		$edital=$res2["tipoproduto"];
		$dataabertura=$res2["quantidade"];
		$valor=$res2["data"];
		$idcotacao=$res2["idcotacao"];
		echo "<tr>";
        echo "<td><a href='principal.php?acao=visualizarproposta&id=$id&ip=$idcotacao'>$id</a></td>";
		echo "<td>$edital</td>";
   		echo "<td>$dataabertura</td>";
  		echo "<td>$valor</td>";
		echo "</tr>";
     }
 		 
?>

  </tbody>
  </table>
			</form>
		
</table>
</div>
<b class="b4"></b><b class="b3"></b><b class="b2"></b><b class="b1"></b>
</div>

</center>	
	
		</body>
</html>
