DROP TABLE IF EXISTS cart;

CREATE TABLE cart (
    id INT AUTO_INCREMENT PRIMARY KEY,
    created_date BIGINT UNSIGNED NOT NULL,
    statut ENUM('in progress', 'validate') NOT NULL,
    user_id INT,
    FOREIGN KEY (user_id) REFERENCES user(id)
);