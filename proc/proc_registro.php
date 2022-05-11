<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
</head>
<body>
    <?php
    include 'conexion.php';
    
    if (isset($_POST['crear'])|| $_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST['logname'];
        $email = $_POST['logemail'];
        $pwd = sha1($_POST ['logpass']);
    
        //Subir datos a la tabla correspondiente

        //Procederemos a hacer una consulta que buscara el correo del usuario
        $buscarCorreo = "SELECT * from tbl_usuarios WHERE correo_usuario='$email'";

        //Realizamos la consulta y anadimos $connection, ya que es la variable que creamos en nuestro archivo connection.php    
        $resultado = $connection->query($buscarCorreo);

        //Usaremos la funcion mysqli_num_rows en la consulta $resultado,
        //esta funcion nos regresa el numero de filas en el resultado
        $contador = mysqli_num_rows($resultado);

        //SI SI EXISTE una fila, quiere decir QUE SI ESTA EL CORREO EN LA BASE DE DATOS
        if($contador == 1) {
            echo "<script> window.location.href='./../login.php?msg=1'</script>";

            } else {
                $sql = "INSERT INTO tbl_usuarios (`correo_usuario`, `nom_usuario`, `pwd_usuario`) VALUES ('$email', '$name','$pwd');";
                $insert = mysqli_query($connection, $sql);
                echo "<script> window.location.href='./../login.php'</script>";
            }
        }else{
            echo "<script> window.location.href='./../login.php'</script>";
        }
    ?>
    
</body>
</html>