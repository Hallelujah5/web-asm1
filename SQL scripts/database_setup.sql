CREATE DATABASE IF NOT EXISTS company_php;

-- Create user
-- CREATE USER IF NOT exists 'assignment2_inquiry'@'localhost' IDENTIFIED BY 'admin';
-- GRANT ALL PRIVILEGES ON company_php.* TO 'assignment2_inquiry'@'localhost';
-- FLUSH PRIVILEGES;
-- drop user 'assigment2_inquiry'@'localhost';

-- drop table eoi_skills;

-- drop table skills;

-- drop table users;

-- drop table eoi;

-- drop table job_description;

-- Create table
use company_php;

CREATE TABLE IF NOT EXISTS job_description (
    job_ref_number CHAR(5) PRIMARY KEY NOT NULL, job_title VARCHAR(20) NOT NULL, job_descript TEXT NULL
);
INSERT INTO
    job_description (
        job_ref_number, job_title, job_descript
    )
VALUES (
        'DEF34', "Economic Analyst", "Research, collect, and analyze data to assess economic trends and develop forecasts."
    );

INSERT INTO
    job_description (
        job_ref_number, job_title, job_descript
    )
VALUES ('JKL78', "Software Engineer","The masterminds behind the digital tools and applications that shape our lives.");

CREATE TABLE IF NOT exists users (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY, password VARCHAR(20) NOT NULL, email VARCHAR(255) NOT NULL UNIQUE, phone_number VARCHAR(12) NOT NULL, banned BIT(1) DEFAULT 0, role BIT(1) DEFAULT 0
);

CREATE TABLE IF NOT exists eoi (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY, job_reference_number CHAR(5) NOT NULL, first_name VARCHAR(20) NOT NULL, last_name VARCHAR(20) NOT NULL, date_of_birth DATE NOT NULL, gender BIT(1) DEFAULT NULL, street_address VARCHAR(40) NOT NULL, suburb_town VARCHAR(40) NOT NULL, state CHAR(3) NOT NULL, postcode INT(4) NOT NULL, email VARCHAR(255) NOT NULL UNIQUE, phone_number VARCHAR(12) NOT NULL, other_skills VARCHAR(2000) DEFAULT NULL, cv_id VARCHAR(255) DEFAULT NULL, status ENUM('New', 'Current', 'Final') DEFAULT 'New', FOREIGN KEY (job_reference_number) REFERENCES job_description (job_ref_number)
);

CREATE TABLE IF NOT exists skills (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY, skill_name VARCHAR(50) NOT NULL UNIQUE
);

CREATE TABLE IF NOT exists eoi_skills (
    eoi_id INT NOT NULL, skill_id INT NOT NULL, FOREIGN KEY (eoi_id) REFERENCES eoi (id), FOREIGN KEY (skill_id) REFERENCES skills (id), PRIMARY KEY (eoi_id, skill_id)
);



-- 0 male, 1 female
-- 0 user, 1 manager
-- Sample
INSERT INTO
    users (
        email, phone_number, role, password
    )
VALUES (
        'johndoe@example.com', '0412345678', 0, 'password123'
    );

INSERT INTO
    users (
        email, phone_number, role, password
    )
VALUES (
        'jane@example.com', '0487654321', 1, 'password123'
    );

INSERT INTO
    eoi (
        job_reference_number, first_name, last_name, date_of_birth, gender, street_address, suburb_town, state, postcode, email, phone_number, status
    )
VALUES (
        'DEF34', 'John', 'Doe', '1990-01-01', 1, '1 Main Street', 'Anytown', 'NSW', 1234, 'johndoe@example.com', '0412345678', 1
    );

INSERT INTO
    eoi (
        job_reference_number, first_name, last_name, date_of_birth, gender, street_address, suburb_town, state, postcode, email, phone_number, status
    )
VALUES (
        'DEF34', 'Jane', 'Smith', '1995-07-15', 0, '22 Second Avenue', 'Bigtown', 'VIC', 3456, 'jane@example.com', '0487654321', 1
    );

INSERT INTO
    eoi (
        job_reference_number, first_name, last_name, date_of_birth, gender, street_address, suburb_town, state, postcode, email, phone_number, status
    )
VALUES (
        'JKL78', 'Lisa', 'Brown', '2000-03-08', 1, '44 Fourth Lane', 'Townsville', 'SA', 5678, 'lisaaabrown@example', '0456789012', 1
    );

INSERT INTO
    eoi (
        job_reference_number, first_name, last_name, date_of_birth, gender, street_address, suburb_town, state, postcode, email, phone_number, status
    )
VALUES (
        'JKL78', 'John', 'Deez', '1990-01-01', 1, '1 Main Street', 'Anytown', 'NSW', 1234, 'johnny2005@example.com', '0412345678', 1
    );

INSERT INTO
    skills (skill_name)
VALUES ('Java'),
    ('PHP'),
    ('Javascript'),
    ('C++');

INSERT INTO eoi_skills VALUES (1, 1);

INSERT INTO eoi_skills VALUES (1, 2);

INSERT INTO eoi_skills VALUES (1, 3);

INSERT INTO eoi_skills VALUES (2, 1);

INSERT INTO eoi_skills VALUES (2, 4);

INSERT INTO eoi_skills VALUES (3, 3);

INSERT INTO eoi_skills VALUES (3, 1);

INSERT INTO eoi_skills VALUES (3, 4);

INSERT INTO eoi_skills VALUES (4, 1);

INSERT INTO eoi_skills VALUES (4, 3);

INSERT INTO eoi_skills VALUES (4, 4);


select * from eoi;
