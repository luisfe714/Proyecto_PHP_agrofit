$(document).ready(function(){

	$("#opSalir1").click(function() { salirOp(); });		
	$("#opSalir2").click(function() { salirOp(); });
	
	function salirOp(){
			$.ajax({
			url: "../controlador/loginControl.php", type: "POST",
			data:{ 	opcion : "salir"  },					
				success: function(response) 
					{  window.location.href = "../../index.php";	},
				error: function(xhr) {
				alert("Error " + xhr.status + ": " + xhr.responseText);
				}					
			});
		}
	///////////////////////////  inicio de bloqueo de boton derecho ///////////////////////////
	document.addEventListener('contextmenu', function (evento) {
		evento.preventDefault();
	});

	// Bloquea los atajos para ver el código fuente y las herramientas del navegador
	document.addEventListener('keydown', function (evento) {
		var tecla = evento.key.toLowerCase();

		var esF12       = evento.key === 'F12';
		var esVerCodigo = evento.ctrlKey && tecla === 'u';                      // Ctrl+U
		var esInspector = evento.ctrlKey && evento.shiftKey &&
						  (tecla === 'i' || tecla === 'j' || tecla === 'c');    // Ctrl+Shift+I / J / C

		if (esF12 || esVerCodigo || esInspector) {
			evento.preventDefault();
		}
	});
	///////////////////////////  fin de bloqueo de boton derecho ///////////////////////////

		
});