$(document).ready(function(){

$("#eliminar").click(function(e){
	e.preventDefault();

	var data= $(this).serializeArray();
	var id = $('#producto').val();

	$.ajax({
		url:'../server/productos/' + id,
		type:'delete',
		dataType:'json',
		data: data
	})
	.done(function(data){
		console.log("success", data);
        alert("registro eliminado exitosamente");

	})
	.fail(function(xhr){
		alert("el registro no se logro eliminar");

	})
	.always(function(){
		console.log("complete");
	});

	return false;
});

   

})