document.addEventListener("DOMContentLoaded", function () {
    const toggleButton = document.getElementById("toggle");
    const sidebar = document.querySelector("aside");

    toggleButton.addEventListener("click", function () {
        sidebar.classList.toggle("-translate-x-80");
    });
});
