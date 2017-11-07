$(document).ready(function(){

 
	var id = $('#id_producto').val();


	$.ajax({
		url:'../server/productos/' + id,
		type:'get',
		dataType:'json'
	})
	.done(function(data){
		
		//$('#id_producto').val(data[0][0]);
		$('#nombre_producto').val(data[0][1]);
		$('#descripcion').val(data[0][2]);
		$('#costo').val(data[0][3]);

		
      
	})
	.fail(function(xhr){
		alert("error al cargar los datos");

	})
	.always(function(){
		console.log("complete");
	});


   

})