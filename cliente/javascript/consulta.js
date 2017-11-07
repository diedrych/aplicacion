$(document).ready(function(){

$('form').submit(function(e){
	e.preventDefault();

	var data= $(this).serializeArray();
    var id = $('#producto').val();


	$.ajax({
		url:'../server/productos/' + id,
		type:'get',
		dataType:'json',
		data: data
	})
	.done(function(data){
		
		$('#id_producto').append(data[0][0]);
		$('#id_nombre').append(data[0][1]);
		$('#descripcion').append(data[0][2]);
		$('#costo').append(data[0][3]);
		
		
      
	})
	.fail(function(xhr){
		alert("datos incorrectos");

	})
	.always(function(){
		console.log("complete");
	});

	return false;
});

   

})