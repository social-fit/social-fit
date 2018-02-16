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
    <title>Estatísticas</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="css/style.css" rel="stylesheet">
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
                        <i class="fa fa-bars fa-lg"></i>
                    </a>
                </li>
            </ul>

            <!-- Navbar brand -->
            <a class="navbar-brand" href="#">
                <img src="img/logo/logo-full-transparent.png" height="30" alt="">
            </a>

            <!-- Collapse button -->
            <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation"><span class="fa fa-search"></span></button>

            <!-- Collapsible content -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <!-- Search form -->
                <form class="form-inline">
                     <i class="fa fa-search prefix"></i>
                     <input class="form-control mr-sm-2" type="text" placeholder="Pesquisar" aria-label="Search">
                </form>

            </div>
            <!-- Collapsible content -->

            <!-- Links -->
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
            
                <!-- Dropdown -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-user fa-lg"></i>
                    </a>
                    <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
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
                                <a class="side-link nav-link">
                                    <i class="fas fa-home fa-lg fa-fw"></i>
                                    <span class="mx-md-2">Início</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="stats.html" class="side-link nav-link">
                                    <i class="fas fa-signal fa-lg fa-fw"></i>
                                    <span class="mx-md-2">Estatísticas</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="personal-records.html" class="side-link nav-link">
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
                                <a class="side-link nav-link">
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

                <div class="col-md-10">
                    <h1 class="mt-4">Estatísticas</h1>
                    
                    <!--Grid row-->
                    <div class="row mt-4">
                    
                        <div class="col-6">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="card-title">Burpee</h3>
                                    <h6 class="card-subtitle mb-2 text-muted">Últimos 7 dias</h6>
                                    <canvas id="burpee-graph"></canvas>
                                </div>
                            </div>
                        </div>
                    
                        <div class="col-6">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="card-title">Air Squat</h3>
                                    <h6 class="card-subtitle mb-2 text-muted">Últimos 7 dias</h6>
                                    <canvas id="air-squat-graph"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Grid row-->

                    <!--Grid row-->
                    <div class="row mt-4">
                    
                        <div class="col-6">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="card-title">Front Squat</h3>
                                    <h6 class="card-subtitle mb-2 text-muted">Últimos 7 dias</h6>
                                    <canvas id="front-squat-graph"></canvas>
                                </div>
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="card-title">Back Squat</h3>
                                    <h6 class="card-subtitle mb-2 text-muted">Últimos 7 dias</h6>
                                    <canvas id="back-squat-graph"></canvas>
                                </div>
                            </div>
                        </div>
        
                    </div>
                    <!--Grid row-->

                    <!--Grid row-->
                    <div class="row mt-4">

                        <div class="col-6">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="card-title">Overhead Squat</h3>
                                    <h6 class="card-subtitle mb-2 text-muted">Últimos 7 dias</h6>
                                    <canvas id="overhead-squat-graph"></canvas>
                                </div>
                            </div>
                        </div>
                    
                        <div class="col-6">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="card-title">Shoulder Press</h3>
                                    <h6 class="card-subtitle mb-2 text-muted">Últimos 7 dias</h6>
                                    <canvas id="shoulder-press-graph"></canvas>
                                </div>
                            </div>
                        </div>
                    
                    </div>
                    <!--Grid row-->

                    <!--Grid row-->
                    <div class="row mt-4">
                    
                        <div class="col-6">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="card-title">Push Press</h3>
                                    <h6 class="card-subtitle mb-2 text-muted">Últimos 7 dias</h6>
                                    <canvas id="push-press-graph"></canvas>
                                </div>
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="card-title">Push Jerk</h3>
                                    <h6 class="card-subtitle mb-2 text-muted">Últimos 7 dias</h6>
                                    <canvas id="push-jerk-graph"></canvas>
                                </div>
                            </div>
                        </div>
                    
                    </div>
                    <!--Grid row-->

                    <!--Grid row-->
                    <div class="row mt-4">
                    
                        <div class="col-6">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="card-title">Deadlift</h3>
                                    <h6 class="card-subtitle mb-2 text-muted">Últimos 7 dias</h6>
                                    <canvas id="deadlift-graph"></canvas>
                                </div>
                            </div>
                        </div>
                    
                        <div class="col-6">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="card-title">Pull Up</h3>
                                    <h6 class="card-subtitle mb-2 text-muted">Últimos 7 dias</h6>
                                    <canvas id="pull-up-graph"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Grid row-->
                </div>
            </div>
        </div>
        <!--Main container-->

        <!--Main container-->
        <div class="container">     
        
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>

    <script>

        $.ajax({
            method: "POST",
            data: {'id': "<?php echo $id ?>"}, 
            url: "php/updatePR.php",
            success: function (data) {
                //console.log(data)
                data = JSON.parse(data)
                
                let cont = 0
                let labels = ["Burpee", "Air Squat", "Front Squat", "Back Squat", "Overhead Squat", "Shoulder Press", "Push Press", "Push Jerk", "Deadlift", "Pull Up"]
                let contexto = ['burpee-graph', 'air-squat-graph', 'front-squat-graph', 'back-squat-graph', 'overhead-squat-graph', 'shoulder-press-graph', 'push-press-graph', 'push-jerk-graph', 'deadlift-graph', 'pull-up-graph']

                for ([key, value] of Object.entries(data)) {
                    let valor = [], dia = [];

                    for ([key1, value1] of Object.entries(value)) {
                        dia.push(key1)
                        valor.push(value1)
                    }

                    console.log(dia)

                    let dados = {
                        labels: dia.reverse(),
                            datasets: [{
                                label: labels[cont] + " - Últimos 7 dias",
                                backgroundColor: 'rgba(229, 57, 53, 0.2)',
                                borderColor: 'rgb(229, 57, 53)',
                                borderWidth: 2,
                                data: valor.reverse(),
                            }]
                        }
                    
                    var ctx = document.getElementById(contexto[cont]).getContext('2d');
                    createChart (ctx, dados)
                    cont++
                }
            }
        })

        function createChart (ctx, dados) {
            var chart = new Chart(ctx, {
                // The type of chart we want to create
                type: 'bar',

                // The data for our dataset
                data: dados,

                // Configuration options go here
                options: {
                    responsive: true,
                    //maintainAspectRatio: false,
                }
            });
        }

        /*

        var chart = new Chart(ctx2, {
            // The type of chart we want to create
            type: 'bar',

            // The data for our dataset
            data: {
                labels: ["27/01/2018", "28/01/2018", "29/01/2018", "30/01/2018", "31/01/2018", "01/02/2018", "02/02/2018"],
                datasets: [{
                    label: "Clean (Power) - Últimos 7 dias",
                    backgroundColor: 'rgba(229, 57, 53, 0.2)',
                    borderColor: 'rgb(229, 57, 53)',
                    borderWidth: 2,
                    data: [4, 10, 5, 2, 20, 30, 45],
                }]
            },

            // Configuration options go here
            options: {
                responsive: true,
                //maintainAspectRatio: false,
            }
        });*/

    </script>
</body>

</html>
