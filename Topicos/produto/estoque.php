<?PHP
		include "bd/conecta_banco.php";
?>
	
<script language="javascript">

function inserir()
{
	window.location="principal.php?acao=produto";	
}

function mostrar()
{
	window.location="principal.php?acao=estoque";	
}

</script>

<style media="all" type="text/css">@import "css/tabela.css";</style>

<center>
<div class="bordaBox">
	<b class="b1"></b><b class="b2"></b><b class="b3"></b><b class="b4"></b>
		<div class="conteudo">
			
<form action="principal.php?acao=estoque" method="POST" name="form1">
    <table cellspacing="1" class="tabela">
    <caption>
       Estoque
    </caption>
    <tbody>
        <tr> 
      <td>
        <label for="produto">Produto:</label>
		<input text name='produto' id='produto' size=80>
			<td> 
			 <input type="button" value="Mostrar Todos" onClick="mostrar();" >
			 <input type="button" value="Inserir Produto" onClick="inserir();" >  
			</td>
		</td>
    </tr>
    <tr>
    <tr> 
      <td colspan="2" align="center">
          <input type="hidden" name="envia" value="acao">
          <input type="submit" name="Submit" value="Pesquisar" class="botao"> 
              </td>
      <td>
      	 
      </td>
    </tr>
    </tbody>
    </table>
  <table cellspacing="1" class="filtros_resultado">
    <thead>
      <th width="15%">Numero</th> 
      <th width="15%" >Produto</th>
      <th width="30%" height="27">Quantidade</th>
      <th width="20%">Valor</th>
    </thead>
	<tbody>
    <?php 
	$i=0;
	//define a busca padr�o, caso nenhum filtro seja selecionado
	$res=mysql_query("SELECT DISTINCT p.idproduto, p.nome, p.valor, p.quantidade FROM produto p ORDER BY p.idproduto ") or die (mysql_error());
	$op="";
	for ($i=1;$i<4;$i++){ //reseta as op��es
		$opcao[$i]="";}
	if (isset($_POST['envia']))	{ //checa se o formul�rio foi enviado
		if ($_POST['envia']=="acao") {	//checa se o valor est� correto
			if ((!empty($_POST['titulo'])) ||(!empty($_POST['cpf']))||(!empty($_POST['cargo'])) || (!empty ($_POST["email"]))){ 
			//checa se algum campo foi preenchido e define a busca sql para cada campo selecionado

				if(!empty($_POST["produto"])){
					$prodruto=$_POST['produto'];
					$opcao[1]="p.produto like '%$prodruto%' ";
				} else $produto="";
					
				  for($i=1;$i<4;$i++){ //adiciona as op��es ?or�o vari�vel da busca sql
					if (!empty($opcao[$i])){
						$op=$opcao[$i]."AND ".$op;}}
			
				$op=substr($op,0,strlen($op)-4);
				$op1="SELECT DISTINCT * FROM produto p WHERE ".$op." ORDER BY p.idTiket";
				$res=mysql_query($op1); 
       		}
		}
	}
	while($res2=mysql_fetch_array($res)){ //populariza os resultados
		$i++;
		$id=$res2["idproduto"];
		$nome=$res2["nome"];
		$quantidade=$res2["quantidade"];
		$valor=$res2["valor"];
		echo "<tr>";
        echo "<td><a href='principal.php?acao=MostrarTiket&id=$id'>$id</a></td>";
		echo "<td>$nome</td>";
   		echo "<td>$quantidade</td>";
  		echo "<td>$valor</td>";
		echo "</tr>";
     }
 		 
?>

  </tbody>
  </table>
</form>
		</div>
	<b class="b4"></b><b class="b3"></b><b class="b2"></b><b class="b1"></b>
</div>
</center>
