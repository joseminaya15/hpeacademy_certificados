function openPDF(pdf){
    window.open(pdf,"_blank");
}
function cerrarCesion(){
	$.ajax({
		url  : 'certificados/cerrarCesion',
		type : 'POST'
	}).done(function(data){
		try{
        data = JSON.parse(data);
        if(data.error == 0){
        	location.href = 'Login';
        }else {
        	return;
        }
      }catch(err){
        msj('error',err.message);
      }
	});
}