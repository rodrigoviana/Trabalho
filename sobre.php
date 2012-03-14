<style media="all" type="text/css">@import "css/tabela.css";</style>

<?php
	session_start();
	include "login/head.html";
	include "bd/conecta_banco.php";

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

<center>

<div class="bordaBox">
	<b class="b1"></b><b class="b2"></b><b class="b3"></b><b class="b4"></b>
		<div class="conteudo">
		 <table cellspacing="1" class="tabela">
    <caption>
    	Informa&ccedil;&otilde;es
	</caption>

			<tr>
				<td>
					<h3>Finalidade</h3>
					
				</td>
			</tr>
			<tr>
				<td align="justify">
&nbsp;&nbsp;&nbsp;&nbsp;O projeto tem por finalidade o desenvolvimento de um m&oacute;dulo dinâmico de ajuda ao usu&aacute;rio, o qual poder&aacute; ser acoplado a qualquer site. O m&oacute;dulo possuirá uma biblioteca virtual de d&uacute;vidas, onde o pr&oacute;prio usu&aacute;rio poder&aacute; alterar ou  acrescentar informa&ccedil;&otilde;es, ap&oacute;s aprova&ccedil;&atilde;o da equipe de atendimento do site. Ter&aacute; como auxilio r&aacute;pido um ranking de d&uacute;vidas mais frequentes. Al&eacute;m disso o m&oacute;dulo ser&aacute; entrela&ccedil;ado ao sistema de service desk, onde se registram solu&ccedil;&otilde;es para d&uacute;vidas atendidas com ajuda on-line. Por fim, o sistema far&aacute; uso de redes sociais, em busca de cita&ccedil;&otilde;es de d&uacute;vidas e insatisfa&ccedil;&otilde;es do cliente.
				</td>
			</tr>
			<tr>
				<td>
					<h3>Objetivo</h3>
					
				</td>
			</tr>
			<tr>
				<td align="justify">
&nbsp;&nbsp;&nbsp;&nbsp;Aumento da credibilidade de sites comerciais junto aos seus usu&aacute;rios finais;
Cria&ccedil;&atilde;o de um raking de d&uacute;vidas mais frequentes e d&uacute;vidas solucionadas;
Modifica&ccedil;&atilde;o e atualiza&ccedil;&atilde;o constante de conte&uacute;do;
Portabilidade do m&oacute;dulo desenvolvido, permitindo acoplamento a qualquer site;
Acompanhamento nas redes sociais (facebook, orkut e twitter), buscando as d&uacute;vidas e procurando solucion&aacute;-las.
				</td>
			</tr>
			<tr>
				<td>
					<h3>Intitui&ccedil;&atilde;o</h3>
					<img alt="IFF" src="imagem/Logo.png" width="250"><br>
<i>Instituto Federal de Educa&ccedil;&atilde;o, Ci&ecirc;ncia e Tecnologia Fluminense --- Campus Campos Centro</i>
				</td>
			</tr>
			<tr>
				<td>
					<h3>Integrantes</h3>
Alexandre Magno Sant'Anna<br>
Eliel Siqueira Rodrigues<br>
Orientadora: Cibelle Degel Barbosa<br>
Coorientadora: Etelvira Cristina
				</td>
			</tr>
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
