function validation{
	var no,pap,sap,cur,correo, pas,cpas;
		no = document.getElementById("Nombre").value;
		pap=document.getElementById("appat").value;
		sap=document.getElementById("apmat").value;
		cur=document.getElementById("curp").value;
		correo=document.getElementById("email").value;
		pas=document.getElementById("password").value;
		cpas=document.getElementById("passCon").value;
    if(no ===""||pap==="")||sap===""||cur===""||correo===""||pas===""||cpas===""{
	alert ("Faltan Valores");
    return false;
}
}