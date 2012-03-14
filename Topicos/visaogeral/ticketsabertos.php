	<?PHP
		include "bd/conecta_banco.php";
	?>
<style media="all" type="text/css">@import "css/tabela.css";</style>
<center>
<div class="bordaBox">
	<b class="b1"></b><b class="b2"></b><b class="b3"></b><b class="b4"></b>
		<div class="conteudo">
			
<form action="principal.php?acao=filtrarticket" method="POST" name="form1">
    <table cellspacing="1" class="tabela">
    <caption>
       Cotações Abertas
    </caption>
    <tbody>
  <table cellspacing="1" class="filtros_resultado">
    <thead>
	<th width="15%" >EDITAL</th>
      <th width="15%" height="27">DATA DE FINALIZACAO</th>
      <th width="30%">VALOR</th>
    </thead>
	<tbody>
    <?php 
	$i=0;
	//define a busca padr�o, caso nenhum filtro seja selecionado
	$res=mysql_query("SELECT DISTINCT t.idcotacao, t.edital, t.datafinalizacao, t.valor FROM cotacao t WHERE t.inativo='0' ORDER BY t.idcotacao ") or die (mysql_error());
	$op="";
	
	while($res2=mysql_fetch_array($res)){ //populariza os resultados
		$i++;
		$id=$res2["edital"];
		$titulo=$res2["datafinalizacao"];
		$prioridade=$res2["valor"];
		echo "<tr>";
        echo "<td><a href='principal.php?acao=visualizarcotacao&id=$id'>$id</a></td>";
		echo "<td>$titulo</td>";
   		echo "<td>$prioridade</td>";
		echo "</tr>";
     }
 		 
?>



  </tbody>
  </table>
</form>
		</div>
	<b class="b4"></b><b class="b3"></b><b class="b2"></b><b class="b1"></b>
</div>
</center>
