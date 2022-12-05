<div class="container">
	<div class="row">	

		<div class="col-lg-12 text-center">
		  <div>
		    <h1>Datos del dueño</h1> </br>          	
		  </div>
		</div>

		<table class="table "> 
		<thead> 
			<tr> 
				<th>#</th> 
				<th>Nombres y Apellidos</th> 
				<th>Email</th> 
				<th>Sexo</th> 
				<th>Edad</th> 
				<th>Telefono</th>
				<th>Direccion</th>
				<th>Accion</th>
			</tr> 
		</thead> 
        <tbody> 
	        <?php 
            foreach($res_id->result() as $row){
            ?>
            	<tr> 
            		<th scope="row"><?php echo $row->idDuenio; ?></th> 
            		<td><?php echo $row->first_name . " " . $row->last_name; ?></td> 
            		<td><?php echo $row->email_id; ?></td> 
            		<td><?php echo $row->gend ?></td> 
            		<td><?php echo $row->age ?></td> 
					<td><?php echo $row->numTelefono ?></td> 
					<td><?php echo $row->direccion ?></td> 
            		<td>
            			<a href="update/<?php echo $row->idDuenio; ?>"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>
            			<a href="delete/<?php echo $row->idDuenio; ?>"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a>
            		</td>
            	</tr> 
            <?php } ?>
        </tbody>
		</table>
	</div>

	<a class="btn btn-success col-md-2 col-md-offset-10" href="http://localhost/veterinaria/index.php/crud/create">Registrar cita</a>  
	<a class="btn btn-success col-md-2 col-md-offset-10" href="http://localhost/veterinaria/index.php/CitasVC/show">Volver</a>  

</div>