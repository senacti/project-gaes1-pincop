/*Roles:
1: Admin
2: cliente
*/

function obtenerlistausuarios(){
    var listadeusuarios = JSON.parse(localStorage.getItem(listadeusuarios));

    if(listadeusuarios == null){
        listadeusuarios =
        [
            //id,nombre,apellido,correo,              contraseña,rol              
            ['1','Diego','León','diego@gmail.com','Diego.123','1'],
            ['2','Holman','Santamaría','holman@gmail.com','Holman.123','2']
        ]
    }
    return listadeusuarios;
}
function validardatos(pcorreo){
    var listadeusuarios = obtenerlistausuarios();
    var bAcesso = false;

    for(var i = 0; i < listadeusuarios.length; i++){
        if(pcorreo == listadeusuarios[i][3]){
            bAcesso = true;
            sessionStorage.setItem('usuarioActivo', listadeusuarios[i][1] + '' + listadeusuarios[i][2]);
            sessionStorage.setItem('rolusuarioActivo', listadeusuarios[i][5]);
        }
    }

    return bAcesso;
}