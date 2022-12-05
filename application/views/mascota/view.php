<div class="container">
	<div class="row">	

		<div class="col-lg-12 text-center">
		  <div>
		    <h1>Datos de la mascota</h1> </br>          	
		  </div>
		</div>

		<table class="table "> 
		<thead> 
			<tr> 
				<th>#</th> 
				<th>Tipo animal</th> 
				<th>Nombre</th> 
				<th>Raza</th> 
				<th>Tamaño</th> 
                <th>Tipo de pelo</th>
                <th>Edad</th>
                <th>Sexo</th>
				<th>Accion</th>
			</tr> 
		</thead> 
        <tbody> 
	        <?php 
            foreach($res_id->result() as $row){
            ?>
            	<tr> 
            		<th scope="row"><?php echo $row->idMascota; ?></th> 
            		<td><?php echo $row->tipoAnimal; ?></td> 
            		<td><?php echo $row->nombre; ?></td> 
            		<td><?php echo $row->raza ?></td> 
                    <td><?php echo $row->tamanio ?></td> 
                    <td><?php echo $row->tipoPelo ?></td> 
                    <td><?php echo $row->edadEnAnios ?></td> 
            		<td><?php echo $row->age ?></td> 
            		<td>
            			<a href="update/<?php echo $row->idMascota; ?>"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>
            			<a href="delete/<?php echo $row->idMascota; ?>"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a>
            		</td>
            	</tr> 
            <?php } ?>
        </tbody>
		</table>
	</div>

	<a class="btn btn-success col-md-2 col-md-offset-10" href="http://localhost/veterinaria/index.php/mascota/create">Registrar mascota</a>  
	<a class="btn btn-success col-md-2 col-md-offset-10" href="http://localhost/veterinaria/index.php/CitasVC/show">Volver</a>  

</div>