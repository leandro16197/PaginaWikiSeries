{include file="head.tpl" }
 {* INFORMACION DE UN ITEM *}
   <input type="text" name="serie" value="{$serie->id_serie}" class="hidden-windows">
    <h1 class="titulo tit-info">{$serie->nombre}</h1>
     <img clas="imagen-tabla" src="public/images/img-noDisponible.png" alt="Imagen no disponible">
    <label class="font">Actor principal: {$serie->actor_principal}</label>
    <h2 class="titulo">Sinopsis</h2>
    <p class="font">{$serie->sinopsis}</p> 
{include file="footer.tpl"}

