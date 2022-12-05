<?php echo form_open_multipart('')?>
<div class="container">
<?php echo form_open_multipart('ProductosC/insertProducto');?>
	<h3>Registrar un Producto</h3>
	<table class="table mb-3">
			<td style="width:100%">
				<table class="table table-striped">
					<label>Nombre</label>
					<input type="text" class="form-control" name="Nombre">
					<label>Precio</label>
					<input type="int" class="form-control" name="Precio">
					<label>Descripción</label>
					<input type="text" class="form-control" name="Descripcion">
					<label>Stock</label>
					<input type="int" class="form-control" name="Stock"><br>
					<input class="btn btn-outline-primary" type="submit">
					<a class="btn btn-danger" 
						href="http://localhost/veterinaria/index.php/ProductosC/show">Volver</a>
				</table>
			</td>
			<td style="width:100%">
				<img src="https://imgur.com/5DwUx5P.png"
					class="rounded float-start" width="300px" height="350px">
			</td>
	</table>
</div>