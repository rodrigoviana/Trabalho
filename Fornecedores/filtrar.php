<?PHP
		include "bd/conecta_banco.php";
?>
	
<script language="javascript">

function inserir()
{
	window.location="principal.php?acao=fornecedores";	
}

function mostrar()
{
	window.location="principal.php?acao=listarfornecedores";	
}

</script>

<style media="all" type="text/css">@import "css/tabela.css";</style>

<center>
<div class="bordaBox">
	<b class="b1"></b><b class="b2"></b><b class="b3"></b><b class="b4"></b>
		<div class="conteudo">
			
<form action="principal.php?acao=listarfornecedores" method="POST" name="form1">
    <table cellspacing="1" class="tabela">
    <caption>
       FORNECEDORES
    </caption>
    <tbody>
        <tr> 
      <td>
        <label for="fornecedor">Fornecedor:</label>
		<input text name='fornecedor' id='fornecedor' size=80>
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
      <th width="15%" >Fornecedor</th>
      <th width="30%" height="27">CNPJ</th>
      <th width="20%">Tipo de Produto</th>
    </thead>
	<tbody>
    <?php 
	$i=0;
	//define a busca padr�o, caso nenhum filtro seja selecionado
	$res=mysql_query("SELECT DISTINCT p.idfornecedores, p.razaofantasia, p.CNPJ, p.tipoproduto FROM fornecedores p ORDER BY p.idfornecedores ") or die (mysql_error());
	$op="";
	for ($i=1;$i<4;$i++){ //reseta as op��es
		$opcao[$i]="";}
	if (isset($_POST['envia']))	{ //checa se o formul�rio foi enviado
		if ($_POST['envia']=="acao") {	//checa se o valor est� correto
			if ((!empty($_POST['razaosocial'])) ||(!empty($_POST['CNPJ']))||(!empty($_POST['tipoproduto'])) || (!empty ($_POST["email"]))){ 
			//checa se algum campo foi preenchido e define a busca sql para cada campo selecionado

				if(!empty($_POST["fornecedor"])){
					$fornecedor=$_POST['fornecedor'];
					$opcao[1]="p.razaofantasia like '%$fornecedor%' ";
				} else $fornecedor="";
					
				  for($i=1;$i<4;$i++){ //adiciona as op��es ?or�o vari�vel da busca sql
					if (!empty($opcao[$i])){
						$op=$opcao[$i]."AND ".$op;}}
			
				$op=substr($op,0,strlen($op)-4);
				$op1="SELECT DISTINCT * FROM fornecedores p WHERE ".$op." ORDER BY p.idfornecedores";
				$res=mysql_query($op1); 
       		}
		}
	}
	while($res2=mysql_fetch_array($res)){ //populariza os resultados
		$i++;
		$id=$res2["idfornecedores"];
		$razaosocial=$res2["razaofantasia"];
		$cnpj=$res2["CNPJ"];
		$tipoproduto=$res2["tipoproduto"];
		echo "<tr>";
        echo "<td><a href='principal.php?acao=visualizarfornecedores&id=$id'>$id</a></td>";
		echo "<td>$razaosocial</td>";
   		echo "<td>$cnpj</td>";
  		echo "<td>$tipoproduto</td>";
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
