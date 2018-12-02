DELIMITER $$
CREATE PROCEDURE insertProduct(
 IN name VARCHAR(255),
 IN quantity INT,
 IN buy_price DECIMAL,
 IN sale_price DECIMAL,
 IN categorie_id INT,
 IN media_id INT,
 IN date DATETIME)
BEGIN
 INSERT INTO products 
 (name,quantity,buy_price,sale_price,categorie_id,media_id,date)
 VALUES
 (name,quantity,buy_price,sale_price,categorie_id,media_id,date);
END$$
DELIMITER ;