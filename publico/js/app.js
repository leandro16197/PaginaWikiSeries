"use strict"

document.addEventListener("DOMContentLoaded", inicio);

function inicio() {
    const API_URL = "api/comentario";
    let id_serie= document.querySelector("input[name=serie]").value;
    document.querySelector(".btn-delete").addEventListener('click', eliminarComentario);
    document.querySelector("#form-comentario").addEventListener('submit', addComentario);

    let app = new Vue({
        el: "#app",
        data: {
            titulo: "comentarios",
            comentarios: [],
            admin: false
        },
        methods:{
            eliminarComentario:eliminarComentario
        }
    })

    getComentariosBySerie(id_serie);

    async function getComentariosBySerie(id_serie) {
      try{
            let response = await fetch(API_URL+"/"+id_serie);
            let comentarios = await response.json();
            if(typeof comentarios=="object"){
                app.comentarios=comentarios;
                Admin();
            }else{
                app.comentarios=[];
            }
        } catch (e) {
            console.log(e);
        }
    }

    async function addComentario(e) {
        e.preventDefault();
        let data = {
            comentario: document.querySelector("textarea[name=comentario]").value,
            fecha: getFecha(),
            puntaje: document.querySelector("input[name=puntaje]").value,
            id_usuario: document.querySelector("input[name=usuario]").value,
            id_serie: document.querySelector("input[name=serie]").value
           
        }
        try {
            await fetch(API_URL, {
                method: 'POST',
                headers: { 'content-type': 'application/json' },
                body: JSON.stringify(data)
            });
        } catch (e) {
            console.log(e);
        }
        getComentariosBySerie(id_serie);
    }

    async function eliminarComentario(id) {
        console.log(id)
        try {
            await fetch(API_URL+"/"+id, {
                method: 'DELETE'
            });
        } catch (e) {
            console.log(e);
        }
        getComentariosBySerie(id_serie);
    }

    function Admin(){
        let admin = document.querySelector("input[name=admin]").value;
        if(admin == 1){
            app.admin = true;
        }
    }
    
    function getFecha() {
        let fechaActual = new Date();
        let dd = fechaActual.getDay();
        let mm = fechaActual.getMonth() + 1;
        let yyyy = fechaActual.getFullYear();
        return yyyy + '/' + mm + '/' + dd;
    }
}

