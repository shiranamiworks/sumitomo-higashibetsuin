
function siryo(){ 
	url = ebis.link("/tokai/higashibetsuin/catalog.cgi");
	sub = window.open(url, "", "toolbar=no,location=no,directories=no,status=yes,menubar=yes,scrollbars=yes,resizable=yes,width=850,height=580");
}

function raijo(){
	url = ebis.link("来場予約URL");
	sub = window.open(url, "", "toolbar=no,location=no,directories=no,status=yes,menubar=yes,scrollbars=yes,resizable=yes,width=850,height=580");
}

function online(){
	url = "https://airrsv.net/AKR3871363019/calendar";
	sub = window.open(url, "", "toolbar=no,location=no,directories=no,status=yes,menubar=yes,scrollbars=yes,resizable=yes,width=850,height=580");
}

function delivery(){
	url = ebis.link("出前deオンライン見学会予約URL");
	sub = window.open(url, "", "toolbar=no,location=no,directories=no,status=yes,menubar=yes,scrollbars=yes,resizable=yes,width=850,height=580");
}

function outline(){
	sub = window.open("/tokai/higashibetsuin/detail.cgi","","toolbar=no,location=no,directories=no,status=yes,menubar=yes,scrollbars=yes,resizable=yes,width=780,height=580");
}

function outline1(){
	sub = window.open("/tokai/higashibetsuin/detail.cgi?T=1","","toolbar=no,location=no,directories=no,status=yes,menubar=yes,scrollbars=yes,resizable=yes,width=780,height=580");
}

function outline2(){
	sub = window.open("/tokai/higashibetsuin/detail.cgi?T=2","","toolbar=no,location=no,directories=no,status=yes,menubar=yes,scrollbars=yes,resizable=yes,width=780,height=580");
}

function blog(){
	sub = window.open("/tokai/higashibetsuin/blog/","");
}


