<?php
	include "bd/conecta_banco.php";
	
  
 $login=$_POST['login'];
 $nome=$_POST['nome'];   
 $email=$_POST['email'];
 $cpf=$_POST['cpf'];
 $senha=md5($_POST['senha']);
 $ativo='1';

 
   {

	$res="INSERT INTO usuario (login, nome, email, cpf, senha, ativo) VALUES ('$login', '$nome', '$email', '$cpf', '$senha', '$ativo')" or die (mysql_error());
	$res=mysql_query($res);

	
   }
	
  	//$localizacao="principal.php?acao=novoartigo&isa=$idsubartigo";

 
// Alerta dizendo que  foi cadastrado com sucesso
	//echo "<script> window.location=\" $localizacao\"</script>";
	
?>