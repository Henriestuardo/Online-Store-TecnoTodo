-- --------------------------------------------------------
-- Script para Base de Datos: Tienda en Línea - TecnoTodo.
-- --------------------------------------------------------

-- Se crea la base de datos, mientras no exista esta.
-- Se estable para soportar caracteres especiales, inclusive algunos elementos como emojis.
create database  if not exists tienda_linea_tecnotodo 
	character set utf8mb4
    collate utf8mb4_unicode_ci;

-- Se utiliza la base de datos para crear las tablas.
use tienda_linea_tecnotodo;

-- ---------------------------------------------------------------------------------------------
-- Script para crear la tabla usuarios.
-- Permitirá almacenar clientes e inclusive los usuarios internos (admin, empleado, supervisor).
-- ----------------------------------------------------------------------------------------------
create table usuarios (
	id_usuario INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(100) NOT NULL,
    apellido VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    password VARCHAR(150) NOT NULL COMMENT 'Hash seguro (bcrypt)',
    telefono VARCHAR(50) NOT NULL,
    rol ENUM('cliente', 'colaborador', 'admin') NOT NULL DEFAULT 'cliente',
    fecha_registro DATETIME DEFAULT CURRENT_TIMESTAMP,
    activo BOOLEAN NOT NULL DEFAULT TRUE
) ENGINE=InnoDB;

-- -------------------------------------------------------------
-- Tabla: tokens_invitacion
-- Tokens únicos para registro controlado de usuarios internos
-- -------------------------------------------------------------
CREATE TABLE tokens_invitacion (
    id_token INT PRIMARY KEY AUTO_INCREMENT,
    token VARCHAR(255) NOT NULL UNIQUE,
    rol_destino ENUM('colaborador', 'admin') NOT NULL,
    email_invitado VARCHAR(150) NULL,
    usado BOOLEAN NOT NULL DEFAULT FALSE,
    fecha_creacion DATETIME DEFAULT CURRENT_TIMESTAMP,
    fecha_expiracion DATETIME NOT NULL,
    creado_por INT NOT NULL,
    FOREIGN KEY (creado_por) REFERENCES usuarios(id_usuario) ON DELETE CASCADE
) ENGINE=InnoDB;

-- ------------------------------------------------------------------------------
-- Script de tabla categorías.
-- Estructura apta para jerarquía de categorías (soporta subcategorías ilimitadas)
-- ------------------------------------------------------------------------------
CREATE TABLE categorias (
    id_categoria INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(100) NOT NULL,
    descripcion TEXT,
    imagen VARCHAR(255),
    id_categoria_padre INT NULL,
    activa BOOLEAN NOT NULL DEFAULT TRUE,
    FOREIGN KEY (id_categoria_padre) REFERENCES categorias(id_categoria) ON DELETE SET NULL
) ENGINE=InnoDB;

-- --------------------------------------------------------
-- Script de tabla productos.
-- Catálogo de productos con SKU (codigo único en la tienda), precios y stock
-- --------------------------------------------------------
CREATE TABLE productos (
    id_producto INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(255) NOT NULL,
    descripcion TEXT,
    precio DECIMAL(10, 2) NOT NULL,
    precio_oferta DECIMAL(10, 2) NULL,
    sku VARCHAR(100) NOT NULL UNIQUE,
    stock INT NOT NULL DEFAULT 0,
    id_categoria INT NOT NULL,
    imagen_principal VARCHAR(255),
    activo BOOLEAN NOT NULL DEFAULT TRUE,
    fecha_creacion DATETIME DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (id_categoria) REFERENCES categorias(id_categoria) ON DELETE RESTRICT
) ENGINE=InnoDB;

-- --------------------------------------------------------------------------------
-- Script de tabla de imagenes de productos
-- Esta tabla permite almacenar varias imagenes, incluso si son del mismo producto
-- ---------------------------------------------------------------------------------
CREATE TABLE imagenes_productos (
    id_imagen INT PRIMARY KEY AUTO_INCREMENT,
    id_producto INT NOT NULL,
    url_imagen VARCHAR(255) NOT NULL,
    orden INT DEFAULT 0,
    FOREIGN KEY (id_producto) REFERENCES productos(id_producto) ON DELETE CASCADE
) ENGINE=InnoDB;

-- --------------------------------------------------------
-- Script de tabla de direcciones
-- Direcciones de envío y facturación por usuario
-- --------------------------------------------------------
CREATE TABLE direcciones (
    id_direccion INT PRIMARY KEY AUTO_INCREMENT,
    id_usuario INT NOT NULL,
    tipo_direccion ENUM('envio', 'facturacion') NOT NULL,
    calle VARCHAR(255) NOT NULL,
    ciudad VARCHAR(100) NOT NULL,
    departamento VARCHAR(100) NOT NULL,
    pais VARCHAR(100) NOT NULL DEFAULT 'Guatemala',
    codigo_postal VARCHAR(10),
    predeterminada BOOLEAN NOT NULL DEFAULT FALSE,
    nit VARCHAR(20) NULL COMMENT 'NIT para facturación (opcional en demo)',
    FOREIGN KEY (id_usuario) REFERENCES usuarios(id_usuario) ON DELETE CASCADE
) ENGINE=InnoDB;

