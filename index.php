<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
	<link rel="stylesheet" href="css/style.css">
	
		<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
</head>
<body>
	
	<nav class="navbar sticky-top navbar-expand-lg navbar-light bg-danger">
		<a class="navbar-brand" href="#">
			<img src="img/moto-gp.png" width="90" height="auto" alt="">
		</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item active">
					<a class="nav-link" href="#">Inicio <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Link</a>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Dropdown
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="#">Action</a>
						<a class="dropdown-item" href="#">Another action</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="#">Something else here</a>
					</div>
				</li>
				<li class="nav-item">
					<a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
				</li>
			</ul>
			<form class="form-inline my-2 my-lg-0">
				<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
				<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
			</form>
		</div>
	</nav>

	<div class="container">
		<div class="row">
			<div class="col">
				<h1>Liga Moto2</h1>
			</div>
		</div>
		<div class="row">
			<div class="col">
				<h3>Bienvenido a nuestra liga particular para Moto2</h3>
				<h6>Si ya tienes cuenta creada inicia sesión, y si no ¿A que esperas para crearla?</h6>
			</div>
		</div>
		<div class="row">
			<div class="col">
				<!-- Button trigger modal Log -->
				<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalLogin">
					Iniciar Sesión
				</button>
				<!-- Button trigger modal Register -->
				<button type="button" id="registerbtn" class="btn btn-primary" data-toggle="modal" data-target="#modalRegister">
					Crear cuenta
				</button>
			</div>
		</div>
	</div>


	<!-- Modal Log -->
	<div class="modal fade" id="modalLogin" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Bienvenid@!</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form>
						<div class="form-group">
							<label for="userNameInput">Nombre de usuario</label>
							<input type="text" class="form-control" id="userNameInputLogin" aria-describedby="emailHelp">
							<div class="form-group">
								<label for="userPassInput">Password</label>
								<input type="password" class="form-control" id="userPassInputlogin">
							</div>
							<div class="form-check mb-2 mr-sm-2">
								<input class="form-check-input" type="checkbox" id="inlineFormCheck">
								<label class="form-check-label" for="inlineFormCheck">
									Recuerdame
								</label>
							</div>
							<button type="submit" class="btn btn-primary">Submit</button>
						</form>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Modal -->
	<div class="modal fade" id="modalRegister" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Crear cuenta rápidamente</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form id="registerForm">
						<div class="form-group" id="registerNameDiv">
							<label for="userNameInput">Nombre de usuario</label>
							<input type="text" class="form-control" id="userNameInput" name="userName" minlength="4" aria-describedby="emailHelp" required="required">
							<p id="errorNamep" class="error-msg" style="color:red">El usuario debe contener al menos 4 caracteres</p>
						</div>
							<div class="form-group" id="registerPassDiv">
								<label for="userPassInput">Contraseña</label>
								<input type="password" class="form-control" id="userPassInput" name="userPass" minlength="5" required="required">
							</div>
							<div class="form-group" id="registerPass2Div">
								<label for="userPassInputRep">Repite la contraseña</label>
								<input type="password" class="form-control" id="userPassInputRep" name="userPass2" required="required">
								<p id="errorPass" class="error-msg" style="color:red">Las contraseñas no coinciden</p>
							</div>
							<div class="form-group" id="registerImgDiv">
								<label for="imguserInput">Imagen de avatar</label>
								<input type="file" class="form-control-file" id="imguserInput" name="userImg" required="required">
								<p id="errorImg" class="error-msg" style="color:red">El archivo debe ser .jpg o .png</p>
							</div>
							<div class="form-group form-check">
								<input type="checkbox" class="form-check-input" id="exampleCheck1" name="conditions" required="required">
								<label class="form-check-label" for="exampleCheck1">Acepto las condiciones y la política de privacidad</label>
							</div>
							<button type="submit" id="submit-register" class="btn btn-primary">Submit</button>
						</form>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						<button type="button" class="btn btn-primary">Save changes</button>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Optional JavaScript; choose one of the two! -->

	<!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
	<script
			  src="https://code.jquery.com/jquery-3.6.0.js"
			  integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
			  crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
	<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js" integrity="sha512-UdIMMlVx0HEynClOIFSyOrPggomfhBKJE28LKl8yR3ghkgugPnG6iLfRfHwushZl1MOPSY6TsuBDGPK2X4zYKg==" crossorigin="anonymous"></script> -->
	<script src="js/js.js"></script>
</body>
</html>
