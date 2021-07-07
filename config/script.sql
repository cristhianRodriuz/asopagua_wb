DROP DATABASE IF EXISTS asopagua_db;
CREATE DATABASE IF NOT EXISTS asopagua_db;
USE asopagua_db;
CREATE TABLE IF NOT EXISTS categorias(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    categoria VARCHAR(50) NOT NULL 
);
INSERT INTO categorias VALUES('100','Leche Cruda'),('200','Quesos'),('300','Yogurt');
CREATE TABLE IF NOT EXISTS usuarios(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    dni VARCHAR(12) NOT NULL,
    nombre VARCHAR(50) NOT NULL,
    apellido VARCHAR(50) NOT NULL,
    telefono VARCHAR(12) NOT NULL,
    celular VARCHAR(12) NOT NULL,
    email VARCHAR(90) NOT NULL,
    username VARCHAR(50) NOT NULL,
    password VARCHAR(100) NOT NULL,
    rol VARCHAR(50) NOT NULL,
    imagen VARCHAR(200) NOT NULL,
    registrado_por VARCHAR(60) NOT NULL,
    fecha_creacion TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);
INSERT INTO usuarios VALUES(1,'0940501596','Cristhian','Rodriguez','042963358','0981135286','crisrodam1996@gmail.com','cris96','e45222e4c92f7cfd9fae29cb3e5db444','Administrador','userDefault.png','Cristhian Rodriguez','2020-12-18 00:48:40');
CREATE TABLE IF NOT EXISTS clientes(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    dni VARCHAR(12) NOT NULL,
    nombre VARCHAR(50) NOT NULL,
    apellido VARCHAR(50) NOT NULL,
    telefono VARCHAR(12) NOT NULL,
    celular VARCHAR(12) NOT NULL,
    email VARCHAR(90) NOT NULL,
    provincia VARCHAR(50) NOT NULL,
    canton VARCHAR(50) NOT NULL,
    parroquia VARCHAR(50) NOT NULL,
    direccion VARCHAR(100) NOT NULL
);
INSERT INTO clientes VALUES(1,'0940501596','Cristhian','Rodriguez','0981135286','0981135286','crisrodam1996@gmail.com','Guayas','El Empalme','Velasco Ibarra','');

