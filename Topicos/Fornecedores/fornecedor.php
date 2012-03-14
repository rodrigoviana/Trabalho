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
    	FORNECEDOR
	</caption>
	
		
			<form action="principal.php?acao=fornecedoresbd" method="post">
			<tr>
				<td>
					<label for="razaofantasia">Razao Fantasia: </label>
					<input type="text" size="71" name="razaofantasia">
				</td>
			</tr>
			<tr>
				<td>
					<label for="razaosocial">Razão Social: </label>
					<input type="text" size="71" name="razaosocial">
				</td>
			</tr>
			<tr>
				<td>
					<label for="endereco">Endereco:</label>
					<input type="text" size="71" name="endereco">
				</td>
			</tr>
			<tr>
				<td>
					<label for="numero">N°: </label>
					<input type="text" size="71" name="numero">
				</td>
			</tr>
			<tr>
				<td>
					<label for="complemento">Complemento: </label>
					<input type="text" size="71" name="complemento">
				</td>
			</tr>
			<tr>
				<td>
					<label for="bairro">Bairro:</label>
					<input type="text" size="71" name="bairro">
				</td>
			</tr>
			<tr>
				<td>
					<label for="cidade">Cidade:</label>
					<input type="text" size="71" name="cidade">
				</td>
			</tr>
			<tr>
				<td>
					<label for="estado">Estado:</label>
					<input type="text" size="71" name="estado">
				</td>
			</tr>
			<tr>
				<td>
					<label for="email">E-mail:</label>
					<input type="text" size="71" name="email">
				</td>
			</tr>
			<tr>
				<td>
					<label for="site">Site:</label>
					<input type="text" size="71" name="site">
				</td>
			</tr>
			<tr>
				<td>
					<label for="telefone">Telefone:</label>
					<input type="text" size="71" name="telefone">
				</td>
			</tr>
			<tr>
				<td>
					<label for="cnpj">CNPJ:</label>
					<input type="text" size="71" name="cnpj">
				</td>
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
