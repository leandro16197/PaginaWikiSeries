{include file="head.tpl"}
{include file="volver.tpl"}
{* lista series ordenadas por categoria y luego por nombre de serie *}
<h1 class="titulo">Lista De Series</h1>
        <table class="tableListaSerie" >
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
                    <img src="public/images/img-noDisponible.png" alt="Imagen no disponible" class="imagen-tabla">
                </td>
            </tr>
        {/foreach}
        </tbody>
    </table>
</div>
{include file="footer.tpl"}