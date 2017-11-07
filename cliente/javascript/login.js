$(document).ready(function(){

$('form').submit(function(e){
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
	.fail(function(xhr){
		alert("Error de inicio de sesion");

	})
	.always(function(){
		console.log("complete");
	});

	return false;
});

   

})