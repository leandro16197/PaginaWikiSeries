<input class="hidden-windows" value={$user->admin} name=admin>
<section id="app">
    <div class="box-comentarios d-flex flex-column bd-highlight mb-3">
        <label class="titulo-box">Comentarios</label>
        {literal}
        <div class="comentario border border-secondary media"  v-for="comentario in comentarios">
            <div class="div-media media-body">
                    <button class="btn-delete" v-if="admin" v-on:click="eliminarComentario()">eliminar</button> 
                    <div class="box-estrella" >
                        <label class="estrella"> {{ comentario.puntaje}}★</label>
                        </div>
                    </div>
                    <div class="coment-user" >
                        <label class="subtitulos ans mt-0">Usuario:</label>
                        <label class="info-comentario"> {{ comentario.nombre }} </label>
                    </div>

                    <label class="subtitulos ans mt-0">Comentario: </label>
                    <p class="info-comentario"> {{ comentario.comentario }} </p>
            </div>
        </div>
    </div>
</section>
{/literal}


