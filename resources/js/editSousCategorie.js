import "./bootstrap";
import "flowbite";

let element = document.getElementById("edit-modal");

const modal = new Modal(element);
window.openEditSousModal = function (id, sous,price,image, discrption,cat) {
    const form = document.getElementById('edit-form');
    form.action = "http://127.0.0.1:8000/Dashbord/souscategorie/" + id;
    document.getElementById("souscategorie").value = sous;
    document.getElementById("categorie_name").value = cat;
    document.getElementById("prix").value = price;
  document.getElementById("discrption_name").value = discrption;
   document.getElementById("image_souscategorie").value = image;

    modal.show();
};
