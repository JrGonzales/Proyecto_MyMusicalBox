<?php
include '../Utils/conexionDB.php';
include '../BEANS/producto.php';

class metodosAdmin {
    
    public function validarUser($mail,$pss){
        $cnx=new conexionDB();
        $cn=$cnx->getConexion();
        
        $res=$cn->prepare("select * from usuarios where correo='$mail' and password='$pss'");
        $res->execute();
        $cn=null;
        
        foreach ($res as $row){
            $lista=$row;            
        }                
        return $lista;
    }
    
    public function ListarProductos(){
        $cnx=new conexionDB();
        $cn=$cnx->getConexion();
        
        $res=$cn->prepare("select * from productos");
        $res->execute();
        $cn=null;
        
        foreach ($res as $row){
            $lista[]=$row;
        }
        return $lista;
    }
    
    public function grabraProducto(producto $pro){
        $cnx=new conexionDB();
        $cn=$cnx->getConexion();
        
        $res=$cn->prepare("insert into productos values (null,'$pro->des','$pro->pre','$pro->stock','$pro->estado','$pro->detalle','$pro->imagen')");
        $res->execute();
        $cn=null;        
    }
    
    public function editarProducto(producto $pro){
        $cnx=new conexionDB();
        $cn=$cnx->getConexion();
        
        $res=$cn->prepare("update productos set interprete='$pro->des',precio='$pro->pre',stock='$pro->stock',estado='$pro->estado',album='$pro->detalle',imagen='$pro->imagen' where codigoProducto=$pro->cod");
        $res->execute();
        $cn=null;        
    }
    
    public function eliminarProducto($cod){
        $cnx=new conexionDB();
        $cn=$cnx->getConexion();
        
        $res=$cn->prepare("delete from productos where codigoProducto=$cod");
        $res->execute();
        $cn=null;         
    }
    
    public function listarProductosCod($cod){
        $cnx=new conexionDB();
        $cn=$cnx->getConexion();
        
        $res=$cn->prepare("select * from productos where codigoProducto=$cod");
        $res->execute();
        $cn=null;
        
        foreach ($res as $row){
            $lista=$row;
        }
        return $lista;        
    }
    
    public function listarPedidos(){
        $cnx=new conexionDB();
        $cn=$cnx->getConexion();
        
        $res=$cn->prepare("select p.numeroPedido,p.codigoCliente, c.nombre,p.fecha from pedidos p inner join clientes c on p.codigoCliente=c.codigoCliente");
        $res->execute();
        $cn=null;
        
        foreach ($res as $row){
            $lista[]=$row;
        }
        return $lista;
    }
    
    public function listarPedidosNum($num){
        $cnx=new conexionDB();
        $cn=$cnx->getConexion();
        
        $res=$cn->prepare("select d.numeroPedido, d.codigoProducto, p.interprete, p.precio, d.cantidad from detallePedidos d inner join productos p on d.codigoProducto=p.codigoProducto where numeroPedido=$num");        
        $res->execute();
        $cn=null;
        
        foreach ($res as $row){
            $lista[]=$row;
        }
        return $lista;
    }
    
    public function listarClientes(){
        $cnx=new conexionDB();
        $cn=$cnx->getConexion();
        
        $res=$cn->prepare("select codigoCliente, nombre, correo, dni, direccion from clientes");        
        $res->execute();
        $cn=null;
        
        foreach ($res as $row){
            $lista[]=$row;
        }
        return $lista;
    }   
    
}
