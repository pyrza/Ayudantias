<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/styleTrabajo.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;1,300&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <title>Document</title>
</head>
<body>
    <header>
        <div class="logo">
            <img class="img-logo" src="img/UCT_logo-1024x342.png">
        </div>
        <nav>
            <ul class="menu">
                <li><a href="index.html">Inicio</a></li>
                <li><a href="Ayudantias.html">Ayudantias</a></li>
                <li><a href="Practicas.html">Practicas</a></li>
                <li><a href="Trabajos.html">Trabajos</a></li>
            </ul>
        </nav>
        <div id="login">
            <a class="btn" href="Login.html">Login</a>
        </div>
    </header>
    <hr>
    <div class="contenido">
		<article>
			<button id="btn-abrir-popup" class="btn-abrir-popup">
                Crea tu Propuesta de Trabajo
            </button>
		</article>

		<div class="overlay" id="overlay">
			<div class="popup" id="popup">
				<a href="#" id="btn-cerrar-popup" class="btn-cerrar-popup"><i class='bx bx-x'></i></a>
				<h3>Crea Tu propuesta</h3>
				<h4>Recuerda, es 100% <b>Gratis</b></h4>
				<form action="trabajo.php" id="formCon" method="POST">
                    <div class="form_container" id="cont">
                        <div class="cont">                    
                            <label for="empresa">Nombre de la empresa</label>
                            <input class="form_input" id="empresa" name="empresa" type="text">
                        </div>

                        <div class="cont">                        
                            <label for="nomb">Nombre y Apellido del Contacto</label>
                            <input class="form_input" id="nomb" name="nombre" type="text">
                        </div>
        
                        <div class="cont">                        
                            <label for="correo">Correo</label>
                            <input class="form_input" id="correo" name="correo" type="email"  placeholder="Ej: example@example.ex">
                        </div>
        
                        <div class="cont">                        
                            <label for="tell">Numero de Telefono</label>
                            <input class="form_input" id="tell" name="tell" type="tel" placeholder="+569 12345678"  >
                        </div>

                        <div class="cont">                        
                            <label for="cargo">Cargo a Realizar</label>
                            <input class="form_input" id="cargo" name="cargo" type="text" placeholder="ej: Encargado de Cominicaciones">
                        </div>


                        <div class="cont textarea">                        
                            <textarea class="form_input--message" name="Comentario"></textarea>
                        </div>
                    </div>
					<input type="submit" class="btn-submit" value="Subir propuesta" id="EnvCom" name="EnvCom">
				</form>
			</div>
		</div>
	</div>
    <div class="info_trabajos">
        <div class="buscador">
            <h2>Busca el trabajo de tus sue??os</h2>
            <div>
                <form class="form-comentario" action="" method="post">
                    <label for="campo"></label>
                    <input type="text" class="barra" name="campo" id="campo" required>
                </form>
            </div>
        </div>
        <div>
            <div>
                <table class="tabla-comentarios">
                    <!-- El id del cuerpo de la tabla. -->
                    <tbody class="tn-comentarios" id="content">
                    </tbody>
                </table>
            </div>
        </div>
    </div>



    <hr>
    <footer>
        <p>&copy; Derechos Reservados 2022</p>
        <p><i>Universidad Catolica de Temuco</i></p>
    </footer>


    <script src="JS/script.js" ></script>
</body>
</html>