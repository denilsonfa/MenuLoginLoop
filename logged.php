<!DOCTYPE html>
<html>
<head>
  <title>Logged | Testando Session</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport" >
  <script
    src="https://code.jquery.com/jquery-3.2.1.js"
    integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
    crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" type="text/css" />

<?php
  session_start();
  $name = $_SESSION['name'];
  $password = $_SESSION['pwd'];
  $passwordCrip = $_SESSION['pwdCrip'];
  echo '<script> console.log("LOGADO COMO: '.$name.'"); </script>';

  $page = $_SERVER['PHP_SELF'];
  header("Refresh: 5; url=$page");
?>

</head>
<body>
  <br><br>

  <div class="container">
    <div class="row">
      <div class="col-md-4 col-md-offset-4 well">
        <center><p>Esta pagina irá se atualizar a cada 5 segundos, mantendo a $_SESSION</p></center>
        <hr>
        <center><h3>Seja Bem-vindo</h3>
        <h1><?php echo $name; ?></h1></center>
        <hr>
        <p><?php echo 'SENHA NORMAL:                '.$password; ?></p>
        <p><?php echo 'SENHA CRIPTOGRAFADA (md5):   '.$passwordCrip; ?></p>

        <a href="index.php">Sair</a>
      </div>
    </div>
  </div>

</body>
</html>
