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
					<a class="nav-link"></a>
				</li>
                                <li class="nav-item">
					<a class="nav-link"></a>
				</li>
                                <?php
                                    if(!isset($_SESSION['acceso']) || $_SESSION['acceso']<>true){
                                ?>                                
                                <li class="nav-item">
					<a class="nav-link" href="registro.php">Registrarse</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="" data-toggle="modal" data-target="#LoginModal">Iniciar Sesion</a>
				</li>                                
                                <?php
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
<!-- Modal LOGIN-->
        <div class="modal fade" id="LoginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Iniciar Sesion</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
                <form action="valida.php">
              <div class="modal-body" id="mostrar">                  
                      <table border="0" align="center">
                          <tr>
                              <td>Usuario: </td>
                              <td><input type="text" name="txtuser"></td>
                          </tr>
                          <tr>
                              <td>Password: </td>
                              <td><input type="password" name="txtpsw"></td>
                          </tr>
                      </table>                  
              </div>
              <div class="modal-footer">
                  <button class="btn btn-secondary">Cerrar</button>
                  <button class="btn btn-primary" onclick="submit()">Iniciar Sesion</button>                
              </div>
                    <h6 align="center"><a href="registro.php">Registrarse</a></h6>
                </form>>
            </div>
          </div>
        </div>
        <br><br><br><br>
        <div class="container">
            
            <table border="1" align="center" width="400" class="table">
                <thead class="thead-light">
                <th colspan="4"><h2 align="center" style="margin-top: 5px">Cesta de Productos</h2></th>
            </thead>
                <tr class="table-primary">
                    <th>Productos</th>
                    <th>Precio</th>
                    <th>Cantidad</th>
                    <th>Costo</th>
                </tr>
                    <?php
                        if(isset($_SESSION['cesta'])){
                            $total=0;
                            foreach ($_SESSION['cesta']as $id=>$x){
                                $objMetodos=new metodosDAO();                                
                                $lista=$objMetodos ->ListarProductosCod($id); 
                                $nombre=$lista[1];
                                $precio=$lista[2];
                                $costo=$x*$precio;
                                $total=$total+$costo;
                    ?>
                    <tr class="table-light">
                        <td><?php echo $nombre; ?></td>
                        <td><?php echo $precio; ?></td>
                        <td align="right"><?php echo $x; ?><a href="../DAO/tiendaDAO.php?id=<?php echo $id;?>&accion=eliminar&op=2" class="btn btn-danger">Disminuir</a></td>                        
                        <td align="right"><?php echo $costo; ?></td>                       
                    </tr>        
                    <?php            
                            }
                    ?>
                    <tr class="table-primary">                        
                        <td align="right" colspan="3">Total: </td>
                        <td align="right"><?php echo $total; ?>
                    </tr>                
                    <?php
                        }
                    ?>
                </table>
            </td><br>
            <h6 align="center">
                <a href="catalogo.php" class="btn btn-primary">Seguir Comprando</a>
                <a href="../DAO/tiendaDAO.php?accion=vacio&op=2" class="btn btn-warning">Cancelar Compra</a>
                <button class="btn btn-success" onclick="validar()" data-toggle="modal" data-target="#LoginModal">Procesar</button>
            </h6>            
        </div>

    <script>
        function validar(){
            <?php
            if($_SESSION['acceso']==true){
            ?>
            location.href='pago.php?total=<?php echo $total; ?>&estado=pagar';
            <?php 
            }            
            ?>          
        }
    </script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    </body>

</html>
