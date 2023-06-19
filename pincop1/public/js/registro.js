window.addEventListener('DOMContentLoaded', function() {
  var name = document.getElementById('name');
  var email = document.getElementById('email');
  var password = document.getElementById('password');
  var passwordConfirmation = document.getElementById('password_confirmation');

  name.addEventListener('input', function() {
    validarNombre(name);
  });

  email.addEventListener('input', function() {
    validarEmail(email);
  });

  password.addEventListener('input', function() {
    validarPassword(password);
  });

  passwordConfirmation.addEventListener('input', function() {
    validarConfirmacionPassword(passwordConfirmation);
  });
});

function validarFormulario() {
  var name = document.getElementById('name');
  var email = document.getElementById('email');
  var password = document.getElementById('password');
  var passwordConfirmation = document.getElementById('password_confirmation');

  if (validarNombre(name) && validarEmail(email) && validarPassword(password) && validarConfirmacionPassword(passwordConfirmation)) {
    resetearFormulario();
    return true;
  } else {
    return false;
  }
}

function validarNombre(name) {
  if (name.value.trim() === '') {
    mostrarError(name, 'El nombre es requerido');
    return false;
  } else if (!/^[a-zA-ZÀ-ÿ\s]{4,40}$/.test(name.value.trim())) {
    mostrarError(name, 'El nombre es inválido');
    return false;
  } else {
    mostrarExito(name);
    return true;
  }
}

function validarEmail(email) {
  if (email.value.trim() === '') {
    mostrarError(email, 'El email es requerido');
    return false;
  } else if (!/^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/.test(email.value.trim())) {
    mostrarError(email, 'El email es inválido');
    return false;
  } else {
    mostrarExito(email);
    return true;
  }
}

function validarPassword(password) {
  if (password.value.trim() === '') {
    mostrarError(password, 'La contraseña es requerida');
    return false;
  } else if (!/^.{4,12}$/.test(password.value.trim())) {
    mostrarError(password, 'La contraseña debe tener entre 4 y 12 caracteres');
    return false;
  } else {
    mostrarExito(password);
    return true;
  }
}

function validarConfirmacionPassword(passwordConfirmation) {
  var password = document.getElementById('password');

  if (passwordConfirmation.value.trim() === '') {
    mostrarError(passwordConfirmation, 'Debe confirmar la contraseña');
    return false;
  } else if (password.value !== passwordConfirmation.value) {
    mostrarError(passwordConfirmation, 'Las contraseñas no coinciden');
    return false;
  } else {
    mostrarExito(passwordConfirmation);
    return true;
  }
}

function mostrarError(input, mensaje) {
  var grupo = input.parentElement;
  var iconoExito = grupo.querySelector('.fa-check-circle');
  var iconoError = grupo.querySelector('.fa-times-circle');
  var mensajeError = grupo.querySelector('.formulario__input-error');

  grupo.classList.add('formulario__grupo-incorrecto');
  grupo.classList.remove('formulario__grupo-correcto');
  iconoExito.style.display = 'none';
  iconoError.style.display = 'block';
  mensajeError.textContent = mensaje;
  mensajeError.style.display = 'block';
}

function mostrarExito(input) {
  var grupo = input.parentElement;
  var iconoExito = grupo.querySelector('.fa-check-circle');
  var iconoError = grupo.querySelector('.fa-times-circle');
  var mensajeError = grupo.querySelector('.formulario__input-error');

  grupo.classList.remove('formulario__grupo-incorrecto');
  grupo.classList.add('formulario__grupo-correcto');
  iconoExito.style.display = 'block';
  iconoError.style.display = 'none';
  mensajeError.textContent = '';
  mensajeError.style.display = 'none';
}

function resetearFormulario() {
  var name = document.getElementById('name');
  var email = document.getElementById('email');
  var password = document.getElementById('password');
  var passwordConfirmation = document.getElementById('password_confirmation');

  name.value = '';
  email.value = '';
  password.value = '';
  passwordConfirmation.value = '';

  mostrarExito(name);
  mostrarExito(email);
  mostrarExito(password);
  mostrarExito(passwordConfirmation);
}
