<?php
    require_once "php/database.php";
    session_start();

    $id = $_POST['id'];

    if (isset($id)) {
        header('Location: index.php');
    }
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>SF - Cadastro</title>
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

<body class="bg-login">

    <!--Main layout-->
    <main>
        <div class="card mx-auto mt-5" style="width: 55%;">
            <div class="card-body">
                
                <form class="mt-2 mx-2" action="php/cadastro.php" method="POST">

                    <div class="text-center">
                        <a href="#">
                            <img class="figure-img rounded" src="img/logo/logo-full.png" height="50" alt="">
                        </a>
                    </div>
                    <p class="h5 text-left mt-4 mb-2">Cadastro</p>
                    <p class="h6 text-left mt-1 mb-4">Entre com seus dados</p>

                    <div id="alert-cadastro" class="mb-4 mt-0">
                        <!-- Exibe um alerta, caso seja necessário -->
                    </div>

                    <div class="md-form">
                        <i class="fa fa-user prefix grey-text"></i>
                        <input type="text" id="input-nome" class="form-control" name="nome">
                        <label for="input-nome">Nome</label>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="md-form">
                                <i class="fa fa-envelope prefix grey-text"></i>
                                <input type="text" id="input-email" class="form-control" name="email">
                                <label for="input-email">E-mail</label>
                            </div>
                        </div>
                        <div class="col">
                            <div class="md-form">
                                <i class="fa fa-lock prefix grey-text"></i>
                                <input type="password" id="input-senha" class="form-control" name="senha">
                                <label for="input-senha">Senha</label>
                            </div>
                        </div>
                    </div>
                    <div class="md-form">
                        <i class="fa fa-calendar prefix grey-text"></i>
                        <input type="date" id="input-datanasc" class="form-control" name="datanasc">
                    </div>
                    <div class="md-form">
                        <i class="fa fa-map-marker-alt prefix grey-text"></i>
                        <input type="text" id="input-pais" class="form-control" name="pais">
                        <label for="input-pais">País</label>
                    </div>
                    <div class="form-check text-center">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1"><a href="#" data-toggle="modal" data-target="#centralModalInfo">Aceito os termos e condições</a></label>
                    </div>
                    <div class="text-center my-4">
                        <button type="submit" class="btn #e53935 red darken-1" name="btn-cadastro">Cadastrar</button>
                    </div>
                </form>
            </div>
        </div>
    </main>
    <!--Main layout-->

    <!-- Central Modal Medium Info -->
    <div class="modal fade" id="centralModalInfo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-notify modal-info" role="document">
            <!--Content-->
            <div class="modal-content">
                <!--Header-->
                <div class="modal-header">
                    <p class="heading lead">Termos e Condições</p>
    
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" class="white-text">&times;</span>
                    </button>
                </div>
    
                <!--Body-->
                <div class="modal-body">
                    <div class="text-center">
                        <i class="fa fa-check fa-4x mb-3 animated rotateIn"></i>
                        <p>Por enquanto, não há termos ou condições.</p>
                    </div>
                </div>
    
                <!--Footer-->
                <div class="modal-footer justify-content-center">
                    <a type="button" class="btn btn-primary-modal"><i class="fas fa-check mr-3"></i>Aceito</a>
                    <a type="button" class="btn btn-outline-secondary-modal waves-effect" data-dismiss="modal"><i class="fas fa-times mr-3"></i>Não aceito</a>
                </div>
            </div>
            <!--/.Content-->
        </div>
    </div>
    <!-- Central Modal Medium Info-->

    <!--Footer-->
    <footer>    
    
    </footer>
    <!--Footer-->
    <!-- /Start your project here-->

    <?php
        if (isset($_POST['btn-cadastro'])) {
            $email = $_POST['email'];
            $senha = $_POST['senha'];
            $auth_success = false;
        
            if (empty($email) || empty($senha)) {
                echo "<script> document.querySelector('#alert-cadastro').innerHTML = '<div class=\"alert alert-danger alert-dismissible fade show my-3\" role=\"alert\"><strong>Ops!</strong> Você precisa preencher todos os campos.<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button></div>' </script>";
            } else {
                $sql = 'SELECT * FROM Usuario';
                $row = $conn->query($sql);
            
                foreach ($conn->query($sql) as $row) {
                    if ($row['email'] == $email && $senha == $row['senha']) {
                        $_SESSION['nome'] = $row['nome'];
                        $_SESSION['email'] = $row['email'];
                        $_SESSION['senha'] = $row['senha'];
                        $_SESSION['id'] = $row['id'];
            
                        $auth_success = true;
                        header('Location: index.php');
                        break;
                    }
                }
            
                if (!$auth_success) {
                    //echo "<script> alert('Usuário ou senha inválido(s)!'); window.location.href = '../login.html'</script>";
                    echo "<script> document.querySelector('#alert-login').innerHTML = '<div class=\"alert alert-danger alert-dismissible fade show my-3\" role=\"alert\"><strong>Ops!</strong> Usuário ou senha inválidos.<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button></div>' </script>";
                    //header('Location: ../login.html');
                }
            }
        }
    ?>

    <!-- SCRIPTS -->
    <!-- JQuery -->
    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
</body>

</html>