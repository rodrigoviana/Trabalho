var xmlreqs = new Array(); 

function CXMLReq(freed) { 
	this.freed = freed; 
	this.xmlhttp = false; 
	if (window.XMLHttpRequest) { 
		this.xmlhttp = new XMLHttpRequest(); 
	} else if (window.ActiveXObject) { 
		this.xmlhttp = new ActiveXObject("Microsoft.XMLHTTP"); 
	} 
} 
	
function xmlreqGET(url, funcao) { 
	var pos = -1; 
	for (var i=0; i<xmlreqs.length; i++) { 
		if (xmlreqs[i].freed == 1) { 
			pos = i; break; 
		} 
	} 
	if (pos == -1) { 
		pos = xmlreqs.length; 
		xmlreqs[pos] = new CXMLReq(1);
	} 
	if (xmlreqs[pos].xmlhttp) { 
		xmlreqs[pos].freed = 0; 
		xmlreqs[pos].xmlhttp.open("GET",url,true); 
		xmlreqs[pos].xmlhttp.onreadystatechange = function() { 
			if (typeof(xmlhttpChange) != 'undefined') { 
				xmlhttpChange(pos, funcao); 
			} 
		} 
		if (window.XMLHttpRequest) { 
			xmlreqs[pos].xmlhttp.send(null); 
		} else if (window.ActiveXObject) { 
			xmlreqs[pos].xmlhttp.send(); 
		} 
	} 
}
	
function xmlhttpChange(pos, funcao) { 
	if (typeof(xmlreqs[pos]) != 'undefined' && xmlreqs[pos].freed == 0 && xmlreqs[pos].xmlhttp.readyState == 4) {
		if (xmlreqs[pos].xmlhttp.status == 200 || xmlreqs[pos].xmlhttp.status == 304) {
			var result = xmlreqs[pos].xmlhttp.responseXML.documentElement;
			if(arguments.length>0) {
				var lastArgument = arguments[arguments.length-1];
				if(typeof(lastArgument)=="function") {
					lastArgument.call(this, result);   
				}
			}
		} else { 
			handle_error(); 
		} 
			xmlreqs[pos].freed = 1; 
		} 
}