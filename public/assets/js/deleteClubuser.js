function deleteUser(userId) {
    console.log(userId);

    var xhr = new XMLHttpRequest();
    var url = "/profile/delete/";
    xhr.open("POST", url, true);
    xhr.setRequestHeader(
        "X-CSRF-TOKEN",
        document
            .querySelector('meta[name="csrf-token"]')
            .getAttribute("content")
    );
    xhr.setRequestHeader("Content-Type", "application/json");

    xhr.onreadystatechange = function () {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                closeModal("popup-modal-" + userId);

                Swal.fire({
                    icon: "success",
                    title: "Success!",
                    text: "Profile Club delete successfully",
                    timer: 4000,
                    timerProgressBar: true,
                    showConfirmButton: false,
                    didClose: () => {
                        window.location.reload();
                    },
                });
            } else {
                console.error("Failed to delete club.");
            }
        }
    };

    xhr.send(JSON.stringify({ userId: userId }));
}

function closeModal(modalId) {
    const modal = document.getElementById(modalId);
    if (modal) {
        modal.style.display = "none";
    }
}
