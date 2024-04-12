import "./bootstrap";
import "flowbite";

let element = document.getElementById("popup-modal");

const modal = new Modal(element);
window.deletecommentaire = function (id) {
    const form = document.getElementById('deleteForm');
    form.action = "http://127.0.0.1:8000/comentaire/" + id;

    modal.show();
};
