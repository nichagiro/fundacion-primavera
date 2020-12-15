var formulario = document.getElementById('formy');

formulario.addEventListener('submit',function(e){

    e.preventDefault();

    let datos = new FormData(formulario);

    fetch('php/correo.php', {

        method:'POST',
        body:datos

    }) 
    .then(res => res.json())
    .then(data => {

        if(data == 'ok') {

            formulario.reset();

            const success = document.getElementById('success');
            success.style.display = 'block';
            danger.style.display = 'none';


        } else {

            const danger = document.getElementById('danger');
            danger.style.display = 'block';

        }


    })

})
