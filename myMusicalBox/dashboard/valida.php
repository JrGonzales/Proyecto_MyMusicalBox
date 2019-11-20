<?php
    include '../DAO/metodosAdmin.php';
    
    $user=$_REQUEST['txtMail'];
    $psw=$_REQUEST['txtPsw'];
    
    $objMetodos = new metodosAdmin();
    $lista=$objMetodos->validarUser($user, $psw);
    
    if(sizeof($lista)>0){
        session_start();
        $_SESSION['accesoAdmin']=true;        
        header("location: productos.php");        
    }else{
        header("location: login.php?error='Usuario Incorrecto'");        
    }
