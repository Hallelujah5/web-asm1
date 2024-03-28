CREATE DATABASE  IF NOT EXISTS company_php;

-- Create user
-- CREATE USER IF NOT exists 'assignment2_inquiry'@'localhost' IDENTIFIED BY 'admin';
-- GRANT ALL PRIVILEGES ON company_php.* TO 'assignment2_inquiry'@'localhost';
-- FLUSH PRIVILEGES;
-- drop user 'assigment2_inquiry'@'localhost';

drop table skills;
drop table users;


-- Create table
use company_php;


CREATE TABLE IF NOT exists users (
  id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  password VARCHAR(20) NOT NULL,
  email VARCHAR(255) NOT NULL UNIQUE,
  phone_number VARCHAR(12) NOT NULL,
  status BIT(1) DEFAULT 1,
  role BIT(1) DEFAULT 0
);


CREATE TABLE IF NOT exists eoi (
  id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  job_reference_number CHAR(5) DEFAULT NULL,
  first_name VARCHAR(20) NOT NULL,
  last_name VARCHAR(20) NOT NULL,
  date_of_birth DATE NOT NULL,
  gender BIT(1) DEFAULT NULL,
  street_address VARCHAR(40) NOT NULL,
  suburb_town VARCHAR(40) NOT NULL,
  state CHAR(3) NOT NULL,
  postcode INT(4) NOT NULL,
  email VARCHAR(255) NOT NULL UNIQUE,
  phone_number VARCHAR(12) NOT NULL,
  status ENUM('New', 'Current', 'Final') DEFAULT 'New'
);

CREATE TABLE IF NOT exists skills (
  id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  skill_name VARCHAR(50) NOT NULL,
  user_id INT NOT NULL,
  FOREIGN KEY (user_id) REFERENCES eoi(id)
);
-- 0 male, 1 female
-- 0 user, 1 manager
-- Sample
INSERT INTO users (email, phone_number, role, password)
VALUES ('johndoe@example.com', '0412345678', 0, 'password123');

select * from users;
