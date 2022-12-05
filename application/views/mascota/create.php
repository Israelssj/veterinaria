<div class="container">
	<div class="row">
		<form method="post" class="form-horizontal col-md-6 col-md-offset-3" idMascota="frmSave"
                action="<?php echo site_url('mascota/create_post'); ?>">
		    
            <div class="col-lg-12 text-center">
              <div>
                <h1>Registrar mascota</h1> </br>          	
              </div>
            </div>


			<div class="form-group">
			    <label for="input1" class="col-sm-2 control-label">Tipo animal</label>
			    <div class="col-sm-10">
			      <input type="text" name="tipoAnimal"  class="form-control" idMascota="tipoAnimal" placeholder="Perro-Gato-Tortuga" />
			    </div>
			</div>

            <div class="form-group">
			    <label for="input1" class="col-sm-2 control-label">Nombre</label>
			    <div class="col-sm-10">
			      <input type="text" name="nombre"  class="form-control" idMascota="nombre" placeholder="Nombre de la mascota" />
			    </div>
			</div>

            <div class="form-group">
			    <label for="input1" class="col-sm-2 control-label">Raza</label>
			    <div class="col-sm-10">
			      <input type="text" name="raza"  class="form-control" idMascota="raza" placeholder="Raza de la mascota" />
			    </div>
			</div>

            <div class="form-group">
			    <label for="input1" class="col-sm-2 control-label">Tamaño</label>
			    <div class="col-sm-10">
			      <input type="text" name="tamanio"  class="form-control" idMascota="tamanio" placeholder="Tamaño de la mascota" />
			    </div>
			</div>
			
            <div class="form-group">
			    <label for="input1" class="col-sm-2 control-label">Pelo</label>
			    <div class="col-sm-10">
			      <input type="text" name="tipoPelo"  class="form-control" idMascota="tipoPelo" placeholder="Tipo de pelo de la mascota (Largo-mediano-corto)" />
			    </div>
			</div>

			<div class="form-group">
			    <label for="input1" class="col-sm-2 control-label">Edad</label>
			    <div class="col-sm-10">
			      <input type="text" name="edadEnAnios"  class="form-control" idMascota="edadEnAnios" placeholder="Edad de la mascota" />
			    </div>
			</div>

			<div class="form-group">
				<label for="input1" class="col-sm-2 control-label">Sexo</label>
				<div class="col-sm-10">
					<select name="age" idMascota="age" class="form-control">
						<option value="">Seleccionar sexo</option>
            	        <option value="Macho">Macho</option>
            	        <option value="Hembra">Hembra</option>                  
					</select>
				</div>
			</div>
			
			<div class="form-group">
				<div class="row text-right">
			    <div class="col-sm-5">
			    </div>
				<div class="col-sm-5">
					<input type="submit" class="btn btn-primary" value="Guardar" />						
				</div>
			</div>

		</form>
	</div>
</div>
<div class="d-grid gap-2">
<a class="btn btn-outline-primary" aria-current="page" 
          href="http://localhost/veterinaria/index.php/CitasC/show">Regresar</a>
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
		alert('Seleccionar el sexo');
		return;
	  }
	  this.submit();
	}

</script>