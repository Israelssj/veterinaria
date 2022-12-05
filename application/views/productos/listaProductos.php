<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./css/main.css">

    <title>La casita de Goofy</title>
  </head>
<div class="container">
    <h3>Productos</h3>  
    <td style="width:100%">
            <tr>
                <a class="btn btn-outline-primary" 
						href="http://localhost/veterinaria/index.php/HomevC/show">Home</a></a>
            </tr>
            </td>
    <a class="btn btn-success"
            href="http://localhost/veterinaria/index.php/ProductosC/insertProducto">Agregar Producto</a>
        <table class="table mb-3">
            <td style="width:100%">
                <table class="table" style="width:150px">
                    <tbody>
                        <?php foreach($productos as $key):?> 
                            <tr>
                                    <p>Nombre del producto:<br>
                                    <?=$key->Nombre ?></p>
                                    <p>Precio: $<?=$key->Precio ?></p>
                                    <p>Stock: <?=$key->Stock ?></p>
                                <tr>
                                    <a href="<?=base_url('index.php/ProductosC/detalleProducto/').$key->idProducto ?>" >Ver detalle</a>
                                </tr>
                                <tr>
                                    <p><a class="btn btn-success" href="<?=base_url('index.php/ProductosC/borrarProducto/').$key->idProducto ?>" >Borrar</a>
                                    <a class="btn btn-success" href="<?=base_url('index.php/ProductosC/updateProducto/').$key->idProducto ?>" >Editar</a></p>
                                </tr> 
                        <?php endforeach ?>
                    </tbody>
                </table>
            </td>
            <td style="width:100%">
                <img src="https://imgur.com/IfiJy4w.png"
            class="rounded float-start" alt="" width="250" height="750">
            </td>
        </table>
</div>
