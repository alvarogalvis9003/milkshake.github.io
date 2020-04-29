$(document).ready(function(){
       $("#formulario-contacto").submit(function( event ){
		event.preventDefault();

		$.ajax({
			type: 'POST',
			url: './php/send.php',
			data: $(this).serialize(),
			success: function(data){
				$("#respuesta").slideDown();
				$("#respuesta").html(data);
                $('#respuesta2').modal('show');
                document.getElementById('formulario-contacto').reset();
			}
		});

		return false;
	});
});