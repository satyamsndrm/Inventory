DELIMITER $$
CREATE TRIGGER inserted_pro AFTER INSERT ON `products` FOR EACH ROW 
BEGIN 
INSERT INTO logs
VALUES
(NULL, CONCAT("Product ", NEW.name," is added with ", NEW.quantity), CURRENT_TIMESTAMP);

END$$
DELIMITER $$



DELIMITER $$
CREATE TRIGGER updated_pro AFTER UPDATE ON `products` FOR EACH ROW 
BEGIN 
INSERT INTO logs
VALUES
(NULL, CONCAT("Product ", NEW.name," is updated FROM Old Quantity is",OLD.quantity,". New quantity is ",NEW.quantity), CURRENT_TIMESTAMP);

END$$
DELIMITER ;

