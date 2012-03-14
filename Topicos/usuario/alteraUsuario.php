<?php
	session_start();
	include "login/head.html";	
	include "bd/conecta_banco.php";
?>
<html>

<body>
<?php
include "menu/menu_admin2.html";
include "bd/conecta_banco.php";
	$login=$_POST["login"];
	$nome=$_POST["nome"];
	$email=$_POST["email"];
	$cpf=$_POST["cpf"];
		
$sql = "Update usuario set nome='$nome', email='$email', cpf='$cpf' where login = '$login';";
$resultado = mysql_query($sql);

mysql_close($conexao);
Header("location:principal.php");
?>

</body>

</html>
