CREATE TABLE customers
(
    id INT(11) auto_increment PRIMARY KEY,
    name VARCHAR (256) NOT NULL,
    email VARCHAR (256) NOT NULL,
    gender CHAR (1) NOT NULL,
    password VARCHAR (256) NOT NULL
);