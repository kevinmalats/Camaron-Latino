-- Created by Vertabelo (http://vertabelo.com)
-- Last modification date: 2018-01-26 23:39:20.548

-- tables
-- Table: credencial
CREATE TABLE credencial (
    id_credencial serial  NOT NULL,
    usuario varchar(10)  NOT NULL,
    clave varchar(10)  NOT NULL,
    CONSTRAINT credencial_pk PRIMARY KEY (id_credencial)
);

-- Table: detalle_producto
CREATE TABLE detalle_producto (
    id_detalle_producto serial  NOT NULL,
    nombre varchar(20)  NOT NULL,
    fecha date  NOT NULL,
    descripcion varchar(50)  NOT NULL,
    id_producto int  NOT NULL,
    CONSTRAINT detalle_producto_pk PRIMARY KEY (id_detalle_producto)
);

-- Table: detalle_registro
CREATE TABLE detalle_registro (
    id_detalle_registro serial  NOT NULL,
    fecha date  NOT NULL,
    descripcion varchar(50)  NOT NULL,
    id_registro int  NOT NULL,
    CONSTRAINT detalle_registro_pk PRIMARY KEY (id_detalle_registro)
);

-- Table: detalle_servicio
CREATE TABLE detalle_servicio (
    id_detalle_Servicio serial  NOT NULL,
    nombre varchar(20)  NOT NULL,
    fecha date  NOT NULL,
    descripcion varchar(50)  NOT NULL,
    id_servicio int  NOT NULL,
    CONSTRAINT detalle_servicio_pk PRIMARY KEY (id_detalle_Servicio)
);

-- Table: producto
CREATE TABLE producto (
    id_producto serial  NOT NULL,
    id_usuario int  NOT NULL,
    id_tipo_producto int  NOT NULL,
    CONSTRAINT producto_pk PRIMARY KEY (id_producto)
);

-- Table: registro
CREATE TABLE registro (
    id_registro serial  NOT NULL,
    descripcion varchar(45)  NOT NULL,
    id_credencial int  NOT NULL,
    CONSTRAINT registro_pk PRIMARY KEY (id_registro)
);

-- Table: rol
CREATE TABLE rol (
    id_rol serial  NOT NULL,
    nombre varchar(10)  NOT NULL,
    descripcion varchar(30)  NOT NULL,
    CONSTRAINT rol_pk PRIMARY KEY (id_rol)
);

-- Table: servicio
CREATE TABLE servicio (
    id_servicio serial  NOT NULL,
    id_usuario int  NOT NULL,
    id_tipo_servicio int  NOT NULL,
    CONSTRAINT servicio_pk PRIMARY KEY (id_servicio)
);

-- Table: sugerencia
CREATE TABLE sugerencia (
    id_sugerencia serial  NOT NULL,
    fecha date  NOT NULL,
    mensaje varchar(50)  NOT NULL,
    id_usuario int  NOT NULL,
    CONSTRAINT sugerencia_pk PRIMARY KEY (id_sugerencia)
);

-- Table: tipo_producto
CREATE TABLE tipo_producto (
    id_tipo_producto serial  NOT NULL,
    nombre varchar(20)  NOT NULL,
    descripcion varchar(60)  NOT NULL,
    CONSTRAINT tipo_producto_pk PRIMARY KEY (id_tipo_producto)
);

-- Table: tipo_servicio
CREATE TABLE tipo_servicio (
    id_tipo_servicio serial  NOT NULL,
    nombre varchar(20)  NOT NULL,
    descripcion varchar(60)  NOT NULL,
    CONSTRAINT tipo_servicio_pk PRIMARY KEY (id_tipo_servicio)
);

-- Table: usuario
CREATE TABLE usuario (
    id_usuario serial  NOT NULL,
    nombre varchar(30)  NOT NULL,
    identificacion varchar(15)  NOT NULL,
    correo varchar(30)  NOT NULL,
    telefono varchar(10)  NOT NULL,
    direccion varchar(45)  NOT NULL,
    id_credencial int  NOT NULL,
    id_rol int  NOT NULL,
    CONSTRAINT usuario_pk PRIMARY KEY (id_usuario)
);

-- End of file.

