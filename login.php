<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>CodePen - Log In / Sign Up - pure css - #12</title>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css'>
    <link rel='stylesheet' href='https://unicons.iconscout.com/release/v2.1.9/css/unicons.css'>
    <link rel="stylesheet" href="./css/style.css">

</head>

<body>
<?php
    session_start();
    $_SESSION['login']=false;
?>
    <!-- partial:index.partial.html -->
    <div class="section">
        <div class="container">
            <div class="row full-height justify-content-center">
                <div class="col-12 text-center align-self-center py-5">
                    <div class="section pb-5 pt-5 pt-sm-2 text-center">
                        <h6 class="mb-0 pb-3"><span>Log In </span><span>Sign Up</span></h6>
                        <input class="checkbox" type="checkbox" id="reg-log" name="reg-log" />
                        <label for="reg-log"></label>
                        <div class="card-3d-wrap mx-auto">
                            <div class="card-3d-wrapper">
                                <div class="card-front">
                                    <div class="center-wrap">
                                        <div class="section text-center">

                                        <form action="./proc/proc_login.php" method="POST">
                                            <h4 class="mb-4 pb-3">Log In</h4>
                                            <div class="form-group">
                                                <input type="email" name="logemail" class="form-style" placeholder="Your Email" id="logemail" autocomplete="off">
                                                <i class="input-icon uil uil-at"></i>
                                            </div>
                                            <div class="form-group mt-2">
                                                <input type="password" name="logpass" class="form-style" placeholder="Your Password" id="logpass" autocomplete="off">
                                                <i class="input-icon uil uil-lock-alt"></i>
                                            </div>
                                            <?php
                                            if (isset($_GET['msg'])) {
                                                $msg=$_GET['msg'];
                                                if ($msg==1) {
                                                    echo "<br>";
                                                    echo "<span>Usuario o Contraseña Incorrecto</span>";
                                                    echo "<br>";
                                                }
                                            }
                                            ?>
                                            <input type="submit" name="insesion" value="submit" class="btn mt-4">
                                        </div>
                                    </div>
                                </div>
                                    </form>
                                <div class="card-back">
                                    <div class="center-wrap">
                                        <div class="section text-center">
                                        <form action="./proc/proc_registro.php" method="POST">
                                            <h4 class="mb-4 pb-3">Sign Up</h4>
                                            <div class="form-group">
                                                <input type="text" name="logname" class="form-style" placeholder="Your Full Name" id="logname" autocomplete="off">
                                                <i class="input-icon uil uil-user"></i>
                                            </div>
                                            <div class="form-group mt-2">
                                                <input type="email" name="logemail" class="form-style" placeholder="Your Email" id="logemail" autocomplete="off">
                                                <i class="input-icon uil uil-at"></i>
                                            </div>
                                            <?php
                                            if (isset($_GET['msg'])) {
                                                $msg=$_GET['msg'];
                                                if ($msg==4) {
                                                    echo "<span>Correo ya registrado</span>";
                                                }
                                            }
                                            ?>
                                            <div class="form-group mt-2">
                                                <input type="password" name="logpass" class="form-style" placeholder="Your Password" id="logpass" autocomplete="off">
                                                <i class="input-icon uil uil-lock-alt"></i>
                                            </div>
                                            <input type="submit" name="crear"value="crear" class="btn mt-4">
                                        </div>
                                    </div>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- partial -->
    <script src="./script.js"></script>

</body>

</html>