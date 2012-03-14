<?php
	include "bd/conecta_banco.php";
	
 $idcotacao = $_GET["id"];
  $idproduto = $_GET["ip"];
 $idfornecedor=$_POST['fornecedor'];
 $valor=$_POST['valor'];
 $quantidade=$_POST['quantidade'];
 $notafiscal=$_POST['notafiscal'];
 $data=date("Y-m-d H:i:s");
 $recebido="1";


  
   {

	$res="INSERT INTO recebimento ( idcotacao, idfornecedor, quantidade, Valor,  data, idproduto, notafiscal) VALUES ('$idcotacao', '$idfornecedor', '$quantidade', '$valor',  '$data', '$idproduto','$notafiscal')";
	$res=mysql_query($res);

	$res="UPDATE cotacao SET recebido='$recebido' WHERE idcotacao='$idcotacao'";
	$res=mysql_query($res);
   }
	
  	//$localizacao="principal.php?acao=novoartigo&isa=$idsubartigo";

 
// Alerta dizendo que  foi cadastrado com sucesso
	//echo "<script> window.location=\" $localizacao\"</script>";
	
?>