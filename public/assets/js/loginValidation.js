const emailField = document.getElementById('email');
const emailIcon = document.getElementById('emailIcon');
emailField.addEventListener('input', validateEmail);

function validateEmail() {
    let email = emailField.value;
    const regexEmail = /^[a-zA-Z0-9._-]+@[a-z]+\.[a-z]{2,3}$/;
          console.log(regexEmail.test(email));
     if (!regexEmail.test(email)) {
        emailIcon.textContent = "❌";
           emailIcon.classList.add('text-red-500');
    } else {
        emailIcon.textContent = "✓";
        emailIcon.classList.add('text-green-700');
    }
}
