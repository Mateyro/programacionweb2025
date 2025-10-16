CREATE DATABASE datos;

USE datos;

CREATE TABLE proveedores (
    razon INT PRIMARY KEY,
    nombre VARCHAR(50) NOT NULL,
    correo VARCHAR(50) NOT NULL,
    telefono INT NOT NULL,
    producto VARCHAR(100) NOT NULL
);