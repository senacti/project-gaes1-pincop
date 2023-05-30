document.querySelector('.button').addEventListener('click',iniciarsesion);

function iniciarsesion(){
    var scorreo = '';
    var bAcesso = false; 

    scorreo = document.querySelector('#correo').value;

    bAcesso = validardatos(scorreo);

    if(bAcesso == true){
        ingresar();
        document.getElementById('formulario__mensaje-exito').classList.add('formulario__mensaje-exito-activo');
		setTimeout(() => {
			document.getElementById('formulario__mensaje-exito').classList.remove('formulario__mensaje-exito-activo');
		}, 5000);
    }
    else{
        document.getElementById('formulario__mensaje').classList.add('formulario__mensaje-activo');
        setTimeout(() => {
        document.getElementById('formulario__mensaje').classList.remove('formulario__mensaje-activo');
        }, 5000);
    }
}


function ingresar(){
    var rol = sessionStorage.getItem('rolusuarioActivo');
    switch(rol){
        case '1':
            window.location.href = '#';
        break;
        case '2':
            window.location.href = '#';
        break;
    }
}