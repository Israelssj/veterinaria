<div class="container">
	<form action="<?=base_url('index.php/ProductosC/updateProducto/').$producto[0]->idProducto ?>" method="POST">

				<label>Nombre</label>
				<input type="text" class="form-control" name="Nombre" value="<?=$producto[0]->Nombre ?>">
				<label>Precio</label>
				<input type="int" class="form-control" name="Precio" value="<?=$producto[0]->Precio ?>">
				<label>Descripción</label>
				<input type="text" class="form-control" name="Descripcion" value="<?=$producto[0]->Descripcion ?>">
				<label>Stock</label>
				<input type="int" class="form-control" name="Stock" value="<?=$producto[0]->Stock ?>">
				<input type="submit" value="Actualizar">
				<a class="btn btn-danger" 
				href="http://localhost/veterinaria/index.php/ProductosC/show">Volver</a>
	</form>

</div>