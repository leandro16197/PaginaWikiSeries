{* página principal *}
{include file="head.tpl"}
{include file="header.tpl"}
<a href="showSeries" class="nav-link">
    <button type="button" class="btn btn-danger">Lista de series</button>
</a>
<a href="modificar" class="nav-link">
    <button type="button" class="btn btn-danger">Modificar</button>
</a>

<section>
    <h1 class="titulo">Series Destacadas</h1>
    <ul class="row">
        {foreach from=$lista_series item=serie}
            <li class="card text-white bg-info mb-3" class="margenImgIndex">
                <img class="card altura" src="public/images/img-noDisponible.png" alt="Imagen no disponible">
                <div class="card-body">
                    <h5 class="card-title">{$serie->nombre}</h5>
                    <a href="infoSerie/{$serie->id_serie}" class="btn btn-primary">Ver informacion</a>
                </div>
            </li>
        {/foreach}
    </ul>
</section>

{include file="footer.tpl"}
