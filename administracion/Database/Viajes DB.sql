DROP DATABASE IF EXISTS agencia;
CREATE DATABASE IF NOT EXISTS agencia;
USE agencia;
CREATE TABLE IF NOT EXISTS clientes (
 id int NOT NULL AUTO_INCREMENT,
 dni varchar(10) NOT NULL UNIQUE,
 nombre varchar(25) NOT NULL,
 apellidos varchar(45),
 correo varchar(45) NOT NULL UNIQUE,
 contrasenia varchar(45),
 direccion varchar(45) NOT NULL,
 PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*(NULL, dni, nombre apellidos correo fechaNacimiento)*/
/*ME DA ERROR DATA TRUNCATED EN FECHANACIMIENTO Y NO SE POR QUE, PREGUNTAR A SERGIO*/
INSERT INTO clientes VALUES (null, '06600900-S',
'Mario', 'Garcia', 'marihongo2000@gmail.com','geUkbtcBG8!kw@Hs', 'Calle Passeig Quiñónez, 19'
);
INSERT INTO clientes VALUES (null, '12345678-S',
'admin', 'istrador', 'admin@gmail.com','KFtog6R4E^VNU48a' ,'Calle Plaça Aguilar, 632, Entre suelo 4º'
);
INSERT INTO clientes VALUES (null, '23456789-S',
'Lucia', 'Ortiz', 'luciaortiz@gmail.com','Wq8SQ855LRq%Kk7j', 'Calle Ruela Tamez, 408, Bajos'
);
INSERT INTO clientes VALUES (null, '34567890-S',
'Juan', 'Marcos', 'juanmarcos@gmail.com', '3QRLo9iVPc4HQUF$','Calle Teresa 11 Bajo 3º'
);
INSERT INTO clientes VALUES (null, '45678901-S',
'Pedro', 'Sanchez', 'presidente@gmail.com', 'LEXAS$W3yw3p4s$j','Calle Praza Mara 5 2º E'
);
INSERT INTO clientes VALUES (null, '56789012-S',
'Mariano', 'Rajoy', 'marianorajoy@gmail.com','M56Jp3hgQP%9tco3','Calle Travesía Galván 6 3º F'
);
INSERT INTO clientes VALUES (null, '67890123-S',
'Francisco', 'Noese', 'fran@gmail.com', '8jCp3RE%EGDrTFdi','Calle Ruela Gael 81 2º D'
);
INSERT INTO clientes VALUES (null, '78901234-S',
'Isabel', 'Diaz', 'presidenta@gmail.com','%ftKHK3sLaUQoFuZ', 'Calle Ronda Villa 7 5º F'
);
INSERT INTO clientes VALUES (null, '89012345-S',
'Iker', 'Casillas', 'portero@gmail.com','9$RxtBKxe74sJvQn' ,'Calle Camino Duran 9 5º'
);
INSERT INTO clientes VALUES (null, '90123456-S',
'Angeles', 'Lakers', 'tripleee@gmail.com','U$um2gxS8sBnYgQy' ,'Calle Travessera Cedillo, 9'
);
CREATE TABLE IF NOT EXISTS alojamiento (
 id int NOT NULL AUTO_INCREMENT,
 nombreViaje varchar(45) NOT NULL,
 imagen varchar(45) NOT NULL,
 tipoEstancia varchar(15) NOT NULL,
 ubicacion varchar(45),
 precioPorNoche DOUBLE NOT NULL,
 PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*NULL, nombre, imagenPpal, tipoEstancia, ubicacion, precioPorNoche 
cargar el csv
*/

CREATE TABLE IF NOT EXISTS clientes_has_alojamiento (
 id int NOT NULL AUTO_INCREMENT,
 fechaInicio DATE NOT NULL,
 fechaFin DATE NOT NULL,
 clientes_id INT NOT NULL,
 alojamiento_id INT NOT NULL,
 PRIMARY KEY (id),
 CONSTRAINT FOREIGN KEY (clientes_id) REFERENCES clientes(id),
 CONSTRAINT FOREIGN KEY (alojamiento_id) REFERENCES alojamiento(id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*(NULL, fechaInicio, fechaFin, clientes_id, alojamiento_id)*/
INSERT INTO clientes_has_alojamiento VALUES (NULL, '2020-06-01', '2020-07-14', 1, 1);
INSERT INTO clientes_has_alojamiento VALUES (NULL, '2020-06-02', '2020-07-13', 1, 3);
INSERT INTO clientes_has_alojamiento VALUES (NULL, '2020-06-03', '2020-07-12', 2, 2);
INSERT INTO clientes_has_alojamiento VALUES (NULL, '2020-06-04', '2020-07-11', 3, 4);
INSERT INTO clientes_has_alojamiento VALUES (NULL, '2020-06-05', '2020-07-10', 4, 5);
INSERT INTO clientes_has_alojamiento VALUES (NULL, '2020-06-06', '2020-07-09', 5, 6);
INSERT INTO clientes_has_alojamiento VALUES (NULL, '2020-06-07', '2020-07-15', 6, 7);
INSERT INTO clientes_has_alojamiento VALUES (NULL, '2020-06-08', '2020-07-16', 7, 9);
INSERT INTO clientes_has_alojamiento VALUES (NULL, '2020-06-09', '2020-07-17', 8, 8);
INSERT INTO clientes_has_alojamiento VALUES (NULL, '2020-06-15', '2020-07-23', 9, 2);
INSERT INTO clientes_has_alojamiento VALUES (NULL, '2020-06-16', '2020-07-28', 10, 3);