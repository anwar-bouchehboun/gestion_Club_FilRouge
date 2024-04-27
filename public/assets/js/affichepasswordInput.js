const togglePassword = document.getElementById("togglePassword");
const passwordField = document.getElementById("password");

togglePassword.addEventListener("click", function () {
    const type =
        passwordField.getAttribute("type") === "password" ? "text" : "password";
    passwordField.setAttribute("type", type);
    this.innerHTML =
        type === "password"
            ? '<i class="far fa-eye-slash"></i>'
            : '<i class="far fa-eye"></i>';
});
