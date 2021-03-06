<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mini-Mall | Producto</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/estilos.css">
    <link rel="shortcut icon" href="../img/icon/MiniMallicon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/css/select2.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/js/select2.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <style>
        /* Background Main Window*/
        main {
            width: auto;
            height: 100vh;
            background-image: url(img/register-client.jpeg);
            background-repeat: no-repeat;
            background-size: cover;
            background-position: inherit;
        }
    </style>
</head>

<body onload="showBranches()">
    <main>
        <!-- Barra de Navegación Primer Parte LandingPage -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-main"
                aria-controls="navbarSupportedContent" aria-expanded="true" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbar-main">
                <div class="row m-0 w-100">
                    <ul id="main-navbar" class="nav navbar-nav mr-auto px-5 my-auto">
                        <li class="nav-item invisible">
                            <div class="btn-group dropright">
                                <button type="button" class="btn dropdown-toggle text-white" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-user fa-fw" style="color: white;"></i>Iniciar Sesión</button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#login-client" data-toggle="modal"
                                        data-target="#login-client">Cliente</a>
                                    <a class="dropdown-item" href="#login-company" data-toggle="modal"
                                        data-target="#login-company">Empresa</a>
                                    <a class="dropdown-item" href="#login-admin" data-toggle="modal"
                                        data-target="#login-admin">Super Admin</a>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item invisible">
                            <div class="btn-group dropright">
                                <button type="button" class="btn dropdown-toggle text-white" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-user-plus fa-fw" style="color: white;"></i>Registrarse</button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="register/register-client.php">Cliente</a>
                                    <a class="dropdown-item" href="register/register-company.php">Empresa</a>
                                    <a class="dropdown-item" href="register/register-admin.php">Super Admin</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <a class="navbar-brand" href="#"><img id="Mini-Mall-mainlogo" class="img-responsive"
                            src="../img/icon/MiniMall.png"></a>
                    <ul id="main-navbar" class="nav navbar-nav ml-auto px-5 my-auto">
                        <li class="nav-item invisible">
                            <a class="nav-link" href="#">
                                <h6 class="text-white">Iniciar Sesión Iniciar Inic</h6>
                            </a>
                        </li>
                        <li class="nav-item invisible">
                            <a class="nav-link" href="cart.php">
                                <h6 class="text-white"><i class="fas fa-shopping-cart fa-fw"
                                        style="color: white;"></i>Carrito</h6>
                            </a>
                        </li>
                    </ul>


                </div>
            </div>
        </nav>
        <nav class="navbar navbar-expand-lg navbar-light bg-light ">
            <div id="navbar-menu" class="w-100">
                <ul class="nav navbar-nav px-5  my-auto">
                    <li class="nav-item mr-auto">
                        <a class="nav-link" href="../index.php">
                            <h6 class="text-white"><i class="fas fa-home fa-fw" style="color: white;"></i>Inicio</h6>
                        </a>
                    </li>
                    <li class="nav-item mr-auto ml-auto invisible">
                        <div class="btn-group">
                            <button type="button" class="btn dropdown-toggle text-white" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-percent fa-fw" style="color: white;"></i>Promociones</button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="promotions/product-company-list.php"> <i
                                        class="fas fa-building fa-fw"></i>Productos y Empresas</a>
                                <a class="dropdown-item" href="promotions/categories.php"><i
                                        class="fas fa-th-large fa-fw"></i>Categorías</a>
                                <a class="dropdown-item" href="promotions/last-products.php"><i
                                        class="fas fa-stopwatch fa-fw"></i>Últimas Promociones</a>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item ml-auto">
                        <a class="nav-link" href="../contact.php">
                            <h6 class="text-white"><i class="fas fa-phone-volume fa-fw"
                                    style="color: white;"></i>Contactanos</h6>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>


        <!-- Formulario de Registro -->
        <form action="">
            <div class="col-8 mr-auto ml-auto p-3 animated bounceInRight" id="form-product">
                <div class="form-row align-items-center">
                    <div class="col-auto mr-auto ml-auto">
                        <h4>Producto</h4>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <b>Nombre del Producto</b>
                        <input type="text" class="form-control" id="name-product" placeholder="Nombre" required
                            minlength="5" maxlength="50" onchange="ValidateName()">
                        <small id="name-alert" class="form-text text-dark"></small>
                    </div>
                    <div class="form-group col-md-6">
                        <b>Subir Imagen</b>
                        <div class="custom-file overflow-hidden rounded-pill">
                            <input id="product-img" type="file" class="custom-file-input rounded-pill" required accept="image/*">
                            <label for="product-img" class="custom-file-label rounded-pill">Subir foto del producto</label>
                            <h1 style="visibility: hidden;" id="product-url"></h1>
                        </div>
                        <small id="img-alert" class="form-text text-dark"></small>
                    </div>
                    <div class="form-group col-md-6">
                        <div class="row">
                            <div class="col-md-4">
                                <b>Precio</b>
                                <div class="input-group">
                                    <span class="input-group-addon pt-2 px-2"><b id="currency-company"></b></span>
                                    <input type="number" min="0" max="100000" step="5" data-number-to-fixed="2"
                                        data-number-stepfactor="100" class="form-control currency" id="price-product"
                                        required onchange="ValidatePrice()">
                                </div>
                                <small id="price-alert" class="form-text text-dark"></small>
                            </div>
                            <div class="col-md-8">
                                <b>Sucursales</b>
                                <select id="branch-select-product" class="form-control mul-select" multiple="true" style="width:17rem;" required onchange="ValidateBranch()">
                                    <!-- Sucursales de la empresa registrada -->
                                </select>
                                <small id="branch-alert" class="form-text text-dark"></small>
                            </div>
                        </div>
                    </div>

                    <div class="form-group col-md-6">
                        <b>Categorías</b>
                        <select id="categories-select-product" class="form-control text-white" required onchange="ValidateCategory()">
                            <option selected>Seleccione una Categoría</option>
                            <option>Comida</option>
                            <option>Bebida</option>
                            <option>Ropa</option>
                            <option>Alcohol</option>
                            <option>Electronico</option>
                            <option>Software</option>
                            <option>Salud</option>
                            <option>Hogar</option>
                        </select>
                        <small id="categories-alert" class="form-text text-dark"></small>
                    </div>

                    <div class="form-group col-md-12">
                        <b>Descripción</b>
                        <textarea name="" id="description-product" class="form-control" required minlength="15"
                            maxlength="200" onchange="ValidateDescription()"></textarea>
                        <small id="description-alert" class="form-text text-dark"></small>
                    </div>
                </div>
                <div class="form-row align-items-center">
                    <div class="col-auto mr-auto ml-auto">
                        <button id="btn-product" type="button"
                            class="btn btn-lg shadow p-2 px-5 mb-0 rounded-pill text-white"
                            onclick="ValidateForm();">Registrar Prodcuto</button>
                    </div>
                </div>
            </div>
            <?php 
                include_once('../components/loader.php');
            ?>
        </form>


    </main>
    
            <!-- Firebase -->
            <script src="https://www.gstatic.com/firebasejs/7.7.0/firebase-app.js"></script>
            <script src="https://www.gstatic.com/firebasejs/7.7.0/firebase-storage.js"></script>
          
            <script>
              var firebaseConfig = {
                apiKey: "AIzaSyDHbIQpttJ5KwhJntjUa1aAKOTmuXIZRZ8",
              authDomain: "proyecto-poo-271914.firebaseapp.com",
              databaseURL: "https://proyecto-poo-271914.firebaseio.com",
              projectId: "proyecto-poo-271914",
              storageBucket: "proyecto-poo-271914.appspot.com",
              messagingSenderId: "220442033339",
              appId: "1:220442033339:web:cccf003c2c6a8daa2c7d9e",
              measurementId: "G-1JTVDET0HF"
            };
              // Initialize Firebase
              firebase.initializeApp(firebaseConfig);
            function uploadImage() {
                const ref = firebase.storage().ref('/products');
                if(document.querySelector('#product-img') != ''){
                  const file = document.querySelector('#product-img').files[0];
                const name = file.name;
                const metadata = {
                  contentType: file.type
                };
                const task = ref.child(name).put(file, metadata);
                task
                  .then(snapshot => snapshot.ref.getDownloadURL())
                  .then(url => {
                      document.getElementById('product-url').innerHTML = url;
                      console.log(document.getElementById('product-url').innerHTML);
          
                  })
                  .catch(console.error);
                }
                
              }
          </script>
              <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.19.2/axios.min.js"></script> 
    <script src="js/control-register-product.js"></script>
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