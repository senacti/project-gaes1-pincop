let listaproducto = [];

const objproducto = {
    id: '',
    marca: '',
    talla: '',
    cantidad: '',
    precio: '',
    categoria: ''
}

let editando = false;

const formulario = document.querySelector('#formulario');
const marcaInput = document.querySelector('#marca');
const tallaInput = document.querySelector('#talla');
const cantidadInput = document.querySelector('#cantidad');
const precioInput = document.querySelector('#precio');
const categoriaInput = document.querySelector('#categoria');
const btnAgregarInput = document.querySelector('#btnAgregar');

formulario.addEventListener('submit', validarFormulario);

function validarFormulario(e) {
    e.preventDefault();

    if(marcaInput.value === '' || tallaInput.value === '' || cantidadInput.value === '' || precioInput.value === '' || categoriaInput.value === '') {
        alert('Todos los campos se deben llenar');
        return;
    }

    if(editando) {
        editarproducto();
        editando = false;
    } else {
        objproducto.id = Date.now();
        objproducto.marca = marcaInput.value;
        objproducto.talla = tallaInput.value;
        objproducto.cantidad = cantidadInput.value;
        objproducto.precio = precioInput.value;
        objproducto.categoria = categoriaInput.value;

        agregarproducto();
    }
}

function agregarproducto() {

    listaproducto.push({...objproducto});

    mostrarproductos();

    formulario.reset();
    limpiarObjeto();
}

function limpiarObjeto() {
    objproducto.id = '';
    objproducto.marca = '';
    objproducto.talla = '';
    objproducto.cantidad = '';
    objproducto.precio = '';
    objproducto.categoria = '';
}

function mostrarproductos() {
    limpiarHTML();

    const divproductos = document.querySelector('.div-productos');
    
    listaproducto.forEach(producto => {
        const {id, marca, talla, cantidad, precio, categoria} = producto;

        const parrafo = document.createElement('p');
        parrafo.textContent = `${id} - ${marca} - ${talla} - ${cantidad} - $${precio} - ${categoria} `;
        parrafo.dataset.id = id;

        const editarBoton = document.createElement('button');
        editarBoton.onclick = () => cargarproducto(producto);
        editarBoton.textContent = 'Editar';
        editarBoton.classList.add('btn', 'btn-editar');
        parrafo.append(editarBoton);

        const eliminarBoton = document.createElement('button');
        eliminarBoton.onclick = () => eliminarproducto(id);
        eliminarBoton.textContent = 'Eliminar';
        eliminarBoton.classList.add('btn', 'btn-eliminar');
        parrafo.append(eliminarBoton);

        const hr = document.createElement('hr');

        divproductos.appendChild(parrafo);
        divproductos.appendChild(hr);
    });
}

function cargarproducto(producto) {
    const {id, marca, talla, cantidad, precio, categoria} = producto;

    marcaInput.value = marca;
    tallaInput.value = talla;
    cantidadInput.value = cantidad;
    precioInput.value = precio;
    categoriaInput.value = categoria;

    objproducto.id = id;

    formulario.querySelector('button[type="submit"]').textContent = 'Actualizar';
    
    editando = true;
}

function editarproducto() {

    objproducto.marca = marcaInput.value;
    objproducto.talla = tallaInput.value;
    objproducto.cantidad = cantidadInput.value;
    objproducto.precio = precioInput.value;
    objproducto.categoria = categoriaInput.value;

    listaproducto.map(producto => {

        if(producto.id === objproducto.id) {
            producto.id = objproducto.id;
            producto.marca = objproducto.marca;
            producto.talla = objproducto.talla;
            producto.cantidad = objproducto.cantidad;
            producto.precio = objproducto.precio;
            producto.categoria = objproducto.categoria;

        }

    });

    limpiarHTML();
    mostrarproductos();
    formulario.reset();

    formulario.querySelector('button[type="submit"]').textContent = 'Agregar';
    
    editando = false;
}

function eliminarproducto(id) {

    listaproducto = listaproducto.filter(producto => producto.id !== id);

    limpiarHTML();
    mostrarproductos();
}

function limpiarHTML() {
    const divproductos = document.querySelector('.div-productos');
    while(divproductos.firstChild) {
        divproductos.removeChild(divproductos.firstChild);
    }
}