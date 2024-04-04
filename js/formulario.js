document.getElementById('nombre').addEventListener('input', function () {
    var nombreLimit = 30; 
    var caracteresNombre = this.value.length;
    var caracteresRestantesNombre = nombreLimit - caracteresNombre;
    document.getElementById('nombreLimit').textContent = caracteresRestantesNombre + ' caracteres restantes';
});

// Mostrar límite de caracteres para el campo de comentario
document.getElementById('comentario').addEventListener('input', function () {
    var comentarioLimit = 100; 
    var caracteresComentario = this.value.length;
    var caracteresRestantesComentario = comentarioLimit - caracteresComentario;
    document.getElementById('comentarioLimit').textContent = caracteresRestantesComentario + ' caracteres restantes';
});