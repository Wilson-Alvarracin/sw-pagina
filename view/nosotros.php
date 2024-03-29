<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre nosotros</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/e0b63cee0f.js" crossorigin="anonymous"></script>
    <!-- Hoja de estilos -->
    <link rel="stylesheet" href="../css/main.css">

</head>

<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand " href="../index.php">Inicio</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarScroll">
                <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 50vh;">
                    <li class="nav-item">
                        <a class="nav-link active" href="./nosotros.php">Nosotros</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="./home.php">Actividades</a>
                    </li>
                    <?php
                    session_start();
                    if(isset($_SESSION['session'])) {
                        echo "<li class='nav-item'>";
                        echo "<a class='nav-link ' href='./mis.actividades.php'>Mis actividades</a>";
                        echo "</li>";
                    } else {
                        echo "<li class='nav-item'>";
                            echo "<a class='nav-link ' href='./../login.php'>Mis actividades</a>";
                        echo "</li>";
                    }
                    ?>
                </ul>
                <form class="d-flex">
                    <!-- <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"> -->
                    <a href="./../proc/proc_comp_sesion.php"><button class="btn btn-light form-control me-1" type="button"><i class="fa-solid fa-arrow-up-from-bracket"></i></button></a>
                    <?php
                    if(isset($_SESSION['session'])){
                        echo "<a href='../proc/proc_logout.php'><button class='btn btn-light form-control ms-1' type='button'>Logout</button></a>";
                    }else{
                        echo "<a href='./../login.php'><button class='btn btn-light form-control ms-1' type='button'>Acceder</button></a>";
                    }
                        ?>
                </form>
            </div>
        </div>
    </nav>
    <!-- Topics -->

    <div class="row-c padding-m">
        <div class="column-66 padding-m padding-right">
            <h5>Topics</h5>
            <button type="button" class="btn btn-primary mt-1">matemáticas</button>
            <button type="button" class="btn btn-info mt-1">informática</button>
            <button type="button" class="btn btn-dark mt-1">...</button>
        </div>
    </div>

    <!-- Intro -->
    <header class="text-white flex padding-l back" id="back">
        <h1><strong>#AppName</strong></h1>
    </header>
    <div class="row-c padding-m">
        <div class="column-1 padding-m">
            <h5>Navega</h5>
        </div>
        <div class="column-66 padding-m padding-right">
            <!-- <h2><strong>#AppName</strong> es un club para explorar, desarrollar y compartir nuestra creatividad natural</h2> -->
            <h4>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempore, corporis ipsa. Non, exercitationem! Vel enim exercitationem dolores, incidunt, molestias praesentium magnam cumque nostrum aperiam ducimus tempore? Fugit placeat debitis asperiores.</h4>
        </div>
    </div>

    <!-- Random de actividades -->

    <div class="row-c padding-m">
        <div class="column-1 padding-m">
            <h5>Subidas recientemente</h5>
        </div>

        <div class="column-1 padding-s">
            <?php
            include './../proc/conexion.php';
            $sql = "SELECT * FROM tbl_actividad ORDER BY id_actividad DESC LIMIT 4;";
            $consulta= mysqli_query($connection, $sql);
            $ruta = $_SERVER['SERVER_NAME']."/www/sw-pagina/img/activ/";
            foreach ($consulta as $actividad) {
                $rutacompleta = "http://".$ruta.$actividad['img_actividad'];
                echo "<div class='column-4 padding-s'>";
                echo "<a href='./actividad.php?id={$actividad['id_actividad']}'><img src='{$rutacompleta}' class='target'></a>";
                echo "</div>";
            }
            ?>
        </div>
    </div>

</body>

</html>