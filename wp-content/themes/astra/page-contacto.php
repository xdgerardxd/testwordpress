<?php get_header(); ?>

<!--Formulario contacto prueba-->
<div class="container p-4">
  <div class="row">
    <div class="col-md-4 mx-auto">
      
      <div class="card text-center">
    
        <div class="card-header">
          <h3>Formulario de contacto</h3>
        </div>

        <div class="card-body">
            <form action="" method="POST">
                <div class="form-group">
                    <input type="text" id="txtnombre" name="nombres" placeholder="Nombre" class="form-control" autofocus>
                </div>

                <div class="form-group">
                    <input type="text" id="txtapellido" name="Apellidos" placeholder="Apellidos" class="form-control">
                </div>

                <div class="form-group">
                <input type="email" id="txtemail" name="email" placeholder="Email" class="form-control"> 
                </div>

                <div class="form-group">
                    <input type="submit" value="Enviar" class="btn btn-success btn-block mt-2 mb-2">
                </div>
          </form>
        </div>

      </div>

    </div>
  </div>
</div>



<?php get_footer(); ?>