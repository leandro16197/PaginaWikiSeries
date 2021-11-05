{if isset($user)}
<input class="hidden-windows" value={$user->admin} name=admin>
{/if}
<input class="hidden-windows" value={$serie->id_serie} name=serie>

{literal}
<section id="app">
    <div class="box-comentarios bd-highlight mb-3">
        <label class="titulo-box">Comentarios</label>   
        <div class="comentario border border-secondary media"  v-for="comentario in comentarios">
            <div class="div-media media-body">
                    <button class="btn-delete" v-if="admin" v-on:click="eliminarComentario(comentario.id_comentario)">eliminar</button> 
                    <div class="box-estrella" >
                        <label class="estrella"> {{comentario.puntaje}}★</label>
                    </div>
                    
                    <div >
                        <label class="subtitulos ans mt-0"> Usuario: </label>
                        <label class="info-comentario"> {{comentario.nombre}} </label>
                    </div>

                    <label class="subtitulos ans mt-0">Comentario: </label>
                    <p class="info-comentario"> {{comentario.comentario}} </p>
            </div>
        </div>
    </div>
</section>
{/literal}



