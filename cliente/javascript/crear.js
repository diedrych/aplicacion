$(document).ready(function(){

$('form').submit(function(e){
	e.preventDefault();

	var data= $(this).serializeArray();

	$.ajax({
		url:'../server/productos',
		type:'post',
		dataType:'json',
		data: data
	})
	.done(function(data){
		console.log("success", data);
        alert("registro creado exitosamente")

	})
	.fail(function(xhr){
		alert("no se registro informacion");

	})
	.always(function(){
		console.log("complete");
	});

	return false;
});

   

})