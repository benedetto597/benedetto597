<?php

class Producto{
    private $nombreProducto;
    private $imgProducto;
    private $precioProducto;
    private $categoriaProducto;
    private $descripcionProducto;
    private $sucursalProducto;
    private $promocionesProducto;
    private $comentariosProducto;
    private $favoritosProducto;
    private $carritoProducto;
    private $compradoProducto;
    private $calificacionesProducto;

    public function __construct(
    $nombreProducto,
    $imgProducto,
    $precioProducto,
    $categoriaProducto,
    $descripcionProducto,
    $sucursalProducto,
    $promocionesProducto,
    $comentariosProducto,
    $favoritosProducto,
    $carritoProducto,
    $compradoProducto,
    $calificacionesProducto){

        $this->nombreProducto = $nombreProducto;
        $this->imgProducto = $imgProducto;
        $this->precioProducto = $precioProducto;
        $this->categoriaProducto = $categoriaProducto;
        $this->descripcionProducto = $descripcionProducto;
        $this->sucursalProducto = $sucursalProducto;
        $this->promocionesProducto = $promocionesProducto;
        $this->comentariosProducto = $comentariosProducto;
        $this->favoritosProducto = $favoritosProducto;
        $this->carritoProducto = $carritoProducto;
        $this->compradoProducto = $compradoProducto;
        $this->calificacionesProducto = $calificacionesProducto;
    }
 
    public function getCalificacionesProducto()
    {
        return $this->calificacionesProducto;
    }
 
    public function setCalificacionesProducto($calificacionesProducto)
    {
        $this->calificacionesProducto = $calificacionesProducto;

        return $this;
    }
 
    public function getCompradoProducto()
    {
        return $this->compradoProducto;
    }
 
    public function setCompradoProducto($compradoProducto)
    {
        $this->compradoProducto = $compradoProducto;

        return $this;
    }

    public function getCarritoProducto()
    {
        return $this->carritoProducto;
    }
 
    public function setCarritoProducto($carritoProducto)
    {
        $this->carritoProducto = $carritoProducto;

        return $this;
    }

    public function getFavoritosProducto()
    {
        return $this->favoritosProducto;
    }
 
    public function setFavoritosProducto($favoritosProducto)
    {
        $this->favoritosProducto = $favoritosProducto;

        return $this;
    }

    public function getComentariosProducto()
    {
        return $this->comentariosProducto;
    }
 
    public function setComentariosProducto($comentariosProducto)
    {
        $this->comentariosProducto = $comentariosProducto;

        return $this;
    }

    public function getNombreProducto()
    {
        return $this->nombreProducto;
    }
 
    public function setNombreProducto($nombreProducto)
    {
        $this->nombreProducto = $nombreProducto;

        return $this;
    }

    public function getImgProducto()
    {
        return $this->imgProducto;
    }
 
    public function setImgProducto($imgProducto)
    {
        $this->imgProducto = $imgProducto;

        return $this;
    }

    public function getPrecioProducto()
    {
        return $this->precioProducto;
    }

    public function setPrecioProducto($precioProducto)
    {
        $this->precioProducto = $precioProducto;

        return $this;
    }

    public function getCategoriaProducto()
    {
        return $this->categoriaProducto;
    }
 
    public function setCategoriaProducto($categoriaProducto)
    {
        $this->categoriaProducto = $categoriaProducto;

        return $this;
    }

    public function getDescripcionProducto()
    {
        return $this->descripcionProducto;
    }
 
    public function setDescripcionProducto($descripcionProducto)
    {
        $this->descripcionProducto = $descripcionProducto;

        return $this;
    }

    public function getSucursalProducto()
    {
        return $this->sucursalProducto;
    }

    public function setSucursalProducto($sucursalProducto)
    {
        $this->sucursalProducto = $sucursalProducto;

        return $this;
    }
    
    public function getPromocionesProducto()
    {
        return $this->promocionesProducto;
    }

    public function setPromocionesProducto($promocionesProducto)
    {
        $this->promocionesProducto = $promocionesProducto;

        return $this;
    }

    public function obtenerProducto($db, $id){
        
        $respuesta = $db->getReference('productos')
            ->getChild($id)
            ->getValue();

        echo json_encode($respuesta);
    }

    public function obtenerProductos($db){
        $respuesta = $db->getReference('productos')
            ->getSnapshot()
            ->getValue();

        echo json_encode($respuesta);
    }

    public function crearProducto($db){
        $producto = $this->obtenerInfo();
        $respuesta = $db->getReference('productos')
            ->push($producto);
               
        if ($respuesta->getKey() != null)
            return '{"mensaje":"Registro almacenado","key":"'.$respuesta->getKey().'"}';
        else 
            return '{"mensaje":"Error al guardar el registro"}';
    }

    public function actualizarProducto($db, $id){
        $respuesta = $db->getReference('productos')
            ->getChild($id)
            ->set($this->obtenerInfo());
            
        if ($respuesta->getKey() != null)
            return '{"mensaje":"Registro actualizado","key":"'.$respuesta->getKey().'"}';
        else 
            return '{"mensaje":"Error al actualizar el registro"}';
    }

    public function eliminarProducto($db, $id){
        $db->getReference('productos')
            ->getChild($id)
            ->remove();
        echo '{"mensaje":"Se elimin?? el elemento '.$id.'"}';
    }

    public function obtenerInfo(){
        $datos['nombreProducto'] = $this->nombreProducto;
        $datos['imgProducto'] = $this->imgProducto;
        $datos['precioProducto'] = $this->precioProducto;
        $datos['categoriaProducto'] = $this->categoriaProducto;
        $datos['descripcionProducto'] = $this->descripcionProducto;
        $datos['sucursalProducto'] = $this->sucursalProducto;
        $datos['promocionesProducto'] = $this->promocionesProducto;
        $datos['comentariosProducto'] = $this->comentariosProducto;
        $datos['favoritosProducto'] = $this->favoritosProducto;
        $datos['compradoProducto'] = $this->compradoProducto;
        $datos['carritoProducto'] = $this->carritoProducto;
        $datos['calificacionesProducto'] = $this->calificacionesProducto;
        return $datos;
    }

    public static function verificarAutenticacion($db){
        if(!isset($_COOKIE['key']))
            return false;
            
        $respuesta = $db->getReference('empresas')
            ->getChild($_COOKIE['key'])
            ->getValue();

        if($respuesta["token"]==$_COOKIE["token"]){
            return true;
        }else{
            return false;
        }        
    }

    public static function verificarAutenticacionCliente($db){
        if(!isset($_COOKIE['key']))
            return false;
            
        $respuesta = $db->getReference('clientes')
            ->getChild($_COOKIE['key'])
            ->getValue();

        if($respuesta["token"]==$_COOKIE["token"]){
            return true;
        }else{
            return false;
        }        
    }
}
?>