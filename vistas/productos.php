<?php
require_once __DIR__. '/../library/productos.php';
$productos = losProductos();
?>
<main class="container">
   
    <section class="productos row">
        <h1>Productos</h1>
        <?php
        foreach($productos as $producto): ?>
        
        <article class="producto col-md-3 offset-md-1">
            <figure>
                <img src="<?= $producto->getImagen();?>" alt="<?= $producto->getAlt();?>">
            </figure>    
            <div>
                <h2><?= $producto->getNombre();?></h2>
                <p><?= $producto->getMarca();?></p>
                <p> |  Precio:  <span>$<?= $producto->getPrecio();?></span></p>
                <p class="d-block">Rodado <?= $producto->getRodado();?></p>
            </div>
            <a class="btn" href="index.php?s=detalle-productos&id=<?= $producto->getProductoId();?>">Ver producto</a>
          </article>

        

        <?php
            endforeach; ?>

    </section>


</main>