$(document).ready(function(){

$("#cerrar").submit(function(e){
	e.preventDefault();

	var data= $(this).serializeArray();

	$.ajax({
		url:'../server/usuario',
		type:'post',
		dataType:'json',
		data: data
	})
	.done(function(data){
		console.log("success", data);
        location.href ="consulta_producto.php";

	})
	
	

	return false;
});

   

})
