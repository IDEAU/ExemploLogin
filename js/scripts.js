
function mensagem(x)
{
	return alert(x);
}

function xmlHttpPost2Div(strURL, div, post) {
    var xmlHttpReq = new XMLHttpRequest();
    xmlHttpReq.open('POST', strURL, true);
    xmlHttpReq.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xmlHttpReq.onreadystatechange = function() {
        if (xmlHttpReq.readyState == 4) {
            document.getElementById(div).innerHTML = xmlHttpReq.responseText;
        }
    }
    xmlHttpReq.send(post);
}

function xmlhttpPostDo(strURL, post) {
    var xmlHttpReq = new XMLHttpRequest();
    xmlHttpReq.open('POST', strURL, true);
    xmlHttpReq.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xmlHttpReq.onreadystatechange = function() {
        if (xmlHttpReq.readyState == 4) {
		if (xmlHttpReq.responseText != "OK") alert("Favor, contatar a direcao de prova com o codigo: "+xmlHttpReq.responseText);
        }
    }
    xmlHttpReq.send(post);
}


