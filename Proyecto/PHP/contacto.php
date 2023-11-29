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
    
    <header>
        <nav>
            <ul id="log_left">
                <li> <div class="logo"> <img src="../Imágenes/logo.png" alt=""> </div> </li>
            </ul>
            <ul id="log_right">
                <li><a href="../Index.html">Inicio</a></li>
                <li><a href="../HTML/Productos.html">Productos</a></li>
                <li class="dropdown">
                    <a href="#">¿Quienes Somos?</a>
                    <div class="dropdown-content">
                        <a href="../HTML/Historia.html">Historia</a> 
                        <a href="../HTML/Equipo.html">Equipo</a> 
                    </div>
                </li>                
                <li><a href="contacto.php">Contacto</a></li>
                <li><a href="../HTML/Login.html">Login</a></li>
            </ul>
            <ul class="margenfalso"> <li> <div> </div></li></ul>
        </nav>
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