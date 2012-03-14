<?php
	include "bd/conecta_banco.php";
	
  
 $produto=$_POST['produto'];
 $setor=$_POST['setor'];   
 $quantidade=$_POST['quantidade'];
  $data=date("Y-m-d H:i:s");
 
   {

	$res="INSERT INTO saida (idproduto, idsetor, quantidade, data) VALUES ('$produto', '$setor', '$quantidade', '$data')" or die (mysql_error());
	$res=mysql_query($res);

	
   }
	
  	//$localizacao="principal.php?acao=novoartigo&isa=$idsubartigo";

 
// Alerta dizendo que  foi cadastrado com sucesso
	//echo "<script> window.location=\" $localizacao\"</script>";
	
?>