<div class="container">
	<div class="row">
		<form method="post" class="form-horizontal col-md-6 col-md-offset-3" idReceta="frmSave"
                action="<?php echo site_url('receta/create_post'); ?>">
		    
            <div class="col-lg-12 text-center">
              <div>
                <h1>Registrar receta</h1> </br>          	
              </div>
            </div>


			<div class="form-group">
			    <label for="input1" class="col-sm-2 control-label">Nombre</label>
			    <div class="col-sm-10">
			      <input type="text" name="nombre"  class="form-control" idReceta="nombre" placeholder="Nombre de la mascota" />
			    </div>
			</div>

			<div class="form-group">
				<label for="input1" class="col-sm-2 control-label">Estatus</label>
				<div class="col-sm-10">
					<select name="age" idReceta="age" class="form-control">
						<option value="-1">Seleccionar estatus</option>
            	        <option value="Dado de alta">Dado de alta</option>
            	        <option value="No dado de alta">No dado de alta</option>               
					</select>
				</div>
			</div>

			

            <div class="form-group">
			    <label for="input1" class="col-sm-2 control-label">Descripción y receta</label>
			    <div class="col-sm-10">
			      <input type="text" name="descripcion" class="form-control" idReceta="descripcion" placeholder="Descripcion y receta"/>
			    </div>
			</div>

			<div class="form-group">
				<div class="row text-right">
			    <div class="col-sm-5">
					<a class="btn btn-success" href="http://localhost/veterinaria/index.php/receta/read" role="button">Ver registros</a>

			    </div>
				<div class="col-sm-5">
					<input type="submit" class="btn btn-primary" value="Guardar" />						
				</div>
			</div>

		</form>
	</div>
</div>

<script>


	document.addEventListener("DOMContentLoaded", function() {
  		document.getElementById("frmSave").addEventListener('submit', validarFormulario); 
	});
	
	function validarFormulario(evento) {
	  evento.preventDefault();
	  var vage = document.getElementById('age').value;

	  if (vage == "-1"){
		alert('Rellene todo el formulario');
		return;
	  }
	  this.submit();
	}

</script>