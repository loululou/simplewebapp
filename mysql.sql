CREATE DATABASE hacker_db;

USE hacker_db;

CREATE TABLE hacker_table(
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL
);
