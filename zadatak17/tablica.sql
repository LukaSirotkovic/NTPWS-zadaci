CREATE TABLE countries (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50) NOT NULL
);

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50) NOT NULL,
    lastname VARCHAR(50) NOT NULL,
    country_id INT NOT NULL,
    FOREIGN KEY (country_id) REFERENCES countries(id)
);

-- Unos država
INSERT INTO countries (name) VALUES 
('Argentina'),
('Australia'),
('Germany'),
('United States');

-- Unos korisnika
INSERT INTO users (name, lastname, country_id) VALUES
('Bob', 'Johnson', 1),
('Charlie', 'Brown', 1),
('Frank', 'Miller', 1),
('Grace', 'Moore', 1),
('Winnie', 'Young', 2);
