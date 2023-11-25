// let text = "Doiweudweud wdieuwihd ajksdadh daiuedhufwif";
// text = text.replaceAll("a","A")
// console.log(text);
// document.body.innerHTML += text;

$(document).ready(function() {
    let cursos = [];

    console.log(document.getElementById('registroBtnCursos'))
    document.getElementById('registroBtnCursos').addEventListener('click', () => {
        alert('ok')
        $.ajax({
            url: 'http://127.0.0.1:8081/cursos',
            method: 'post',
        }).done((response) => {
            console.log(response);
        }).fail((err) => {
            console.error(err);
        });
    });

        $.ajax({
            url: 'http://127.0.0.1:8081/cursos',
            method: 'get'
        }).done((response) => {
            console.log(response);
            console.log(cursos[0]);
            cursos.forEach(element => {
                document.body.innerHTML += '<h2>' + item.nombre + '</h2>'
            });
        }).fail((err) => {
            console.error(err);
        });

        $.ajax({
            url: 'http://127.0.0.1:8081/cursos/1',
            method: 'put'
        }).done((response) => {
            console.log(response);
        }).fail((err) => {
            console.error(err);
        });

        $.ajax({
            url: 'http://127.0.0.1:8081/cursos/1',
            method: 'delete',
        }).done((response) => {
            console.log(response);
        }).fail((err) => {
            console.error(err);
        });
    });