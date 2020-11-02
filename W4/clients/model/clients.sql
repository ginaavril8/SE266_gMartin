CREATE TABLE IF NOT EXISTS clients (

    id INT UNSIGNED AUTO_INCREMENT NOT NULL PRIMARY KEY,        
    clientFirstName VARCHAR(50) DEFAULT NULL,        
    clientLastName VARCHAR(50) DEFAULT NULL,        
    clientMarried TINYINT(1),        
    clientBirthDate DATE
    clientAge INT

) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1;


INSERT INTO clients (clientFirstName, clientLastName, clientMarried, clientBirthDate, clientAgee) VALUES ('Jamie', 'Donald', 0, '1992-4-3', '28');

INSERT INTO clients (clientFirstName, clientLastName, clientMarried, clientBirthDate, clientAgee) VALUES ('Alex', 'Bon', 0, '1990-7-10', '30');



