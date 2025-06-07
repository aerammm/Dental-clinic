CREATE DATABASE IF NOT EXISTS appointments_db;
USE appointments_db;

CREATE TABLE IF NOT EXISTS appointments (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    date DATE,
    time TIME
);
