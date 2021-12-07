<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Inicio de sesión</title>


    <!-- Bootstrap core CSS -->
    <?php require_once "scripts.php"; ?>

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    <!-- Custom styles for this template -->
  <link href="css/signup.css" rel="stylesheet">
  </head>

<body class="text-center">
<main class="form-signup">
  <form class="form" id="form">
    <img class="mb-4" src="img/user/add_user.png" alt="" width="100" height="100">
    <h1 class="h3 mb-3 fw-normal">Por favor, regístrese</h1>

    <div class="form-floating">
      <input type="text" class="form-control" id="name" placeholder="nombre">
      <label for="floatingInput">Nombre:</label>
    </div>
    <div class="form-floating">
      <input type="text" class="form-control" id="forename" placeholder="apellidos">
      <label for="floatingInput">Apellidos:</label>
    </div>
       <div class="form-floating">
      <input type="text" class="form-control" id="user" placeholder="usuario">
      <label for="floatingInput">Usuario:</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" id="password" placeholder="contraseña">
      <label for="floatingPassword">Contraseña:</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" id="pwdcheck" placeholder="confirmar contraseña">
      <label for="floatingPassword">Confirme la contraseña:</label>
    </div>
    <span class="w-100 btn btn-lg btn-primary" id="signup-button">Registrarse</span>
  </form>
  <a href="signin.php" id="signin-link">Iniciar sesión</a>
  <footer>
    <p class="mt-5 mb-3 text-muted">&copy; eliogalindo92</p>
  </footer>
</main>

    <!--JavaScript code-->
<script type="text/javascript">
  $(document).ready(function(){
    $('#signup-button').click(function(){

      if($('#name').val() == ""){
        alertify.alert("Debe introducir el nombre.");
        return false;
      }
      else if($('#forename').val() == ""){
        alertify.alert("Debe introducir los apellidos.");
        return false;
      }
      else if($('#user').val() == ""){
        alertify.alert("Debe introducir el nombre de usuario.");
        return false;
      }
      else if($('#password').val() == ""){
        alertify.alert("Debe introducir la contraseña.");
        return false;
      }
      else if($('#pwdcheck').val() == ""){
        alertify.alert("Debe confirmar la contraseña.");
        return false;
      }
      else {
        values = "name=" + $('#name').val() + "&forename=" + $('#forename').val() + "&user=" + $('#user').val() + "&password=" + $('#password').val() + "&pwdcheck=" + $('#pwdcheck').val();

            $.ajax({
              type: "POST",
              url: "php/signup.php",
              data: values,
              success: function(r){
                 if(r == 3){
                  alertify.error("Las contraseñas no coinciden, verifíquelas.");
                }
                 else if(r == 2){
                  alertify.error("Este usuario ya está registrado, pruebe con otro nombre de usuario.");
                }
                 else if(r == 1){
                   $('#form')[0].reset();
                  alertify.success("Usuario registrado con éxito.");
                }
                 else {
                   alertify.error("Ha habido un error al registrar el usuario, intente más tarde.");
                 }
              }
            });
      }
    });
  });
</script>

 </body>
</html>
