<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - Light UI Kit</title>
  <link rel="stylesheet" href="./style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./../css/mis.css">
<!--    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">-->
<!--    <link rel="stylesheet" href="style/bootstrap.css">-->
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto:400,500,700'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-2.2.3.js"></script>
    <title>UI Kit</title>
</head>
<body>
   <div class="container">
        <div>
            <?php
            session_start();
            $nom = $_SESSION['nom'];
            $id = $_SESSION['id'];
            $correo = $_SESSION['email'];
            ?>
            <div id="profile">
                <img src="https://cdn1.iconfinder.com/data/icons/flat-business-icons/128/user-128.png" alt="">
                <?php
                echo "<h3>".strtoupper($nom)."</h3>";
                echo "<p>$correo</p>";
                ?>
                <div id="desc"></div>
           </div>
        </div>
       
        <div>
            <nav id="nav">
                <ul>
                    <li><a href="./../index.php">INICIO</a></li>
                    <li><a href="./nosotros.php">SOBRE NOSOSTROS</a></li>
                    <li><a href="./home">ACTIVIDADES</a></li>
                </ul>
            </nav>
        </div>
        <div>
           <div id="team">
                <h2>ACTIVIDADES</h2>
                <div id="gallery">
                    <?php
                    include './../proc/conexion.php';
                    $id = $_SESSION['id'];
                    $sql = "SELECT * FROM tbl_actividad WHERE autor_act = $id;";
                    $activ = mysqli_query($connection, $sql);

                    $ruta = $_SERVER['SERVER_NAME']."/www/sw-pagina/img/activ/";
                    foreach ($activ as $campo) {
                        $rutacompleta = "http://".$ruta.$campo['img_actividad'];
                        echo "<figure>";
                        echo "<img src=$rutacompleta alt=''>";
                        echo "<figcapton>";
                        echo "<h4>".$campo['nom_act']."</h4>";
                        echo "</figcapton>";
                        echo "</figure>";
                    }
                    ?>
                </div>
           </div>
        </div>

    </div>
</body>
</html>
<!-- partial -->
  
</body>
</html>
