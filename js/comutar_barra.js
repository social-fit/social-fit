contador = true;

function apertar_botao() {
    console.log(contador);
    if (contador == true) {
        ocultar_barra()
    }
    else {
        mostrar_barra()
    }
}

function ocultar_barra() {

    a = document.getElementById("pagina");
    a.style.opacity = 0;

    b = document.getElementById("barralateral");
    b.outerHTML = "";
    document.getElementById("pagina_real").className = "col-md-12 mx-auto my-4";

    a.style.opacity = 1;

    contador = false;

}
function mostrar_barra() {
    a = document.getElementById("pagina");
    a.style.opacity = 0;
    let barra_lateral = `
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

            `
    document.getElementById("pagina_real").className = "col-md-10 mx-auto my-4";
    a.innerHTML = barra_lateral + a.innerHTML;

    a.style.opacity = 1;

    contador = true;

}