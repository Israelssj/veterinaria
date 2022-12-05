<div class="container">
	<div class="row">
		<form method="post" class="form-horizontal col-md-6 col-md-offset-3" idMotivo="frmSave"
                action="<?php echo site_url('motivo/create_post'); ?>">
		    
            <div class="col-lg-12 text-center">
              <div>
                <h1>Registrar el motivo de la cita</h1> </br>          	
              </div>
            </div>




			<div class="form-group">
			    <label for="input1" class="col-sm-2 control-label">Tipo</label>
			    <div class="col-sm-10">
			      <input type="text" name="tipo"  class="form-control" idMotivo="tipo" placeholder="Estetico-Medico-Consulta General" />
			    </div>
			</div>

			<div class="form-group">
			    <label for="input1" class="col-sm-2 control-label">Descripcion</label>
			    <div class="col-sm-10">
			      <input type="text" name="descripcion"  class="form-control" idMotivo="descripcion" placeholder="¿Por que lleva a su mascota a consulta?" />
			    </div>
			</div>



			

			<div class="form-group">
				<label for="input1" class="col-sm-2 control-label">Urgencia</label>
				<div class="col-sm-10">
					<select name="age" idMotivo="age" class="form-control">
						<option value="-1">¿Es urgete la consulta medica?</option>
            	        <option value="Si">Si</option>
            	        <option value="No">No</option>
					</select>
				</div>
			</div>

            <div class="form-group">
			    <label for="input1" class="col-sm-2 control-label">Dia</label>
			    <div class="col-sm-10">
			      <input type="date" name="dia"  class="form-control" idMotivo="dia" placeholder="Dia de la cita" />
			    </div>
			</div>

            <div class="form-group">
			    <label for="input1" class="col-sm-2 control-label">Hora</label>
			    <div class="col-sm-10">
			      <input type="time" name="hora"  class="form-control" idMotivo="hora" placeholder="Dia de la cita" />
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
<br><br><br><br><br>
<div>
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
		alert('Selecciona la urgencia');
		return;
	  }
	  this.submit();
	}
	
</script>