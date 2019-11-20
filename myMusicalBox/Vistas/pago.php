<!DOCTYPE html>
<?php 
    session_start();
    include '../DAO/metodosDAO.php';
?>
<html>
    <head>
        <title>My Musical Box</title>
	<link rel="icon" type="text/css" href="../Img/icon.png">
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <title></title>
    </head>
    <body style="background-color:#3d4043;">
<!-- Menu -->
	<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
		<div class="container">
			<a class="navbar-brand">
                        <img src="../Img/logo.png" height="40px"></a>
			<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" aria-expanded="false"
                                data-target="#navbarResponsive" aria-controls="navbarResponsive" 
                                aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarResponsive">
			<ul class="navbar-nav ml-auto">				
				<li class="nav-item">
                                    <a class="nav-link" href="../DAO/tiendaDAO.php?op=1">Catalogo</a>
				</li>
                                <li class="nav-item">
					<a class="nav-link"></a>
				</li>
                                <li class="nav-item">
					<a class="nav-link"></a>
				</li>
                                <?php
                                    if(!isset($_SESSION['acceso']) || $_SESSION['acceso']<>true){                            
                                    }else{
                                ?>                                
				<li class="nav-item">
					<a class="nav-link">Bienvenido: <?php echo $_SESSION['nombre']; ?></a>
				</li>
                                <li class="nav-item">
					<a href="cerrar.php" class="nav-link">Cerrar Sesion</a>
				</li>                                
                                <?php 
                                    }
                                ?>				
			</ul>
		</div>
		</div>
	</nav>
<!-- Fin de Menu --> 
        
<h4 align="center" style="margin-top: 90px">
        <?php        
        if (isset($_REQUEST['total']))
            $total=$_REQUEST['total'];
        
        $estado=$_REQUEST['estado'];
        if ($estado=='pagar'){
        ?>
    <p style="color:#ffffff">
        <?php
            echo 'El monto a pagar es: S/.'.$total; 
        ?>
        <?php
        ?><br><br>
        <a href="http://juniorgr.byethost31.com/myMusicalBox/Vistas/pago.php?estado=ok" class="btn btn-success">Realizar Pedido</a>
<!--        <form action="https://www.paypal.com/cbi-bin/webscr" method="post">
            <input type="hidden" name="cmd" value="_ext-enter" />
            <input type="hidden" name="redirect_cmd" value="_xclick" />
            <input type="hidden" name="business" value="junior1987x@outlook.es" />
            <input type="hidden" name="item_name" value="Productos varios" />
            <input type="hidden" name="quantity" value="1" />
            <input type="hidden" name="amount" value="<?php echo $total; ?>" />
            <input type="hidden" name="currency_code" value="" />
            <input type="hidden" name="return" value="http://localhost/myMusicalBox/Vistas/pago.php?estado=ok" />
            <input type="hidden" name="bn" value="PP-BuyNowBF:btn_buynowCC_LG.gif:NonHostedGuest" />
            <input type="image" src="http://www.paypal.com/es_XC/i/btn/x-click-but01.gif" border="0" name="submit" alt="Pagar para completar la compra." />
        </form>-->
    
    <?php
        }else if($estado=='ok'){
            
            $objMet=new metodosDAO();
            
            if (isset($_SESSION['cesta'])){
                $codCli=$_SESSION['codcli'];
                $fecha=  date("Y-m-d");
                $objPed=new pedido(0, $codCli, $fecha);
                $objMet->registrarPedido($objPed);
                $ultimoPed=$objMet->numeroPedido();
                
                foreach ($_SESSION['cesta'] as $id=>$x){
                    $objDetalle=new detallePedido($ultimoPed[0], $id, $x);
                    $objMet->registrarDetallePedido($objDetalle);
                    
                }                
            }
            unset($_SESSION['cesta']);
                ?>
    <p style="color:#ffffff">
        <?php
            echo 'Pedido se realizo con exito!!';
            ?>
               <br><br>
            <?php
            echo 'Su pedido estara llegando a su direccion en el plazo maximo de 1 semana dias laborables.';
            ?>
               <br><br><br>
            <?php
            echo 'Gracias por su preferencia :) ';
        }
    ?>
</h4>
        
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    </body>
</html>
