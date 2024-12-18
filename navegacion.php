<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
    <style>
        body{
            background-color: #1E202D;
        }
    </style>
<body>
    <nav class="navbar navbar-dark fixed-top navbar-custom">  
        <div class="container-fluid">  
            <a class="navbar-brand" href="#"> <img src="images/logo2.jpg" class="logo-imagen" alt=""></a>
            <div class="boton-usuario" onclick="toggleInfo()" style="position: relative; cursor: pointer;">  
                <img src="images/icons8-usuario-50.png" alt="Usuario">  
            </div>  
            
            <div id="user-info" style="display: none; position: absolute; right: 100px; top: 80px; background: #1E202D; border: 1px solid #ccc; padding: 10px; z-index: 100;">  
                <?php if (isset($_SESSION['Usuario'])): ?>  
                    <p>Bienvenido, <?php echo $_SESSION['Usuario']; ?>!</p>  
                    <a href="/Pagina/login/cerrarSesion.php" class="btn btn-danger">Cerrar sesión</a>  
                <?php else: ?>  
                    <p><a href="login/index.php" class="btn btn-primary">Iniciar sesión</a></p>  
                <?php endif; ?>  
            </div>  
            <div class="menu-hamburguesa">  
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar"  
                    aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">  
                    <span class="navbar-toggler-icon"></span>  
                </button>  
            </div>  
            <div class="offcanvas offcanvas-start custom-offcanvas" tabindex="-1"  
                id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">  
            <div class="nav-ancho">
                <ul class="navbar-nav flex-column pe-3 mt-3">  
                    <li class="nav-item">  
                        <a class="nav-link nav-link-custom" aria-current="page" href="navegacion.php">  
                            <img src="images/icons8-casa-64.png" alt="Inicio" class="icono"> Inicio  
                        </a>  
                    </li>  
                    <li class="nav-item">  
                        <a class="nav-link nav-link-custom" href="productos.php">  
                            <img src="images/icons8-servicios-64.png" alt="Servicios" class="icono"> Servicios  
                        </a>  
                    </li>
                    
                    <li class="nav-item">  
                        <a class="nav-link nav-link-custom" href="turnado/turnado.php">  
                            <img src="images/icons8-agenda-50.png" alt="" class="icono"> Turnado 
                        </a>  
                    </li>
                </ul>  

                <form class="ancho-buscar" role="search">  
                    <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Buscar">  
                    <button class="btn btn-success" type="submit">Buscar</button>  
                </form>  
            </div>  
        </div>  
    </nav>
    <div class="header-content-containerr">
        <div class="header-content">
            <div class="header-txt">
                <section class="imagen-inicio">
                    <div class="fondo">
                        <img src="images/medicina-estetica-avanzada-2.jpg" alt="fondo">
                    </div>
                    <h1> CENTRO DE ESTÉTICA
                        <br>
                        EN MENDOZA
                    </h1>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Accusantium quis dolorem vero magni, itaque, autem nobis nulla alias, quod incidunt eligendi. 
                        Asperiores facilis aut adipisci eaque maxime voluptatem, quos facere.
                    </p>
                </section>
                <div class="buttons">
                    <a href="#" class="btn-1">informacion</a>
                    <a href="#" class="btn-1">contacto</a>
                </div>
            </div>
        </div>

        <div class="about-txt">
            <h2>TRATAMIENTOS</h2>
        </div>
        <section class="informartion containerr">
            <div class="informartion-1">
                <img src="images/cejas.jpeg" alt="">
            </div>
            <div class="informartion-1">
                <img src="images/masajes.jpeg" alt="">
            </div>
            <div class="informartion-1">
                <img src="images/peluqueria.jpeg" alt="">
            </div>
            <div class="informartion-1">
                <img src="images/pestañas.jpeg" alt="">
            </div>
        </section>


        <section class="about-containerr">

            <div class="about-txt">
                <h2>UBICACIÓN </h2>
                <div class="mapa">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1675.0235489542806!2d-68.78597646357179!3d-32.89692299963382!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x967e0f7caf8990e7%3A0x28616ff5bd0a8649!2sDi%20Due%20Estetica!5e0!3m2!1ses-419!2sar!4v1731589129896!5m2!1ses-419!2sar" 
                 style="width: 100%; height: 450px; border: 0;"
                 allowfullscreen loading="lazy"
                 referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <br>
            </div>

        </section>

        </section>

        <footer class="footer">
            <div class="footer-content containerr">
                <div class="link">
                    <h3>lorem</h3>
                    <ul>
                        <li> <a href="#">lorem</a></li>
                        <li> <a href="#">lorem</a></li>
                        <li> <a href="#">lorem</a></li>
                        <li> <a href="#">lorem</a></li>
                        <li> <a href="#">lorem</a></li>
                    </ul>
                </div>
                <div class="link">
                    <h3>lorem</h3>
                    <ul>
                        <li> <a href="#">lorem</a></li>
                        <li> <a href="#">lorem</a></li>
                        <li> <a href="#">lorem</a></li>
                        <li> <a href="#">lorem</a></li>
                        <li> <a href="#">lorem</a></li>
                    </ul>
                </div>
                <div class="link">
                    <h3>lorem</h3>
                    <ul>
                        <li> <a href="#">lorem</a></li>
                        <li> <a href="#">lorem</a></li>
                        <li> <a href="#">lorem</a></li>
                        <li> <a href="#">lorem</a></li>
                        <li> <a href="#">lorem</a></li>
                    </ul>
                </div>
                <div class="link">
                    <h3>lorem</h3>
                    <ul>
                        <li> <a href="#">lorem</a></li>
                        <li> <a href="#">lorem</a></li>
                        <li> <a href="#">lorem</a></li>
                        <li> <a href="#">lorem</a></li>
                        <li> <a href="#">lorem</a></li>
                    </ul>
                </div>

            </div>
        </footer>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script>  
        function disableLink(link) {  
            // Deshabilitar el enlace  
            link.onclick = function(event) {  
                event.preventDefault(); // Evitar la navegación  
            };  
        
            // Cambiar el estilo para indicar que el enlace ha sido deshabilitado  
            link.style.pointerEvents = 'none'; // Deshabilitar clics  
            link.style.color = 'gray'; // Cambiar el color del texto (opcional)  
            
            // Navegar a la URL del enlace después de deshabilitarlo  
            setTimeout(function() {  
                window.location.href = link.href; // Navegar a la URL original  
            }, 100); // Esperar un poco antes de navegar  
        }  
    </script>

    <script>  
        function toggleInfo() {  
            var userInfo = document.getElementById('user-info');  
            userInfo.style.display = (userInfo.style.display === 'none' || userInfo.style.display === '') ? 'block' : 'none';  
        }  

        // Cerrar el cuadro al hacer clic afuera  
        window.onclick = function(event) {  
            var userInfo = document.getElementById('user-info');  
            if (!event.target.closest('.boton-usuario') && userInfo.style.display === 'block') {  
                userInfo.style.display = 'none';  
            }  
        }  
    </script>  
    
        
</body>
</html>