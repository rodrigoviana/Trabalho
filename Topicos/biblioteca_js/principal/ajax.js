/*
<sumário>
	ALLBRAX - CREATIVE E-GOV SOLUTIONS.
	Todos os direitos reservados.
	Equipe			:	Campos dos Goytacazes	
	Nome do módulo	:	ajax.js
	Data de início	:	19/04/2011
	Descrição		:	página com programação javascript de correção de bug do internet explore.
	</sumário>
*/

function GetXMLHttp() {
    if(navigator.appName == "Microsoft Internet Explorer") {
        xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    else {
        xmlHttp = new XMLHttpRequest();
    }
    return xmlHttp;
}

var xmlRequest = GetXMLHttp();
