
<?php
	include "bd/conecta_banco.php";
	
	
	 $idfornecedor = $_GET["if"];
	 $idcotacao = $_GET["id"];
	 $data=date("Y-m-d H:i:s");
	 $idproposta = $_GET["ip"];
	 $inativo='1';
	 
	   {

	$res="INSERT INTO encerramento (idfornecedor, idcotacao, dataencerramento, idproposta) VALUES ('$idfornecedor','$idcotacao','$data','$idproposta')";
	$res=mysql_query($res);

	$res="UPDATE cotacao SET inativo='$inativo' WHERE idcotacao='$idcotacao'";
	$res=mysql_query($res);
   }
	 
	 //$localizacao="principal.php?acao=novoartigo&isa=$idsubartigo";

 
// Alerta dizendo que  foi cadastrado com sucesso
	//echo "<script> window.location=\" $localizacao\"</script>";
	
	
?>

	