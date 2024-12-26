-- Create database
CREATE DATABASE IF NOT EXISTS motorcycle_management;
USE motorcycle_management;

-- Tabla de marcas de motos
CREATE TABLE IF NOT EXISTS marca (
    id_marca INT PRIMARY KEY AUTO_INCREMENT,
    nombre_marca VARCHAR(255),
    descripcion_marca TEXT,
    estado_marca VARCHAR(50)
);

-- Tabla principal de motos
CREATE TABLE IF NOT EXISTS moto (
    id_moto INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(255),
    estado VARCHAR(50),
    precio_base DECIMAL(10,2),
    precio_noche DECIMAL(10,2),
    foto_moto VARCHAR(255),
    id_categoria INT,
    id_marca INT,
    knowledge_node TEXT,
    descripcion_node TEXT,
    imagenes TEXT,
    color VARCHAR(50),
    FOREIGN KEY (id_marca) REFERENCES marca(id_marca),
    FOREIGN KEY (id_categoria) REFERENCES categoria(id_categoria)
);

-- Tabla de categorías para clasificar motos
CREATE TABLE IF NOT EXISTS categoria (
    id_categoria INT PRIMARY KEY AUTO_INCREMENT,
    nombre_categoria VARCHAR(255),
    estado_categoria VARCHAR(50),
    network_categoria TEXT
);

-- Tabla de mensajes del sistema
CREATE TABLE IF NOT EXISTS mensaje (
    id_mensaje INT PRIMARY KEY AUTO_INCREMENT,
    nombre_mensaje VARCHAR(255),
    tipo_mensaje VARCHAR(100),
    descripcion_mensaje TEXT,
    productos_consultados VARCHAR(255)
);

-- Tabla de accesorios
CREATE TABLE IF NOT EXISTS accesorio (
    id_accesorio INT PRIMARY KEY AUTO_INCREMENT,
    nombre_accesorio VARCHAR(255),
    precio_accesorio DECIMAL(10,2),
    foto_accesorio VARCHAR(255),
    tipo_de_accesorio INT,
    descripcion_accesorio TEXT,
    FOREIGN KEY (tipo_de_accesorio) REFERENCES tipo_de_accesorio(id_tipo)
);

-- Tabla de tipos de accesorios
CREATE TABLE IF NOT EXISTS tipo_de_accesorio (
    id_tipo INT PRIMARY KEY AUTO_INCREMENT,
    nombre_tipo VARCHAR(255)
);

-- Tabla de tipos de repuestos
CREATE TABLE IF NOT EXISTS tipo_de_repuesto (
    id_repuesto INT PRIMARY KEY AUTO_INCREMENT,
    nombre_repuesto VARCHAR(255)
);

-- Tabla de repuestos
CREATE TABLE IF NOT EXISTS repuesto (
    id_repuesto INT PRIMARY KEY AUTO_INCREMENT,
    nombre_accesorio VARCHAR(255),
    precio_accesorio DECIMAL(10,2),
    estado_accesorio VARCHAR(50),
    foto_accesorio VARCHAR(255),
    tipo_de_repuesto INT,
    descripcion_accesorio TEXT,
    FOREIGN KEY (tipo_de_repuesto) REFERENCES tipo_de_repuesto(id_repuesto)
);

-- Tabla de compatibilidad entre repuestos y motos
CREATE TABLE IF NOT EXISTS compatibilidad_repuesto (
    id_repuesto INT,
    id_moto INT,
    id_modelo INT,
    FOREIGN KEY (id_repuesto) REFERENCES repuesto(id_repuesto),
    FOREIGN KEY (id_moto) REFERENCES moto(id_moto),
    PRIMARY KEY (id_repuesto, id_moto)
);

-- Tabla de modelos
CREATE TABLE IF NOT EXISTS modelo (
    id_modelo INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(255),
    descripcion_modelo TEXT,
    motos_modelo TEXT
);

-- Tabla de relación entre motos y accesorios
CREATE TABLE IF NOT EXISTS moto_accesorio (
    id_moto INT,
    id_accesorio INT,
    FOREIGN KEY (id_moto) REFERENCES moto(id_moto),
    FOREIGN KEY (id_accesorio) REFERENCES accesorio(id_accesorio),
    PRIMARY KEY (id_moto, id_accesorio)
);

CREATE INDEX idx_moto_categoria ON moto(id_categoria);
CREATE INDEX idx_moto_marca ON moto(id_marca);
CREATE INDEX idx_repuesto_tipo ON repuesto(tipo_de_repuesto);
CREATE INDEX idx_nombre_moto ON moto(nombre);
CREATE INDEX idx_nombre_marca ON marca(nombre_marca);
CREATE INDEX idx_nombre_accesorio ON accesorio(nombre_accesorio);
CREATE INDEX idx_accesorio_tipo ON accesorio(tipo_de_accesorio);
CREATE INDEX idx_modelo_nombre ON modelo(nombre);


-- CODIGO DED EJEMPLO PARA PROBAR UNA MOTO EN LAS VIEWS

-- Insertar una marca Honda si no existe
INSERT INTO marca (nombre_marca, descripcion_marca, estado_marca) 
SELECT 'Honda', 'Una marca reconocida de motocicletas', 'activo'
WHERE NOT EXISTS (
    SELECT 1 FROM marca WHERE nombre_marca = 'Honda'
);

-- Insertar una categoría Deportiva si no existe
INSERT INTO categoria (nombre_categoria, estado_categoria, network_categoria) 
SELECT 'Deportiva', 'activo', 'Sport bikes description'
WHERE NOT EXISTS (
    SELECT 1 FROM categoria WHERE nombre_categoria = 'Deportiva'
);

-- Insertar una moto Honda CBR
INSERT INTO moto (nombre, estado, precio_base, precio_noche, foto_moto, id_categoria, id_marca, knowledge_node, descripcion_node, imagenes, color) 
VALUES (
    'Honda CBR', 
    'nuevo', 
    18000.00, 
    130.00, 
    'hondaCBR.jpg', 
    (SELECT id_categoria FROM categoria WHERE nombre_categoria = 'Deportiva' LIMIT 1), 
    (SELECT id_marca FROM marca WHERE nombre_marca = 'Honda' LIMIT 1), 
    'Conocimiento sobre Honda CBR', 
    'Descripción detallada de la Honda CBR', 
    'honda_cbr.jpg', 
    'rojo'
);


