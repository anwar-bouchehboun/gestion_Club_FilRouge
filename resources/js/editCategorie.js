import "./bootstrap";
import "flowbite";

let element = document.getElementById("edit-modal");
const modal = new Modal(element);
window.editCategorieModal = function (id, name, discrption, image, club_id) {
    const form = document.getElementById("edit-form");
    form.action = "http://127.0.0.1:8000/Dashbord/categorie/" + id;
    document.getElementById("categorie").value = name;
    document.getElementById("discrption_name").value = discrption;
    document.getElementById("image_categorie").value = image;
    document.getElementById("club_name").value = club_id;

    modal.show();
};
