function GetXMLHttp() { 
        var xmlHttp; 
        try {                 
                xmlHttp = new XMLHttpRequest(); 
        } 
        catch(ee) { 
                try {   
                     xmlHttp = new ActiveXObject("Microsoft.XMLHttp"); 
                } 
                catch(e) { 
                        try {      
                             xmlHttp = xmlhttp=new ActiveXObject("MSXML2.XMLHttp"); 
                        } 
                        catch(e) { 
                                    alert("Seu browser não suporta AJAX!");                                    
                                    xmlHttp = false; 
                        
                                
                                
                        } 
                } 
        } 
        return xmlHttp; 
} 
 
var xmlRequest = GetXMLHttp();


function abrirPag(valor){
    var url = valor;

    xmlRequest.open("GET",url,true);    
    xmlRequest.onreadystatechange = mudancaEstado;
    xmlRequest.send(null);

        if (xmlRequest.readyState == 1) {
            document.getElementById("conteudo").innerHTML;
        }

    return url;
}

function mudancaEstado(){
    if (xmlRequest.readyState == 4){
        document.getElementById("conteudo").innerHTML = xmlRequest.responseText;
    }
}
