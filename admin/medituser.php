<?php

?>
<?php $resultado = mysqli_query($conexion, $datos);
  while($row = mysqli_fetch_assoc($resultado)){
?>
<div class="modal fade " id="edituser<?php echo $row["id"];?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">

<?php } ?>
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel"><i class="fas fa-tools"></i> Editar Configuración</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="POST" enctype="multipart/form-data" id="form1">
        <?php $resultado = mysqli_query($conexion, $datos);
            while($row = mysqli_fetch_assoc($resultado)){
            ?>
                <div class="row">
                <input type="hidden" name="id" value="<?php echo $row["id"]; ?>">
                    <div class="col-md-12">
                      <label for="name"> Nombre</label>
                      <input type="text" name="name" class="form-control" value="<?php echo $row["nombre"]; ?>" autocomplete="off">
                    </div>
                  </div>
                  <div class="row mtop16">
                    <div class="col-md-12">
                      <label for="host"> Host</label>
                      <input type="text" name="host" class="form-control" value="<?php echo $row["host"]; ?>" autocomplete="off">
                    </div>
                  </div>
                  <div class="row mtop16">
                    <div class="col-md-12">
                      <label for="port"> Puerto</label>
                      <input type="text" name="port" class="form-control" value="<?php echo $row["port"]; ?>" onkeypress='return validaNumericos(event)' autocomplete="off" maxlength="3">
                    </div>                    
                  </div>

                  <div class="row mtop16">
                      <div class="col-md-12">
                        <label for="smtpsecure">Cifrado Smtp</label>
                        <input type="text" name="smtpsecure" class="form-control" value="<?php echo $row["smtpsecure"]; ?>" autocomplete="off" maxlength="3">
                      </div>
                  </div>
                  <div class="row mtop16">
                    <div class="col-md-12">
                      <label for="username">Usuario</label>
                      <input type="email" name="username" class="form-control" value="<?php echo $row["username"]; ?>" autocomplete="off">
                    </div>
                  </div>
                  <div class="row mtop16">
                    <div class="col-md-12">
                      <label for="password">Contraseña</label>
                      <input type="password" name="password" class="form-control" value="<?php echo $row["password"]; ?>" autocomplete="off">
                    </div>
                  </div>
       
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" onclick="onSubmitForm(<?php echo $row["id"] ?>);"><i class="fas fa-save"></i> Guardar</button>
        <?php } ?>
        </form>
        <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button> -->
      </div>
    </div>
  </div>
</div>

