function validateForm() {
    var name = document.getElementById("name").value;
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;
    var password_confirmation = document.getElementById(
        "password_confirmation"
    ).value;
    var image = document.getElementById("image").value;

    var nameRegex = /^[a-zA-Z\s]+$/;
    var emailRegex = /^[a-zA-Z0-9._-]+@[a-z]+\.[a-z]{2,3}$/;
    var passwordRegex = /^[a-zA-Z0-9]{8,}$/;

    if (!nameRegex.test(name)) {
        Swal.fire({
            icon: "error",
            title: "Invalid name",
            text: "Please enter a valid name.",
        });
        return false;
    }
    if (!emailRegex.test(email)) {
        Swal.fire({
            icon: "error",
            title: "Invalid email",
            text: "Please enter a valid email address.",
        });
        return false;
    }
    if (!passwordRegex.test(password)) {
        Swal.fire({
            icon: "error",
            title: "Invalid password",
            text: "Password must contain at least 8 characters and include numbers.",
        });
        return false;
    }

    if (password !== password_confirmation) {
        Swal.fire({
            icon: "error",
            title: "Password mismatch",
            text: "Password and Confirm Password must match.",
        });
        return false;
    }

    if (image.trim() === "") {
        Swal.fire({
            icon: "error",
            title: "No image selected",
            text: "Please select an image.",
        });
        return false;
    }

    return true;
}
