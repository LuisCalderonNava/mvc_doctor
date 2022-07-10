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
