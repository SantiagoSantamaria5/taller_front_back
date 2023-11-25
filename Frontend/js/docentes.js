$(document).ready(function() {
    let docentes = [];

    console.log(document.getElementById('registroBtnDocentes'))
    document.getElementById('registroBtnDocentes').addEventListener('click', () => {
        alert('ok')
        $.ajax({
            url: 'http://127.0.0.1:8081/docentes',
            method: 'post',
        }).done((response) => {
            console.log(response);
        }).fail((err) => {
            console.error(err);
        });
    });

        $.ajax({
            url: 'http://127.0.0.1:8081/docentes',
            method: 'get'
        }).done((response) => {
            console.log(response);
            console.log(docentes[0]);
            docentes.forEach(element => {
                document.body.innerHTML += '<h2>' + item.nombre + '</h2>'
            });
        }).fail((err) => {
            console.error(err);
        });

        $.ajax({
            url: 'http://127.0.0.1:8081/docentes/1',
            method: 'put'
        }).done((response) => {
            console.log(response);
        }).fail((err) => {
            console.error(err);
        });

        $.ajax({
            url: 'http://127.0.0.1:8081/docentes/1',
            method: 'delete',
        }).done((response) => {
            console.log(response);
        }).fail((err) => {
            console.error(err);
        });
    });