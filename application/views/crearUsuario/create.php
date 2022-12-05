<div class="container">
	<div class="row">
		<form method="post" class="form-horizontal col-md-6 col-md-offset-3" idUsuario="frmSave"
                action="<?php echo site_url('crearUsuario/create_post'); ?>">
		    
            <div class="col-lg-12 text-center">
              <div>
                <h1>Registrar nuevo usuario</h1> </br>          	
              </div>
            </div>


			<div class="form-group">
			    <label for="input1" class="col-sm-2 control-label">Perfil</label>
			    <div class="col-sm-10">
			      <input type="text" name="fname"  class="form-control" idUsuario="fname" placeholder="Agregue el numero 1" />
			    </div>
			</div>

			<div class="form-group">
			    <label for="input1" class="col-sm-2 control-label">Nombre y apellidos</label>
			    <div class="col-sm-10">
			      <input type="text" name="lname"  class="form-control" idUsuario="lname" placeholder="Nombre y apellidos" />
			    </div>
			</div>

			<div class="form-group">
			    <label for="input1" class="col-sm-2 control-label">Email</label>
			    <div class="col-sm-10">
			      <input type="email" name="email"  class="form-control" idUsuario="email" placeholder="Email" />
			    </div>
			</div>

            <div class="form-group">
			    <label for="input1" class="col-sm-2 control-label">Contraseña</label>
			    <div class="col-sm-10">
			      <input type="password" name="pass"  class="form-control" idUsuario="pass" placeholder="Contraseña" />
			    </div>
			</div>
			
            <div class="form-group" class="radio">
			<label for="input1" class="col-sm-2 control-label">Sexo</label>
			<div class="col-sm-10">
			  <label>
			    <input type="radio" name="gender" idUsuario="optionsRadios1" value="m" checked> Masculino
			  </label>
			  	  <label>
			    <input type="radio" name="gender" idUsuario="optionsRadios1" value="f"> Femenino
			  </label>
			</div>
			</div>

			<div class="form-group">
				<label for="input1" class="col-sm-2 control-label">Edad</label>
				<div class="col-sm-10">
					<select name="age" idUsuario="age" class="form-control">
						<option value="-1">Seleccionar Edad</option>
            	        <option value="18">18</option>
            	        <option value="19">19</option>
            	        <option value="20">20</option>
						<option value="21">21</option>
						<option value="22">22</option>
						<option value="23">23</option>
						<option value="24">24</option>
						<option value="25">25</option>
            	        <option value="26">26</option>
            	        <option value="27">27</option>
            	        <option value="28">28</option>
            	        <option value="29">29</option>
            	        <option value="30">30</option>                    
					</select>
				</div>
			</div>
			
			<div class="form-group">
				<div class="row text-right">
			    <div class="col-sm-5">
					<a class="btn btn-success" href="http://localhost/veterinaria/index.php/HomeC/show" role="button">Volver</a>
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
		alert('Seleccionar Edad');
		return;
	  }
	  this.submit();
	}

</script>