CREATE DATABASE appointment_system;
USE appointment_system;

CREATE TABLE appointments (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    email VARCHAR(100),
    date DATE,
    time TIME,
    message TEXT
);