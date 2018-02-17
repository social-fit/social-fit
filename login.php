<?php
    require_once "php/database.php";
    session_start();

    if (isset($_SESSION['id'])) {
        header('Location: index.php');
    }
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>SF - Login</title>
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
    
    
    
        <div class="card mx-auto my-5" style="width: 35%;">
    
            <div class="card-body">
                <form class="mt-2 mx-2" action="" method="POST">
                    <div class="text-center">
                        <a href="#">
                            <img class="figure-img rounded logo" src="img/logo/logo-full.png" height="30" alt="">
                        </a>
                    </div>
                    <p class="h5 text-left mt-4 mb-2">Login</p>
                    <p class="h6 text-left mt-1 mb-4">Acesso ao SocialFit</p>
    
                    <div id="alert-login" class="mb-4 mt-0">
                        <!-- Exibe um alerta, caso seja necessário -->
                    </div>

                    <div class="md-form">
                        <i class="fa fa-envelope prefix grey-text"></i>
                        <input type="text" name="email" id="defaultForm-email" class="form-control">
                        <label for="defaultForm-email">E-mail</label>
                    </div>
    
                    <div class="md-form">
                        <i class="fa fa-lock prefix grey-text"></i>
                        <input type="password" name="senha" id="defaultForm-pass" class="form-control">
                        <label for="defaultForm-pass">Senha</label>
                    </div>
    
                    <div class="text-center my-4">
                        <a href="#">Esqueceu o e-mail ou a senha?</a>
                    </div>
    
    
                    <div class="text-center">
                        <button type="submit" class="btn #e53935 red darken-1" name="btn-entrar">Entrar</button>
                        <a href="cadastro.php" role="button" class="btn #e53935 red darken-1">Cadastrar</a>
                    </div>
                </form>
            </div>
        </div>
    </main>
    <!--Main layout-->

    <!--Footer-->
    <footer>

    </footer>
    <!--Footer-->
    <!-- /Start your project here-->

    <?php
        if (isset($_POST['btn-entrar'])) {
            $email = $_POST['email'];
            $senha = $_POST['senha'];
            $auth_success = false;
        
            if (empty($email) || empty($senha)) {
                echo "<script> document.querySelector('#alert-login').innerHTML = '<div class=\"alert alert-danger alert-dismissible fade show my-3\" role=\"alert\"><strong>Ops!</strong> Você precisa preencher todos os campos.<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button></div>' </script>";
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