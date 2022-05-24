document.querySelector('.botonmenu').addEventListener('click',()=>{
    document.querySelector('.menu').classList.toggle('show');

});

ScrollReveal().reveal('.paginaprincipal', {delay: 400});
ScrollReveal().reveal('.fondosection' ,  {delay: 400});
ScrollReveal().reveal('.publicacion1', {delay: 400}); 
ScrollReveal().reveal('.publicacion2', {delay: 400});
ScrollReveal().reveal('.publicacion3', {delay: 400});

ScrollReveal().reveal('.social' ,  {delay: 400});
ScrollReveal().reveal('.links' ,  {delay: 400});

let miBoton = document.querySelector('button');
let miTitulo = document.querySelector( 'h1');
let nombreDelUsuario = document.querySelector( 'h2');

function estableceNombreUsuario() {
    let miNombre = prompt('Por favor, ingresa tu nombre.');
    localStorage.setItem('nombre', miNombre);
    miTitulo.textContent = 'Welcome, ' + miNombre + "!";
    nombreDelUsuario.textContent = "User: " + miNombre;
}

if (!localStorage.getItem('nombre')) {
    estableceNombreUsuario();
}
else {
    let nombreAlmacenado = localStorage.getItem('nombre');
    miTitulo.textContent = 'Welcome, ' + nombreAlmacenado + "!";
    nombreDelUsuario.textContent = nombreAlmacenado;
}

miBoton.onclick = function() {
    estableceNombreUsuario();
}


// anexo de organizador de tareas

