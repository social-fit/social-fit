<?php
    require_once "php/database.php";
    session_start();

    $id = $_SESSION['id'];
    $nome = $_SESSION['nome'];

    if (!isset($id)) {
        header('Location: login.php');
    }
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Personal Records</title>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    
    <link href="css/mdb.min.css" rel="stylesheet">
    
    <link href="css/style.css" rel="stylesheet">
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
</head>

<body>

    
    
    <header>

        
        <nav class="navbar navbar-expand-lg navbar-dark #e53935 red darken-1 scrolling-navbar">

            <ul class="navbar-nav nav-flex-icons">
                <li class="nav-item">
                    <a onclick="apertar_botao()" class="nav-link">
                        <i class="fa fa-bars fa-lg"></i>
                    </a>
                </li>
            </ul>

            
            <a class="navbar-brand" href="#">
                <img src="img/logo/logo-full-transparent.png" height="30" alt="">
            </a>

            
            <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="fa fa-search"></span>
            </button>

            
            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                
                <form class="form-inline mx-5" style="width: 100%;">
                    <i class="fa fa-search prefix"></i>
                    <input class="form-control" style="width: 95%;" type="text" placeholder="Pesquisar" aria-label="Search">
                </form>

            </div>
            

            
            <ul class="navbar-nav nav-flex-icons">

                <li class="nav-item">
                    <a href="" class="nav-link">
                        <i class="fa fa-th fa-lg"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link">
                        <i class="fa fa-bell fa-lg"></i>
                    </a>
                </li>

                
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-user fa-lg"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="perfil.php">Ver perfil</a>
                        <a class="dropdown-item" href="php/logout.php">Sair</a>
                    </div>
                </li>

            </ul>
            

        </nav>
        

    </header>
    

    
    <main>

        
        <div class="container-fluid">
            <div class="row" id="pagina">
                <nav class="col-md-2 d-none d-md-block bg-light navbar navbar-light blue-grey lighten-5" id="barralateral">
                    <div class="sidebar-sticky">
                        <ul class="navbar-nav flex-column nav-flex-icons">
                            <li class="nav-item">
                                <a href="index.php" class="side-link nav-link">
                                    <i class="fas fa-home fa-lg fa-fw"></i>
                                    <span class="mx-md-2">Início</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a id="stats" class="side-link nav-link">
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
                                <a href="amigos.php" class="side-link nav-link">
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
                
                <div class="col-md-10" id="pagina_real">

                    <form class="mt-4" action="php/getPR.php" method="GET">

                        <div class="card">
                        
                            <!--Lista de exercícios - Entrada de Dados -->
                            <div class="card-body">
                                
                                <h1 class="card-title">Personal Records</h1>
                                
                                
                                <div class="dados_usuario row mt-4">
                                    <div class="col-12 col-sm-6 col-md-4 form-group">
                                        <label for="elench-press">Burpee</label>
                                        <input type="text" name="burpee" class="form-control" id="elench-press" placeholder="">
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-4 form-group">
                                        <label for="clean-power">Air Squat</label>
                                        <input type="text" name="air_squat" class="form-control" id="clean-power" placeholder="">
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-4 form-group">
                                        <label for="clean-squat">Front Squat</label>
                                        <input type="text" name="front_squat" class="form-control" id="clean-squat" placeholder="">
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-4 form-group">
                                        <label for="clean-jerk">Back Squat</label>
                                        <input type="text" name="back_squat" class="form-control" id="clean-jerk" placeholder="">
                                    </div>
                            
                                    <div class="col-12 col-sm-6 col-md-4 form-group">
                                        <label for="press-push">Overhead Squat</label>
                                        <input type="text" name="overhead_squat" class="form-control" id="press-push" placeholder="">
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-4 form-group">
                                        <label for="press-shoulder">Shoulder Press</label>
                                        <input type="text" name="shoulder_press" class="form-control" id="press-shoulder" placeholder="">
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-4 form-group">
                                        <label for="elench-press">Push Press</label>
                                        <input type="text" name="push_press" class="form-control" id="elench-press" placeholder="">
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-4 form-group">
                                        <label for="clean-power">Push Jerk</label>
                                        <input type="text" name="push_jerk" class="form-control" id="clean-power" placeholder="">
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-4 form-group">
                                        <label for="clean-squat">Deadlift</label>
                                        <input type="text" name="deadlift" class="form-control" id="clean-squat" placeholder="">
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-4 form-group">
                                        <label for="clean-jerk">Pull Up</label>
                                        <input type="text" name="pull_up" class="form-control" id="clean-jerk" placeholder="">
                                    </div>
                            
                                    <div class="col-12 col-sm-6 col-md-4 form-group">
                                        <label for="press-push">Press (Push)</label>
                                        <input type="text" name="" class="form-control" id="press-push" placeholder="">
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-4 form-group">
                                        <label for="press-shoulder">Press (Shoulder)</label>
                                        <input type="text" name="" class="form-control" id="press-shoulder" placeholder="">
                                    </div>

                                    <div class="d-block mx-auto">
                                        <input class="btn btn-danger" type="submit"></input>
                                    </div>
                                </div>

                            </div>
                            
                        </div>

                        
                    </form>
                </div>
            </div>
        </div>
        

    </main>
    

    
    <footer>

    </footer>
    
    

    
    
    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    
    <script type="text/javascript" src="js/popper.min.js"></script>
    
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    
    <script type="text/javascript" src="js/mdb.min.js"></script>

    <script src="js/comutar_barra.js"></script>

    <script>
        document.querySelector("#stats").href="stats.php?id="+<?php echo $id ?>
    </script>
</body>

</html>