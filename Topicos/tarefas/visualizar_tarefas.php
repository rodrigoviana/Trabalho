<style media="all" type="text/css">@import "css/tabela.css";</style>
<?php

	session_start();
	include "login/head.html";
	include "bd/conecta_banco.php";

		$data = date('Y-m-d');
	
	$idtarefa = $_GET["nt"];
   	$sql = "select idtarefas, date_format(data, '%d/%m/%Y') as data, tarefas from tarefas where idtarefas = $idtarefa;";
  	$resultado = mysql_query($sql);
   	$linha = mysql_fetch_row($resultado);
		


		$nome_usuario = $_SESSION['nome_usuario'];
		$login = $_SESSION['login_usuario'];
		if ($login == NULL)
		{
			echo 'Voc&ecirc; n&atilde;o tem permiss&atilde;o para acessar essa &aacute;rea do sistema.';
		}
		else
		{
			$_SESSION['cadastrando']=1;
			
			
	
			
			
		
?>

 <script language="javascript">
// Função para exclusão do registro, botão excluir
function excluir(){ 
var exclusao = confirm( "Deseja realmente excluir este Funcionario?" );
	if ( exclusao == true ){
  		window.location="principal.php?acao=excluirtarefas&nt=<?php echo strtoupper($linha[0]);?>";
	}else{
  		alert("Funcionario não foi excluído");
	}
}
</script>


<center>		

<div class="bordaBox">
	<b class="b1"></b><b class="b2"></b><b class="b3"></b><b class="b4"></b>
		<div class="conteudo">
		 <table cellspacing="1" class="tabela">
    <caption>
    	Tarefa
	</caption>
			<tr>
				<td> 
					<label for="data">Data: </label>
						<?php echo strtoupper($linha[1]); ?>
				</td>
			</tr>
			<tr>
				<td>
					<label for="titulo">Titulo:</label>
						<?php echo strtoupper($linha[2]); ?>
				</td>
			</tr>
			<tr>
				<td align="center">
					<input type="button" class="botao" name="botao2" value="Excluir" onClick="excluir();">
				</td>
			</tr>
			</form>
		<?php
		}
		?>
		
</table>
</div>
<b class="b4"></b><b class="b3"></b><b class="b2"></b><b class="b1"></b>
</div>

</center>	
	
		</body>
</html>
