import "./bootstrap";
import "flowbite";

let element = document.getElementById("popup-modal");
const modal = new Modal(element);

window.deletecommentaireSous = function (id) {
    const form = document.getElementById("deleteForm");
    form.action = "http://127.0.0.1:8000/comentairesous/" + id;
    // console.log(id);
    modal.show();
};

document.addEventListener("DOMContentLoaded", function () {
    const deleteButton = document.getElementById("deleteButton");

    deleteButton.addEventListener("click", function () {
        const form = document.getElementById("deleteForm");
        const action = form.getAttribute("action");

        var xhr = new XMLHttpRequest();
        xhr.open("DELETE", action, true);
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
                    console.table(response);

                    const commentaireDiv = document.getElementById(
                        response.commentId
                    );



                    modal.hide();
                } else {
                    console.error("Error:", xhr.status);
                }
            }
        };

        xhr.send();
    });
});
