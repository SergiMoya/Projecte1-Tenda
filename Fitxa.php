<?php

    $conexion = mysqli_connect('192.168.1.8', 'perez', '', 'TendaDB');

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fitxa</title>
</head>

<body>
    <table>

        <tr>
            <td>id</td>
            <td>Modelo</td>
            <td>Preu</td>
        </tr>

            <?php
                $sql = "SELECT * from Producte";
                $result = mysqli_query($conexion, $sql);

                while($mostrar = mysqli_fetch_array($result)){
            ?>
        
        <tr>
            <td><?php echo $mostrar['id']?></td>
            <td><?php echo $mostrar['modelo']?></td>
            <td><?php echo $mostrar['preu']?></td>
        </tr>
<?php
            }
?>
    </table>
</body>

</html>