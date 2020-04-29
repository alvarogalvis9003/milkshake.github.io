$(document).ready(function(){
    
    $(".buscar-certificado").bind("submit", function(){

        $.ajax({
            type:$(this).attr("method"),
            url:$(this).attr("action"),
            data:$(this).serialize(),
            
            error: function(){
                $("#mensaje_alerta").removeClass("hide").removeClass("alert-danger").removeClass("alert-success").addClass("alert-danger");
                $(".respuesta").html("Error! - ");
                $(".mensaje-alerta").html("El mensaje NO ha sido enviado.");
            }
        });
        return false;
    })
});