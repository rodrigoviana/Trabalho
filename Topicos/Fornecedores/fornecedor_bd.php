<?php
	include "bd/conecta_banco.php";
	
  
 $razaofantasia=$_POST['razaofantasia'];
 $razaosocial=$_POST['razaosocial'];
 $endereco=$_POST['endereco'];
 $numero=$_POST['numero'];
 $complemento=$_POST['complemento'];
 $bairro=$_POST['bairro'];
 $cidade=$_POST['cidade'];
 $estado=$_POST['estado'];
 $email=$_POST['email'];  
 $site=$_POST['site'];
 $cnpj=$_POST['cnpj'];
 $telefone=$_POST['telefone'];
 $tipoproduto=$_POST['tipoproduto'];

 
   {

	$res="INSERT INTO fornecedores (razaofantasia, razaosocial, endereco, numero, complemento, cidade, estado, telefone, email, site, CNPJ, tipoproduto) VALUES ('$razaofantasia', '$razaosocial', '$endereco', '$numero', '$complemento', '$cidade', '$estado', '$telefone', '$email', '$site', '$cnpj', '$tipoproduto')" or die (mysql_error());
	$res=mysql_query($res);

	
   }
	
  	//$localizacao="principal.php?acao=novoartigo&isa=$idsubartigo";

 
// Alerta dizendo que  foi cadastrado com sucesso
	//echo "<script> window.location=\" $localizacao\"</script>";
	
?>