
document.addEventListener("DOMContentLoaded", function () {
    const etoiles = document.querySelectorAll(".etoile");
    let notation = 0;
    let club_id = document.getElementById("club").value;

    etoiles.forEach((etoile) => {
        etoile.addEventListener("mouseover", function () {
            const value = etoile.getAttribute("data-value");
            mettreEnSurbrillance(value);
        });

        etoile.addEventListener("click", function () {
            const value = etoile.getAttribute("data-value");
            notation = value;
            envoyerNotation(value);
        });

        etoile.addEventListener("mouseout", function () {
            mettreEnSurbrillance(notation);
        });
    });

    function mettreEnSurbrillance(value) {
        etoiles.forEach((etoile) => {
            etoile.classList.toggle(
                "text-yellow-700",
                etoile.getAttribute("data-value") <= value
            );
        });
    }
    function envoyerNotation(value) {
        if (value < 1 || value > 5) {
            console.error("La notation doit être comprise entre 1 et 5.");
            return;
        }

        console.log("Notation envoyée :", value, club_id);
        const xhr = new XMLHttpRequest();
        xhr.open("POST", "/rating", true);
        xhr.setRequestHeader("Content-Type", "application/json");
        xhr.setRequestHeader(
            "X-CSRF-TOKEN",
            document
                .querySelector('meta[name="csrf-token"]')
                .getAttribute("content")
        );

        xhr.onreadystatechange = function () {
            if (xhr.readyState === XMLHttpRequest.DONE) {
                if (xhr.status === 200) {
                    console.log("Notation envoyée avec succès.");
                    setInterval(function () {
                        location.reload();
                    }, 1000);
                } else {
                    console.error("Erreur lors de l'envoi de la notation.");
                }
            }
        };
        xhr.send(
            JSON.stringify({
                club_id: club_id,
                rating: value,
            })
        );
    }
});
