<?php

include '../DAO/metodosAdmin.php';

$op=$_REQUEST['op'];

switch ($op){
    case 1:
        $target_path="../Img/";
        $target_path=$target_path.basename($_FILES['archivo']['name']);
        move_uploaded_file($_FILES['archivo']['tmp_name'],$target_path);
        $img=  basename($_FILES['archivo']['name']);
        
        $objPro=new producto(0, $_REQUEST['txtDes'], $_REQUEST['txtPre'], $_REQUEST['txtCan'], $_REQUEST['SelectEstado'], $_REQUEST['txtDet'], $img);
        
        $metodos=new metodosAdmin();
        $metodos->grabraProducto($objPro);
        
        header('location: productos.php');
        break;
    case 2:
        $target_path="../Img/";
        $target_path=$target_path.basename($_FILES['archivo']['name']);
        move_uploaded_file($_FILES['archivo']['tmp_name'],$target_path);
        $img=  basename($_FILES['archivo']['name']);
        
        $objPro=new producto($_REQUEST['txtCod'], $_REQUEST['txtDes'], $_REQUEST['txtPre'], $_REQUEST['txtCan'], $_REQUEST['SelectEstado'], $_REQUEST['txtDet'], $img);
        
        $metodos=new metodosAdmin();
        $metodos->editarProducto($objPro);
        header('location: productos.php');
        break;
    case 3:
        $metodos=new metodosAdmin();
        $metodos->eliminarProducto($_REQUEST['cod']);
        
        header('location: productos.php');
        break;
    default :
        break;
}

