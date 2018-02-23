<?php
    require_once "php/database.php"; //Busca no banco de dados
    session_start(); //Inicializa a sessão

    $id = $_SESSION['id']; //Identificador
    $nome = $_SESSION['nome']; //Nome do Usuário

    if (!isset($id)) { //Verifica se a autenticação foi realizada.
        header('Location: login.php'); //Caso contrário, é feito o redirecionamento para a página de login
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

    <!-- Cabeçalho-->
    <header>

        <!--Barra superior-->
        <nav class="navbar navbar-expand-lg navbar-dark #e53935 red darken-1 scrolling-navbar">
            <!-- Botão para esconder a barra lateral -->
            <ul class="navbar-nav nav-flex-icons">
                <li class="nav-item">
                    <a onclick="apertar_botao()"  class="nav-link">
                        <i class="fas fa-bars fa-lg"></i>
                    </a>
                </li>
            </ul>

            <!-- Logo -->
            <a class="navbar-brand" href="#">
                <img src="img/logo/logo-full-transparent.png" height="30" alt="">
            </a>

            <!-- Responsividade da barra superior -->
            <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="fas fa-search"></span>
            </button>

            <!-- Parte a ser escondida com a responsividade -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <!-- Barra de pesquisa -->
                <form class="form-inline mx-5" style="width: 100%;">
                    <i class="fas fa-search prefix"></i>
                    <input class="form-control" style="width: 95%;" type="text" placeholder="Pesquisar" aria-label="Search">
                </form>

            </div>
            <!-- Parte a ser escondida com a responsividade -->

            <!-- Ícones -->
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
            <!-- Ícones -->

        </nav>
        <!--/.Barra Superior-->

    </header>
    

    <!--Corpo do documento-->
    <main>

        <!--Barra Lateral e Corpo do Documento-->
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
                <div class="col-md-10" id="pagina_real"> <!-- Corpo do documento -->
                    <div class="row mt-4 mx-2">
                        <div class="col-md-4">
                            
                            <div class="card">
                            
                                
                                <img class="img-fluid" src="images/img01.jpeg" alt="Card image cap">
                            
                                
                                <div class="card-body">
                                    
                                    <h4 class="card-title">Card title</h4>
                                    
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <a href="#" class="btn btn-primary">Button</a>
                                </div>
                            
                            </div>
                            
                        </div>
                        <div class="col-md-4">
                            
                            <div class="card">
                            
                                
                                <img class="img-fluid" src="images/img02.jpeg" alt="Card image cap">
                            
                                
                                <div class="card-body">
                                    
                                    <h4 class="card-title">Card title</h4>
                                    
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <a href="#" class="btn btn-primary">Button</a>
                                </div>
                            
                            </div>
                            
                        </div>
                        <div class="col-md-4">
                            
                            <div class="card">
                            
                                
                                <img class="img-fluid" src="images/img03.jpeg" alt="Card image cap">
                            
                                
                                <div class="card-body">
                                    
                                    <h4 class="card-title">Card title</h4>
                                    
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <a href="#" class="btn btn-primary">Button</a>
                                </div>
                            
                            </div>
                            
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
        document.querySelector("#stats").href="stats.php?id="+<?php echo $id ?> //Alterando o link das estatísticas para usar o id do usuário em questão
    </script>
</body>

</html>