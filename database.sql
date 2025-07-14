-- database.sql
CREATE DATABASE IF NOT EXISTS farmers_db;
USE farmers_db;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    email VARCHAR(100) UNIQUE,
    password VARCHAR(100),
    role ENUM('farmer', 'buyer')
);