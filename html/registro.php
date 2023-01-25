<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/stylelog.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Registro</title>
</head>
<body>
<div class="overlay">
    <section class="vh-100">
  <div class="container-fluid h-custom">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
      
        <form>
               <div class="con">
          <div class="form-outline mb-4">
          <header class="head-form">
               <h2>Registrarse</h2>
               <p>Ingrese sus datos</p>
            </header>
          <label class="form-label" for="form3Example3">Nombre:</label>
          <br>
          <span class="input-item">
                  <i class="fa fa-user-circle"></i>
               </span>
            <input type="text" name="nombre" id="nombre" class="form-input"
              placeholder="Ingrese su nombre" required>
          </div>
          <div class="form-outline mb-3">
          <label class="form-label" for="form3Example4">Apellido:</label>
          <br>
          <span class="input-item">
                  <i class="fa fa-user-circle"></i>
               </span>
            <input type="text" name="apellido" id="form3Example4" class="form-input"
              placeholder="Ingrese su apellido" required>
          </div>
          <div class="form-outline mb-3">
            <label class="form-label" for="form3Example4">Correo:</label>
            <br>
            <span class="input-item">
                    <i class="fa fa-user-circle"></i>
                 </span>
              <input type="email" name="correo" id="form3Example4" class="form-input"
                placeholder="Ingrese su correo" required>
            </div>
            <div class="form-outline mb-3">
              <label class="form-label" for="form3Example4">Genero:</label>
              <br>
              <span class="input-item">
                      <i class="fa fa-user-circle"></i>
                   </span>
                  <select name="select" class="form-label">
                    <option value="value1" selected>Masculino</option>
                    <option value="value2" selected>Femenino</option>
                    <option value="value3">Otros</option>
                  </select>
              </div>
              <div class="form-outline mb-3">
                <label class="form-label" for="form3Example4">Usuario:</label>
                <br>
                <span class="input-item">
                        <i class="fa fa-user-circle"></i>
                     </span>
                  <input type="text" name="usuario" id="form3Example4" class="form-input"
                    placeholder="Ingrese su usuario" required>
                </div>
                <div class="form-outline mb-3">
                  <label class="form-label" for="form3Example4">Contraseña:</label>
                  <br>
                  <span class="input-item">
                          <i class="fa fa-user-circle"></i>
                       </span>
                    <input type="password" name="contraseña" id="form3Example4" class="form-input"
                      placeholder="Ingrese su contraseña" required>
                  </div>
          <div class="text-center text-lg-start mt-4 pt-2 ">
            <button type="submit" class="log-in">Guardar</button>
          </div>
          </div>
        </form>
      
      </div>
    </div>
  </div>
  </div>
</section>
</body>
</html>