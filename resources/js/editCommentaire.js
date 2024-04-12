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
