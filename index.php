<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Administrador</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet"/>
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
  </head>
  <body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
      <a class="navbar-brand ps-3" href="index.php">Panel de Control</a>
      <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!">
        <i class="fas fa-bars"></i>
      </button>
      <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-0 my-2 my-md-0">
        <div class="nav-item dropdown">
          <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
            <i class="fa fa-bell me-lg-2"></i>
            <span class="d-none d-lg-inline-flex">Notificaciones</span>
          </a>
          <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
            <li>
              <a href="#" class="dropdown-item">
                <h6 class="fw-normal mb-0">Ventas nuevas</h6>
                <small>Hace 15 minutos</small>
              </a>
            </li>
            <hr class="dropdown-divider" />
            <li>
              <a href="#" class="dropdown-item">
                <h6 class="fw-normal mb-0">Actualizar Cartelera</h6>
                <small>Hace 1 hora</small>
              </a>
            </li>
            <hr class="dropdown-divider" />
            <li>
              <a href="#" class="dropdown-item">
                <h6 class="fw-normal mb-0">Nuevas Peliculas</h6>
                <small>Hace 2 hora</small>
              </a>
            </li>
          </ul>
        </div>
      </form>
      <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
        <li class="nav-item dropdown">
          <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
            <img class="rounded-circle me-lg-2" src="assets/img/adlogo.png" alt="" style="width: 40px; height: 40px"/>
            <span class="d-none d-lg-inline-flex">Administrador</span>
          </a>
        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#!">Configuraciones</a></li>
            <li><a class="dropdown-item" href="#!">Actividad</a></li>
            <li><hr class="dropdown-divider" /></li>
            <li><a class="dropdown-item" href="#!">Salir</a></li>
        </ul>
        </li>
      </ul>
    </nav>
    <div id="layoutSidenav">
      <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
          <div class="sb-sidenav-menu">
            <div class="nav">
              <div class="d-flex align-items-center ms-4 mb-4">
                <div class="position-relative">
                  <img class="rounded-circle" src="assets/img/adlogo.png" alt="" style="width: 40px; height: 40px"/>
                    <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                </div>
                <div class="ms-3">
                  <h6 class="mb-0">Admin</h6>
                  <span>Activo</span>
                </div>
              </div>
              <div class="sb-sidenav-menu-heading">Inicio</div>
              <a class="nav-link" href="index.php">
                <div class="sb-nav-link-icon">
                  <i class="fas fa-tachometer-alt"></i>
                </div>General
              </a>
              <div class="sb-sidenav-menu-heading">Estadisticas</div>
                <a class="nav-link" href="#datos">
                    <div class="sb-nav-link-icon"><i class="fas fa-tv"></i></div> Datos
                </a>
                <a class="nav-link" href="#reservas">
                    <div class="sb-nav-link-icon"><i class="fas fa-scroll"></i></div> Reservas
                </a>
                <a class="nav-link" href="#entradas">
                    <div class="sb-nav-link-icon"><i class="fas fa-ticket"></i></div> Entradas
                </a>
                <a class="nav-link" href="#personas">
                   <div class="sb-nav-link-icon"><i class="fas fa-user"></i></div> Clientes
                </a>
                <a class="nav-link" href="#compras">
                    <div class="sb-nav-link-icon"><i class="fas fa-usd"></i></div> Compras
                </a>
                <div class="sb-sidenav-menu-heading">Administracion</div>
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                    <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                    Edicion
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                        <a class="nav-link" href="html/usuarios.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-street-view"></i></div> Usuario
                        </a>
                        <a class="nav-link" href="html/clientes.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-house"></i></div> Clientes
                        </a>
                    </nav>
                </div>      
            </div>
            <div class="sb-sidenav-menu-heading"></div>
            <div class="sb-sidenav-footer">
            <div class="small">Proyecto Desarrollo Web</div>
            Primer Parcial
           </div>
          </div>
        </nav>
      </div>
      <div id="layoutSidenav_content">
        <main>
          <div class="container-fluid px-4">
            <h1 class="mt-4">Pagina Principal</h1>
            <ol class="breadcrumb mb-4">
              <li class="breadcrumb-item active">Tipos de targetas</li>
            </ol>
            <div class="row">
              <div class="col-xl-3 col-md-6">
                <div class="card bg-primary text-white mb-4">
                  <div class="card-body">Targetas Admitidas</div>
                  <div class="card-footer d-flex align-items-center justify-content-between"> 
                    Tarjetas de Debito
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-md-6">
                <div class="card bg-warning text-white mb-4">
                  <div class="card-body">Tarjetas Advertidas</div>
                  <div class="card-footer d-flex align-items-center justify-content-between">
                    Tarjetas de Credito
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-md-6">
                <div class="card bg-success text-white mb-4">
                  <div class="card-body">Tarjetas Preferidas</div>
                  <div class="card-footer d-flex align-items-center justify-content-between">
                    Pichincha y Guayaquil
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-md-6">
                <div class="card bg-danger text-white mb-4">
                  <div class="card-body">Tarjetas Rechazadas</div>
                  <div class="card-footer d-flex align-items-center justify-content-between">
                    Tarjetas Otros Cines
                  </div>
                </div>
              </div>
            </div>
          <section id="datos">
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Estadisticas de Ventas</li>
            </ol>
            <div class="row">
              <div class="col-xl-6">
                <div class="card mb-4">
                  <div class="card-header">
                    <i class="fas fa-chart-area me-1"></i>
                    Ventas Diarias Semana 3 y 4
                  </div>
                  <div class="card-body">
                    <canvas id="myAreaChart" width="100%" height="40"></canvas>
                  </div>
                </div>
              </div>
              <div class="col-xl-6">
                <div class="card mb-4">
                  <div class="card-header">
                    <i class="fas fa-chart-bar me-1"></i>
                    Ventas Mensuales Mes Noviembre
                  </div>
                  <div class="card-body">
                    <canvas id="myBarChart" width="100%" height="40"></canvas>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <section id="reservas">
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Tabla de Reservas</li>
            </ol>
            <div class="card mb-4">
              <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Reservas Semana 3 Noviembre
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="table-responsive">
                    <table class="table table">
                      <thead class="table-dark">
                        <tr>
                          <th scope="col">NOMBRE</th>
                          <th scope="col">APELLIDO</th>
                          <th scope="col">CORREO</th>
                          <th scope="col">PELICULA</th>
                          <th scope="col">SALA</th>
                          <th scope="col">CANTIDAD</th>
                          <th scope="col">TOTAL</th>
                        </tr>
                      </thead>
                      <tbody id="datos"></tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <section id="entradas">
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Tabla de Entradas</li>
            </ol>
            <div class="card mb-4">
              <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Entradas Semana 3 Noviembre
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="table-responsive">
                    <table class="table table">
                      <thead class="table-dark">
                        <tr>
                          <th scope="col">GENERO</th>
                          <th scope="col">PELICULA</th>
                          <th scope="col">SALA</th>
                          <th scope="col">HORARIO</th>
                          <th scope="col">CANTIDAD</th>
                        </tr>
                      </thead>
                      <tbody id="datos"></tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <section id="personas">
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Tabla de Clientes</li>
            </ol>
            <div class="card mb-4">
              <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Clientes Semana 3 Noviembre
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="table-responsive">
                    <table class="table table">
                      <thead class="table-dark">
                        <tr>
                          <th scope="col">ID</th>
                          <th scope="col">CEDULA</th>
                          <th scope="col">NOMBRE</th>
                          <th scope="col">APELLIDO</th>
                          <th scope="col">CORREO</th>
                          <th scope="col">GENERO</th>
                        </tr>
                      </thead>
                      <tbody id="datos"></tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <section id="compras">
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Tabla de Compras</li>
            </ol>
            <div class="card mb-4">
              <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Compras Semana 3 Noviembre
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="table-responsive">
                    <table class="table table">
                      <thead class="table-dark">
                        <tr>
                          <th scope="col">NOMBRE</th>
                          <th scope="col">APELLIDO</th>
                          <th scope="col">CORREO</th>
                          <th scope="col">PELICULA</th>
                          <th scope="col">CANTIDAD</th>
                          <th scope="col">TOTAL</th>
                        </tr>
                      </thead>
                      <tbody id="datos"></tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </section>
          </div>
        </main>
        <footer class="py-4 bg-light mt-auto">
          <div class="container-fluid px-4">
            <div class="d-flex align-items-center justify-content-between small">
              <div class="text-muted">
                Copyright &copy; Gavilanes Jaramillo Zambrano 2022
              </div>
            </div>
          </div>
        </footer>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
  </body>
</html>
