CREATE TABLE persona
(
    codigo_persona INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nombre VARCHAR(20) NOT NULL,
    apellido1 VARCHAR(20) NOT NULL,
    apellido2 VARCHAR(20) NOT NULL,
    telefono VARCHAR(20) NOT NULL
)
CREATE TABLE provincia
(
    cod_provincia INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nombre_provincia VARCHAR(30) NOT NULL
)
CREATE TABLE poblacion 
(
    cod_poblacion INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    cp INT NOT NULL,
    fk_provincia INT NOT NULL,
    FOREIGN KEY (fk_provincia) REFERENCES provincia (cod_provincia)
)
