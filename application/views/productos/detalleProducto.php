<div class="container">
	<table class="table">
		<td style="width:100%">
			<p>Nombre del producto: </p>
			<p><?=$producto[0]->Nombre ?></p>
			<p>Precio : </p>
			<p><?=$producto[0]->Precio ?></p>
			<p>Descripción : </p>
			<p><?=$producto[0]->Descripcion ?></p>
			<p>Stock : </p>
			<p><?=$producto[0]->Stock ?></p>
		</td>
		<td style="width:100%">
			<img src="https://imgur.com/INebOMp.png" width="260px" height="290 px">
		</td>
	</table>
	<a class="btn btn-outline-primary" 
		href="http://localhost/veterinaria/index.php/ProductosC/show">Volver</a>
</div>
