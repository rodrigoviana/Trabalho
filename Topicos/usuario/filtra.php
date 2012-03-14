	<?PHP
		include "bd/conecta_banco.php";
	?>
	
	<style media="all" type="text/css">@import "css/tabela.css";</style>
<center>
<div class="bordaBox">
	<b class="b1"></b><b class="b2"></b><b class="b3"></b><b class="b4"></b>
		<div class="conteudo">
			
<form action="principal.php?acao=filtrarusuario" method="POST" name="form1">
    <table cellspacing="1" class="tabela">
    <caption>
        usu&aacute;rios
    </caption>
    <tbody>
    <tr> 
      <td>
        <label for="login">Login:</label>
		<input text name='login' id='login' size=80>
		<td  align="right"> <label><a  href="principal.php?acao=filtrarusuario">Mostrar todos</a> </td>
		</td>
    </tr>
    <tr> 
      <td colspan="2" align="center">
          <input type="hidden" name="envia" value="acao">
          <input type="submit" name="Submit" value="Pesquisar" class="botao">      </td>
    </tr>
    </tbody>
    </table>
  <table cellspacing="1" class="filtros_resultado">
    <thead>
      <th width="15%">Login</th> 
      <th width="15%" >Nome</th>
      <th width="30%" height="27">CPF</th>
      <th width="20%">E-mail</th>
    </thead>
	<tbody>
    <?php 
	$i=0;
	//define a busca padrão, caso nenhum filtro seja selecionado
	$res=mysql_query("SELECT DISTINCT u.login, u.nome, u.cpf, u.email FROM usuario u where u.ativo=1 ORDER BY u.login ") or die (mysql_error());
	$op="";
	for ($i=1;$i<4;$i++){ //reseta as opções
		$opcao[$i]="";}
	if (isset($_POST['envia']))	{ //checa se o formulário foi enviado
		if ($_POST['envia']=="acao") {	//checa se o valor está correto
			if ((!empty($_POST['nome'])) ||(!empty($_POST['cpf']))||(!empty($_POST['login'])) || (!empty ($_POST["email"]))){ 
			//checa se algum campo foi preenchido e define a busca sql para cada campo selecionado

				if(!empty($_POST["login"])){
					$login=$_POST['login'];
					$opcao[1]="u.login like '%$login%' ";
				} else $nome="";
					
				  for($i=1;$i<4;$i++){ //adiciona as opções � porão variável da busca sql
					if (!empty($opcao[$i])){
						$op=$opcao[$i]."AND ".$op;}}
			
				$op=substr($op,0,strlen($op)-4);
				$op1="SELECT DISTINCT * FROM usuario u WHERE ".$op." ORDER BY u.login";
				$res=mysql_query($op1); 
       		}
		}
	}
	while($res2=mysql_fetch_array($res)){ //populariza os resultados
		$i++;
		$login=$res2["login"];
		$nome=$res2["nome"];
		$email=$res2["email"];
		$cpf=$res2["cpf"];
		echo "<tr>";
        echo "<td><a href='principal.php?acao=MostrarUsuario&login=$login'>$login</a></td>";
		echo "<td>$nome</td>";
   		echo "<td>$cpf</td>";
  		echo "<td>$email</td>";
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
