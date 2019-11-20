<!DOCTYPE html>
<?php
include '../DAO/metodosAdmin.php';

    $op=$_REQUEST['op'];
    switch ($op){
        case 1:
            $cod="";
            $des="";
            $pre="";
            $stock="";
            $estado="";
            $detalle="";
            break;
        case 2:
            $cod=$_REQUEST['cod'];
            $objMetodos=new metodosAdmin();
            $lista=$objMetodos->listarProductosCod($cod);
            $cod=$lista[0];
            $des=$lista[1];
            $pre=$lista[2];
            $stock=$lista[3];
            $estado=$lista[4];
            $detalle=$lista[5];
            break;
        default :
            break;
    }
?>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Administrar-</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/dashboard/">

    <!-- Bootstrap core CSS -->
<link href="https://getbootstrap.com/docs/4.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

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
    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/4.3/examples/dashboard/dashboard.css" rel="stylesheet">
  </head>
  <body>
    <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">My Musical Box</a>
  <ul class="navbar-nav px-3">
    <li class="nav-item text-nowrap">
      <a class="nav-link" href="#">Sign out</a>
    </li>
  </ul>
</nav>

<div class="container-fluid">
  <div class="row">
    <nav class="col-md-2 d-none d-md-block bg-light sidebar">
      <div class="sidebar-sticky">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" href="#">
              <span data-feather="home"></span>
              Dashboard <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file"></span>
              Productos
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="shopping-cart"></span>
              Pedidos
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="users"></span>
              Clientes
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="bar-chart-2"></span>
              Salir
            </a>
          </li>          
    </nav>

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
        <h3 style="margin-top: 50px">Producto</h3>
    <form enctype="multipart/form-data" action="mantenimientos.php" method="POST">
        <table border="0" width="400">
            <tr>
                <td>Codigo: </td>
                <td><input type="text" name="txtCod" value="<?php echo $cod; ?>" class="form-control input-sm" style="margin-top: 5px;" readonly="readonly"></td>
            </tr>
            <tr>
                <td>Artista: </td>
                <td><input type="text" name="txtDes" value="<?php echo $des; ?>" class="form-control input-sm" style="margin-top: 5px;"></td>
            </tr>
            <tr>
                <td>Precio: </td>
                <td><input type="text" name="txtPre" value="<?php echo $pre; ?>" class="form-control input-sm" style="margin-top: 5px;"></td>
            </tr>
            <tr>
                <td>Cantidad: </td>
                <td><input type="text" name="txtCan" value="<?php echo $stock; ?>" class="form-control input-sm" style="margin-top: 5px;"></td>
            </tr>
            <tr>
                <td>Estado: </td>
                <td><input type="text" name="SelectEstado" value="<?php echo $estado; ?>" class="form-control input-sm" style="margin-top: 5px;"></td>
            </tr>
            <tr>
                <td>Album: </td>
                <td><textarea name="txtDet" rows="3" class="form-control input-sm" style="margin-top: 5px;"><?php echo $detalle; ?></textarea></td>
            </tr>
            <tr>
                <td>Imagen: </td>
                <td><input name="archivo" type="file" /></td>
            </tr>
            <tr>
                <th></th>
            </tr><tr>
                <th></th>
            </tr>
            <tr style="margin-top: 5px;">
                <th><a href="productos.php" class="btn btn-secondary" data-dismiss="modal">Volver</a></th>
                <th><input type="submit" value="Guardar" class="btn btn-primary" name="btnGuardar"/></th>
                <input type="hidden" value="<?php echo $op; ?>" class="btn btn-primary" name="op" />
            <!--</tr> -->
        </table>        
    </form>
    </main>
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="/docs/4.3/assets/js/vendor/jquery-slim.min.js"><\/script>')</script><script src="/docs/4.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
        <script src="dashboard.js"></script></body>
</html>
