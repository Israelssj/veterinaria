<div class="container">
    <h3>Productos</h3>  
    <a class="btn btn-success"
            href="http://localhost/veterinaria/index.php/ProductosC/insertProducto">Agregar Producto</a>
        <table class="table mb-3">
            <td width="80" height="80">
                <?php foreach($productos as $key):?>
                <p>Imagen: <?=$key->Imagen ?></p>
                <?php endforeach ?>
            </td>
            <td style="width:100%">
            <?php // print_r($productos); ?>
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