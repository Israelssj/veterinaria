<div class="container">
	<div class="row">
	<form method="post" class="form-horizontal col-md-6 col-md-offset-3" action="<?php echo site_url('crearUsuario/update_post')?>">
		
		<div class="col-lg-12 text-center">
		  <div>
		    <h1>Actualizar Empleado</h1> </br>          	
		  </div>
		</div>

		
			<div class="form-group">
			    <label for="input1" class="col-sm-2 control-label">Nombres</label>
			    <div class="col-sm-10">
			      <input type="text" name="fname" value="<?php echo $crearUsuario_data->perfil; ?>" class="form-control" idUsuario="fname" placeholder="Nombres"/>
			    </div>
			</div>
		
			<div class="form-group">
			    <label for="input1" class="col-sm-2 control-label">Apellidos</label>
			    <div class="col-sm-10">
			      <input type="text" name="lname" value="<?php echo $crearUsuario_data->last_name; ?>" class="form-control" idUsuario="lname" placeholder="Apellidos" />
			    </div>
			</div>
		
			<div class="form-group">
			    <label for="input1" class="col-sm-2 control-label">Email</label>
			    <div class="col-sm-10">
			      <input type="email" name="email" value="<?php echo $crearUsuario_data->email_id; ?>" class="form-control" idUsuario="email" placeholder="Email" />
			    </div>
			</div>
		
			<div class="form-group" class="radio">
			<label for="input1" class="col-sm-2 control-label">Sexo</label>
			<div class="col-sm-10">
			  <label>
			    <input type="radio" name="gender" idUsuario="optionsRadios1" <?php if($crearUsuario_data->gender == 'm'){ echo "checked";} ?> value="m"> Masculino
			  </label>
			  	  <label>
			    <input type="radio" name="gender" idUsuario="optionsRadios1" <?php if($crearUsuario_data->gender == 'f'){ echo "checked";} ?> value="f"> Femenino
			  </label>
			</div>
			</div>
		
			<div class="form-group">
			<label for="input1" class="col-sm-2 control-label">Edad</label>
			<div class="col-sm-10">
				<select name="age" class="form-control">
					<option>Seleccionar Edad</option>
					<option value="18" <?php if($crearUsuario_data->age == 20){ echo "selected";} ?>>18</option>
					<option value="19" <?php if($crearUsuario_data->age == 20){ echo "selected";} ?>>19</option>					
					<option value="20" <?php if($crearUsuario_data->age == 20){ echo "selected";} ?>>20</option>
					<option value="21" <?php if($crearUsuario_data->age == 21){ echo "selected";} ?>>21</option>
					<option value="22" <?php if($crearUsuario_data->age == 22){ echo "selected";} ?>>22</option>
					<option value="23" <?php if($crearUsuario_data->age == 23){ echo "selected";} ?>>23</option>
					<option value="24" <?php if($crearUsuario_data->age == 24){ echo "selected";} ?>>24</option>
					<option value="25" <?php if($crearUsuario_data->age == 25){ echo "selected";} ?>>25</option>
					<option value="26" <?php if($crearUsuario_data->age == 26){ echo "selected";} ?>>26</option>
					<option value="27" <?php if($crearUsuario_data->age == 27){ echo "selected";} ?>>27</option>
					<option value="28" <?php if($crearUsuario_data->age == 28){ echo "selected";} ?>>28</option>
					<option value="29" <?php if($crearUsuario_data->age == 29){ echo "selected";} ?>>29</option>
					<option value="30" <?php if($crearUsuario_data->age == 30){ echo "selected";} ?>>30</option>			
				</select>
			</div>
			</div>
			<input type="hidden" value="<?php echo $crearUsuario_data->idUsuario; ?>"  name="idUsuario" />
			<input type="submit" class="btn btn-primary col-md-2 col-md-offset-10" value="Actualizar" />
		</form>
	</div>
</div>