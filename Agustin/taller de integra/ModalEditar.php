
<!--ventana para Update--->
<div class="modal fade" id="editChildresn<?php echo $dataCliente['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" style="background-color: #563d7c !important;">
        <h6 class="modal-title" style="color: #fff; text-align: center;">
            Actualizar Información
        </h6>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>


      <form method="POST" action="recib_Update.php">
        <input type="hidden" name="id" value="<?php echo $dataCliente['id']; ?>">

            <div class="modal-body" id="cont_modal">

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
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
              <button type="submit" class="btn btn-primary">Guardar Cambios</button>
            </div>
       </form>

    </div>
  </div>
</div>
<!---fin ventana Update --->
