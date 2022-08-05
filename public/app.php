<?php

use App\Config\UrlBase;
use App\Routes\Route;

date_default_timezone_set('America/Lima');
setlocale(LC_ALL, 'es_ES');
setlocale(LC_NUMERIC, 'C');

$view = Route::route();

if ($view === '404') {
   require './src/Pages/404/404.php';
} else {  
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title><?=$_ENV['TITLE']?></title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="<?=UrlBase::urlBase?>/img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet"> 
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="<?=UrlBase::urlBase?>/public/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="<?=UrlBase::urlBase?>/public/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?=UrlBase::urlBase?>/public/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="<?=UrlBase::urlBase?>/public/css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-fluid position-relative d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-secondary navbar-dark">
                <a href="main" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>ITSYTEMS</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="ms-3">
                        <h6 class="mb-0">Jhon</h6>
                        <span>Admin</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="main" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Api Cloud</a>                    
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-secondary navbar-dark sticky-top px-4 py-0">
                <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="fa fa-user-edit"></i></h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>
                <form class="d-none d-md-flex ms-4">
                    <input class="form-control bg-dark border-0" type="search" placeholder="Search">
                </form>
                <div class="navbar-nav align-items-center ms-auto">
                    
                    
                    <div class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="fa fa-user pr-4"></i><span class="d-none d-lg-inline-flex pl-4"> Jhon Coz</span>
                        </a>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->           


            <!-- Recent Sales Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-secondary text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0">Contactos</h6>
                        <a href="">ver todo</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table text-start align-middle table-bordered table-hover mb-0">
                            <thead>
                                <tr class="text-white">
                                    <th scope="col"><input class="form-check-input" type="checkbox"></th>
                                    <th scope="col">Nombres</th>
                                    <th scope="col">Telefono</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Pais</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><input class="form-check-input" type="checkbox"></td>
                                    <td>Jhon Coz</td>
                                    <td><a onclick="openmodal('51952133799')" type="button" class="text-info">51952133799</a></td>
                                    <td>jcoz@gmail.com</td>
                                    <td>Perú</td>
                                    <td><span class="badge bg-success">Activo</span></td>
                                    <td><a class="btn btn-sm btn-primary callBtn" type="button" data-nmr="51952133799"><i class="fa fa-phone"></i></a></td>
                                </tr>
                                <tr>
                                    <td><input class="form-check-input" type="checkbox"></td>
                                    <td>Elmer Chipana</td>
                                    <td><a onclick="openmodal('51954101100')" type="button" class="text-info">51954101100</a></td>
                                    <td>elmer@gmail.com</td>
                                    <td>Perú</td>
                                    <td><span class="badge bg-success">Activo</span></td>
                                    <td><a class="btn btn-sm btn-primary callBtn" type="button" data-nmr="51954101100"><i class="fa fa-phone"></i></a></td>
                                </tr>
                                <tr>
                                    <td><input class="form-check-input" type="checkbox"></td>
                                    <td>Cliente 2</td>
                                    <td><a onclick="openmodal('51952133799')" type="button" class="text-info">51952133799</a></td>
                                    <td>cli2@gmail.com</td>
                                    <td>Perú</td>
                                    <td><span class="badge bg-success">Activo</span></td>
                                    <td><a class="btn btn-sm btn-primary" href=""><i class="fa fa-phone"></i></a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- Recent Sales End -->

            <div class="modal" tabindex="-1" id="modal_mensaje">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-dark">Enviar mensaje</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <h4  ></h4>
                        <i class="text-muted h4">Telf: </i><span id="number" class="text-success h4"></span>                        
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Plantilla</label>
                            <select class="form-select" aria-label="Default select example" id="type">
                                <option selected>prueba</option>
                                <option value="1">hello_world</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Mensaje</label>
                            <textarea class="form-control" id="msmws" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <button type="button" class="btn btn-primary" id="sendMsm">Enviar</button>
                    </div>
                    </div>
                </div>
            </div>


            <!-- Footer Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-secondary rounded-top p-4">
                    <div class="row">
                        <div class="col-12 col-sm-6 text-center text-sm-center">
                            &copy; <a href="#">ITSYSTEMS</a> 
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer End -->
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?=UrlBase::urlBase?>/public/lib/chart/chart.min.js"></script>
    <script src="<?=UrlBase::urlBase?>/public/lib/easing/easing.min.js"></script>
    <script src="<?=UrlBase::urlBase?>/public/lib/waypoints/waypoints.min.js"></script>
    <script src="<?=UrlBase::urlBase?>/public/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="<?=UrlBase::urlBase?>/public/lib/tempusdominus/js/moment.min.js"></script>
    <script src="<?=UrlBase::urlBase?>/public/lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="<?=UrlBase::urlBase?>/public/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="<?=UrlBase::urlBase?>/public/js/main.js"></script>

    <script>

        function openmodal(number){
            $('#modal_mensaje').modal({backdrop: 'static', keyboard: false})
            $('#modal_mensaje').modal('show');
            $('#number').text(number);
        }        

    </script>
</body>

</html>
<!--Cerramos las etiquetas PHP del else-->
<?php
   }
?>