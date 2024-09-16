DROP TABLE IF EXISTS LigneCommande;
DROP TABLE IF EXISTS command_line;
CREATE TABLE command_line (
    id INT AUTO_INCREMENT PRIMARY KEY,
    product_id INT NOT NULL,
    command_id INT NOT NULL,
    quantity INT NOT NULL,
    CONSTRAINT `fk_product_id_command_line` FOREIGN KEY (product_id) REFERENCES product(id) ON DELETE CASCADE,
    CONSTRAINT `fk_command_id_command_line` FOREIGN KEY (command_id) REFERENCES command(id) ON DELETE CASCADE
);
