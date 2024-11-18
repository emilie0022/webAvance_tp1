CREATE DATABASE IF NOT EXISTS librairie;

USE librairie;

CREATE TABLE IF NOT EXISTS Genre (
    id_genre INT AUTO_INCREMENT PRIMARY KEY,
    nom_genre VARCHAR(255) NOT NULL
);

CREATE TABLE IF NOT EXISTS Livre (
    id_livre INT AUTO_INCREMENT PRIMARY KEY,
    titre VARCHAR(255) NOT NULL,
    auteur VARCHAR(255) NOT NULL,
    prix DECIMAL(10, 2) NOT NULL,
    genre_id INT NOT NULL,
    FOREIGN KEY (genre_id) REFERENCES Genre(id_genre)
);

INSERT INTO Genre (nom_genre) VALUES ('Science-fiction'), ('Fantasy'), ('Romance');
