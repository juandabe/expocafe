DROP DATABASE expocafe_trial;

CREATE DATABASE expocafe_trial;

USE expocafe_trial;

CREATE TABLE `permanencia` (
	`id` int(2) NOT NULL AUTO_INCREMENT,
	`lote` TEXT(10) NOT NULL,
	`id_exportador` TEXT NOT NULL,
	`razon_social` TEXT(200) NOT NULL,
	`remesa` TEXT NOT NULL,
	`sacos` int NOT NULL,
	`bodega` TEXT NULL,
	`fecha` TEXT NULL,
	`fecha_plan` TEXT NULL,
	`dias_en_bodega` TEXT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `pesosdescargue` (
	`id` int(2) NOT NULL AUTO_INCREMENT,
	`lote` TEXT(10) NOT NULL,
	`id_exportador` TEXT NOT NULL,
	`tara` TEXT NOT NULL,
	`kilos` TEXT NOT NULL,
	`sacos` int NOT NULL,
	`fecha` TEXT NULL,
	`tipo_empaque` TEXT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `embalaje` (
	`id` int(2) NOT NULL AUTO_INCREMENT,
	`lote` TEXT(10) NOT NULL,
	`id_exportador` TEXT NOT NULL,
	`proforma` TEXT NOT NULL,
	`totalkilos` int NOT NULL,
	`rpssacos` int NOT NULL,
	`rpscontenedor` TEXT not NULL,
	`fecha` datetime not NULL,
	`rpsseq` int NOT NULL,
	`rpshora` TEXT NOT NULL,
	`motonave` TEXT not NULL,
	`totalsacos` int not NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `suppliesinventory` (
	`id` int(10) NOT NULL AUTO_INCREMENT,
	`client` int(2) NOT NULL,
	`bag_quantity` int NOT NULL,
	`fique_quantity` DATETIME NOT NULL,
	`date_inventary` DATETIME NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `permission` (
	`id` int(10) NOT NULL AUTO_INCREMENT,
	`client` int(2) NOT NULL,
	`id_item` int NOT NULL,
	`date_start` DATETIME NOT NULL,
	`date_end` DATETIME NOT NULL,
	PRIMARY KEY (`id`)
);


CREATE TABLE `user` (
	`id` int(2) NOT NULL AUTO_INCREMENT,
	`nit` TEXT(10) NOT NULL,
	`password` TEXT(200) NOT NULL,
	`date_access` DATE NULL,
	`id_rol` int NOT NULL,
	`id_exportador` TEXT NOT NULL,
	`name` TEXT NULL,
	`email` TEXT NULL,
	`ip_remote_server` TEXT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `rol` (
	`id` int NOT NULL AUTO_INCREMENT,
	`name` TEXT NULL,
	`description` TEXT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `bill` (
	`id` int NOT NULL AUTO_INCREMENT,
	`total_bill` int NULL,
  	`client` int NOT NULL,
	`date_registration` DATE NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `billdetailitem` (
  	`id` int NOT NULL AUTO_INCREMENT,
	`id_bill` int NOT NULL,
	`id_item` int NOT NULL,
	`date_registration` DATE NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `item` (
	`id` int NOT NULL AUTO_INCREMENT,
	`description` TEXT NOT NULL,
  	`price` int NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `pqr` (
	`id` int NOT NULL AUTO_INCREMENT,
	`type` int NOT NULL,
	`name` TEXT NOT NULL,
  	`id_located` TEXT NOT NULL,
  	`id_client` int NOT NULL,
	`description` TEXT NULL,
	`body` longtext NULL,
	`state` int NOT NULL,
	`reply` longtext NULL,
	`date_create` DATE NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `document` (
	`id` int NOT NULL AUTO_INCREMENT,
	`name` TEXT NOT NULL,
	`document_path_adjunt` TEXT NOT NULL,
  	`active` TEXT NOT NULL,
	`date` DATE NOT NULL,
	`type` TEXT NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `clientdocument` (
	`id` int NOT NULL AUTO_INCREMENT,
  	`id_document` int NOT NULL,
	`document_path_adjunt` TEXT NOT NULL,
	`state` int NOT NULL,
  `observation` TEXT NOT NULL,
	`date` DATE NOT NULL,
	`client` int NOT NULL,
	PRIMARY KEY (`id`)
);


CREATE TABLE `auditeventuser` (
	`id` int NOT NULL AUTO_INCREMENT,
	`id_event` int NOT NULL,
	`date_event` DATE NOT NULL,
	`user_event` int NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `auditevent` (
	`id` int NOT NULL AUTO_INCREMENT,
	`name` TEXT NOT NULL,
	`description` TEXT NULL,
	PRIMARY KEY (`id`)
);


CREATE TABLE `statedocument` (
	`id` int(2) NOT NULL AUTO_INCREMENT,
	`name` TEXT NULL,
  `description` TEXT NULL,
	PRIMARY KEY (`id`)
);


CREATE TABLE `statepqr` (
	`id` int NOT NULL AUTO_INCREMENT,
	`name` TEXT NULL,
	`description` TEXT NULL,
	PRIMARY KEY (`id`)
);


CREATE TABLE `typepqr` (
	`id` int NOT NULL AUTO_INCREMENT,
	`name` TEXT NULL,
	`description` TEXT NULL,
	PRIMARY KEY (`id`)
);


ALTER TABLE `suppliesinventory` ADD CONSTRAINT `SUPPLIESINVENTORY_fk0` FOREIGN KEY (`client`) REFERENCES `user`(`id`);

ALTER TABLE `permission` ADD CONSTRAINT `PERMISSION_fk0` FOREIGN KEY (`client`) REFERENCES `user`(`id`);
ALTER TABLE `permission` ADD CONSTRAINT `PERMISSION_fk1` FOREIGN KEY (`id_item`) REFERENCES `item`(`id`);

ALTER TABLE `user` ADD CONSTRAINT `USER_fk0` FOREIGN KEY (`id_rol`) REFERENCES `rol`(`id`);

ALTER TABLE `bill` ADD CONSTRAINT `BILL_fk0` FOREIGN KEY (`client`) REFERENCES `user`(`id`);

ALTER TABLE `billdetailitem` ADD CONSTRAINT `BILL_DETAILS_fk0` FOREIGN KEY (`id_item`) REFERENCES `item`(`id`);

ALTER TABLE `billdetailitem` ADD CONSTRAINT `BILL_DETAILS_fk1` FOREIGN KEY (`id_bill`) REFERENCES `bill`(`id`);

ALTER TABLE `pqr` ADD CONSTRAINT `PQR_fk0` FOREIGN KEY (`id_client`) REFERENCES `user`(`id`);
ALTER TABLE `pqr` ADD CONSTRAINT `pqr_fk1` FOREIGN KEY (`type`) REFERENCES `typepqr`(`id`);
ALTER TABLE `pqr` ADD CONSTRAINT `pqr_fk2` FOREIGN KEY (`state`) REFERENCES `statepqr`(`id`);

ALTER TABLE `clientdocument` ADD CONSTRAINT `CLIENT_DOCUMENTS_fk0` FOREIGN KEY (`client`) REFERENCES `user`(`id`);
ALTER TABLE `clientdocument` ADD CONSTRAINT `CLIENT_DOCUMENTS_fk1` FOREIGN KEY (`id_document`) REFERENCES `document`(`id`);
ALTER TABLE `clientdocument` ADD CONSTRAINT `CLIENT_DOCUMENTS_fk2` FOREIGN KEY (`state`) REFERENCES `statedocument`(`id`);

ALTER TABLE `auditeventuser` ADD CONSTRAINT `AUDIT_EVENT_USER_fk0` FOREIGN KEY (`user_event`) REFERENCES `user`(`id`);

ALTER TABLE `auditeventuser` ADD CONSTRAINT `AUDIT_EVENT_USER_fk1` FOREIGN KEY (`id_event`) REFERENCES `auditevent`(`id`);

INSERT INTO statedocument (id, name, description ) VALUES ('','POR ACTUALIZAR', '');
INSERT INTO statedocument (id, name, description ) VALUES ('','RECHAZADO', '');
INSERT INTO statedocument (id, name, description ) VALUES ('','ACEPTADO', '');

INSERT INTO statepqr (id, name, description ) VALUES ('','ABIERTA', '');
INSERT INTO statepqr (id, name, description ) VALUES ('','EN PROCESO', '');
INSERT INTO statepqr (id, name, description ) VALUES ('','RECHAZADO', '');
INSERT INTO statepqr (id, name, description ) VALUES ('','COMPLETADA', '');

INSERT INTO typepqr(id, name, description ) VALUES ('','PETICION', '');
INSERT INTO typepqr(id, name, description ) VALUES ('','QUEJA', '');
INSERT INTO typepqr(id, name, description ) VALUES ('','RECURSO', '');

INSERT INTO auditevent(id, name, description ) VALUES ('','LOGIN', '');
INSERT INTO auditevent(id, name, description ) VALUES ('','LOGOUT', '');
INSERT INTO auditevent(id, name, description ) VALUES ('','MENU PRINCIPAL', '');
INSERT INTO auditevent(id, name, description ) VALUES ('','LISTADO MIS PQRS', '');
INSERT INTO auditevent(id, name, description ) VALUES ('','NUEVA PQR', '');
INSERT INTO auditevent(id, name, description ) VALUES ('','VER PQR', '');
INSERT INTO auditevent(id, name, description ) VALUES ('','BORRAR PQR', '');
INSERT INTO auditevent(id, name, description ) VALUES ('','MIS DOCUMENTOS ACTUALIZADOS', '');
INSERT INTO auditevent(id, name, description ) VALUES ('','DOCUMENTOS ACTUALIZADOS', '');
INSERT INTO auditevent(id, name, description ) VALUES ('','ACTUALIZAR DOCUMENTOS', '');
INSERT INTO auditevent(id, name, description ) VALUES ('','VER DETALLE DE USUARIO', '');
INSERT INTO auditevent(id, name, description ) VALUES ('','MODIFICAR USUARIO', '');

-- INSERT INTO ROL (ID, NAME, DESCRIPTION ) VALUES ('','CLIENTE', '');
-- INSERT INTO ROL (ID, NAME, DESCRIPTION ) VALUES ('','COLABORADOR', '');
-- 
-- INSERT INTO USER (ID, NIT, PASSWORD, DATE_ACCESS, ID_ROL, NAME, IP_SERVER_REMOTE ) VALUES ('','123123', 'MICLAVE', '2015/09/08', 1, 'NOMBRE 1', '123.23.34.12');
-- INSERT INTO USER (ID, NIT, PASSWORD, DATE_ACCESS, ID_ROL, NAME, IP_SERVER_REMOTE ) VALUES ('','123123', 'MICLAVE', '2015/09/08', 1, 'NOMBRE 2', '123.23.34.12');
-- INSERT INTO USER (ID, NIT, PASSWORD, DATE_ACCESS, ID_ROL, NAME, IP_SERVER_REMOTE ) VALUES ('','123123', 'MICLAVE', '2015/09/08', 1, 'NOMBRE 3', '123.23.34.12');
-- INSERT INTO USER (ID, NIT, PASSWORD, DATE_ACCESS, ID_ROL, NAME, IP_SERVER_REMOTE ) VALUES ('','123123', 'MICLAVE', '2015/09/08', 1, 'NOMBRE 4', '123.23.34.12');
-- 
-- 