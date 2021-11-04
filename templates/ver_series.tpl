{* página principal *}
{include file="head.tpl"}
{include file="header.tpl"}
{include file="sesion.tpl"}
{include file="volver.tpl"}
<a href="showSeries" class="">
    <button type="button" class="linea colorFondo">Lista de series</button>
</a>
{if isset($user) && $user->admin}
    <a href="modificar">
    <button type="button" class="linea colorFondo">Modificar</button>
    </a>
{/if}
<section>
    <h1 class="titulo">{$titulo}</h1>
    <ul class="row">
        {foreach from=$lista_series item=serie}
            <li class="card text-white bg-secondary">
                <img class="card altura" src="publico/images/img.png" alt="Imagen no disponible">
                <div class="card-body">
                    <h5 class="card-title">{$serie->nombre}</h5>
                    <a href="infoSerie/{$serie->id_serie}" class="btn btn-dark btn-lg">Ver informacion</a>
                </div>
            </li>
        {/foreach}
    </ul>
</section>


{include file="footer.tpl"}
