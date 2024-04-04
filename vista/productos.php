<?php
include_once "cabecera.php";
include_once "menu.php";
?>
<main class="app-content p-10">
    <div class="col-auto">
        <form action="../controlador/controlador_producto.php" method="post">
            <div class="mb-3">
                <label for="nombreProducto" class="form-label">Nombre del Producto</label>
                <input type="text" class="form-control" name="nombre" aria-describedby="emailHelp">
                <div class="form-text">Considere que no debe ser un producto repetido</div>
            </div>
            <div class="mb-3">
                <label for="Dimensiones" class="form-label">Dimensiones</label>
                <input type="text" class="form-control" name="dimensiones">
            </div>
            <div class="mb-3">
                <label for="Proveedor" class="form-label">Proveedor</label>
                <input type="text" class="form-control" name="proveedor">
            </div>
            <div class="mb-3">
                <label for="descripcion" class="form-label">Descripcion</label>
                <input type="text" class="form-control" name="descripcion">
            </div>
            <div class="mb-3">
                <label for="cantidad_stock" class="form-label">Registrar ingreso de Stock</label>
                <input type="number" class="form-control" name="cantidad-stock">
            </div>
            <div class="mb-3">
                <label for="precio-venta" class="form-label">Precio de Venta</label>
                <input type="number" class="form-control" name="precio-venta">
            </div>
            <div class="mb-3">
                <label for="precio-proveedor" class="form-label">Precio del proveedor</label>
                <input type="number" class="form-control" name="precio-proveedor">
            </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
  </main>
</form>
