<?php
class Database {
    private static $host = 'localhost';
    private static $db_name = 'librairie';
    private static $username = 'root';  // Mettez à jour avec vos paramètres
    private static $password = '';      // Mettez à jour avec vos paramètres

    public static function connect() {
        try {
            $pdo = new PDO("mysql:host=" . self::$host . ";dbname=" . self::$db_name, self::$username, self::$password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
        } catch (PDOException $exception) {
            die("Erreur de connexion à la base de données: " . $exception->getMessage());
        }
    }
}
?>