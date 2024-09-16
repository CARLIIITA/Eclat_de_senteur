DROP TABLE IF EXISTS user;

-- Création de la table Utilisateur
CREATE TABLE user (
    id INT AUTO_INCREMENT PRIMARY KEY,        -- Identifiant unique pour chaque utilisateur
    name VARCHAR(100) NOT NULL,                -- Nom de l'utilisateur
    email VARCHAR(100) NOT NULL UNIQUE,       -- Email unique pour chaque utilisateur
    role ENUM('client', 'administrateur') DEFAULT 'client',  -- Rôle de l'utilisateur (client ou administrateur)
    password VARCHAR(255) NOT NULL        -- Mot de passe de l'utilisateur (hashé)
) ENGINE = InnoDB;