
<form name="form-data" action="recibCliente.php" method="POST">

    <div class="row">
    <div class="cont">                    
            <label for="empresa">Nombre de la empresa</label>
            <input class="form_input" id="empresa" name="nombreEmpresa" type="text">
        </div>

        <div class="cont">                        
            <label for="nomb">Nombre del Contacto</label>
            <input class="form_input" id="nomb" name="nombreContacto" type="text">
        </div>
        
        <div class="cont">                        
            <label for="nomb">Apellido del Contacto</label>
            <input class="form_input" id="nomb" name="apellidoContacto" type="text">
        </div>

        <div class="cont">                        
            <label for="correo">Correo</label>
            <input class="form_input" id="correo" name="correo" type="email"  placeholder="Ej: example@example.ex">
        </div>

        <div class="cont">                        
            <label for="tell">Numero de Telefono</label>
            <input class="form_input" id="tell" name="numeroTelefono" type="tel" placeholder="+569 12345678"  >
        </div>

        <div class="cont">                        
            <label for="cargo">Cargo a Realizar</label>
            <input class="form_input" id="cargo" name="cargoARealizar" type="text" placeholder="ej: Encargado de Cominicaciones">
        </div>

    </div>
      <div class="row justify-content-start text-center mt-5">
          <div class="col-12">
              <button class="btn btn-primary btn-block" id="btnEnviar">
                  Registrar Cliente
              </button>
          </div>
      </div>
</form>
