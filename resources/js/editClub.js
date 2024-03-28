import "./bootstrap";
import "flowbite";

let element = document.getElementById("crud-modal");

const modal = new Modal(element);
window.openEditModal = function (id, club,image, discrption) {
    const form = document.getElementById('edit-form');
    form.action = "http://127.0.0.1:8000/Dashbord/club/" + id;
    document.getElementById("club_name").value = club;
  document.getElementById("discrption_name").value = discrption;
   document.getElementById("image_name").value = image;

    modal.show();
};
