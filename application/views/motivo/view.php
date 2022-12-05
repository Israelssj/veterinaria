<div class="container">
	<div class="row">	

		<div class="col-lg-12 text-center">
		  <div>
		    <h1>Ver motivos de la cita</h1> </br>          	
		  </div>
		</div>

		<table class="table "> 
		<thead> 
			<tr> 
				<th>idMotivo</th> 
                <th>Tipo</th>
				<th>Descripcion</th>
                <th>Urgencia</th>
                <th>Dia</th>
                <th>Hora</th>
				<th>Accion</th>
                
			</tr> 
		</thead> 
        <tbody> 
	        <?php 
            foreach($res_id->result() as $row){
            ?>
            	<tr> 
            		<th scope="row"><?php echo $row->idMotivo; ?></th> 
                    <td><?php echo $row->tipo; ?></td> 
            		<td><?php echo $row->descripcion; ?></td> 
                    <td><?php echo $row->age; ?></td> 
                    <td><?php echo $row->dia; ?></td> 
                    <td><?php echo $row->hora; ?></td> 
            		
            		<td>
            			<a href="update/<?php echo $row->idMotivo; ?>"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>
            			<a href="delete/<?php echo $row->idMotivo; ?>"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a>
            		</td>
            	</tr> 
            <?php } ?>
        </tbody>
		</table>
	</div>

	<a class="btn btn-success col-md-2 col-md-offset-10" href="http://localhost/veterinaria/index.php/motivo/create">Registrar motivo</a>  
	<a class="btn btn-success col-md-2 col-md-offset-10" href="http://localhost/veterinaria/index.php/CitasVC/show">Volver</a>  

</div>