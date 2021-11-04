{include file="head.tpl" }
 {* INFORMACION DE UN ITEM *}
 {include file ="volver.tpl"}
{include file="sesion.tpl"}
<input type="text" name="serie" value="{$serie->id_serie}" class="hidden-windows">
<div>
    <h1 class="titulo tit-info">{$serie->nombre}</h1>
    <div>
      <img class="img" src="public/images/img-noDisponible.png" alt="Imagen no disponible">
    </div>
    <label class="font">Actor principal: {$serie->actor_principal}</label>
    <h2 class="titulo">Sinopsis</h2>
    <p class="font">{$serie->sinopsis}</p>
    <h3 class="titulo">Genero</h3>
    <p class="font">{$serie->nombreGen}</p>
</div>
{include file="vue/comentario.tpl"}
{include file="comentario.tpl"}
<script src="publico/js/app.js"></script>
{include file="footer.tpl"}

