function validarFormulario() {
  var name = document.getElementById('name');
  var email = document.getElementById('email');
  var password = document.getElementById('password');
  var passwordConfirmation = document.getElementById('password_confirmation');
  var errorMessage = document.getElementById('error-message');

  errorMessage.style.display = 'none';

  if (name.value.trim() === '') {
      mostrarError(name, 'El nombre es requerido');
      return false;
  } else {
      mostrarExito(name);
  }

  if (email.value.trim() === '') {
      mostrarError(email, 'El email es requerido');
      return false;
  } else {
      mostrarExito(email);
  }

  if (password.value.trim() === '') {
      mostrarError(password, 'La contraseña es requerida');
      return false;
  } else {
      mostrarExito(password);
  }

  if (passwordConfirmation.value.trim() === '') {
      mostrarError(passwordConfirmation, 'Debe confirmar la contraseña');
      return false;
  } else if (password.value !== passwordConfirmation.value) {
      mostrarError(passwordConfirmation, 'Las contraseñas no coinciden');
      return false;
  } else {
      mostrarExito(passwordConfirmation);
  }

  return true;
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