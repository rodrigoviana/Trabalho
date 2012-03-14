function ajax() {};
ajax.prototype.iniciar = function() {

    try{
        this.xmlhttp = new XMLHttpRequest();
    }catch(ee){
        try{
            this.xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
        }catch(e){
            try{
                this.xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
            }catch(E){
                this.xmlhttp = false;
            }
        }
    }
    return true;
}

ajax.prototype.ocupado = function() {
    estadoAtual = this.xmlhttp.readyState;
    return (estadoAtual && (estadoAtual < 4));
}

ajax.prototype.processa = function() {
    if (this.xmlhttp.readyState == 4 && this.xmlhttp.status == 200) {
        return true;
    }
}

ajax.prototype.enviar = function(url, metodo, modo) {
    if (!this.xmlhttp) {
        this.iniciar();
    }
    if (!this.ocupado()) {
        if(metodo == "GET") {
            this.xmlhttp.open("GET", url, modo);
            this.xmlhttp.send(null);
        } else {        
            this.xmlhttp.open("POST", url, modo);
            this.xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded; charset=UTF-8");
            this.xmlhttp.setRequestHeader("Cache-Control", "no-store, no-cache, must-revalidate");
            this.xmlhttp.setRequestHeader("Cache-Control", "post-check=0, pre-check=0");
            this.xmlhttp.setRequestHeader("Pragma", "no-cache");
            this.xmlhttp.send(url);
        }    

        if (this.processa) {
            return unescape(this.xmlhttp.responseText.replace(/\+/g," "));
        }
    }
    return false;
}