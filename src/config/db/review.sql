CREATE OR REPLACE TABLE review (
    id INT AUTO_INCREMENT PRIMARY KEY,
    content TEXT NOT NULL,
    note INT NOT NULL,
    date_review BIGINT UNSIGNED NOT NULL,
    product_id INT NOT NULL,
    user_id INT NOT NULL,
    INDEX (user_id),
    CONSTRAINT `fk_product_review` FOREIGN KEY (product_id) REFERENCES product(id)
);