// Conexion mediante js al php y html mediante el boton enviar

$('#EnvCom').click(function () {
	var datos = $('#formCon').serialize();
	$.ajax({
		type: "POST",
		url: "trabajo.php",
		data: datos,
		success: function (r) {
			if (r == 1) {
				alert("Registrados con exito");
			} else {
				alert("ERROR......");
			}
		}
	});

	return false;
});