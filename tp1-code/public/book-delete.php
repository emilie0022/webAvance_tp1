<?php
require_once 'CRUD.php';

if (isset($_GET['id'])) {
    $id_livre = $_GET['id'];
    CRUD::supprimerLivre($id_livre);
}

header("Location: index.php");
exit;
