{* página principal *}
{include file="head.tpl"}
{include file="header.tpl"}
<a href="showSeries" class="nav-link">
    <button type="button" class="btn btn-danger">Lista de series</button>
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

<div class="box-nuevaserie">
            <label class="titulo-agregar">AGREGAR SERIE</label>
            {* INSERTAR SERIE *}
            <form action="addSerie" method="POST" class='form-nuevaserie' enctype="multipart/form-data" required >
                <input type="text" name="nombre" placeholder="Nombre" required>
                <textarea name="sinopsis" placeholder="Sinopsis" required></textarea>
                <input type="text" name="actor" placeholder="Actor" required>
                {* OPCIONES *}
                <select class="opciones" name="genero" required>
                 <option value="" disable>Seleccione una opción</option>
                {foreach from=$lista_generos item=gen}
                    <option value={$gen->id_genero}>{$gen->nombreGen}</option>
                {/foreach}
                </select>
                <input type="submit" value="Insertar" class="btn-ingreso">
            </form>
</div>
{include file="footer.tpl"}
