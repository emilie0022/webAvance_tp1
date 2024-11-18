<?php
require_once 'Classe/Livre.php';

class CRUD {

    public static function ajouterLivre($titre, $auteur, $prix, $genre_id) {
        $livre = new Livre($titre, $auteur, $prix, $genre_id);
        $livre->ajouter();
    }

    public static function afficherLivres() {
        return Livre::getAll();
    }

    public static function afficherLivreParId($id_livre) {
        return Livre::getById($id_livre);
    }

    public static function modifierLivre($id_livre, $titre, $auteur, $prix, $genre_id) {
        $livre = new Livre($titre, $auteur, $prix, $genre_id, $id_livre);
        $livre->modifier();
    }

    public static function supprimerLivre($id_livre) {
        Livre::supprimer($id_livre);
    }
}
?>
