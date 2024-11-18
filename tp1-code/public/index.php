<?php
require_once 'CRUD.php';

$livres = CRUD::afficherLivres();
?>

<h1>Liste des Livres</h1>

<table>
    <tr>
        <th>Titre</th>
        <th>Auteur</th>
        <th>Prix</th>
        <th>Actions</th>
    </tr>
    <?php foreach ($livres as $livre): ?>
        <tr>
            <td><?php echo $livre['titre']; ?></td>
            <td><?php echo $livre['auteur']; ?></td>
            <td><?php echo $livre['prix']; ?> €</td>
            <td>
                <a href="book_edit.php?id=<?php echo $livre['id_livre']; ?>">Modifier</a> |
                <a href="book_delete.php?id=<?php echo $livre['id_livre']; ?>">Supprimer</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>

<a href="book_create.php">Ajouter un livre</a>