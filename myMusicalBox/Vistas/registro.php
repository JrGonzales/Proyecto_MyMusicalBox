<!DOCTYPE html>

<html>
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <title>Registro Usuarios</title>
    </head>
    <body class="text-center">
        
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
                                    <a class="nav-link" href="../DAO/tiendaDAO.php?op=1">Catalogo</a>
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

<style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
        <link href="https://getbootstrap.com/docs/4.3/examples/sign-in/signin.css" rel="stylesheet">

        <form action="" method="get" class="form-signin">
            <img class="mb-4" src="../Img/registrarUser.png" alt="" width="100" height="100">
            <h1 class="h3 mb-3 font-weight-normal">Registro de Usuarios</h1>
                    
  <label for="inputName" class="sr-only">Nombre</label> 
  <input type="text" id="inputName" name="txtNom" class="form-control" placeholder="Nombres" required autofocus>
  
  <label for="inputEmail" class="sr-only">Correo</label>
  <input type="email" id="inputEmail" name="txtMail" class="form-control" placeholder="Correo" required>
  
  <label for="inputPassword" class="sr-only">Contraseña</label>
  <input type="password" name="txtPsw" id="inputPassword" class="form-control" placeholder="Contraseña" required>
  
  <label for="inputDni" class="sr-only">DNI</label>
  <input type="text" id="inputEmail" name="txtDni" class="form-control" placeholder="DNI" required> 
  
  <label for="inputDireccion" class="sr-only">Direccion</label> 
  <input type="text" id="inputEmail" name="txtDireccion" class="form-control" placeholder="Direccion" required>  <p><p>
  
    <button class="btn btn-lg btn-primary btn-block" type="submit" name="btnEnviar">Registrarme</button>
        
  <p class="mt-5 mb-3 text-muted">&copy; Desarrollado por: Business System 2019</p>

        </form>       

        
           <!-- jQuery first, then Popper.js then Bootstrap JS-->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    </body>
</html>
