{include file="head.tpl"}
{include file="volver.tpl"}
{* lista series ordenadas por categoria y luego por nombre de serie *}
<h1 class="titulo">Lista de Series</h1>
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
                    {if $gen->img != null}
                    <img src={$gen->img} alt={$gen->nombre} class="imagen-tabla">
                    {else}
                    <img src="publico/images/img.png" alt="Imagen no disponible" class="imagen-tabla">
                    {/if}
                </td>
            </tr>
        {/foreach}
        </tbody>
    </table>
    </div>
{include file="footer.tpl"}