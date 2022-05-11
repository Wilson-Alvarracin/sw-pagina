<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/magicsuggest/2.1.4/magicsuggest-min.css'>
    <link rel="stylesheet" href="./../css/form.css">
    <title>Document</title>
</head>
<body>
    <?php
    include './../proc/conexion.php';
    $id = $_GET['id'];
    $sql = "SELECT * FROM tbl_actividad WHERE id_actividad = $id;";
    $activ = mysqli_query($connection, $sql);
    
    $ruta = $_SERVER['SERVER_NAME']."/www/sw-pagina/img/activ/";
    ?>
    <div class="container">
  <div class="post-form">
    <form action="./../proc/proc_subir_activ.php" method="POST" enctype="multipart/form-data">
    <div class="post-section">
      <br>
      <?php
        foreach ($activ as $actividad) {
          $rutacompleta = "http://".$ruta.$actividad['img_actividad'];
              echo "<h1>".$actividad['nom_act']."</h1>";
              echo "<div>";
              echo "<img src='{$rutacompleta}' width='960' height='640' >";
              echo "</div>";
              echo "<p style='margin-top: 16px;'>Descripción: ".$actividad['desc_act']."</p>";
          echo "</div>";
        }
        echo "<a href='./home.php'><button class='btn btn-light form-control ms-1' type='button'>Inicio</button></a>";
      ?>
    </div>
  </div>
</div>

</body>
</html>