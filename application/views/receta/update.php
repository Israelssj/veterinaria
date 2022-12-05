<div class="container">
	<div class="row">
	<form method="post" class="form-horizontal col-md-6 col-md-offset-3" action="<?php echo site_url('receta/update_post')?>">
		
		<div class="col-lg-12 text-center">
		  <div>
		    <h1>Actualizar receta</h1> </br>          	
		  </div>
		</div>

		
			<div class="form-group">
			    <label for="input1" class="col-sm-2 control-label">Nombre</label>
			    <div class="col-sm-10">
			      <input type="text" name="nombre" value="<?php echo $receta_data->nombre; ?>" class="form-control" idReceta="nombre" placeholder="Edite el nombre de la mascota"/>
			    </div>
			</div>
		
			<div class="form-group">
			<label for="input1" class="col-sm-2 control-label">Estatus</label>
			<div class="col-sm-10">
				<select name="age" class="form-control">
					<option>Seleccionar estatus</option>
					<option value="Dado de alta" <?php if($receta_data->age == 20){ echo "selected";} ?>>Dado de alta</option>
					<option value="No dado de alta" <?php if($receta_data->age == 20){ echo "selected";} ?>>No dado de alta</option>								
				</select>
			</div>

            <div class="form-group">
			    <label for="input1" class="col-sm-2 control-label">Descripción y receta</label>
			    <div class="col-sm-10">
			      <input type="text" name="descripcion" class="form-control" idReceta="descripcion" placeholder="Edite la descripcion y receta"/>
			    </div>
			</div>

			</div>
			<input type="hidden" value="<?php echo $receta_data->idReceta; ?>"  name="idReceta" />
			<input type="submit" class="btn btn-primary col-md-2 col-md-offset-10" value="Actualizar" />
		</form>
	</div>
</div>