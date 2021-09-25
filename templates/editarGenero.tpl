<div class="box-editar" >
    <div id="box-editarGen" class="hidden-windows">
    
        <label class="titulo-editar">EDITAR GÉNERO</label>
        
        {* EDITAR GENERO *}
        <form action="editarGenero" method="POST" class='form-editarGen' required>
     
            <input type="text" name="genero" placeholder="Ingrese género"  class="input-editar" required>
            <div class="btns-guardar-cancelar">
                <button type="submit" class="btn-guardar" name="id-genero">Guardar</button>
            </form>
                <button  type="button" class="btn-cancelar">Cancelar</button>
            </div>
    </div>
</div>