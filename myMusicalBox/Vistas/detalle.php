<?php 
include '../DAO/metodosDAO.php';    

    $cod=$_REQUEST['cod'];
    
    $objMetodos=new metodosDAO();
    $lista=$objMetodos->ListarProductosCod($cod);
    $nombre=$lista[1];
        $precio=$lista[2];
       $detalle=$lista[5];
?>
<html>
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <title></title>
    </head>
    <body>
        <form action="../DAO/tiendaDAO.php">
            <table border="0">
                <tr align="center">
                    <th rowspan="4"><img src="../Img/<?php echo $nombre; ?>.jpg" width="220" height="200"></th>
                    <th>Artista: <?php echo $nombre; ?></th>
                </tr>
                <tr align="center">
                    <td>Titulo del Album: <?php echo $detalle; ?></td>
                </tr>
                <tr><th></th></tr>
                <tr align="center">
                    <th>Precio x Und: S/. <?php echo $precio; ?></th>
                </tr>
                <tr align="Right">
                    <td colspan="2">Ingrese Cantidad: <input type="number" min="1" max="50" value="1" name="txtCan"></td>
                </tr>   
                <tr> 
                    <th>_________________________________</th>
                    <th>_________________________________</th>
                </tr>
                <tr align="center">
                    <th colspan="2">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        <button type="button" class="btn btn-primary" onclick="submit()">Agregar al Carrito</button>
                    </th>
                </tr>
            </table>
            
            <input type="hidden" name="id" value="<?php echo $cod; ?>">
            <input type="hidden" name="accion" value="agregar">
            <input type="hidden" name="op" value="2">
        </form>
    </body>
</html>
