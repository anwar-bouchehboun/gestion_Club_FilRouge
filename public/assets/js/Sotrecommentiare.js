document.getElementById("submitComment").addEventListener("click", function () {
    var formData = new FormData(document.getElementById("commentForm"));
    console.log("FormData:", formData);
    var xhr = new XMLHttpRequest();

    xhr.open("POST", "/comentaire", true);
    xhr.setRequestHeader(
        "X-CSRF-TOKEN",
        document
            .querySelector('meta[name="csrf-token"]')
            .getAttribute("content")
    );

    xhr.onload = function () {
        if (xhr.status >= 200 && xhr.status < 300) {
            console.log("Commentaire enregistré avec succès");
            var response = JSON.parse(xhr.responseText);
            console.log(response.club_id, response.commentireable_id);

            const container = document.getElementById("contenu");

            // Create a new article element
            let article = document.createElement("article");
            article.classList.add(
                "p-6",
                "text-base",
                "bg-white",
                "dark:bg-gray-900"
            );

            article.innerHTML = `
    <footer class="flex items-center justify-between mb-2">
        <div class="flex items-center">
            <p class="inline-flex items-center mr-3 text-sm font-semibold text-gray-900 dark:text-white">
                <img class="w-10 h-10 mr-2 rounded-full" src="../storage/${response.users.image}" alt="${response.users.name}">
                ${response.users.name}
            </p>

        </div>
     <p class="inline-flex items-center mr-3 text-sm font-semibold text-gray-900 dark:text-white">Just Now</p>
    </footer>
    <div id="commentaire">
        <p class="text-gray-500 dark:text-gray-400">
            ${response.contenu}
        </p>
    </div>
`;

            container.appendChild(article);

            document.getElementById("comment").value = "";
            setInterval(function() {
                location.reload();
            }, 2000);
        } else {
            console.error("Erreur lors de l'enregistrement du commentaire");
        }

    };

    xhr.send(formData);
});

