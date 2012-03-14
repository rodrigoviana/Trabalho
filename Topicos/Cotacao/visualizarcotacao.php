<style media="all" type="text/css">@import "css/tabela.css";</style>
<?php

	include "bd/conecta_banco.php";

	
	$idcotacao = $_GET["id"];
	// Consulta a tabela curso de extensao para o preenchimento da p�gina de visualiza��o do registro
	$res=mysql_query("SELECT * FROM cotacao WHERE idcotacao='$idcotacao'") or die (mysql_error()); 
     	while($res2=mysql_fetch_array($res))
        {
		$idcotacao1=$res2["idcotacao"];
		$dataabertura=$res2["dataabertura"];
		$datafinalizacao=$res2["datafinalizacao"];
		$edital=$res2["edital"];
		$idproduto=$res2["idproduto"];
		$quantidade=$res2["quantidade"];
		$descricao=$res2["descricao"];
		$regras=$res2["regras"];
		$valor=$res2["valor"];
		$inativo=$res2["inativo"];
		$recebido=$res2["recebido"];
    } 
		
	$res=mysql_query("SELECT * FROM produto WHERE idproduto='$idproduto'" ) or die (mysql_error());
    	while($res2=mysql_fetch_array($res)) {
		 		  $nome=$res2["nome"];
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
    	Cotacao <?php echo $idcotacao; ?>
	</caption>
			<tr>
				<td> 
					<label for="dataabertura">Data de Abertura: </label>
						<?php echo $dataabertura; ?>
				</td>
			</tr>
			<tr>
				<td>
					<label for="datafinalizacao">Data de Finalização:</label>
						<?php echo $datafinalizacao ?>
				</td>
			</tr>
			<tr>
				<td>
					<label for="edital">Edital:</label>
						<?php echo $edital ?>
				</td>
			</tr>
						<tr>
				<td>
					<label for="produto">Produto:</label>
						<?php echo $nome ?>
				</td>
			</tr>
						<tr>
				<td>
					<label for="valorsugerido">Valor Sugerido:</label>
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
					<label for="descricao">Descrição:</label>
						<?php echo $descricao ?>
				</td>
			</tr>
						<tr>
				<td>
					<label for="regras">Regras:</label>
						<?php echo $regras; ?>
				</td>
			</tr>
			<?php // Controlador de bot�es de acordo com o perfil do usuario acessado
	if ($inativo=="1"){	echo ('
			
			<tr>
				<td>
					<label for="Encerramento">ESSA COTAÇÃO JA SE ENCONTRA ENCERRADA!</label>
				</td>
			</tr>
			<tr>
								'); } 
					?>
				<?php	
		if ($recebido=="1"){	echo ('
			
			<tr>
				<td>
					<label for="recebido">ESSA COTAÇÃO JA FOI RECEBIDA!</label>
				</td>
			</tr>
			<tr>
								'); } 
					?>
									
					
					<tr>
				<td align="center">
					<?php // Controlador de bot�es de acordo com o perfil do usuario acessado
	if ($inativo=="0"){	echo ('
					<input type="button" class="botao" name="botao2" value="Proposta" onClick="proposta();">
					'); } 
					?>
							<?php // Controlador de bot�es de acordo com o perfil do usuario acessado
	if ($recebido=="0"){	echo ('
					<input type="button" class="botao" name="botao2" value="Receber" onClick="receber();">
			
					'); } 
					?>						
						</td>
			</tr>
			
 <table cellspacing="1" class="filtros_resultado">
    <thead>
      <th width="15%">NUMERO</th> 
      <th width="15%" >FORNECEDOR</th>
      <th width="30%" height="27">DATA DE ENTREGA</th>
      <th width="20%">VALOR</th>
    </thead>
	<tbody>
    <?php 
	$i=0;
	//define a busca padr�o, caso nenhum filtro seja selecionado
	$res=mysql_query("SELECT DISTINCT p.idproposta, p.idfornecedor, p.dataentrega, p.valor FROM proposta p ORDER BY p.idproposta ") or die (mysql_error());
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
				$op1="SELECT DISTINCT * FROM proposta p WHERE ".$op." ORDER BY p.dataentrega";
				$res=mysql_query($op1); 
       		}
		}
	}
	while($res2=mysql_fetch_array($res)){ //populariza os resultados
		$i++;
		$id=$res2["idproposta"];
		$edital=$res2["idfornecedor"];
		$dataabertura=$res2["dataentrega"];
		$valor=$res2["valor"];
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
