document.querySelector('.button').addEventListener('click',iniciarsesion);

function iniciarsesion(){
    var scorreo = '';
    var scontraseña = '';
    var bAcesso = false; 

    scorreo = document.querySelector('#correo').value;
    scontraseña = document.querySelector('#contraseña').value;

    bAcesso = validardatos(scorreo,scontraseña);

    if(bAcesso == true){
        ingresar();
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
            window.location.href = '../dashboard/dashboard.html';
        break;
        case '2':
            window.location.href = '../Index.html';
        break;
    }
}