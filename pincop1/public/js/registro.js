document.getElementById("registerButton").addEventListener("click", function(event) {
  event.preventDefault();

  // Realiza las validaciones necesarias antes de enviar el formulario
  var name = document.getElementById("name").value;
  var email = document.getElementById("email").value;
  var password = document.getElementById("password").value;
  var confirmPassword = document.getElementById("password_confirmation").value;

  // Validar que todos los campos estén completos
  if (name === "" || email === "" || password === "" || confirmPassword === "") {
      alert("Por favor, completa todos los campos.");
      return;
  }

  // Validar que la contraseña coincida con la confirmación
  if (password !== confirmPassword) {
      alert("Las contraseñas no coinciden.");
      return;
  }

  // Envía el formulario
  document.querySelector("form").submit();
});
