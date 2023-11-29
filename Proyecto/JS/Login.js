// Asigna un evento de click al elemento con el id "btn__registrarse" para ejecutar la función "register"
document.getElementById("btn__registrarse").addEventListener("click", register);

// Asigna un evento de click al elemento con el id "btn__iniciar-sesion" para ejecutar la función "login"
document.getElementById("btn__iniciar-sesion").addEventListener("click", login);

// Asigna un evento de redimensionamiento de ventana para ejecutar la función "anchoPag"
window.addEventListener("resize", anchoPag);

// Selecciona elementos del DOM usando clases CSS y los asigna a variables
var form_login = document.querySelector(".formulario__login");
var form_register = document.querySelector(".formulario__register");
var contenedor_login_register = document.querySelector(".contenedor__login-register");
var caja_trasera_login = document.querySelector(".caja__trasera-login");
var caja_trasera_register = document.querySelector(".caja__trasera-register");

// Función que se ejecuta cuando cambia el tamaño de la ventana
function anchoPag(){
    if(window.innerWidth > 850){
        // Si la ventana es ancha (>850 píxeles), muestra las cajas traseras de login y registro
        caja_trasera_login.style.display="block";
        caja_trasera_register.style.display = "block";
    }else{
        // Si la ventana no es ancha, configura la visualización de elementos
        caja_trasera_register.style.display = "block";
        caja_trasera_register.style.opacity = "1";
        caja_trasera_login.style.display = "none";
        form_login.style.display = "block";
        form_register.style.display = "none";
        contenedor_login_register.style.left = "0px";
    }
}

// Llama a la funcion "anchoPag" al cargar la pagina para configurar la visualización inicial
anchoPag();

// Función que se ejecuta cuando se hace click en el boton de registro
function register(){
    if(window.innerWidth > 850){
        // Si la ventana es ancha, muestra el formulario de registro y ajusta la posición de contenedor
        form_register.style.display = "block";
        contenedor_login_register.style.left = "410px"
        form_login.style.display = "none";
        caja_trasera_register.style.opacity = "0";
        caja_trasera_login.style.opacity = "1";
    }else{
        // Si la ventana no es ancha, configura la visualización de elementos
        form_register.style.display = "block";
        contenedor_login_register.style.left = "0px";
        form_login.style.display = "none";
        caja_trasera_register.style.display = "none";
        caja_trasera_login.style.display = "block";
        caja_trasera_login.style.opacity = "1";
    }
}

// Funcion que se ejecuta cuando se hace click en el boton de inicio de sesion
function login(){
    if(window.innerWidth > 850){
        // Si la ventana es ancha, muestra el formulario de inicio de sesion y ajusta la posición de contenedor
        form_register.style.display = "none";
        contenedor_login_register.style.left = "10px"
        form_login.style.display = "block";
        caja_trasera_register.style.opacity = "1";
        caja_trasera_login.style.opacity = "0";
    }else{
        // Si la ventana no es ancha, configura la visualizacion de elementos
        form_register.style.display = "none";
        contenedor_login_register.style.left = "0px"
        form_login.style.display = "block";
        caja_trasera_register.style.display = "block";
        caja_trasera_login.style.display = "none";
    }
}
