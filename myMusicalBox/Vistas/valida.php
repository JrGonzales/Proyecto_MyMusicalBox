<?php
    include '../DAO/metodosDAO.php';

    
    $user=$_REQUEST['txtuser'];
    $psw=$_REQUEST['txtpsw'];
    
    $objMetodos = new metodosDAO();
    $lista=$objMetodos->validarUser($user, $psw);

    
    if(sizeof($lista)>0){
        session_start();
        $_SESSION['acceso']=true;
        $_SESSION['codcli']=$lista[0];
        $_SESSION['nombre']=$lista[1];
        
        header("Location: catalogo.php");        
    }else{
        header("Location: catalogo.php");        
    }
    