
<?php
require_once __DIR__ . '/../library/productos.php';

$id = (int) $_GET['id'];
$producto = productosPorId($id);

?>


<main>
    <h1 class="visually-hidden">Detalle de cada producto</h1>

    <section class="banner-detalles"> 
        <p class="visually-hidden">Categoría: <?=$producto->getCategoria();?> </p>
        <img src="<?=$producto->getBanner();?>" alt="Categoria: <?=$producto->getCategoria();?>">
        
    </section>
               
    <section class="detalle-producto container">
        <div class="row" >
            <div class="col-md-7">
                <h2> <?=$producto->getNombre();?></h2>
                <p> <span>Marca: </span> <?=$producto->getMarca();?></p>
                <p> <span> Categoría: </span>  <?=$producto->getCategoria();?></p>
                <ul>
                    <?php
                    foreach($producto->getCaracteristicas() as $key => $caracteristica):?>
                    <li> <?='<span class="key">' . $key . '</span>: ' . $caracteristica;?></li>

                    <?php
                    endforeach; ?>
                </ul>
                <p><?=$producto->getDescripcion();?></p>

                <p><span class="precio"> $ <?=$producto->getPrecio();?></span></p>
            </div>          

            <div class="imagen-producto col-md-5">
                <img src="<?=$producto->getImagen();?>" alt="<?=$producto->getAlt();?>">
            </div>   
            
        </div>
    </section>
</main>
