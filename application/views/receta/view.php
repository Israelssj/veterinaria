<div class="container">
	<div class="row">	

		<div class="col-lg-12 text-center">
		  <div>
		    <h1>Datos receta</h1> </br>          	
		  </div>
		</div>

		<table class="table "> 
		<thead> 
			<tr> 
				<th>#</th> 
				<th>Nombre de la mascota</th>
				<th>Estatus</th> 
                <th>Descripción y receta</th> 
				<th>Accion</th>
			</tr> 
		</thead> 
        <tbody> 
	        <?php 
            foreach($res_id->result() as $row){
            ?>
            	<tr> 
            		<th scope="row"><?php echo $row->idReceta; ?></th> 
            		<td><?php echo $row->nombre ?></td> 
            		<td><?php echo $row->age ?></td> 
                    <td><?php echo $row->descripcion ?></td> 
            		<td>
            			<a href="update/<?php echo $row->idReceta; ?>"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>
            			<a href="delete/<?php echo $row->idReceta; ?>"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a>
            		</td>
            	</tr> 
            <?php } ?>
        </tbody>
		</table>
	</div>

	<a class="btn btn-success col-md-2 col-md-offset-10" href="http://localhost/veterinaria/index.php/HomecC/show" role="button">Regresar</a>
	
</div>