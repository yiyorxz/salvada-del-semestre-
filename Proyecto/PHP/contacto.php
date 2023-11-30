<!DOCTYPE html>
<html lang="es">
<head>
    <link rel="shortcut icon" href="../Imágenes/logo.png">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../CSS/contacto.css">
    <title>Contacto</title>
</head>
<body>
<body>
    <header>
        <nav class="navbar bg-body-tertiary navbar navbar-expand-lg  rounded "  aria-label="Thirteenth navbar example"">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">
                <img src="../Proyecto/Imágenes/logo.png" alt="Logo" width="30" height="30" class="d-inline-block align-text-top">
                Sodex Music
              </a>
              
                <div class="container-fluid">
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample11" aria-controls="navbarsExample11" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
          
                  <div class="collapse navbar-collapse d-lg-flex" id="navbarsExample11">
                    <a class="navbar-brand col-lg-3 me-0" href="#"></a>
                    <ul class="navbar-nav col-lg-6 justify-content-lg-center">
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="Index.html">Inicio</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="../Proyecto/HTML/Productos.html">Productos</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="../Proyecto/PHP/contacto.php">Contacto</a>
                         </li>
                      
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">Acerca de Nosotros</a>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="../Proyecto/HTML/Nosotros.html">¿Quienes Somos?</a></li>
                          <li><a class="dropdown-item" href="../Proyecto/HTML/Equipo.html">Equipo</a></li>
                          <li><a class="dropdown-item" href="../Proyecto/HTML/Historia.html">Historia</a></li>
                        </ul>
                      </li>
                    </ul>
                    <div class="d-lg-flex col-lg-3 justify-content-lg-end">
                      <button class="btn btn-primary">Button</button>
                    </div>
                  </div>
                </div>
              </nav>
            </div>

    </header>
    <form method="POST"> 
        <div class="contact_form">
            <div class="formulario">
                <h1 class="h1">Contacto</h1>
                <h3>Escríbenos y en breve te responderemos</h3>
                    
                    <p>
                        <label for="nombre" class="colocar_nombre">Nombre
                            <span class="obligatorio">*</span>
                        </label>
                        <input type="text" name="nombre" id="nombre" required placeholder="Escribe tu nombre">
                    </p>

                    <p>
                        <label for="email" class="colocar_email">Email
                            <span class="obligatorio">*</span>
                        </label>
                        <input type="email" name="email" id="email" required placeholder="Escribe tu Email">
                    </p>
                    <p>
                        <label for="telefono" class="colocar_telefono">Teléfono</label>
                        <input type="tel" name="telefono" id="telefono" placeholder="Escribe tu teléfono">
                    </p>

                    <p>
                        <label for="mensaje" class="colocar_mensaje">Mensaje
                            <span class="obligatorio">*</span>
                        </label>
                        <textarea name="mensaje" class="texto_mensaje" id="mensaje" required placeholder="Deja aquí tu comentario..."></textarea>
                    </p>

                    <button type="submit" name="contacto" id="enviar" style="color: white;">Enviar</button>
                    <p class="aviso">
                        <span class="obligatorio"> *</span> Los campos son obligatorios.
                    </p>
            </div>
        </div>
    </form>    
    <?php
    include("contact.php");
    ?>
    <script src="../JS/contacto.js"> </script>
    <footer>
        <h6>Todos los derechos reservados a SDXM.ltda</h6>

    </footer>
</body>
</html>