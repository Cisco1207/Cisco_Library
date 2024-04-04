<div class="container">
    <h2>Llena el siguiente formulario para enviarme un mensaje y te contactaré lo antes posible!</h2>
    <form action="database/connet.php" method="POST">
        <div class="form-group">
            <label for="nombre">Nombre *</label>
            <input name="nombre" type="text" class="form-control" id="nombre" placeholder="Su nombre" required maxlength="30">
            <small class="text-danger" id="nombreLimit">30 caracteres restantes</small>
        </div>

        <div class="form-group">
            <label for="correo">Correo electrónico *</label>
            <input name="correo" type="email" class="form-control" id="correo" placeholder="Su correo electrónico" required>
        </div>

        <div class="form-group">
            <label for="asunto">Asunto *</label>
            <input name="asunto" type="text" class="form-control" id="asunto" placeholder="Asunto del mensaje" required maxlength="50">
            <small class="text-danger" id="asuntoLimit">50 caracteres restantes</small>
        </div>

        <div class="form-group">
            <label for="comentario">Comentario *</label>
            <textarea name="comentario" class="form-control" id="comentario" rows="6" required maxlength="100"></textarea>
            <small class="text-danger">* Este campo es necesario llenarlo (Límite: <span id="comentarioLimit"></span> caracteres)</small>
        </div>

        <br>
        <div class="form-group">
            <input name="guardar" class="btn btn-primary" type="submit" value="Enviar">
        </div>
        <br>
    </form>
</div>



