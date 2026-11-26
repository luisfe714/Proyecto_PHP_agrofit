$(document).ready(function() {

    $("#entrarBtn").click(function() {

        if ($("#correoUsuario").val() == "") {
                Swal.fire({
                    title: 'Informe de credenciales',
                    text: 'Digite el usuario',
                    icon: 'question'
                }); 
            $("#correoUsuario").focus();

        } else {
            if ($("#claveUsuario").val() == "") {
                Swal.fire({
                    title: 'Informe de credenciales',
                    text: 'Digite la clave',
                    icon: 'question'
                }); 
                $("#claveUsuario").focus();

            } else {
                $.ajax({
                        url: "herramientas/controlador/loginControl.php", type: "POST",
                            data: { 
                                opcion : "iniciarLogueo",
                                correoUsu: $("#correoUsuario").val(),
                                claveUsu  : $("#claveUsuario").val()
                                },
                            success: function(response) {	
                                var estado = String(response).trim();					
                                if (estado === "0") 
                                    { 
                                        Swal.fire({
                                            title: 'Informe de credenciales',
                                            text: 'Acceso no permitido.',
                                            icon: 'question'
                                        }); 
                                    }
                                else if (estado === "1") 
                                    {
                                        Swal.fire({
                                            title: 'Informe de credenciales',
                                            text: 'Acceso permitido.',
                                            icon: 'success'
                                        }).then(function() {
                                            window.location.href = "herramientas/vista/menuInicio.php";
                                        });
                                    }
                                else {
                                    console.error("Respuesta inesperada de loginControl.php:", response);
                                    Swal.fire({
                                        title: 'Error al iniciar sesión',
                                        text: 'El servidor devolvió una respuesta inesperada. Revisa la consola y los registros de PHP.',
                                        icon: 'error'
                                    });
                                }
                            },
                            error: function(xhr) {
                                console.error("Error en loginControl.php:", xhr.status, xhr.responseText);
                                Swal.fire({
                                    title: 'Error al iniciar sesión',
                                    text: 'No se pudo completar la solicitud. Código HTTP: ' + xhr.status,
                                    icon: 'error'
                                });
                            }
                    });
            }
        }

    });

    $("#activarBtn").click(function() {
        if ($("#correoUsuario").val() == "") {
            Swal.fire({
                title: 'Informe de credenciales',
                text: 'Para recuperar la clave porfavor, Digite el correo sena.',
                icon: 'question'
            });
            $("#correoUsuario").focus();

        } else {
        }
    });

});