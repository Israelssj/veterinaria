<div class="container">
	<div class="row">
	<form method="post" class="form-horizontal col-md-6 col-md-offset-3" action="<?php echo site_url('mascota/update_post')?>">
		
		<div class="col-lg-12 text-center">
		  <div>
		    <h1>Actualizar mascota</h1> </br>          	
		  </div>
		</div>

		
		
            <div class="form-group">
			    <label for="input1" class="col-sm-2 control-label">Tipo animal</label>
			    <div class="col-sm-10">
			      <input type="text" name="tipoAnimal" value="<?php echo $crud_data->tipoAnimal; ?>" class="form-control" idMascota="tipoAnimal" placeholder="Perro-Gato-Tortuga"/>
			    </div>
			</div>

            <div class="form-group">
			    <label for="input1" class="col-sm-2 control-label">Nombre</label>
			    <div class="col-sm-10">
			      <input type="text" name="nombre" value="<?php echo $crud_data->nombre; ?>" class="form-control" idMascota="nombre" placeholder="Nombre de la mascota"/>
			    </div>
			</div>

            <div class="form-group">
			    <label for="input1" class="col-sm-2 control-label">Raza</label>
			    <div class="col-sm-10">
			      <input type="text" name="raza" value="<?php echo $crud_data->raza; ?>" class="form-control" idMascota="raza" placeholder="Raza de la mascota"/>
			    </div>
			</div>

            <div class="form-group">
			    <label for="input1" class="col-sm-2 control-label">Tamaño</label>
			    <div class="col-sm-10">
			      <input type="text" name="tamanio" value="<?php echo $crud_data->tamanio; ?>" class="form-control" idMascota="tamanio" placeholder="Tamaño de la mascota (Grande/Mediano/Pequeño)"/>
			    </div>
			</div>

            <div class="form-group">
			    <label for="input1" class="col-sm-2 control-label">Pelo</label>
			    <div class="col-sm-10">
			      <input type="text" name="tipoPelo" value="<?php echo $crud_data->tipoPelo; ?>" class="form-control" idMascota="tipoPelo" placeholder="Tipo de pelo de la mascota (Largo/Mediano/Corto)"/>
			    </div>
			</div>

			<div class="form-group">
			    <label for="input1" class="col-sm-2 control-label">Edad</label>
			    <div class="col-sm-10">
			      <input type="text" name="edadEnAnios" value="<?php echo $crud_data->edadEnAnios; ?>" class="form-control" idMascota="edadEnAnios" placeholder="Edad de la mascota"/>
			    </div>
			</div>
		
			<div class="form-group">
			<label for="input1" class="col-sm-2 control-label">Sexo</label>
			<div class="col-sm-10">
				<select name="age" class="form-control">
					<option>Seleccionar sexo</option>
					<option value="18" <?php if($crud_data->age){ echo "selected";} ?>>Macho</option>
					<option value="19" <?php if($crud_data->age){ echo "selected";} ?>>Hembra</option>								
				</select>
			</div>
			</div>
			<input type="hidden" value="<?php echo $crud_data->idMascota; ?>"  name="idMascota" />
			<input type="submit" class="btn btn-primary col-md-2 col-md-offset-10" value="Actualizar" />
		</form>
	</div>
</div>