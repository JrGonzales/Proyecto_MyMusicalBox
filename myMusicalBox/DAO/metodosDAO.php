<?php
include '../Utils/conexionDB.php';
include '../BEANS/cliente.php';
include '../BEANS/pedido.php';
include '../BEANS/detallePedido.php';

class metodosDAO {
    
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
    
    public function ListarProductosCod($cod){
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
    
    public function validarUser($mail,$pss){
        $cnx=new conexionDB();
        $cn=$cnx->getConexion();
        
        $res=$cn->prepare("select * from clientes where correo='$mail' and password='$pss'");
        $res->execute();
        $cn=null;
        
        foreach ($res as $row){
            $lista=$row;            
        }                
        return $lista;
    } 
    
    public function registrarCliente(cliente $cli){
        $cnx=new conexionDB();
        $cn=$cnx->getConexion();
        
        $res=$cn->prepare("insert into clientes values(0,'$cli->nombre','$cli->mail','$cli->psw')");
        $i=$res->execute();
        $cn=null;
        return $i;
    }
    
    public function registrarPedido(pedido $ped){
        $cnx=new conexionDB();
        $cn=$cnx->getConexion();
        
        $res=$cn->prepare("insert into pedidos values(0,'$ped->codCli','$ped->fecha')");
        $i=$res->execute();
        $cn=null;
        return $i;
    }
    
    public function numeroPedido(){
        $cnx=new conexionDB();
        $cn=$cnx->getConexion();
        
        $res=$cn->prepare("select max(numeroPedido) from pedidos");
        $res->execute();
        $cn=null;
        
        foreach ($res as $row){
            $num=$row;            
        }                
        return $num;
    }
    
    public function registrarDetallePedido(detallePedido $det){
        $cnx=new conexionDB();
        $cn=$cnx->getConexion();
        
        $res=$cn->prepare("insert into detallePedidos values($det->num,$det->codpro,$det->cant)");
        $i=$res->execute();
        return $i;
    }
    
}
