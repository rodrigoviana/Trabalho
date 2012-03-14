<?php
class controlador 
{
	function exibir($arq)
	{
		include("$arq");
	}
}

$ctl = new controlador();

$acao = "Principal";
if (isset($_GET["acao"]))  $acao = $_GET["acao"];

$visualizar=0; 
$visualizar=1; //dados pessoais
	
switch ($acao)
{
// Vis�o Geral
	
	case "visaogeral":
		if ($visualizar)
		  $ctl -> exibir("visaogeral/visaogeral1.php");
    	else
		  $ctl -> exibir("noperm.php");
		break;


// Produto

	case "produto":
		if ($visualizar)
		  $ctl -> exibir("produto/produto.php");
    	else
		  $ctl -> exibir("noperm.php");
		break;


	case "produtobd":
		if ($visualizar)
		  $ctl -> exibir("produto/produto_bd.php");
    	else
		  $ctl -> exibir("noperm.php");
		break;
		
	case "estoque":
		if ($visualizar)
		  $ctl -> exibir("produto/estoque.php");
    	else
		  $ctl -> exibir("noperm.php");
		break;
		
	case "saida":
		if ($visualizar)
		  $ctl -> exibir("produto/saida.php");
    	else
		  $ctl -> exibir("noperm.php");
		break;

	case "saidabd":
		if ($visualizar)
		  $ctl -> exibir("produto/saida_bd.php");
    	else
		  $ctl -> exibir("noperm.php");
		break;
		
		//Fornecedores
		
	case "visualizarfornecedores":
		if ($visualizar)
		  $ctl -> exibir("fornecedores/visualizarfornecedores.php");
    	else
		  $ctl -> exibir("noperm.php");
		break;		
	
	
	
	case "fornecedores":
		if ($visualizar)
		  $ctl -> exibir("fornecedores/fornecedor.php");
    	else
		  $ctl -> exibir("noperm.php");
		break;		

	case "fornecedoresbd":
		if ($visualizar)
		  $ctl -> exibir("fornecedores/fornecedor_bd.php");
    	else
		  $ctl -> exibir("noperm.php");
		break;		
				
	case "listarfornecedores":
		if ($visualizar)
		  $ctl -> exibir("fornecedores/filtrar.php");
    	else
		  $ctl -> exibir("noperm.php");
		break;	
		

		//Cotacao
		
	case "cotacao":
		if ($visualizar)
		  $ctl -> exibir("Cotacao/cotacao.php");
    	else
		  $ctl -> exibir("noperm.php");
		break;	
		
	case "cotacaobd":
		if ($visualizar)
		  $ctl -> exibir("Cotacao/cotacao_bd.php");
    	else
		  $ctl -> exibir("noperm.php");
		break;	
			
	case "listarcotacao":
		if ($visualizar)
		  $ctl -> exibir("Cotacao/filtrar.php");
    	else
		  $ctl -> exibir("noperm.php");
		break;	
		
		
				
	case "visualizarcotacao":
		if ($visualizar)
		  $ctl -> exibir("Cotacao/visualizarcotacao.php");
    	else
		  $ctl -> exibir("noperm.php");
		break;	
		
	case "visualizarproposta":
		if ($visualizar)
		  $ctl -> exibir("Cotacao/visualizarporposta.php");
    	else
		  $ctl -> exibir("noperm.php");
		break;	
		
	case "proposta":
		if ($visualizar)
		  $ctl -> exibir("Cotacao/proposta.php");
    	else
		  $ctl -> exibir("noperm.php");
		break;		
			
	case "propostabd":
		if ($visualizar)
		  $ctl -> exibir("Cotacao/proposta_bd.php");
    	else
		  $ctl -> exibir("noperm.php");
		break;
		
	case "encerramento":
		if ($visualizar)
		  $ctl -> exibir("Cotacao/encerramento.php");
    	else
		  $ctl -> exibir("noperm.php");
		break;
		
	case "recebimento":
		if ($visualizar)
		  $ctl -> exibir("Cotacao/recebimento.php");
    	else
		  $ctl -> exibir("noperm.php");
		break;
		
	case "recebimentobd":
		if ($visualizar)
		  $ctl -> exibir("Cotacao/recebimento_bd.php");
    	else
		  $ctl -> exibir("noperm.php");
		break;
		
		//Administrativo
		
			
	case "setor":
		if ($visualizar)
		  $ctl -> exibir("administrativo/setor.php");
    	else
		  $ctl -> exibir("noperm.php");
		break;
		
	case "setorbd":
		if ($visualizar)
		  $ctl -> exibir("administrativo/setor_bd.php");
    	else
		  $ctl -> exibir("noperm.php");
		break;		
		
	case "usuario":
		if ($visualizar)
		  $ctl -> exibir("administrativo/usuario.php");
    	else
		  $ctl -> exibir("noperm.php");
		break;	
		
	case "usuariobd":
		if ($visualizar)
		  $ctl -> exibir("administrativo/usuario_bd.php");
    	else
		  $ctl -> exibir("noperm.php");
		break;	
}
?>
