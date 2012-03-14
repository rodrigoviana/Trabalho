function envia(url, metodo, modo, campo)
{
    var valCampo = document.getElementById(campo).value;
    remoto  = new ajax();
    xmlhttp = remoto.enviar(url + "?acao=" + valCampo, metodo, modo );

/// Referente ao CAMPO de USUÁRIO
	if(xmlhttp == "userVazio") {
        document.getElementById('login').className = 'erro';
        document.getElementById('alertaLogin').className = 'erroSpan';
        document.getElementById("alertaLogin").innerHTML = 'Campo USUÁRIO Vazio';
		document.getElementById("sub").disabled = true;
    } 
	if(xmlhttp == "userExistente") {
        document.getElementById('login').className = 'erro';
        document.getElementById('alertaLogin').className = 'erroSpan';
        document.getElementById("alertaLogin").innerHTML = 'O usuário digitado já existente...';
		document.getElementById("sub").disabled = true;
    }   
	if(xmlhttp == "userDisponivel") {
        document.getElementById('login').className = 'ok';
        document.getElementById('alertaLogin').className = 'okSpan';
        document.getElementById("alertaLogin").innerHTML = 'OK';
		document.getElementById("sub").disabled = false;
    }    
	else{
       document.getElementById('login').className = 'ok';
        document.getElementById('alertaLogin').className = 'okSpan';
        document.getElementById("alertaLogin").innerHTML = xmlhttp;
		document.getElementById("sub").disabled = false;
 
}
}
