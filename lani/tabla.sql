CREATE TABLE edades(
    id INT PRIMARY KEY AUTO_INCREMENT,
    edad INT NOT NULL UNIQUE
    );
CREATE TABLE colonias(
     id INT PRIMARY KEY AUTO_INCREMENT,
    nombres_colonias VARCHAR(100) UNIQUE NOT NULL 
    );
CREATE TABLE especialidades(
     id INT PRIMARY KEY AUTO_INCREMENT,
    nombre_especialidad VARCHAR(100) UNIQUE NOT NULL
    );
CREATE TABLE generos(
     id INT PRIMARY KEY AUTO_INCREMENT,
    nombre_genero VARCHAR(50) UNIQUE NOT NULL
    );