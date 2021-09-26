<?php

/**
 * @return Producto[]
 */

function losProductos(): array {
    $filename = __DIR__ . "/../datos/productos.json";
    $datosDelJson = file_get_contents($filename);
    $productos = json_decode($datosDelJson, true);
    
    $salida = array_map(function($producto) {
        $objeto = new Producto();
        $objeto->setProductoId($producto['producto_id']);
        $objeto->setNombre($producto['nombre']);
        $objeto->setMarca($producto['marca']);
        $objeto->setPrecio($producto['precio']);
        $objeto->setRodado($producto['rodado']);
        $objeto->setImagen($producto['imagen']);
        $objeto->setAlt($producto['alt']);
        $objeto->setBanner($producto['banner']);
        $objeto->setCategoria($producto['categoria']);
        $objeto->setDescripcion($producto['descripcion']);
        $objeto->setCaracteristicas($producto['caracteristicas']);
       
       
        return $objeto;
    }, $productos);

    return $salida;
}

/**
 * @param int $id
 * @return Producto|null
 */
function productosPorId(int $id): ?Producto {
    $productos = losProductos();

    foreach($productos as $producto) {
        if($producto->getProductoId() === $id) {
            return $producto;
        }
    }
    return null;
}