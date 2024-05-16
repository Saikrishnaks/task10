-- Create the database
CREATE DATABASE IF NOT EXISTS project;

-- Switch to the newly created database
USE project;

-- Create a new user
CREATE USER IF NOT EXISTS 'Krishna'@'localhost' IDENTIFIED BY 'Ilovekrishna@123';

-- Grant privileges to the user for the database
GRANT ALL PRIVILEGES ON user.* TO 'Krishna'@'localhost';

-- Flush privileges to apply changes
FLUSH PRIVILEGES;

-- Create the users table
CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(50) NOT NULL,
    last_name VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL,
    phone_no VARCHAR(15) NOT NULL,
    password VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

