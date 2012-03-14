<?php
	include "bd/conecta_banco.php";
	
  
 $nome=$_POST['nome'];
 $fornecedor=$_POST['fornecedor'];   
 $valor=$_POST['valor'];
 $dataentrada=$_POST['dataentrada'];
 $quantidade=$_POST['quantidade'];     
 $descricao=$_POST['descricao'];   

   {

	$res="INSERT INTO produto (nome, valor, dataentrada, descricao, quantidade, idfornecedo) VALUES ('$nome', '$valor', '$dataentrada', '$descricao', '$quantidade', '$fornecedor')" or die (mysql_error());
	$res=mysql_query($res);

	
   }
	
  	//$localizacao="principal.php?acao=novoartigo&isa=$idsubartigo";

 
// Alerta dizendo que  foi cadastrado com sucesso
	//echo "<script> window.location=\" $localizacao\"</script>";
	
?>