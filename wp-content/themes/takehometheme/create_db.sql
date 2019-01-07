DROP DATABASE IF EXISTS takehome; 
CREATE DATABASE takehome;
USE takehome;
CREATE TABLE personal_info (
    internal_id INT  NOT NULL AUTO_INCREMENT,
    first_name VARCHAR(255) NOT NULL,
    last_name VARCHAR(255) NOT NULL,
    email VARCHAR(60) NOT NULL,
    phone INT NOT NULL,
    home_address VARCHAR(1500) NOT NULL,
    PRIMARY KEY(internal_id)
);