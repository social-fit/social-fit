<?php
    require_once "php/database.php";
    session_start();

    $id = $_SESSION['id'];
    $nome = $_SESSION['nome'];

    if (!isset($id)) {
        header('Location: login.html');
    }
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Página Inicial</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="css/style.css" rel="stylesheet">
    <!-- Font Awesome -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
</head>

<body>

    <!-- Start your project here-->
    <!--Main Navigation-->
    <header>

        <!--Navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark #e53935 red darken-1 scrolling-navbar">

            <ul class="navbar-nav nav-flex-icons">
                <li class="nav-item">
                    <a href="" class="nav-link">
                        <i class="fas fa-bars fa-lg"></i>
                    </a>
                </li>
            </ul>

            <!-- Navbar brand -->
            <a class="navbar-brand" href="#">
                <img src="img/logo/logo-full-transparent.png" height="30" alt="">
            </a>

            <!-- Collapse button -->
            <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="fas fa-search"></span>
            </button>

            <!-- Collapsible content -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <!-- Search form -->
                <form class="form-inline mx-5" style="width: 100%;">
                    <i class="fas fa-search prefix"></i>
                    <input class="form-control" style="width: 95%;" type="text" placeholder="Pesquisar" aria-label="Search">
                </form>

            </div>
            <!-- Collapsible content -->

            <!-- Links -->
            <ul class="navbar-nav nav-flex-icons">

                <li class="nav-item">
                    <a href="" class="nav-link">
                        <i class="fas fa-th fa-lg"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link">
                        <i class="fas fa-bell fa-lg"></i>
                    </a>
                </li>

                <!-- Dropdown -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-user fa-lg"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="php/logout.php">Sair</a>
                    </div>
                </li>

            </ul>
            <!-- Links -->

        </nav>
        <!--/.Navbar-->

    </header>
    <!--Main Navigation-->

    <!--Main layout-->
    <main>

        <!--Main container-->
        <div class="container-fluid">
            <div class="row">
                <nav class="col-md-2 d-none d-md-block bg-light navbar navbar-light blue-grey lighten-5">
                    <div class="sidebar-sticky">
                        <ul class="navbar-nav flex-column nav-flex-icons">
                            <li class="nav-item">
                                <a href="index.php" class="side-link nav-link">
                                    <i class="fas fa-home fa-lg fa-fw"></i>
                                    <span class="mx-md-2">Início</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="stats.php" class="side-link nav-link">
                                    <i class="fas fa-signal fa-lg fa-fw"></i>
                                    <span class="mx-md-2">Estatísticas</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="personal-records.php" class="side-link nav-link">
                                    <i class="fas fa-child fa-lg fa-fw"></i>
                                    <span class="mx-md-2">Personal Records</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="side-link nav-link">
                                    <i class="fas fa-users fa-lg fa-fw"></i>
                                    <span class="mx-md-2">Comunidades</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="perfil.php" class="side-link nav-link">
                                    <i class="fas fa-user-circle fa-lg fa-fw"></i>
                                    <span class="mx-md-2">Perfil</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="side-link nav-link">
                                    <i class="fas fa-users fa-lg fa-fw"></i>
                                    <span class="mx-md-2">Amigos</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="side-link nav-link">
                                    <i class="fas fa-bell fa-lg fa-fw"></i>
                                    <span class="mx-md-2">Notificações</span>
                                </a>
                            </li>
                        </ul>
                        <hr>
                        <ul class="navbar-nav flex-column nav-flex-icons mb-2">
                            <li class="nav-item">
                                <a href="" class="side-link-2 nav-link">
                                    <span style="color: #555;">Configurações</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="" class="side-link-2 nav-link">
                                    <span style="color: #555;">Ajuda</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>

                 
                <div class="col-md-10 mx-auto my-4" style="width: 85%">
                    <div class="card">
                        <div class="card-board">
                            <h1 class="card-title mx-4 my-4">Perfil</h1>
                        </div>

                        <div class="row mt-4 mx-2">
                            <div class="col-md-12">
                                <!--Card-->
                                <div class="card">
                                
                                    <!--Card image-->
                                    <img style="max-height: 200px;" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20%282%29.jpg" alt="Card image cap">
                                
                                    <!--Card content-->
                                    <div class="card-body text-center">
                                        <!--Title-->
                                        <h4 class="card-title" id="nome"></h4>
                                        <!--Text-->
                                        <p class="card-text">85 seguidores</p>

                                        <a href="#" class="btn btn-danger">Ver Contatos</a>
                                    </div>
                                
                                </div>
                                <!--/.Card-->
                            </div>
                        </div>

                        <div class="row my-4 mx-2">
                            <div class="col-md-4">
                                <!--Card-->
                                <div class="card">
                                
                                    
                                
                                    <!--Card content-->
                                    <div class="card-body">
                                        <!--Title-->
                                        <div class="row">
                                            <div class="col-md-10">
                                                <h4 class="card-title">Dados de contato</h4>
                                            </div>
                                            <div class="col-md-2">
                                                <a href="">
                                                    <i class="fas fa-pencil-alt fa-lg"></i>
                                                </a>
                                            </div>
                                
                                        </div>
                                        
                                        
                                        
                    

                                        <!--Text-->
                
                                        <div class="md-form">
                                            <i class="fas fa-envelope prefix grey-text"></i>
                                            <input type="text" id="email" class="form-control" disabled>
                                            <label for="email" class="disabled"></label>
                                        </div>
                                    </div>
                                
                                </div>
                                <!--/.Card-->
                            </div>
                            <div class="col-md-4">
                                <!--Card-->
                                <div class="card">
                                
                                    
                                
                                    <!--Card content-->
                                    <div class="card-body">
                                        <!--Title-->
                                        <div class="row">
                                            <div class="col-md-10">
                                                <h4 class="card-title">Data de Nascimento</h4>
                                            </div>
                                            <div class="col-md-2">
                                                <a href="">
                                                    <i class="fas fa-pencil-alt fa-lg"></i>
                                                </a>
                                            </div>
                                
                                        </div>
                                        
                                        <div class="md-form">
                                            <i class="fas fa-calendar prefix grey-text"></i>
                                            <input type="text" id="datanasc" class="form-control" disabled>
                                            <label for="datanasc" class="disabled"></label>
                                        </div>
                                    </div>
                                
                                </div>
                                <!--/.Card-->
                            </div>
                            <div class="col-md-4">
                                <!--Card-->
                                <div class="card">
                                
                                    
                                
                                    <!--Card content-->
                                    <div class="card-body">
                                        <!--Title-->
                                        <div class="row">
                                            <div class="col-md-10">
                                                <h4 class="card-title">País</h4>
                                            </div>
                                            <div class="col-md-2">
                                                <a href="">
                                                    <i class="fas fa-pencil-alt fa-lg"></i>
                                                </a>
                                            </div>
                                
                                        </div>
                                        <!--Text-->
                                        <div class="md-form">
                                            <i class="fas fa-map-marker-alt prefix grey-text"></i>
                                            <input type="text" id="pais" class="form-control" disabled>
                                            <label for="pais" class="disabled"></label>
                                        </div>
                                    </div>
                                
                                </div>
                                <!--/.Card-->
                            </div>
                        </div>
                    </div>   
                    
                </div>
            </div>
        </div>
        <!--Main container-->

    </main>
    <!--Main layout-->

    <!--Footer-->
    <footer>

    </footer>
    <!--Footer-->
    <!-- /Start your project here-->

    <!-- SCRIPTS -->
    <!-- JQuery -->
    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>


    <script>
        $.ajax({
            method: "POST",
            data: {'id': "<?php echo $id ?>"},
            url: "php/loadProfile.php",
            success: function(data) {
                data = JSON.parse(data) 
                console.log(data);

                for([key,value] of Object.entries(data)){
                    if(key == 'nome'){
                        document.querySelector('#nome').innerHTML = `<h4 class="card-title" id="nome"><strong>`+value+`</strong></h4>`;
                    }
                    else{
                        document.querySelector('#'+key).value=value;
                    }
                }

            }
        })
    </script>
</body>

</html>
