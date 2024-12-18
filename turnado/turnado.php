<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="turnado.css?v=<?= time(); ?>">
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
        <a class="navbar-brand" href="#"> <img src="../images/logo2.jpg" class="logo-imagen" alt=""></a>
            <div class="boton-usuario" onclick="toggleInfo()" style="position: relative; cursor: pointer;">  
                <img src="../images/icons8-usuario-50.png" alt="Usuario">  
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
                        <a class="nav-link nav-link-custom" aria-current="page" href="../navegacion.html">  
                            <img src="../images/icons8-casa-64.png" alt="Inicio" class="icono"> Inicio  
                        </a>  
                    </li>  
                    <li class="nav-item">  
                        <a class="nav-link nav-link-custom" href="../productos.html">  
                            <img src="../images/icons8-servicios-64.png" alt="Servicios" class="icono"> Servicios  
                        </a>  
                    </li>
                    
                    <li class="nav-item">  
                        <a class="nav-link nav-link-custom" href="turnado/turnado.html">  
                            <img src="../images/icons8-agenda-50.png" alt="Turnado" class="icono"> Turnado 
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

    
        <main class="services containerr">

            <div class="services-content">

                <div class="services-1">
                    <img src="" alt="">
                    <h3>GIL, MARTIN</h3>
                    <h1>Programador</h1>
                    <h2>Lunes</h2>
                    <span class="hora">8:00 a 19:30</span>
                    <hr>
                    <button class="btn btn-success btn-large" type="submit">Reservar Turno</button> 
                </div>

                <div class="services-1">
                    <img src="" alt="">
                    <h3>GIL, MARTIN</h3>
                    <h1>Programador</h1>
                    <h2>Martes</h2>
                    <span class="hora">8:00 a 19:30</span>
                    <hr>
                    <button class="btn btn-success btn-large" type="submit">Reservar Turno</button> 
                </div>

                <div class="services-1">
                    <img src="" alt="">
                    <h3>GIL, MARTIN</h3>
                    <h1>Programador</h1>
                    <h2>Miercoles</h2>
                    <span class="hora">8:00 a 19:30</span>
                    <hr>
                    <button class="btn btn-success btn-large" type="submit">Reservar Turno</button> 
                </div>

                <div class="services-1">
                    <img src="" alt="">
                    <h3>GIL, MARTIN</h3>
                    <h1>Programador</h1>
                    <h2>Jueves</h2>
                    <span class="hora">8:00 a 19:30</span>
                    <hr>
                    <button class="btn btn-success btn-large" type="submit">Reservar Turno</button> 
                </div>

                <div class="services-1">
                    <img src="" alt="">
                    <h3>GIL, MARTIN</h3>
                    <h1>Programador</h1>
                    <h2>Viernes</h2>
                    <span class="hora">8:00 a 19:30</span>
                    <hr>
                    <button class="btn btn-success btn-large" type="submit">Reservar Turno</button> 
                </div>

                <div class="services-1">
                    <img src="" alt="">
                    <h3>GIL, MARTIN</h3>
                    <h1>Programador</h1>
                    <h2>Lunes</h2>
                    <span class="hora">8:00 a 19:30</span>
                    <hr>
                    <button class="btn btn-success btn-large" type="submit">Reservar Turno</button> 
                </div>

            </div>

        </main>


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
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

    <script>
        // Selecciona todos los enlaces del menú
        const navLinks = document.querySelectorAll('.nav-link');

        navLinks.forEach(link => {
            link.addEventListener('click', function () {
                // Elimina la clase 'active' de todos los enlaces
                navLinks.forEach(nav => nav.classList.remove('active'));
                // Agrega la clase 'active' al enlace que fue clicado
                this.classList.add('active');
            });
        });
    </script>
</body>
</html>