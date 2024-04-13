function editcommentaire(commentId, contenu) {
    console.log(contenu);
    // const contenu_text = document.getElementById("contenu_text");
    // contenu_text.value = contenu;
    // console.log(contenu_text.value); // Log the updated value
    document.getElementById("edit-modal").classList.remove("hidden");
    document.getElementById("edit-form").action = `/comentariosous/${commentId}`;
}
