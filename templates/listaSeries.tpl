{include file="head.tpl"}
{include file="volver.tpl"}
{* lista series ordenadas por categoria y luego por nombre de serie *}
<h1 class="titulo">Lista</h1>
    <div class="table-admin" >
        <table >
        <thead>
            <tr>
                <th>Genero</th>
                <th>Titulo</th>
                <th>Sinopsis</th>
                <th>Actor</th>
                <th>Portada</th>
            </tr>
        </thead>
        <tbody>
        {foreach from=$lista item=gen}
            <tr>
                <td>{$gen->nombreGen}</td>
                <td>{$gen->nombre}</td>
                <td>{$gen->sinopsis}</td>
                <td>{$gen->actor_principal}</td>
                <td>
                    <img src="public/images/img.png" alt="Imagen no disponible" class="imagen-tabla">
                </td>
            </tr>
        {/foreach}
        </tbody>
    </table>
    </div>
{include file="footer.tpl"}