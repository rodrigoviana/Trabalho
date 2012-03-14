<?php
	include "bd/conecta_banco.php";
	
  $idcotacao = $_GET["id"];
 $idfornecedor=$_POST['fornecedor'];
 $tipoproduto=$_POST['tipoproduto'];
 $idproduto=$_POST['produto'];
 $valor=$_POST['valor'];
 $quantidade=$_POST['quantidade'];
 $data=date("Y-m-d H:i:s");
 $dataentrega=$_POST['dataentrega'];
 $observacao=$_POST['observacao'];
  
   {

	$res="INSERT INTO proposta(idfornecedor, tipoproduto, idproduto, valor, quantidade, data, dataentrega, observacao, idcotacao) VALUES ('$idfornecedor','$tipoproduto','$idproduto','$valor','$quantidade','$data','$dataentrega','$observacao', '$idcotacao')";
	$res=mysql_query($res);

	
   }
	
  	//$localizacao="principal.php?acao=novoartigo&isa=$idsubartigo";

 
// Alerta dizendo que  foi cadastrado com sucesso
	//echo "<script> window.location=\" $localizacao\"</script>";
	
?>