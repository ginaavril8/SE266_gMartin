CREATE TABLE IF NOT EXISTS customers (

    id INT UNSIGNED AUTO_INCREMENT NOT NULL PRIMARY KEY,        
    customerFirstName VARCHAR(50) DEFAULT NULL,  
    customerLastName VARCHAR(50) DEFAULT NULL,
    customerUsername VARCHAR(200) DEFAULT NULL,
    customerPassword VARCHAR(200) DEFAULT NULL,
    customerEmail NVARCHAR(50) DEFAULT NULL,       
    customerBirthDate DATE
    

) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1;
 

 CREATE TABLE IF NOT EXISTS customerOrders 
 (customerOrderId INT UNSIGNED AUTO_INCREMENT NOT NULL PRIMARY KEY,        
    customerId INT UNSIGNED,        
    customerOrderDate DATE,        
    customerOrderItem NVARCHAR (50),    
    customerCharge INT,        
    customerReward INT,                     
    FOREIGN KEY (customerId) REFERENCES customers(id) ON DELETE CASCADE
 
 ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1;



INSERT INTO customers (customerUsername, customerPassword)VALUES ("coffeecustomer", sha1("coffee"));





SELECT * FROM customers;

SELECT * FROM customerOrders;

SELECT * FROM customerOrders;
INSERT INTO customerOrders (customerOrderDate, customerOrderItem, customerCharge, customerReward) VALUES ("2020-10-08", "Cakepop", 4, 3);


INSERT INTO customers (customerFirstName, customerLastName, customerUsername, customerPassword, customerEmail, customerBirthDate) VALUES ("Nick", "Beck", "nick90", sha1("c0ff33"), "nick@aol.com", "1988-8-12")

