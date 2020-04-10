<?php

function ObtenerParametros($cantidad=1){
    include 'conexion.php';
    try{
        $sql = "SELECT * FROM productos LIMIT $cantidad";
        $resultado= $bd->query($sql);
    } catch(Exception $e){
    echo $e->getMessage();
    return array();
}
return $resultado;
    
}

// obtener un id del producto

function obtenerId($idProducto){
    include 'conexion.php';
    try{
        $sql = " SELECT nombre,precio,descripcion,descripcion_corta,imagen_completa FROM productos WHERE id=$idProducto";
        $resultado= $bd->query($sql);
    } catch(Exception $e){
    echo $e->getMessage();
    return array();
}
return $resultado;
    
}

