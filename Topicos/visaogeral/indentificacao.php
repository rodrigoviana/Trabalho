	<?PHP
		session_start();
		include "login/head.html";
		include "bd/conecta_banco.php";

		$nome_usuario = $_SESSION['nome_usuario'];
		$login = $_SESSION['login_usuario'];
	?>
<style media="all" type="text/css">@import "css/visaogeral_tarefas.css";</style>
<center>
<br>
<br>
<div class="bordaBox">
	<b class="b1"></b><b class="b2"></b><b class="b3"></b><b class="b4"></b>
		<div class="conteudo">
	
			<img src="imagem/visaogeral/funcionario.png">
			<p>
					<label for="nome"> Nome: <?echo $login?></label>
			</p>	
			<p>
					<label for="nome"> Cargo: aaaaaaaaaaaaaaaaaaaaaaaaa</label>
			</p>
		</div>
	<b class="b4"></b><b class="b3"></b><b class="b2"></b><b class="b1"></b>
</div>
</center>