CREATE TABLE IF NOT EXISTS productos(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    id_categoria INT NOT NULL,
    codigo VARCHAR(10) NOT NULL,
    nombre VARCHAR(50)NOT NULL,
    descripcion VARCHAR(60) NOT NULL,
    imagen VARCHAR(100) NOT NULL,
    stock INT NOT NULL,
    precio_publico DECIMAL(5,2) NOT NULL,
    precio_mayorista DECIMAL(5,2) NOT NULL,
    d_precio_mayorista VARCHAR(100) NOT NULL,
    precio_minorista DECIMAL(5,2),
    d_precio_minorista VARCHAR(100) NOT NULL,
    fecha_add TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN  KEY(id_categoria) REFERENCES categorias(id)
);
INSERT INTO productos VALUES(1,100,'101','Leche',"Leche Fría",'',100,0.60,0.52,'Desde 1LT hasta 250LT',0.60,'','2020-12-18 00:48:40'),
(2,100,'102','Leche','Leche sin enfriar','',100,0.50,0.47,'Desde 1LT hasta 250LT',0.50,'','2020-12-18 00:48:40'),
(3,200,'201','Queso fresco','Queso fresco 500gr','',100,2.50,2.25,'Desde 100LB',2.35,'Desde 11LB hasta 99LB','2020-12-18 00:48:40'),
(4,200,'202','Queso criollo','Queso criollo 1lb','',100,1.80,1.65,'Desde 100LB',1.70,'Desde 11LB hasta 99LB','2020-12-18 00:48:40'),
(5,200,'203','Queso redondo','Queso redondo','',100,2.00,1.80,'Desde 100LB',1.90,'Desde 11LB hasta 99LB','2020-12-18 00:48:40'),
(6,300,'301','Yogurt de Mora','Yogurt 200ml','',100,0.50,0.40,'Desde 12U',0.45,'Desde 5U','2020-12-18 00:48:40'),
(7,300,'302','Yogurt de Durazno','Yogurt 200ml','',100,0.50,0.40,'Desde 12U',0.45,'Desde 5U','2020-12-18 00:48:40'),
(8,300,'303','Yogurt de Fresa','Yogurt 200ml','',100,0.50,0.40,'Desde 12U',0.45,'Desde 5U','2020-12-18 00:48:40'),
(9,300,'304','Yogurt de Guanabana','Yogurt 200ml','',100,0.50,0.40,'Desde 12U',0.45,'Desde 5U','2020-12-18 00:48:40'),
(10,300,'305','Yogurt de Mora','Yogurt 1L','',100,1.60,1.40,'Desde 12U',1.50,'Desde 5U','2020-12-18 00:48:40'),
(11,300,'306','Yogurt de Durazno','Yogurt 1L','',100,1.60,1.40,'Desde 12U',1.50,'Desde 5U','2020-12-18 00:48:40'),
(12,300,'307','Yogurt de Fresa','Yogurt 1L','',100,1.60,1.40,'Desde 12U',1.50,'Desde 5U','2020-12-18 00:48:40'),
(13,300,'308','Yogurt de Guanabana','Yogurt 1L','',100,1.60,1.40,'Desde 12U',1.50,'Desde 5U','2020-12-18 00:48:40'),
(14,300,'309','Yogurt de Mora','Yogurt 2L','mora_yogourt.jpg',100,2.60,2.30,'Desde 12U',2.40,'Desde 5U','2020-12-18 00:48:40'),
(15,300,'310','Yogurt de Durazno','Yogurt 2L','durazno_yogourt.jpg',100,2.60,2.30,'Desde 12U',2.40,'Desde 5U','2020-12-18 00:48:40'),
(16,300,'311','Yogurt de Fresa','Yogurt 2L','fresa_yogourt.jpg',100,2.60,2.30,'Desde 12U',2.40,'Desde 5U','2020-12-18 00:48:40'),
(17,300,'312','Yogurt de Guanabana','Yogurt 2L','guanabana_yogourt.jpg',100,2.60,2.30,'Desde 12U',2.40,'Desde 5U','2020-12-18 00:48:40');

CREATE TABLE IF NOT EXISTS pedidos(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    codigo VARCHAR(30) NOT NULL,
    id_cliente INT NOT NULL,
    total DECIMAL(5,2) NOT NULL,
    fecha_creacion TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    estado VARCHAR(20) NOT NULL,
    FOREIGN KEY(id_cliente) REFERENCES clientes(id)
);
CREATE TABLE IF NOT EXISTS detalle_pedido(
    id_detalle INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    id_pedido INT NOT NULL,
    nombre_producto VARCHAR(50) NOT NULL,
    cantidad INT NOT NULL,
    precio DECIMAL(5,2)
);
CREATE TABLE IF NOT EXISTS noticias(
    id INT NOT  NULL PRIMARY KEY AUTO_INCREMENT,
    imagen VARCHAR(100) NOT NULL,
    titulo VARCHAR(100) NOT NULL,
    descripcion VARCHAR(100) NOT NULL,
    publicador VARCHAR(50) NOT NULL,
    fecha_creacion TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);
CREATE TABLE IF NOT EXISTS mensajes(
	id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	nombres VARCHAR(100) NOT NULL,
	telefono VARCHAR(12) NOT NULL,
	email VARCHAR(100) NOT NULL,
	mensaje VARCHAR(200) NOT NULL,
	fecha_creacion TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
	CREATE TABLE IF NOT EXISTS historial_logueo(
	id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	fecha_logueo TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
	id_usuario INT NOT NULL,
	FOREIGN KEY(id_usuario) REFERENCES usuarios(id)
);
