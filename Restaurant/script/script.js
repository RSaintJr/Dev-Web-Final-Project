const button = document.getElementById('cart')
const popup = document.querySelector('.popup-wrapper')
const closeButton = document.querySelector('.popup-close')

button.addEventListener('click',() => {
    popup.style.display = 'block'
})

closeButton.addEventListener('click',()=>{
    popup.style.display = 'none'
})

var nameInput = document.getElementById("nome");
if (!nameInput.checkValidity()) {
  document.getElementById("name-error").innerHTML = nameInput.validationMessage;
} else {
  document.getElementById("name-error").innerHTML = "";
}

var telefoneInput = document.getElementById("telefone");
if (!telefoneInput.checkValidity()) {
  document.getElementById("surname-error").innerHTML = telefoneInput.validationMessage;
} else {
  document.getElementById("surname-error").innerHTML = "";
}

var reservaInput = document.getElementById("reserva");
if (!reservaInput.checkValidity()) {
  document.getElementById("cpf-error").innerHTML = reservaInput.validationMessage;
} else {
  document.getElementById("cpf-error").innerHTML = "";
}

var cartaoNInput = document.getElementById("reserva");
if (!cartaoNInput.checkValidity()) {
  document.getElementById("cpf-error").innerHTML = cartaoNInput.validationMessage;
} else {
  document.getElementById("cpf-error").innerHTML = "";
}

var cartaoVInput = document.getElementById("reserva");
if (!cartaoVInput.checkValidity()) {
  document.getElementById("cpf-error").innerHTML = cartaoVInput.validationMessage;
} else {
  document.getElementById("cpf-error").innerHTML = "";
}

var cartaoSInput = document.getElementById("reserva");
if (!cartaoSInput.checkValidity()) {
  document.getElementById("cpf-error").innerHTML = cartaoSInput.validationMessage;
} else {
  document.getElementById("cpf-error").innerHTML = "";
}

// Check if all fields are valid
if (nameInput.checkValidity() && telefoneInput.checkValidity() && reservaInput.checkValidity() && cartaoNInput.checkValidity() && cartaoVInput.checkValidity() && cartaoSInput.checkValidity()) {
  // Submit the form
  document.getElementById("form").submit();
}
