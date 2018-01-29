<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>SB Admin - Start Bootstrap Template</title>
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/icon?family=Material+Icons'>
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="index.php">Camaron Latino</a>
    
      
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="indexadministrativo.php">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Uusarios</span>
          </a>
        </li>

        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="tablaservicio.php">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Servicios</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
          <a class="nav-link" href="tables.php">
            <i class="fa fa-fw fa-table"></i>
            <span class="nav-link-text">Tables</span>
          </a>
        </li>
        
      </ul>
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
            <i class="fa fa-fw fa-sign-out"></i>Logout</a>
        </li>
      </ul>
    </div>
  </nav>
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Creacion Usuario</li>
      </ol>
   <section id="tamasec">
        <?php
         if($_GET["mensaje"]){
        ?>
              <div class="text-center"><p><?php echo $_GET["mensaje"];?></p></div>
        <?php
         }
        ?>
        <div class="containerlogin">
            <div class="card card-register mx-auto mt-5">
              <div class="card-header">Registro de cuenta</div>
              <div class="card-body">
                <form action="crearUsuarioGeneral.php" method="post">
                  <div class="form-group">
                    <div class="form-row">
                      <div class="col-md-6">
                        <label>Ingrese nombre</label>
                        <input class="form-control" placeholder="" name="nom">
                      </div>
                      <div class="col-md-6">
                        <label>Ingrese cédula o ruc</label>
                        <input class="form-control" placeholder="" name="ced">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="form-row">
                      <div class="col-md-6">
                        <label>Ingrese telefono</label>
                        <input class="form-control" placeholder="" name="tel">
                      </div>
                      <div class="col-md-6">
                        <label>Correo electrónico</label>
                        <input class="form-control" placeholder="" name="cor">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label>Direccion</label>
                    <input class="form-control" placeholder="" name="dir">
                  </div>
                  <div class="form-group">
                    <div class="form-row">
                      <div class="col-md-6">
                        <label>Usuario</label>
                        <input class="form-control" type="text" placeholder="" name="usu">
                      </div>
                      <div class="col-md-6">
                        <label>Contraseña</label>
                        <input class="form-control"  type="password" placeholder="" name="con">
                      </div>
                    </div>
                  </div>
                    <div class="form-group">
                    <div class="form-row">
                      <div class="col-md-12">
                        <label>Rol</label>
                      </div>
                      <div class="col-md-12">
                        <?php
                            require_once(rolCollector);
                        ?>
                       <select name="select">
                          <option value="value1">admin</option> 
                          <option value="value2" selected>usuario</option>
                        </select>
                      </div>
                    </div>
                  </div>
                     <button type="submit"> Registrar </button>
                  <a class="btn btn-primary btn-block" href="login.php">Registro</a>
                </form>
              </div>
            </div>
          </div>
    </section>   
     
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © Your Website 2018</small>
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
              <form action="logout.php">
               <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
              
               <a class="btn btn-primary" href="logout.php">Logout</a>
              </form>
           
          </div>
        </div>
      </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js2/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="js2/sb-admin-datatables.min.js"></script>
    <script src="js2/sb-admin-charts.min.js"></script>
  </div>
</body>

</html>
