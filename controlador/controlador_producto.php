<?php
include_once "../modelo/modelo_producto.php";
if ($_POST) {
    if (isset($_POST["nombre"]) and $_POST["nombre"]) {
        $nombre=htmlspecialchars($_POST["nombre"]);
    }
    if (isset($_POST["dimensiones"]) and $_POST["dimensiones"]) {
        $dimensiones=htmlspecialchars($_POST["dimensiones"]);
    }
    if (isset($_POST["proveedor"]) and $_POST["proveedor"]) {
        $proveedor=htmlspecialchars($_POST["proveedor"]);
    }
    if (isset($_POST["descripcion"]) and $_POST["descripcion"]) {
        $descripcion=htmlspecialchars($_POST["descripcion"]);
    }
    if (isset($_POST["cantidad-stock"]) and $_POST["cantidad-stock"]) {
        $cantidad_en_stock=htmlspecialchars($_POST["cantidad-stock"]);
    }
    if (isset($_POST["precio-venta"]) and $_POST["precio-venta"]) {
        $precio_venta=htmlspecialchars($_POST["precio-venta"]);
    }
    if (isset($_POST["precio-proveedor"]) and $_POST["precio-proveedor"]) {
        $precio_proveedor=htmlspecialchars($_POST["precio-proveedor"]);
    }

    $producto=new Producto();
    $producto->asignar("nombre",$nombre);
    $producto->asignar("dimensiones",$dimensiones);
    $producto->asignar("proveedor",$proveedor);
    $producto->asignar("descripcion",$descripcion);
    $producto->asignar("cantidad_en_stock",$cantidad_en_stock);
    $producto->asignar("precio_venta", $precio_venta);
    $producto->asignar("precio_proveedor", $precio_proveedor);
    $producto->validar();
}else{
    echo "no hay post";
}