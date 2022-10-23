// JS para login (Registro e Inicio de Secion)
const $btnSignIn= document.querySelector('.sign-in-btn'),
      $btnSignUp = document.querySelector('.sign-up-btn'),  
      $signUp = document.querySelector('.sign-up'),
      $signIn  = document.querySelector('.sign-in');

document.addEventListener('click', e => {
    if (e.target === $btnSignIn || e.target === $btnSignUp) {
        $signIn.classList.toggle('active');
        $signUp.classList.toggle('active')
    }
});


// JS para popup (Furmulario Practicas y Ayudantia)
var btnAbrirPopup = document.getElementById('btn-abrir-popup'),
	overlay = document.getElementById('overlay'),
	popup = document.getElementById('popup'),
	btnCerrarPopup = document.getElementById('btn-cerrar-popup');

btnAbrirPopup.addEventListener('click', function(){
	overlay.classList.add('active');
	popup.classList.add('active');
});

btnCerrarPopup.addEventListener('click', function(e){
	e.preventDefault();
	overlay.classList.remove('active');
	popup.classList.remove('active');
});


// Enviar--------------------------------------
$('#EnvCom').click(function () {
	var datos = $('#formCon').serialize();
	$.ajax({
		type: "POST",
		url: "trabajo.php",
		data: datos,
		success: function (r) {
			if (r == 1) {
				alert("Registrados con exito");
				location.reload();
			} else {
				alert("ERROR......");
			}
		}
	});

	return false;
});

// Llamando a la función getData()
getData()

//Escuchar un evento keyup en el campo de entrada y luego llamar a la función getData.
document.getElementById("campo").addEventListener("keyup", getData)

// Peticion AJAX
function getData() {
	let envia = document.getElementById("campo").value
	let content = document.getElementById("content")
	let url = "mostrartra.php"
	let formaData = new FormData()
	formaData.append('campo', envia)

	fetch(url, {
		method: "POST",
		body: formaData
	}).then(response => response.json())
		.then(data => {
			content.innerHTML = data
		}).catch(err => console.log(err))
}