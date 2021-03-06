<?php
    require_once "php/database.php";
    session_start();

    $id = $_SESSION['id']; //ID do Usuário logado
    $id_req = $_GET['id']; //ID requisitado

    if ($id == $id_req){ //Verifica se o ID requisitado é o do usuário
        if (!isset($id)) {
            header('Location: login.php');
        }
    }
    else{ //Senão, verifica que o ID requisitado corresponde a um amigo do usuário
        $sql = "SELECT self_id, friend_id FROM Relacionamentos WHERE self_id = '$id' AND friend_id = '$id_req'";
        $row = $conn->query($sql);
        $contador = 0;
        foreach ($conn->query($sql) as $row) {
            $contador = $contador + 1;
        }
        if($contador == 0){ //Se não for, redireciona para a página de login.
            header('Location: login.php');
        }
    }

    
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Estatísticas</title>
    
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
                        <i class="fas fa-bars fa-lg"></i>
                    </a>
                </li>
            </ul>

            
            <a class="navbar-brand" href="#">
                <img src="img/logo/logo-full-transparent.png" height="30" alt="">
            </a>

            
            <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation"><span class="fa fa-search"></span></button>

            
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
                    <h1 class="mt-4">Estatísticas</h1>
                    
                    <!--Mostra os últimos 7 dias dos exercícios-->
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
                    
                </div>
            </div>
        </div>
        

        
        <div class="container">     
        
        </div>
        

    </main>
    

    
    <footer>

    </footer>
    
    

    
    
    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    
    <script type="text/javascript" src="js/popper.min.js"></script>
    
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>

    <script src="js/comutar_barra.js"></script>

    <script>

        $.ajax({
            method: "POST",
            data: {'id': "<?php echo $id_req ?>"}, 
            url: "php/updatePR.php",
            success: function (data) {
                
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
                
                type: 'bar',

                
                data: dados,

                
                options: {
                    responsive: true,
                    
                }
            });
        }

        

    </script>
    <script>
        document.querySelector("#stats").href="stats.php?id="+<?php echo $id ?>
    </script>
</body>

</html>
