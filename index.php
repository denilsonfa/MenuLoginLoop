<!DOCTYPE html>
<html>
    <head>
        <title>Login | Usando Session</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport" >
        <script
            src="https://code.jquery.com/jquery-3.2.1.js"
            integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
            crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" type="text/css" />

        <?php
            session_start();
            $logged = false;
            echo "<script>console.log('INICIANDO A SESSÃO AGORA');</script>";

            if(isset($_SESSION['name'])){
                $logged = true;
                echo "<script>console.log('SESSÃO CONTÉM VARIÁVEIS ARMAZENADAS');</script>";
                echo '<script> console.log("'.$_SESSION['name'].'"); </script>';
            }
        else {
            $logged = false;
            echo "<script>console.log('AS VARIÁVEIS DA SESSÃO estão VAZIAS');</script>";
        }

        if (isset($_POST['signup'])) {
            $name = $_POST['name'];
            $password = $_POST['password'];

        if (!preg_match("/^[a-zA-Z ]+$/",$name)) {
            $error = true;
            $name_error = "O nome deve conter apenas letras e espaço";
        }

        if(strlen($password) < 6) {
                $error = true;
                $password_error = "A senha deve ter no mínimo 6 caracteres";
            }

        if (!$error){
            $_SESSION['name'] = $name;
            $_SESSION['email'] = $email;
            $_SESSION['pwd'] = ($password);
            $_SESSION['pwdCrip'] = md5($password);
            $_SESSION['flag'] = "1";
            echo '<script> console.log("'.$_SESSION['name'].'"); </script>';
            header("Location: logged.php");
            }
        }

        ?>

    </head>
    <body>
        <br><br>
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-4 well">

                        <?php                           
                            if($logged == false){

                                include_once 'form.php';

                            } else {
                                
                                echo '<h1>Saindo.</h1>';
                                echo '<p>Agurade por 5 segundos...</p>';
                                session_destroy();
                                header("Refresh:5");

                            }
                        ?>
                        
                </div>
            </div>
        </div>
    </body>
</html>