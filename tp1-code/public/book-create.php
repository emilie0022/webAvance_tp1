<?php
require_once 'CRUD.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $titre = $_POST['titre'];
    $auteur = $_POST['auteur'];
    $prix = $_POST['prix'];
    $genre_id = $_POST['genre_id'];

    CRUD::ajouterLivre($titre, $auteur, $prix, $genre_id);

    header("Location: index.php");
    exit;
}
?>

<form action="book_create.php" method="POST">
    <label for="titre">Titre:</label>
    <input type="text" id="titre" name="titre" required><br>

    <label for="auteur">Auteur:</label>
    <input type="text" id="auteur" name="auteur" required><br>

    <label for="prix">Prix:</label>
    <input type="number" step="0.01" id="prix" name="prix" required><br>

    <label for="genre_id">Genre:</label>
    <select name="genre_id" id="genre_id" required>
        <option value="1">Science-fiction</option>
        <option value="2">Fantasy</option>
        <option value="3">Romance</option>
    </select><br>

    <button type="submit">Ajouter Livre</button>
</form>


