<?php

    // pega os dados digitados pelo usuário no formulário
	$login = $_POST["login"];
	$senha = md5($_POST["senha"]);

	// acesso ao banco de dados
	include "bd/conecta_banco.php";		
	
	
	$query = "SELECT  login, senha 	FROM  usuario 	WHERE   login = '$login' and senha='$senha' and ativo='1'";
	$resultado = mysql_query($query);
	$linhas = mysql_num_rows($resultado);
	if ($linhas==0)
	{
		include "login/usuario_nao_existe.html";	
	}
	else
	{
		if ($senha != mysql_result($resultado, 0, "senha"))
		{
			include "login/senha_errada.html";
		}
		else
		{
			$nome = mysql_result($resultado, 0, "nome");
			session_start();
			$_SESSION['login_usuario'] = $login;
			$_SESSION['senha_usuario'] = $senha;
			$_SESSION['nome_usuario'] = $nome;
			//direcionando para a página inicial
			header("Location: principal.php?acao=visaogeral");
		}
	}
?>
