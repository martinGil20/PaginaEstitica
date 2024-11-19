
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script
      src="https://kit.fontawesome.com/869dc8f5ef.js"
      crossorigin="anonymous">
    </script>
    <title>login CSS</title>
    <link rel="stylesheet" href="/Pagina/login/login.css">
</head>
<body class="login-body">
    <div class="container" id="container">
        <div class="form-container sign-up-container">
          <form action="#">
            <h1>Crea tu Cuenta</h1>
            <div class="social-container">
              <a href="#" class="social>">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social>">
                <i class="fab fa-instagram" id="rojo"></i>
              </a>
              <a href="#" class="social>">
                <i class="fab fa-whatsapp" id="verde"></i>
              </a>
            </div>
            <input type="text" placeholder="Name" />
            <input type="email" placeholder="Email" />
            <input type="password" placeholder="Password" />
            <button id="lila">Registrar</button>
          </form>
        </div>
        <div class="form-container sign-in-container">
          <form id="LoginForm" action="IniciarSesion.php" method="POST">
            <h1>Iniciar Sesión</h1>
            <hr>
            <?php
              if(isset($_GET['error'])){
                  echo "<p style='background-color: rgb(190, 55, 55) ; color: black; padding: 10px; border-radius: 5px; width: 95%; font-size: 15px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); font-family: sans serif;'>" . $_GET['error'] . "</p>";
              }
            ?>
            <hr>

            <div class="social-container">
              <a href="#" class="social">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social">
                <i class="fab fa-instagram" id="rojo"></i>
              </a>
              <a href="#" class="social">
                <i class="fab fa-whatsapp" id="verde"></i>
              </a>
            </div>
            <br>
            <input type="text" name="Usuario" id="loginEmail" placeholder="Usuario" required/>
            <input type="password" name="Clave" id="loginPassword" placeholder="Contraseña" required />
            <a href="#">Olvidaste tu contraseña?</a>
            <button id="loginButton" type="submit">Iniciar sesión</button>
          </form>
        </div>
        <div class="overlay-container">
          <div class="overlay">
            <div class="overlay-panel overlay-left">
              <h1>¡Bienvenido!</h1>
              <p>
                Inicia sesión con tu cuenta
              </p>
              <button class="ghost" id="signIn">Inicia sesión</button>
            </div>
            <div class="overlay-panel overlay-right">
              <h1>Hola!!!</h1>
              <p>Crear tu cuenta</p>
              <button class="ghost" id="signUp">Registrar</button>
            </div>
          </div>
        </div>
      </div>
  
      <script src="app.js"></script>  
</body>
</html>
