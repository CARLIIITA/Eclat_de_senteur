DROP TABLE IF EXISTS command;

CREATE TABLE command (
    id INT AUTO_INCREMENT PRIMARY KEY,
    date_order BIGINT UNSIGNED DEFAULT UNIX_TIMESTAMP(),
    total DECIMAL(10, 2) NOT NULL,
    statut ENUM('on hold', 'validate', 'delivered') DEFAULT 'on hold',
    user_id INT NOT NULL,
    CONSTRAINT `fk_user_id_command` FOREIGN KEY(user_id) REFERENCES user(id) ON DELETE CASCADE
);