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
    <title>Página Inicial</title>
    
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
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="fas fa-search"></span>
            </button>

            
            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                
                <form class="form-inline mx-5" style="width: 100%;">
                    <i class="fas fa-search prefix"></i>
                    <input class="form-control" style="width: 95%;" type="text" placeholder="Pesquisar" aria-label="Search">
                </form>

            </div>
            

            
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

                
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-user fa-lg"></i>
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

                 
                <div class="col-md-10 mx-auto my-4" id="pagina_real" style="width: 85%">
                    <div class="card">
                        <div class="card-board">
                            <h1 class="card-title mx-4 my-4">Lista de Amigos</h1>
                        </div>

                        <div class="row mt-4 mx-2">
                            <div class="col-md-12">
                                <!--Lista de amigos-->
                                <div class="card">
                                
                                    
                                    <img style="max-height: 200px;" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20%282%29.jpg" alt="Card image cap">
                                
                                    
                                    <div class="card-body text-center">
                                        
                                        <h4 class="card-title" id="nome"></h4>
                                        
                                        <p class="card-text" id="qtdeamigos"></p>

                                    </div>
                                
                                </div>
                                
                            </div>
                        </div>

                        <div id="lista_amigos" class="container-fluid">
                        </div>
                    </div>   
                    
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
        $.ajax({
            method: "POST",
            data: {'id': "<?php echo $id ?>"},
            url: "php/loadAmigos.php",
            success: function(data) {
                data = JSON.parse(data) 
                console.log(data);
                document.querySelector('#nome').innerHTML = `<h4 class="card-title" id="nome"><strong>`+"<?php echo $nome ?>"+`</strong></h4>`;
                let tamanho = Object.keys(data).length;
                console.log(tamanho);
                let linhas = (tamanho/3)|0 + 1;
                console.log(linhas);
                document.querySelector("#qtdeamigos").innerHTML=tamanho+` contatos`;
                let count = 0;
                let count_linhas = 0;
                let a = document.querySelector('#lista_amigos');

                for([key,value] of Object.entries(data)){
                    if((count % 3)==0){ //Permite a inserção de até 3 amigos por linha
                        count_linhas = count_linhas + 1;
                        a.innerHTML = a.innerHTML + `<div id="linha_`+count_linhas+`" class="row my-4 mx-2">
                        </div>
                        `;
                    }
                    let b = document.querySelector('#linha_'+count_linhas); 
                    b.innerHTML = b.innerHTML + `
                    <div class="col-md-4">
                        <!--Card-->
                        <div class="card">
                            <!--Card content-->
                            <div class="card-body">
                                <!--Title-->                                          
                                <h4 class="card-title">`+value+`</h4>
                                <!--Text-->
        
                                <a id="amigo_`+count+`" class="btn btn-danger">Ver Estatísticas</a>
                            </div>
                        
                        </div>
                        <!--/.Card-->
                    </div>
                    `;
                    document.querySelector('#amigo_'+count).href="stats.php?id="+key;
                    count = count + 1;
                }

            }
        })
    </script>
    <script>
        document.querySelector("#stats").href="stats.php?id="+<?php echo $id ?>
    </script>
</body>

</html>
