<head>  	
	<meta http-equiv="content-type" content="text/html; charset=utf-8">  	
	<title>Page title</title>  	
	<link rel="stylesheet" href="css/sytle.css" type="text/css" media="screen">  
</head>

<body>  
<div id="container">  	
	<div id="cabecalho">  		
		<img src="imagem/logomonografia.png">
	</div>  	
<div id="menu1">  		
<p></p>
</div>  	
<div id="menu2">  		
	<center>
	<?php
		include "menu.php";
	?>
	</center>
</div>  	
<div id="conteudo">  		
<?php
include ("controlador.php");  
?>
</div>  	

<div id="rodape">  		
<?php
	include "rodape.php";
?>	
</div>  
</div>  
</body>  
</html>