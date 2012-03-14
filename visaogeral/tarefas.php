	<?PHP
		include "bd/conecta_banco.php";
	?>
	<style media="all" type="text/css">@import "css/visaogeral_tarefas.css";</style>
<center>
<div class="bordaBox">
	<b class="b1"></b><b class="b2"></b><b class="b3"></b><b class="b4"></b>
		<div class="conteudo">
			
<form action="principal.php?acao=cadastrartarefas" method="POST" name="form1">
    <table cellspacing="1" class="tabela1">
    <caption>
       Tarefas
    </caption>
    <tbody>
	<thead> 
      <th height="27">Data</th>
      <th>Aviso</th>
    </thead>
    <?php
	$i=0;
	//define a busca padrão, caso nenhum filtro seja selecionado
	$res=mysql_query("SELECT * FROM tarefas"); 

	$op="";
	for ($i=1;$i<2;$i++){ //reseta as opções
		$opcao[$i]="";}

   	while($res2=mysql_fetch_array($res)) { //populariza os resultados
			$i++;
			$data=$res2["data"];
			$aviso=$res2["tarefas"];
			$id=$res2["idtarefas"];
				
			 echo "<tr id='".$id."'>";
              echo "<td>$data</a></td>";
			echo "<td><a href='principal.php?acao=visualizartarefas&nt=$id'>$aviso</a></td>";
			 echo "</tr>";
	}    
?>

  </tbody>
  </table>
		<input type=image src="imagem/icones/tarefas.png"> 
</form>
		</div>
	<b class="b4"></b><b class="b3"></b><b class="b2"></b><b class="b1"></b>
</div>
</center>