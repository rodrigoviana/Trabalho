<?php
	include "bd/conecta_banco.php";
	
  
 $dataabertura= date("Y-m-d H:i:s");
 $datafinalizaco=$_POST['datafinalizaco'];
 $edital=$_POST['edital'];
 $idproduto=$_POST['produto'];   
 $valor=$_POST['valor'];
 $quantidade=$_POST['quantidade'];
 $descricao=$_POST['descricao'];
 $regras=$_POST['regras'];
  

   {

	$res="INSERT INTO cotacao (dataabertura, datafinalizacao, edital, idproduto, quantidade, descricao, regras, valor) VALUES ('$dataabertura', '$datafinalizaco', '$edital', '$idproduto', '$quantidade', '$descricao', '$regras', '$valor')" or die (mysql_error());
	$res=mysql_query($res);

	
   }
	
  	//$localizacao="principal.php?acao=novoartigo&isa=$idsubartigo";

 
// Alerta dizendo que  foi cadastrado com sucesso
	//echo "<script> window.location=\" $localizacao\"</script>";
	
?>