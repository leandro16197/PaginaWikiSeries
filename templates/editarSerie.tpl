<div class="box-editar" >
    <div id="box-editarSerie" class="hidden-windows">
        <label class="titulo-editar">EDITAR SERIE</label>       
        {* EDITAR SERIE *}
        <form action="editarSerie" method="POST" class='form-editarSerie' enctype="multipart/form-data" required>
            <label class="label-ingreso">Nombre:</label>
            <input type="text" name="nombreSerie" placeholder="Ingrese nombre"  class="input-editarSer" required>            
            <label class="label-ingreso">Sinopsis:</label>
            <input type="text" name="sinopsis" placeholder="Ingrese sinopsis"  class="input-editarSer" required>           
            <label class="label-ingreso">Actor principal:</label>
            <input type="text" name="actor" placeholder="Ingrese actor"  class="input-editarSer" required>          
            <label class="label-ingreso">Género:</label>
            {* OPCIONES *}
                <select class="input-editarSer" name="genero-editar" required>
                 <option class="opcionExistente"></option>
                {foreach from=$lista_generos item=gen}
                    <option value={$gen->id_genero}>{$gen->nombreGen}</option>
                {/foreach}
                </select>
            <div class="btns-guardar-cancelar">
                <button type="submit" class="btn-guardarSer" name="id-serie">Guardar</button>
                <button  type="button" class="btn-cancelarSer">Cancelar</button>
            </div>
        </form>
    </div>
</div>