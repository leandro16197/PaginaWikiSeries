<form id="form-comentario">
{*llamar a router comun *}
            <div class="box-nuevaserie">
                <label class="titulo-agregar">Ingrese su comentario</label>
                <input type="text" name="usuario" value="{$user->id_usuario}" class="hidden-windows">
                 <input type="text" name="serie" value="{$user->id_serie}" class="hidden-windows">
                <textarea type="text" name="comentario" class="input-comentario" required placeholder="Comentario"></textarea>
                <input type="number" name="puntaje" class="input-puntaje" min="1" max="5" required placeholder="Puntaje">
                <input type="submit" value="Insertar" class="btn-primary">
            </div>
        </form>
    </div>
