// JS para login (Registro e Inicio de Sesión)
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


// JS para popup (Formulario Prácticas y Ayudantía)
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


// Llamando a la función getData()
getData()

//Escuchar un evento keyup en el campo de entrada y luego llamar a la función getData.
document.getElementById("campo").addEventListener("keyup", getData)

// Peticion AJAX
function getData() {
	let envia = document.getElementById("campo").value
	let content = document.getElementById("content")
	let url = "mostrar_datos.php"
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
