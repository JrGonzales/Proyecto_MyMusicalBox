<!DOCTYPE html>
<?php
    session_start();    
    $lista=$_SESSION['lista'];
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
			<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" aria-pressed="false"
                                data-target="#navbarResponsive" aria-controls="navbarResponsive" 
                                aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarResponsive">
			<ul class="navbar-nav ml-auto">	
                            <li class="nav-item">
                                <a href="cesta.php"><img src="../Img/carrito.png" height="25px"></a>
                            </li>
				<li class="nav-item">                                    
					<a class="nav-link" href="cesta.php">Carrito</a>
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
					<a class="nav-link"> <?php echo $_SESSION['nombre']; ?></a>
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

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="../Img/slider_1.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="../Img/slider_2.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="../Img/slider_4.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
</div>

        <div class="container">

            <br>
<div class="card-deck" >
  <div class="card" style="background: #181a1b">
      <img src="../Img/nosotros.jpg" class="card-img-top" alt="..." width="150px">
    <div class="card-body" align="center">
      <h5 class="card-title" style="color:#ffffff">NOSOTROS</h5>
      <p class="card-text" style="color:#ffffff">My Musical Box es una tienda online de venta de vinilos de alta fidelidad. 
          Aquí podrás encontrar todos los productos nacionales e importados de variados estilos musicales.
          También disponemos de las últimas novedades.</p>
    </div>
  </div>
  <div class="card" style="background: #181a1b">
      <img src="../Img/musica.jpg" class="card-img-top" alt="..." width="100%" height="auto">
    <div class="card-body" align="center">
      <h5 class="card-title" style="color:#ffffff">PASION</h5>
      <p class="card-text" style="color:#ffffff">Por que sabemos que eres un amante de la musica como nosotros y por 
          este motivo te llevamos los mejores productos con garantia y eficiencia sin la necesidad de salir de tu hogar.</p>
    </div>
  </div>
  <div class="card" style="background: #181a1b">
      <img src="../Img/envios.jpg" class="card-img-top" alt="...">
    <div class="card-body" align="center">
      <h5 class="card-title" style="color:#ffffff">PEDIDOS</h5>
      <p class="card-text" style="color:#ffffff">Todos los pedidos realizados por esta pagina web seran enviados a la 
          direccion que especificaron en el registro de clientes, los pedidos seran enviados en el plazo de 1 semana todos los 
          gastos corren por parte de la empresa el pago del pedido es a contra entrega.</p>
    </div>
  </div>
</div><br>

        <table border="0" width="auto" align="center"  class="table table-striped table-dark">
            <thead class="thead-dark">
                <th colspan="4"><h2 align="center" style="margin-top: 10px">CATALOGO DE PRODUCTOS</h2></th>
            </thead>
            <tr align="center">
            <?php 
            $num=0;
                foreach ($lista as $reg){
                    if($num==4){
                        echo "<tr align='center'>";
                        $num=1;
                    }else{
                        $num++;
                    }       
            ?>
            <th><img src="../Img/<?php echo $reg[6];?>"width="120" height="120"><br>
            <?php echo $reg[1];?>
                <br><br>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" onclick="enviar(<?php echo $reg[0]; ?>)">Agregar</button></th>
            <?php             
                } 
            ?>
        </table>
        </div>
        
        <!-- Modal DETALLE-->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Detalle de Producto</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body" id="mostrar">
                ...
              </div>
              <div class="modal-footer">
              </div>
            </div>
          </div>
        </div>
        
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
                              <td>Correo: </td>
                              <td><input type="text" name="txtuser"></td>
                          </tr>
                          <tr>
                              <td>Contraseña: </td>
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
  
        <script type="text/javascript">            
            var resultado=document.getElementById("mostrar"); 
            
            function enviar(c){                
                var xmlhttp;
                if(window.XMLHttpRequest){
                    xmlhttp=new XMLHttpRequest();
                }else{
                    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
                }
                
                xmlhttp.onreadystatechange=function(){
                    if(xmlhttp.readyState===4 && xmlhttp.status===200){
                        resultado.innerHTML=xmlhttp.responseText;
                    }                    
                }
                xmlhttp.open("GET","detalle.php?cod="+c,true);
                xmlhttp.send();
            }         
        </script>  
        
    <!-- jQuery first, then Popper.js then Bootstrap JS-->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
    
    <footer id="sticky-footer" class="py-4 bg-dark text-white-50">
    <div class="container text-center">
      <small>Copyright &copy; 2019 My Musical Box</small><br>
      <small>Desarrollado por: Business System</small>
    </div>
  </footer>

    
</html>
