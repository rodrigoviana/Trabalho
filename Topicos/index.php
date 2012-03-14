<head>  	
	<meta http-equiv="content-type" content="text/html; charset=utf-8">  	
	<title>Page title</title>  	
	<link rel="stylesheet" href="css/sytle.css" type="text/css" media="screen">  
	<link rel="stylesheet" href="css/login.css" type="text/css" media="screen">  
</head>
  
<body>  
<div id="container">  	
	<div id="cabecalho">  		
		<img src="imagem/logomonografia.png">
	</div>  	
<div id="menu1">  		

</div>  	
<div id="menu2">  		
	<center>
	</center>
</div>  	
<div id="conteudo">  	
<br>
<br>
<br>
	

	<div id="tudologin">
		
					<form method="post" action="logar.php">
					<br>
						Usu&aacute;rio: <input type="text" name="login"><br>
						<br>
						Senha: &nbsp;&nbsp;&nbsp;<input type="password" name="senha"><br>
						<br>
						<input type="submit" src="logar.php" value="Enviar" name="enviar">
					</form>
	</div>

</div>  	

<div id="rodape">  		
<?php
	include "rodape.php";
?>	
</div>  
</div>  
</body>  
</html>