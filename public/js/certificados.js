function openPDF(pdf){
    window.open(pdf,"_blank");
}
function cerrarSesion(){
	$.ajax({
		url  : 'certificados/cerrarSesion',
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