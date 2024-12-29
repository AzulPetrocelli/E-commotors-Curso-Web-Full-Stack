-- Crear base de datos
CREATE DATABASE IF NOT EXISTS motorcycle_management;
USE motorcycle_management;

-- Tabla de marcas de motos
CREATE TABLE IF NOT EXISTS marca (
    id_marca INT PRIMARY KEY AUTO_INCREMENT,
    nombre_marca VARCHAR(255) NOT NULL,
    descripcion_marca TEXT,
    estado_marca VARCHAR(50)
);

-- Tabla de categorías para clasificar motos
CREATE TABLE IF NOT EXISTS categoria (
    id_categoria INT PRIMARY KEY AUTO_INCREMENT,
    nombre_categoria VARCHAR(255) NOT NULL
);

-- Tabla principal de motos
CREATE TABLE IF NOT EXISTS moto (
    id_moto INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(255) NOT NULL,
    estado VARCHAR(50),
    precio_moto DECIMAL(10,2),
    foto_moto VARCHAR(255),
    id_categoria INT,
    id_marca INT,
    titulo_card TEXT,
    descripcion_moto TEXT,
    imagenes TEXT,
    color VARCHAR(50),
    FOREIGN KEY (id_marca) REFERENCES marca(id_marca),
    FOREIGN KEY (id_categoria) REFERENCES categoria(id_categoria)
);

-- Tabla de mensajes del sistema
CREATE TABLE IF NOT EXISTS mensaje (
    id_mensaje INT PRIMARY KEY AUTO_INCREMENT,
    nombre_mensaje VARCHAR(255),
    tipo_mensaje VARCHAR(100),
    descripcion_mensaje TEXT,
    productos_consultados VARCHAR(255)
);

-- Insertar una marca Honda si no existe
INSERT INTO marca (nombre_marca, descripcion_marca, estado_marca)
SELECT 'Honda', 'Una marca reconocida de motocicletas', 'usado'
WHERE NOT EXISTS (
    SELECT 1 FROM marca WHERE nombre_marca = 'Honda'
);

-- Insertar una categoría Enduro si no existe
INSERT INTO categoria (nombre_categoria)
SELECT 'Enduro'
WHERE NOT EXISTS (
    SELECT 1 FROM categoria WHERE nombre_categoria = 'Enduro'
);

-- Insertar una moto Honda CBR si no existe
INSERT INTO moto (nombre, estado, precio_moto, foto_moto, id_categoria, id_marca, titulo_card, descripcion_moto, imagenes, color)
SELECT 
    'Honda CBR', 
    'nuevo', 
    18000.00, 
    'hondaCBR.jpg', 
    (SELECT id_categoria FROM categoria WHERE nombre_categoria = 'Enduro' LIMIT 1), 
    (SELECT id_marca FROM marca WHERE nombre_marca = 'Honda' LIMIT 1), 
    'Descripción:', 
    'Descripción detallada de la Honda CBR', 
    'honda_cbr.jpg', 
    'rojo'
WHERE NOT EXISTS (
    SELECT 1 FROM moto WHERE nombre = 'Honda CBR'
);



