"use strict"

document.addEventListener("DOMContentLoaded", inicio);

function inicio() {
    const API_URL = "api/comentario";
    document.querySelector(".btn-delete").addEventListener('click', eliminarComentario());
    document.querySelector("#form-comentario").addEventListener('submit', addComentario);

    let app = new Vue({
        el: "#app",
        data: {
            titulo: "comentarios",
            comentarios: [],
            admin: false,
        },
    })

    function isAdmin(){
        let admin = document.querySelector("input[name=admin]").value;

        if(admin == 1){
            app.admin = true;
        }
    }

    async function getComentarios() {
        let id = document.querySelector("input[name=serie]").value;
        console.log(id);
        try {
            let response = await fetch(API_URL);
            let comentarios = await response.json();
            app.comentarios = comentarios;
            Admin();
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
        console.log(data);
        try {
            await fetch(API_URL, {
                method: 'POST',
                headers: { 'content-type': 'application/json' },
                body: JSON.stringify(data)
            });
        } catch (e) {
            console.log(e);
        }
        getComentarios();
    }

    async function eliminarComentario() {
        let id=1;
        try {
            await fetch(API_URL, {
                method: 'DELETE',
            });
        } catch (e) {
            console.log(e);
        }
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
    getComentarios();
}

