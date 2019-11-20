<?php
include '../DAO/metodosAdmin.php';

$num=$_REQUEST['num'];

session_start();
    
    if ($_SESSION['accesoAdmin']<> true){
        header("Location: login.php");
    }
?>

<center>
    <table class="table">
            <tr>
                <th>N° Pedido</th>
                <th>Cod. Producto</th>
                <th>Descipcion</th>
                <th>Precio</th>
                <th>Cantidad</th>
            </tr>
            <?php
            $metodos=new metodosAdmin();
            $lista=$metodos->listarPedidosNum($num);
            foreach($lista as $row){
            ?>
            <tr>
                <td><?php echo $row[0] ?></td>
                <td><?php echo $row[1] ?></td>
                <td><?php echo $row[2] ?></td>
                <td><?php echo $row[3] ?></td>
                <td><?php echo $row[4] ?></td>
            </tr>
            <?php          
            }
            ?>        
        </table> 
</center>

