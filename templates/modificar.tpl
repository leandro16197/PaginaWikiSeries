{include file="head.tpl"}   
{* Lista series *}
{include file="volver.tpl"}
{include file="sesion.tpl"}
        <a  href="usuarios" class="nav-link">
        <button class="btn btn-danger">Lista de usuarios</button>
        </a>

        <table class="tableListaSerie">
            <thead>
                <tr>
                    <th colspan="7">Listado de Series</th>
                </tr>
                <tr class="fila-indicador">
                    <th>Serie</th>
                    <th>Sinopsis</th>
                    <th>Actor</th>
                    <th>genero</th>
                    <th>Imagen</th>
                    <th>Eliminar</th>
                    <th>Editar</th>

                </tr>
            </thead>
            <tbody>
            {foreach from=$lista_series item=serie}
                <tr id={$serie->id_serie}>
                    <td>{$serie->nombre}</td>
                    <td>{$serie->sinopsis}</td>
                    <td>{$serie->actor_principal}</td>
                    <td>{$serie->nombreGen}</td>
                    <td><img src={$serie->img} alt={$serie->nombre} class="imagen-tabla">
                     <td>
                        <a href="eliminarSerie/{$serie->id_serie}">
                            <button type="button" class="btn-info btn  ">Borrar</button>
                        </a>
                    </td>
                    <td>
                        <a>
                            <button type="button" class="btn-info btn btnEditarSer-js" id={$serie->id_serie}>Editar</button>
                        </a>
                    </td>
            {/foreach}
            </tbody>
        </table>
    <div class="table-admin">
        <table class="table-admin">
            <thead>
                <tr>
                    <th colspan="3">Listado de Categorias</th>
                </tr>
            </thead>
            <tbody>
            {foreach from=$lista_generos item=gen}
                <tr id={$gen->id_genero}>
                    <td class="nombre-gen" >{$gen->nombreGen}</td>
                    <td>
                    <a>
                        <button type="button" class="btn btn-info btnEditar-js" id={$gen->id_genero}>Editar</button>
                    </a>
                    </td>
                    <td>
                        <a href="borrarGenero/{$gen->id_genero}">
                            <button type="button" class="btn btn-info">Borrar</button>
                        </a>
                    </td>
                </tr>
            {/foreach}
            {include file="editarSerie.tpl"}
            {include file="editarGenero.tpl"}
                <tr> {* INSERTAR NUEVO GENERO *}
                    <td colspan="3">
                        <form action="agregarGenero" method="POST">
                            <input type="text" name="nombre-gen" required>
                            <input type="submit" value="Insertar" class="btn-ingreso btn-info" >
                        </form>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
          <div class="box-nuevaserie">
            <label class="titulo-agregar">AGREGAR SERIE</label>
            {* INSERTAR SERIE *}
            <form action="addSerie" method="POST" class='form-nuevaserie' enctype="multipart/form-data" required >
                <input type="text" name="nombre" placeholder="Nombre" required>
                <textarea name="sinopsis" placeholder="Sinopsis" required></textarea>
                <input type="text" name="actor" placeholder="Actor" required>
                <input type="file" name="img" placeholder="Ingrese imagen">
                {* OPCIONES *}
                <select class="opciones" name="genero" required>
                 <option value="" disable>Seleccione una opción</option>
                {foreach from=$lista_generos item=gen}
                    <option value={$gen->id_genero}>{$gen->nombreGen}</option>
                {/foreach}
                </select>
                <input type="submit" value="Insertar" class="btn btn-ingreso">
        </form>
</div>

<script src="publico/js/editarSerie.js"></script>
<script src="publico/js/editarGenero.js"></script>
{include file="footer.tpl"}