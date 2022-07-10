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
CREATE TABLE paciente 
(
    cod_paciente INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    direccion VARCHAR(50) NOT NULL,
    fecha_nacimiento DATE NOT NULL,
    fk_persona INT NOT NULL,
    fk_poblacion INT NOT NULL,
    FOREIGN KEY (fk_persona) REFERENCES persona (codigo_persona),
    FOREIGN KEY (fk_poblacion) REFERENCES poblacion (cod_poblacion)
)
CREATE TABLE especialidad 
(
    cod_especialidad INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nombre_especialidad VARCHAR(50) NOT NULL
)
CREATE TABLE medico
(
    cod_medico INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    fk_especialidad INT NOT NULL,
    fk_persona INT NOT NULL,
    FOREIGN KEY (fk_especialidad) REFERENCES especialidad(cod_especialidad),
    FOREIGN KEY (fk_persona) REFERENCES persona (codigo_persona)
)
CREATE TABLE habitacion 
(
    cod_habitacion INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    num_camas INT NOT NULL
)
CREATE TABLE ingreso
(
    cod_ingreso INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    fecha_ingreso DATE NOT NULL,
    num_cama INT NOT NULL,
    fk_paciente INT NOT NULL,
    fk_medico INT NOT NULL,
    fk_habitacion INT NOT NULL,
    FOREIGN KEY (fk_paciente) REFERENCES paciente(paciente),
    FOREIGN KEY (fk_medico) REFERENCES medico (cod_medico),
    FOREIGN KEY (fk_habitacion) REFERENCES habitacion(cod_habitacion)
)