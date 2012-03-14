<body>

<?php
	session_start();
	include "bd/conecta_banco.php";	
    // pega os dados digitados pelo usuário no formulário

		$idtarefas = $_GET["nt"];
		
			$delete = "delete from tarefas where idtarefas = '$idtarefas'";
			$resultado = mysql_query($delete);
			
			echo "<p>Funcionario excluido com sucesso</p>";	
		
?>
</body>
</html>
