<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./../css/form.css">¡
    <title>Document</title>
</head>

<body>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        function aviso(url) {
            Swal.fire({
                title: 'Actividad Subida.',
                width: 600,
                padding: '3em',
                color: '#716add',
                background: '#f2344 url(https://sweetalert2.github.io/images/trees.png)',
                backdrop: `
                        rgba(0,0,123,0.4)
                        url("https://sweetalert2.github.io/images/nyan-cat.gif")
                        left top
                        no-repeat
                      `
                })
                .then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = url;
                    }
                })
        }
    </script>
    <?php
    session_start();
    include 'conexion.php';
    if (isset($_POST['subir'])) {
        $nom_act = $_POST['title'];
        $desc = $_POST['content'];
        $foto = $_FILES['foto'];
        $autor = $_SESSION['id'];
        $destino = $_SERVER['DOCUMENT_ROOT'].'/www/sw-pagina/img/activ/'.$foto['name'];
        if ($foto['size']/1024 < 1000 && ($foto['type'] == "image/jpeg" || $foto['type'] == "image/png" || $foto['type'] == "image/gif")) {  //En KB
            if (move_uploaded_file($foto['tmp_name'], $destino)) {
                //Conexión a base de datos
                //Subir datos a la tabla correspondiente
                $sql = "INSERT INTO tbl_actividad (`nom_act`, `desc_act`,`img_actividad`, `autor_act`) VALUES ('".$nom_act."', '".$desc."', '".$foto['name']."', '".$autor."');";
                $insert = mysqli_query($connection, $sql);
            }
            echo "<script> aviso('./../view/mis.actividades.php'); </script>";
        }else{
            echo "Debe ser una imagen y no puede pesar más de 1000KB.";
        }
    }
    
    ?>
</body>
</html>