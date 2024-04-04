const nameField = document.getElementById('name');
const nameIcon = document.getElementById('nameIcon');

nameField.addEventListener('input', validateName);

function validateName() {
    let name = nameField.value;
    const regexName = /^[a-zA-Z\s]+$/;

    if (!regexName.test(name)) {
        nameIcon.textContent = "❌";
        nameIcon.classList.add('text-red-500');
    } else {
        nameIcon.textContent = "✓";
        nameIcon.classList.add('text-green-700');
    }
}
    const emailField = document.getElementById('email');
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

const imageField = document.getElementById('image');

function validateImage() {
    const file = imageField.files[0];

    if (file) {

            imageIcon.textContent = "✓";
            imageIcon.classList.add('text-green-500');
        } else {
             console.log("fff");
            imageIcon.textContent = "❌"; 
            imageIcon.classList.add('text-red-500');
        }

}
