CREATE TABLE IF NOT EXISTS clients (

    id INT UNSIGNED AUTO_INCREMENT NOT NULL PRIMARY KEY,        
    clientFirstName VARCHAR(50) DEFAULT NULL,        
    clientLastName VARCHAR(50) DEFAULT NULL,        
    clientMarried TINYINT(1),        
    clientBirthDate DATE
    

) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1;
 