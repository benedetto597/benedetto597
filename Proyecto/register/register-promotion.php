<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mini-Mall | Promoción</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/estilos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    <link rel="shortcut icon" href="../img/icon/MiniMallicon.png">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/css/select2.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/js/select2.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    <style>
    
        /* Background Main Window*/
        main{
            width:auto;
            height:100vh;
            background-image: url(img/register-client.jpeg);
            background-repeat: no-repeat;
            background-size:cover;
            background-position:inherit;
        }

        </style>
</head>
<body onload="showInfo()">
    <main>
        <!-- Barra de Navegación Primer Parte LandingPage -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-main" aria-controls="navbarSupportedContent" aria-expanded="true" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon" ></span>
            </button>
            <div class="collapse navbar-collapse" id="navbar-main">
                <div class="row m-0 w-100">
                    <ul id="main-navbar" class="nav navbar-nav mr-auto px-5 my-auto">
                        <li class="nav-item invisible">
                            <div class="btn-group dropright">
                                <button type="button" class="btn dropdown-toggle text-white" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-user fa-fw" style="color: white;"></i>Iniciar Sesión</button>
                                <div class="dropdown-menu" >
                                    <a class="dropdown-item" href="#login-client" data-toggle="modal" data-target="#login-client">Cliente</a>
                                    <a class="dropdown-item" href="#login-company" data-toggle="modal" data-target="#login-company">Empresa</a>
                                    <a class="dropdown-item" href="#login-admin" data-toggle="modal" data-target="#login-admin">Super Admin</a>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item invisible">
                            <div class="btn-group dropright">
                                <button type="button" class="btn dropdown-toggle text-white" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-user-plus fa-fw" style="color: white;"></i>Registrarse</button>
                                <div class="dropdown-menu" >
                                    <a class="dropdown-item" href="register/register-client.php">Cliente</a>
                                    <a class="dropdown-item" href="register/register-company.php">Empresa</a>
                                    <a class="dropdown-item" href="register/register-admin.php">Super Admin</a>
                                </div>
                            </div>
                        </li>
                    </ul>       
                    <a class="navbar-brand" href="#"><img id="Mini-Mall-mainlogo" class="img-responsive" src="../img/icon/MiniMall.png"></a>
                    <ul id="main-navbar" class="nav navbar-nav ml-auto px-5 my-auto">
                        <li class="nav-item invisible">
                            <a class="nav-link" href="#"><h6 class="text-white">Iniciar Sesión Iniciar Inic</h6></a>
                        </li>
                        <li class="nav-item invisible">
                            <a class="nav-link" href="cart.php"><h6 class="text-white"><i class="fas fa-shopping-cart fa-fw" style="color: white;"></i>Carrito</h6></a>
                        </li>
                    </ul>
                
            
                </div>  
            </div>
        </nav>
        <nav class="navbar navbar-expand-lg navbar-light bg-light ">
                <div id="navbar-menu" class="w-100">
                    <ul class="nav navbar-nav px-5  my-auto">
                        <li class="nav-item mr-auto">
                            <a class="nav-link" href="../index.php"><h6 class="text-white"><i class="fas fa-home fa-fw" style="color: white;"></i>Inicio</h6></a>
                      </li>
                        <li class="nav-item mr-auto ml-auto invisible">
                            <div class="btn-group">
                                <button type="button" class="btn dropdown-toggle text-white" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-percent fa-fw" style="color: white;"></i>Promociones</button>
                                <div class="dropdown-menu" >
                                    <a class="dropdown-item" href="promotions/product-company-list.php"> <i class="fas fa-building fa-fw"></i>Productos y Empresas</a>
                                    <a class="dropdown-item" href="promotions/categories.php"><i class="fas fa-th-large fa-fw"></i>Categorías</a>
                                    <a class="dropdown-item" href="promotions/last-products.php"><i class="fas fa-stopwatch fa-fw"></i>Últimas Promociones</a>
                                </div>
                            </div> 
                        </li>
                        <li class="nav-item ml-auto">
                            <a class="nav-link" href="../contact.php"><h6 class="text-white"><i class="fas fa-phone-volume fa-fw" style="color: white;"></i>Contactanos</h6></a>
                        </li>
                    </ul>
                </div>
        </nav>

        <!-- Formulario de Registro -->
        <form action="">
            <div class="col-6 mr-auto ml-auto p-3 animated bounceInRight" id="form-promotion">
                <div class="form-row align-items-center">
                    <div class="col-auto mr-auto ml-auto text-white">
                        <h4>Promoción</h4>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <b class="text-white">Producto</b>
                        <select id="product-select-promotion" class="form-control text-dark" onchange="ValidateProduct()">
                            <option selected>Seleccione un Producto</option>
                            
                        </select>
                        <small id="select-product-alert" class="form-text text-white"></small>
                    </div>
                    
                    <div class="form-group col-md-6">
                        <b class="text-white">Descuento</b>
                        <input type="number" min="1" max="99" class="form-control" id="discount-product" placeholder="Descuento en porcentaje" onchange="ValidateDiscount()">
                        <small id="discount-alert" class="form-text text-white"></small>
                    </div>
                    
                    <div class="form-group col-md-6">
                        <b class="text-white">Precio Real</b>
                        <h4 id="real-price-promotion" class="border-2 text-white">L 0.00</h4>
                    </div>
                    
                    <div class="form-group col-md-6">
                        <b class="text-white">Precio con Descuento</b>
                        <h4 id="discount-price-product" class="text-white">L 0.00</h4>
                    </div>
                    
                    <div class="form-group col-md-6">
                        <b class="text-white">Fecha y hora de inicio</b>
                        <div class="row">
                            <input type="date" class="form-control col-7 mx-3" id="date-init-promotion" onchange="ValidateStart()">
                            <input type="time" class="form-control col-3 mx-2" id="time-init-promotion" onchange="ValidateStart()" >
                        </div>                    
                        <small id="date-start-alert" class="form-text text-white"></small>
                    </div>
                    
                    <div class="form-group col-md-6">
                        <b class="text-white">Fecha y hora de finalización</b>
                        <div class="row">
                            <input type="date" class="form-control col-7 mx-3" id="date-end-promotion" min="2020-01-01" max="2020-12-12" onchange="ValidateEnd()">
                            <input type="time" class="form-control col-3 mx-2" id="time-end-promotion" onchange="ValidateEnd()">
                        </div>                    
                        <small id="date-end-alert" class="form-text text-white"></small>
                    </div>
                    
                    <div class="form-group col-md-6">
                        <b class="text-white">Sucursal</b>
                        <select class="mul-select" id="branch-select-promotion" multiple="true" style="width:20rem;" required onchange="ValidateBranch()">

                        </select>
                        <small id="select-branch-alert" class="form-text text-white"></small>
                    </div>

                    <div class="form-group col-md-6">
                        <div class="form-row align-items-center pt-3">
                            <div class="col-auto mr-auto ml-auto">
                                <button id="btn-promotion" type="button" class="btn btn-lg shadow p-2 px-5 mb-0 rounded-pill text-dark" onclick="ValidateForm();">Registrar Promoción</button>
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
        </form>
    </main>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.19.2/axios.min.js"></script>
    <script src="js/control-register-promotion.js"></script>
    <script>
        $(document).ready(function(){
            $(".mul-select").select2({
                    placeholder: "Seleccione Sucursal", //placeholder
                    tags: true,
                    tokenSeparators: ['/',',',';'," "] 
                });
            })
    </script>
</body>
</html>