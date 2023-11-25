document.addEventListener("DOMContentLoaded", function() {
  // Obtén una referencia al botón "Enviar"
  var enviarBoton = document.getElementById("enviar");

  // Agrega un evento de clic al botón "Enviar"
  enviarBoton.addEventListener("click", function() {
      // Muestra una alerta cuando se hace clic en el botón
      alert("Su mensaje ha sido enviado");
  });
});

var enviarBoton = document.getElementById("enviar");

// Agrega un evento al pasar el mouse sobre el botón
enviarBoton.addEventListener("mouseenter", function() {
    // Cambia el color de fondo cuando el mouse se coloca sobre el botón
    enviarBoton.style.backgroundColor = "#FFA500"; // Cambia a un color naranja (puedes ajustarlo)
});

// Agrega un evento al quitar el mouse del botón
enviarBoton.addEventListener("mouseleave", function() {
    // Restaura el color de fondo original cuando el mouse se retira
    enviarBoton.style.backgroundColor = ""; // Restaura el color original
});