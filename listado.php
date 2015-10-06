<?php
require_once("pdo/datos.php");
use User\Datos;
$d=new Datos();

$datos=$d->getUsuarios();
$d->cerrar();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" /> 
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" />   
    </head>
    <body>
       
        <div class="container">
            <div class="row">
                <h1>Listado de Usuarios</h1>
            <table class="table table-bordered">
            <thead>
                <th>ID</th>
                <th>Nombre</th>
                <th>E-Mail</th>
                <th>Fecha Nacimiento</th>
                <th>Contraseña</th>
            </thead>
            <tbody>
                <?php
                //for($i=0;$i<sizeof($datos);$i++)
                foreach($datos as $dato)
                {
                    ?>
                    <tr>
                        <td><?php echo $dato["id"]?></td>
                        <td><?php echo $dato["nombre"]?></td>
                        <td><?php echo $dato["correo"]?></td>
                        <td><?php echo $dato["fecha_nacimiento"]?></td>
                        <td><?php echo $dato["pass"]?></td>
                    </tr>
                    <?php
                }
                ?>
            </tbody>
        </table>
            </div>
        </div>
    </body>
</html>
<?php 

?>
