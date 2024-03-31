import "./bootstrap";
import "flowbite";

let element = document.getElementById("edit-modal");

const modal = new Modal(element);
window.editEventModal = function (
    id,
    event,
    price,
    discrption,
    local,
    date,
    club
) {
    const form = document.getElementById("edit-form");
    form.action = "http://127.0.0.1:8000/Dashbord/event/" + id;
    document.getElementById("event").value = event;
    document.getElementById("club_name").value = club;
    document.getElementById("price").value = price;
    document.getElementById("loclisation").value = local;
    document.getElementById("date_now").value = date;
    document.getElementById("discrption_name").value = discrption;

    modal.show();
};