-- ---------------------------------------------------------
-- Script tabla carritos
-- Carritos de compra (opcional: puede manejarse en sesión)
-- ---------------------------------------------------------
CREATE TABLE carritos (
    id_carrito INT PRIMARY KEY AUTO_INCREMENT,
    id_usuario INT NOT NULL,
    fecha_creacion DATETIME DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (id_usuario) REFERENCES usuarios(id_usuario) ON DELETE CASCADE
) ENGINE=InnoDB;

-- --------------------------------------------------------
-- Script de tabla de items_carrito
-- Almacena los productos que se encuentran en el carrito
-- --------------------------------------------------------
CREATE TABLE items_carrito (
    id_item INT PRIMARY KEY AUTO_INCREMENT,
    id_carrito INT NOT NULL,
    id_producto INT NOT NULL,
    cantidad INT NOT NULL DEFAULT 1 CHECK (cantidad > 0),
    precio_unitario DECIMAL(10, 2) NOT NULL,
    FOREIGN KEY (id_carrito) REFERENCES carritos(id_carrito) ON DELETE CASCADE,
    FOREIGN KEY (id_producto) REFERENCES productos(id_producto) ON DELETE RESTRICT
) ENGINE=InnoDB;

-- --------------------------------------------------------
-- Script de tabla ordenes
-- Pedidos realizados por los usuarios
-- --------------------------------------------------------
CREATE TABLE ordenes (
    id_orden INT PRIMARY KEY AUTO_INCREMENT,
    id_usuario INT NOT NULL,
    id_direccion_envio INT NOT NULL,
    id_direccion_facturacion INT NOT NULL,
    total DECIMAL(10, 2) NOT NULL,
    estado ENUM('pendiente', 'pagado', 'enviado', 'entregado', 'cancelado') NOT NULL DEFAULT 'pendiente',
    metodo_pago VARCHAR(50) NOT NULL COMMENT 'ej: tarjeta, efectivo, transferencia',
    referencia_pago VARCHAR(255) NULL COMMENT 'ID de transacción de pasarela (opcional)',
    fecha_orden DATETIME DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (id_usuario) REFERENCES usuarios(id_usuario) ON DELETE RESTRICT,
    FOREIGN KEY (id_direccion_envio) REFERENCES direcciones(id_direccion) ON DELETE RESTRICT,
    FOREIGN KEY (id_direccion_facturacion) REFERENCES direcciones(id_direccion) ON DELETE RESTRICT
) ENGINE=InnoDB;

-- --------------------------------------------------------
-- Script de tabla de detalles_orden
-- Productos incluidos en una orden
-- --------------------------------------------------------
CREATE TABLE detalles_orden (
    id_detalle INT PRIMARY KEY AUTO_INCREMENT,
    id_orden INT NOT NULL,
    id_producto INT NOT NULL,
    cantidad INT NOT NULL DEFAULT 1 CHECK (cantidad > 0),
    precio_unitario DECIMAL(10, 2) NOT NULL,
    FOREIGN KEY (id_orden) REFERENCES ordenes(id_orden) ON DELETE CASCADE,
    FOREIGN KEY (id_producto) REFERENCES productos(id_producto) ON DELETE RESTRICT
) ENGINE=InnoDB;

-- --------------------------------------------------------
-- Script de tabla de reseñas
-- Opiniones y calificaciones de productos por parte de los usuarios 
-- --------------------------------------------------------
CREATE TABLE reviews(
    id_review INT PRIMARY KEY AUTO_INCREMENT,
    id_producto INT NOT NULL,
    id_usuario INT NOT NULL,
    calificacion TINYINT NOT NULL CHECK (calificacion BETWEEN 1 AND 5),
    comentario TEXT,
    fecha_review DATETIME DEFAULT CURRENT_TIMESTAMP,
    aprobada BOOLEAN NOT NULL DEFAULT FALSE,
    FOREIGN KEY (id_producto) REFERENCES productos(id_producto) ON DELETE CASCADE,
    FOREIGN KEY (id_usuario) REFERENCES usuarios(id_usuario) ON DELETE CASCADE
) ENGINE=InnoDB;

-- --------------------------------------------------------
-- Índices para mejorar el rendimiento
-- --------------------------------------------------------
CREATE INDEX idx_usuarios_email ON usuarios(email);
CREATE INDEX idx_productos_categoria ON productos(id_categoria);
CREATE INDEX idx_productos_sku ON productos(sku);
CREATE INDEX idx_ordenes_usuario ON ordenes(id_usuario);
CREATE INDEX idx_direcciones_usuario ON direcciones(id_usuario);
CREATE INDEX idx_tokens_token ON tokens_invitacion(token);
CREATE INDEX idx_tokens_no_usados ON tokens_invitacion(usado, fecha_expiracion);
CREATE INDEX idx_reviews_producto ON reviews(id_producto);

-- ------------------------------------------------------------------
-- Elementos empleados en la creación de 