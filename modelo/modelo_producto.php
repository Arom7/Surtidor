<?php
require_once "conexion/conexionBase.php";

class Producto
{
    private $codigo_producto;
    private $nombre;
    private $gama_producto;
    private $dimensiones;
    private $proveedor;
    private $descripcion;
    private $cantidad_en_stock;
    private $precio_venta;
    private $precio_proveedor;
    private $con;

    function __construct()
    {
        $this->codigo_producto = "";
        $this->nombre = "";
        $this->gama_producto = "calidad";
        $this->dimensiones = "";
        $this->proveedor = "";
        $this->descripcion = "";
        $this->cantidad_en_stock = 0;
        $this->precio_venta = 0.0;
        $this->precio_proveedor = 0.0;
        $this->con = new conexionBase();
    }

    function asignar($nombre, $valor)
    {
        $this->$nombre = $valor;
    }

    function validar()
    {
        $sql="select * from Producto where nombre='$this->nombre'";
        $this->con->CreateConnection();
        $resp=$this->con->ExecuteQuery($sql);
        $aux=$this->con->GetCountAffectedRows($resp);
        if($aux>0){
            $_SESSION['error']=1;
            $_SESSION['mensaje']="Producto ya registrado, actualizacion de stock";
            header("Location: ../vista");
        }else{
            $this->registrarProducto();
        }
    }

    function registrarProducto()
    {
        
        $this->codigo_producto = substr($this->nombre,0,2)."-".rand(0,99);
        $this->con->CreateConnection();
        $sql = "insert into Producto(codigo_producto,nombre,gama_producto,dimensiones,proveedor,descripcion,cantidad_stock,precio_venta,precio_proveedor)
        values ('$this->codigo_producto','$this->nombre','calidad','$this->dimensiones','$this->proveedor','$this->descripcion','$this->cantidad_en_stock','$this->precio_venta','$this->precio_proveedor')";
        $resp = $this->con->ExecuteQuery($sql);
        $_SESSION['mensaje']="Producto nuevo registrado.";
        header("Location: ../vista");
    }


}