<?php



NuevoProducto($_POST['id_producto'], $_POST['producto'], $_POST['descripcion'], $_POST['fecha'], $_POST['imagen']);

function NuevoProducto($id_prod, $nom, $descrip, $fecha, $imagen)
    {
    include "conexion2.php";
    $sentencia= "INSERT INTO productos (id_productos, nombre, descripcion, fecha, imagen) VALUES ('".$id_prod."', '".$nom."','".$descrip."', '".$fecha."', '".$imagen."')";
    $conexion2->query($sentencia) or die ("Error al ingresar el producto".mysqli_error($conexion2));
    }
?>

<script type="text/javascript">
    alert ("producto ingresado Exitosamente");
    window.location.href='index2.php';
    </script>