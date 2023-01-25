<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="shortcut icon" href="../favicon/favicon.ico">
	<link rel="stylesheet" href="../css/estilosCrud.css" type="text/css">
	<link rel="stylesheet" href="../css/estilosTabla.css" type="text/css">
	<link rel="stylesheet" href="../css/estilosValidaciones.css" type="text/css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<title>Usuarios</title>
</head>
<body>
	<nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand">Usuario:
                    <?php session_start();
                    if (!isset($_SESSION['usuario']) && !isset($_SESSION['password'])) {
                        header('Location: index.php');
                        exit();
                    }
                    echo $_SESSION['usuario'];
                    ?>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                </a>
            </div>
            <ul class="nav navbar-nav navbar-right ">
                <li><button class="btn btn-danger" onclick="window.location.href='Salir.php';">Cerrar sesión</button></li>
            </ul>
        </div>
    </nav>
	<div class="contenedor">
		<header>
		  <h1>Cración de Usuarios</h1>
			<h2 id="fecha"></h2>
		</header>
		<main>
			<nav>
				<a href="#" class="banner">
					<div class="wrap">
						<div class="search">
							<input id="s" type="text" class="searchTerm" placeholder="Buscar" onKeyUp="doSearch();" onChange="buscarUsuario()">
							<button type="submit" class="searchButton">
								<i class="fa fa-search"></i>
							</button>
						</div>
					</div>
				</a>
			</nav>
		</main>
	</div>
<div class="container-xl">
	<div class="table-responsive">
		<div class="table-wrapper">
			<div class="table-title">
				<div class="row">
					<div class="col-sm-6">
						<h2><b>Creación de Usuarios</b></h2>
					</div>
					<div class="col-sm-6">
					  <a href="#addModal" class="btn btn-success" type="button" data-toggle="modal"><i class="material-icons">&#xE147;</i><span>Añadir un nuevo usuario</span></a>
					</div>
				</div>
			</div>
		  <table class="table table-striped table-hover" id="tabla">
				<thead>
					<tr>
						<th>Cédula</th>
						<th>Nombre, Apellido</th>
						<th>Email</th>
						<th>Usuario</th>
						<th>Contraseña</th>
						<th>Estado</th>
						<th></th>
						<th></th>
					</tr>
				</thead>
				<tbody id="datos"></tbody>
		  </table>
		</div>
	</div>        
</div>
<!-- Añadir Modal HTML -->
<div id="addModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form id="register" class="formulario__register" onSubmit="event.preventDefault(); agregarUsuarios();" autocomplete="off">
				<div class="modal-header">						
				  <h4 class="modal-title">Añadir Usuario</h4>
				  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">					
					<div class="form-group">
						<div id="resultado1"></div>
						<label for="ced1"><b>Cédula:</b></label> 
						<input type="text" id="ced1" name="cedula" placeholder="Ingrese la cedula" class="form-control" onChange="validarCedula(); validarRepetidos();" autocomplete="off" required>
					</div>
					<div class="form-group">
						<div id="resultado2"></div>
						<label for="nom1"><b>Nombre y Apellido:</b></label> 
						<input type="text" id="nom1" name="nombre" placeholder="Escriba aqui" class="form-control" onChange="validarNombre();" autocomplete="off" required>
					</div>
					<div class="form-group">
						<div id="resultado3"></div>
						<label for="mail1"><b>Email:</b></label> 
						<input type="text" id="mail1" name="email" placeholder="Escriba aqui" class="form-control" onChange="validarEmail(); validarRepetidos()" onKeyUp="letrasMenores();" autocomplete="off" required>
					</div>
					<div class="form-group">
						<div id="resultado4"></div>
						<label for="usu1"><b>Usuario</b></label> 
						<input type="text" id="usu1" name="usuario" placeholder="Escriba aqui" class="form-control" onChange="validarUsuario(); validarRepetidos()" autocomplete="off" required>
					</div>
					<div class="form-group">
						<div id="resultado5"></div>
						<label for="pass1"><b>Contraseña</b><br>
						(La contraseña debe contener al menos 1 carácter alfabético en minúscula o mayúscula) <br>
						(La contraseña debe contener al menos 1 carácter numérico) <br>
						(La cadena debe contener al menos un carácter especial [!@#$%^*]) <br>
						</label>
						<input type="password" placeholder="Contraseña" id="pass1" name="clave" class="form-control" autocomplete="off" required>
					</div>
					<div class="form-group">
						<input type="password" placeholder="Repetir contraseña" id="pass2" name="clave2"  class="form-control" onChange="validarContraseña()" autocomplete="off" required>
					</div>
					<select name="estado" id="estado1">
						  <option value="Activo" selected>Activo</option>
						  <option value="Inactivo">Inactivo</option>
					  </select>
					</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">
					<input class="btn btn-success" type="submit" value="Registrar">
				</div>
			</form>
		</div>
	</div>
</div>
	
<script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
<script src="../js/pushbar.js"></script>
<script src="../js/funcionesCRUD.js"></script>
<script src="../js/validaciones.js"></script>
<script src="../js/validaciones2.js"></script>
<script type="text/javascript">
	//Inicializar el script
	var pushbar = new Pushbar({
		blur: true,
		overlay: true
	});
</script>
</body>
</html>