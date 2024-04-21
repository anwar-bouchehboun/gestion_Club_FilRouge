import "./bootstrap";
import "flowbite";

let element = document.getElementById("edit-modal");

const modal = new Modal(element);
window.editcommentaire = function (
    id,
    centenu,


) {
    const form = document.getElementById("edit-form");
    form.action = "http://127.0.0.1:8000/comentaire/" + id;
    // document.getElementById("event_text").value = event_text;
    document.getElementById("contenu_text").value = centenu;
    modal.show();
};
document.addEventListener("DOMContentLoaded", function () {
    document
        .getElementById("edit-form")
        .addEventListener("submit", function (event) {
            event.preventDefault();
            var form = event.target;
            var formData = new FormData(form);
            var action = form.getAttribute("action");

            var xhr = new XMLHttpRequest();
            xhr.open("POST", action, true);
            xhr.setRequestHeader(
                "X-CSRF-TOKEN",
                document
                    .querySelector('meta[name="csrf-token"]')
                    .getAttribute("content")
            );

            xhr.onreadystatechange = function () {
                if (xhr.readyState === XMLHttpRequest.DONE) {
                    if (xhr.status === 200) {
                        var response = JSON.parse(xhr.responseText);
                        var commentaireDiv = document.getElementById(
                            "commentaire" + response.id
                        );
                        console.log(response.id);
                        commentaireDiv.innerHTML =
                            '<p class="text-white dark:text-gray-400">' +
                            response.contenu +
                            "</p>";
                        modal.hide();
                    } else {
                        console.error("Error:", xhr.status);
                    }
                }
                setInterval(function () {
                    location.reload();
                }, 1000);
            };

            xhr.send(formData);
        });
});
