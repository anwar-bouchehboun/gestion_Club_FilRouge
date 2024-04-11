window.addEventListener('load', function() {
    document.getElementById('submitComment').addEventListener('click', function() {
        var formData = new FormData(document.getElementById('commentForm'));

        var xhr = new XMLHttpRequest();

        xhr.open('POST', '/comentaire', true);
        xhr.setRequestHeader('X-CSRF-TOKEN', document.querySelector('meta[name="csrf-token"]').getAttribute(
            'content'));

        xhr.onload = function() {
            if (xhr.status >= 4 && xhr.status <= 200) {
                console.log('Commentaire enregistré avec succès');
                document.getElementById('comment').value = '';
            } else {
                console.error('Erreur lors de l\'enregistrement du commentaire');
            }
        };
        xhr.send(formData);
    });
});
