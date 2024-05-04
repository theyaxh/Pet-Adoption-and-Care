// Database Creation
CREATE DATABASE pawfect_pawtrails;

// User data storage from signup
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL,
    password VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

// Adoption requests details from adoption form
CREATE TABLE adoption_data (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    phone VARCHAR(20) NOT NULL,
    address TEXT NOT NULL,
    pet_type VARCHAR(50) NOT NULL,
    reason TEXT NOT NULL,
    submission_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

// Vet booking details from booking form
CREATE TABLE vet_booking_data (
    id INT AUTO_INCREMENT PRIMARY KEY,
    pet_name VARCHAR(100) NOT NULL,
    owner_name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    phone VARCHAR(20) NOT NULL,
    location VARCHAR(100) NOT NULL,
    preferred_date DATE NOT NULL,
    preferred_time TIME NOT NULL,
    reason TEXT,
    submission_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

// Volunteers details from volunteering form
CREATE TABLE volunteering_application_data (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    phone VARCHAR(20) NOT NULL,
    volunteering_area VARCHAR(100) NOT NULL,
    message TEXT,
    submission_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);