DROP TABLE IF EXISTS categorie;

-- Création de la table Categorie
CREATE TABLE categorie (
    id INT AUTO_INCREMENT PRIMARY KEY,      -- Identifiant unique pour chaque catégorie
    name VARCHAR(255) NOT NULL               -- Nom de la catégorie (parfum, maquillage, etc.)
) ENGINE = InnoDB;
