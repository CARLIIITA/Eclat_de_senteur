DROP TABLE IF EXISTS product;

-- Création de la table Produit
CREATE TABLE product (
    id INT AUTO_INCREMENT PRIMARY KEY,      -- Identifiant unique pour chaque produit
    name VARCHAR(100) NOT NULL,              -- Nom du produit
    price DECIMAL(10, 2) NOT NULL,           -- Prix du produit
    description TEXT NOT NULL,                -- Description du produit
    stock INT NOT NULL,                       
    img VARCHAR(255) DEFAULT NULL,
    categorie_id INT NOT NULL,                -- Référence à la catégorie du produit
    CONSTRAINT `fk_categorie_product` FOREIGN KEY(categorie_id) REFERENCES categorie(id) -- Clé étrangère vers Categorie

) ENGINE = InnoDB CHARSET=utf8;