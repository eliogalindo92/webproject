<?php
	session_start();

	if(isset($_SESSION['user'])){
 ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Página principal</title>

    <!-- Bootstrap core CSS -->
    <?php require_once "scripts.php";?>

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
		<link href="css/home.css" rel="stylesheet">
  </head>
  <body>
<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Bienvenido</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav me-auto mb-2 mb-md-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Menú principal</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="#">Enlaces externos</a>
        </li>
      </ul>
			<ul class="navbar-nav me-right mb-2 mb-md-0" id="ul-2">
				<div class="dropdown" id="user-options">
					<button class="btn btn-outline-light btn-sm dropdown-toggle" type="button" id="dropdownMenuButtonSM" data-bs-toggle="dropdown" aria-expanded="false">
					 <?php echo $_SESSION['user'];?>
					</button>
					<ul class="dropdown-menu" aria-labelledby="dropdownMenuButtonSM">
						<li><h6 class="dropdown-header">Opciones:</h6></li>
						<li><a class="dropdown-item" href="#">Modificar contraseña</a></li>
						<li><a class="dropdown-item" href="#">Editar información personal</a></li>
						<!--<li><a class="dropdown-item" href="#">Something else here</a></li>-->
						<li><hr class="dropdown-divider"></li>
						<li><a class="dropdown-item" href="php/logout.php">Cerrar sesión</a></li>
					</ul>
				</div>
			</ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
        <button class="btn btn-outline-light" type="submit">Buscar</button>
      </form>
    </div>
  </div>
</nav>

<!--<main class="container">
  <div class="bg-light p-5 rounded">
    <h1>Navbar example</h1>
    <p class="lead">This example is a quick exercise to illustrate how fixed to top navbar works. As you scroll, it will remain fixed to the top of your browser’s viewport.</p>
    <a class="btn btn-lg btn-primary" href="../components/navbar/" role="button">View navbar docs &raquo;</a>
  </div>
</main>-->

<script src="bootstrap/js/bootstrap.bundle.min.js"></script>

 </body>
</html>

<?php
}
else {
	header("location: signin.php");
	}
?>
