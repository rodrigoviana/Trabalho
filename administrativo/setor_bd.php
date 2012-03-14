<?php
	include "bd/conecta_banco.php";
	
  
 $setor=$_POST['setor'];
 $responsavel=$_POST['responsavel'];   

   {

	$res="INSERT INTO setor (setor, responsavel) VALUES ('$setor', '$responsavel')" or die (mysql_error());
	$res=mysql_query($res);

	
   }
	
  	//$localizacao="principal.php?acao=novoartigo&isa=$idsubartigo";

 
// Alerta dizendo que  foi cadastrado com sucesso
	//echo "<script> window.location=\" $localizacao\"</script>";
	
?>