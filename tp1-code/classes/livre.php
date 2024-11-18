<?php
require_once 'db.php';

class Livre {
    private $id_livre;
    private $titre;
    private $auteur;
    private $prix;
    private $genre_id;

    public function __construct($titre = null, $auteur = null, $prix = null, $genre_id = null, $id_livre = null) {
        $this->titre = $titre;
        $this->auteur = $auteur;
        $this->prix = $prix;
        $this->genre_id = $genre_id;
        $this->id_livre = $id_livre;
    }

    public function ajouter() {
        $pdo = Database::connect();
        $stmt = $pdo->prepare("INSERT INTO Livre (titre, auteur, prix, genre_id) VALUES (?, ?, ?, ?)");
        $stmt->execute([$this->titre, $this->auteur, $this->prix, $this->genre_id]);
    }

    public static function getAll() {
        $pdo = Database::connect();
        $stmt = $pdo->query("SELECT * FROM Livre");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function getById($id_livre) {
        $pdo = Database::connect();
        $stmt = $pdo->prepare("SELECT * FROM Livre WHERE id_livre = ?");
        $stmt->execute([$id_livre]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function modifier() {
        $pdo = Database::connect();
        $stmt = $pdo->prepare("UPDATE Livre SET titre = ?, auteur = ?, prix = ?, genre_id = ? WHERE id_livre = ?");
        $stmt->execute([$this->titre, $this->auteur, $this->prix, $this->genre_id, $this->id_livre]);
    }

    public static function supprimer($id_livre) {
        $pdo = Database::connect();
        $stmt = $pdo->prepare("DELETE FROM Livre WHERE id_livre = ?");
        $stmt->execute([$id_livre]);
    }
}
?>