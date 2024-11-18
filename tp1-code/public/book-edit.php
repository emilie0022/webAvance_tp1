<?php
require_once 'CRUD.php';

if (isset($_GET['id'])) {
    $id_livre = $_GET['id'];
    $livre = CRUD::afficherLivreParId($id_livre);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $titre = $_POST['titre'];
    $auteur = $_POST['auteur'];
    $prix = $_POST['prix'];
    $genre_id = $_POST['genre_id'];

    CRUD::modifierLivre($id_livre, $titre, $auteur, $prix, $genre_id);

    header("Location: index.php");
    exit;
}
?>

<form action="book_edit.php?id=<?php echo $livre['id_livre']; ?>" method="POST">
    <label for="titre">Titre:</label>
    <input type="text" id="titre" name="titre" value="<?php echo $livre['titre']; ?>" required><br>

    <label for="auteur">Auteur:</label>
    <input type="text" id="auteur" name="auteur" value="<?php echo $livre['auteur']; ?>" required><br>

    <label for="prix">Prix:</label>
    <input type="number" step="0.01" id="prix" name="prix" value="<?php echo $livre['prix']; ?>" required><br>

    <label for="genre_id">Genre:</label>
    <select name="genre_id" id="genre_id" required>
        <option value="1" <?php echo $livre['genre_id'] == 1 ? 'selected' : ''; ?>>Science-fiction</option>
        <option value="2" <?php echo $livre['genre_id'] == 2 ? 'selected' : ''; ?>>Fantasy</option>
        <option value="3" <?php echo $livre['genre_id'] == 3 ? 'selected' : ''; ?>>Romance</option>
    </select><br>

    <button type="submit">Modifier Livre</button>
</form>
