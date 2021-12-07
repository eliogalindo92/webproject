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
  <link href="css/signin.css" rel="stylesheet">
  </head>
<body class="text-center">
 <main class="form-signin">
  <form class="form">
    <img class="mb-4" src="img/user/user.png" alt="" width="100" height="100">
    <h1 class="h3 mb-3 fw-normal">Por favor, inicie sesión</h1>

    <div class="form-floating">
      <input type="text" class="form-control" id="user" placeholder="usuario">
      <label for="floatingInput">Usuario:</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" id="password" placeholder="contraseña">
      <label for="floatingPassword">Contraseña:</label>
    </div>
      <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me"> Recuérdame
      </label>
    </div>
    <span class="w-100 btn btn-lg btn-primary" id="signin-button">Iniciar sesión</span>
  </form>
  <a href="signup.php" id="signup-link">Registrarse</a>
  <footer>
    <p class="mt-5 mb-3 text-muted">&copy; eliogalindo92</p>
  </footer>
 </main>

 <!--JavaScript code-->
<script type="text/javascript">
  $(document).ready(function(){
    $('#signin-button').click(function(){

      if($('#user').val() == ""){
        alertify.alert("Debe agregar el usuario");
        return false;
      }
      else if($('#password').val() == ""){
        alertify.alert("Debe agregar la contraseña");
        return false;
      }
      else {
        values = "user=" + $('#user').val() + "&password=" + $('#password').val();

            $.ajax({
              type: "POST",
              url: "php/signin.php",
              data: values,
              success: function(r){
                if(r == 1){
                  window.location="home.php";
                }
                else{
                  alertify.error("Usuario o contraseña incorrecto.");
                }
              }
            });
      }
    });
  });
</script>

</body>
</html>
