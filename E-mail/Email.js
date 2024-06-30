// Selecciona el formulario por su ID y añade un "event listener" que se ejecutará cuando el formulario se envíe
document.getElementById("formulario-contacto").addEventListener("submit", function(event){
    
    // Evita que el formulario se envíe inmediatamente para que podamos mostrar el mensaje de agradecimiento
    event.preventDefault();
    
    // Selecciona el elemento con el ID "mensaje-enviado" y cambia su estilo de display a "block" para que sea visible
    document.getElementById("mensaje-enviado").style.display = "block";
    
    // Establece un temporizador que esperará 3 segundos (3000 milisegundos) antes de ejecutar la función que redirige al usuario
    setTimeout(function(){
        // Redirige al usuario a la página de inicio especificada
        window.location.href = "/indexGTP.html";
    }, 3000); // 3000 milisegundos = 3 segundos
});
