$(document).ready(function() {
    let ocupaciones = [];

    console.log(document.getElementById('registroBtnOcupaciones'))
    document.getElementById('registroBtnOcupaciones').addEventListener('click', () => {
        alert('ok')
        $.ajax({
            url: 'http://127.0.0.1:8081/ocupaciones',
            method: 'post',
        }).done((response) => {
            console.log(response);
        }).fail((err) => {
            console.error(err);
        });
    });

        $.ajax({
            url: 'http://127.0.0.1:8081/ocupaciones',
            method: 'get'
        }).done((response) => {
            console.log(response);
            console.log(ocupaciones[0]);
            ocupaciones.forEach(element => {
                document.body.innerHTML += '<h2>' + item.nombre + '</h2>'
            });
        }).fail((err) => {
            console.error(err);
        });

        $.ajax({
            url: 'http://127.0.0.1:8081/ocupaciones/1',
            method: 'put'
        }).done((response) => {
            console.log(response);
        }).fail((err) => {
            console.error(err);
        });

        $.ajax({
            url: 'http://127.0.0.1:8081/ocupaciones/1',
            method: 'delete',
        }).done((response) => {
            console.log(response);
        }).fail((err) => {
            console.error(err);
        });
    });