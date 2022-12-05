<div class="container">
	<div class="row">
	<form method="post" class="form-horizontal col-md-6 col-md-offset-3" action="<?php echo site_url('motivo/update_post')?>">
		
		<div class="col-lg-12 text-center">
		  <div>
		    <h1>Actualizar tipo de cita</h1> </br>          	
		  </div>
		</div>


		
			<div class="form-group">
			    <label for="input1" class="col-sm-2 control-label">Tipo</label>
			    <div class="col-sm-10">
			      <input type="text" name="tipo" value="<?php echo $motivo_data->tipo; ?>" class="form-control" idMotivo="tipo" placeholder="Ingrese el tipo de cita"/>
			    </div>
			</div>



			<div class="form-group">
			    <label for="input1" class="col-sm-2 control-label">Descripcion</label>
			    <div class="col-sm-10">
			      <input type="text" name="descripcion" value="<?php echo $motivo_data->descripcion; ?>" class="form-control" idMotivo="descripcion" placeholder="Por que lleva su mascota a consulta" />
			    </div>
			</div>
		
			
		
			
		
			<div class="form-group">
			<label for="input1" class="col-sm-2 control-label">Urgencia</label>
			<div class="col-sm-10">
				<select name="age" class="form-control">
					<option>Seleccione la urgencia de su cita</option>
					<option value="18" <?php if($motivo_data->age){ echo "selected";} ?>>Si</option>
					<option value="19" <?php if($motivo_data->age){ echo "selected";} ?>>No</option>						
				</select>
			</div>
			</div>

            <div class="form-group">
			    <label for="input1" class="col-sm-2 control-label">Dia</label>
			    <div class="col-sm-10">
			      <input type="date" name="dia" value="<?php echo $motivo_data->dia; ?>" class="form-control" idMotivo="dia" placeholder="Por que lleva su mascota a consulta" />
			    </div>
			</div>
            <div class="form-group">
			    <label for="input1" class="col-sm-2 control-label">Hora</label>
			    <div class="col-sm-10">
			      <input type="time" name="hora" value="<?php echo $motivo_data->hora; ?>" class="form-control" idMotivo="descripcion" placeholder="Por que lleva su mascota a consulta" />
			    </div>
			</div>

			<input type="hidden" value="<?php echo $motivo_data->idMotivo; ?>"  name="idMotivo" />
			<input type="submit" class="btn btn-primary col-md-2 col-md-offset-10" value="Actualizar" />
		</form>
	</div>
</div>