const emailField = document.getElementById("email");
const emailIcon = document.getElementById("emailIcon");
emailField.addEventListener("input", validateEmail);

function validateEmail() {
    let email = emailField.value;
    const regexEmail = /^[a-zA-Z0-9._-]+@[a-z]+\.[a-z]{2,3}$/;
    console.log(regexEmail.test(email));
    if (!regexEmail.test(email)) {
        emailIcon.textContent = "❌";
        emailIcon.classList.add("text-red-500");
    } else {
        emailIcon.textContent = "✓";
        emailIcon.classList.add("text-green-700");
    }
}
const togglePassword = document.getElementById("togglePassword");
const passwordField = document.getElementById("password");

togglePassword.addEventListener("click", function () {
    console.log(passwordField);
    const type =
        passwordField.type === "password" ? "text" : "password";
    passwordField.type=type;
    this.innerHTML =
        type === "password"
            ? '<i class="far fa-eye-slash"></i>'
            : '<i class="far fa-eye"></i>';
});
