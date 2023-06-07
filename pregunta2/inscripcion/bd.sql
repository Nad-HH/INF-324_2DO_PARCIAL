
CREATE TABLE usuarios (
  ci VARCHAR(10),
  rol VARCHAR(15),
  contrasenia VARCHAR(15)
);

INSERT INTO `usuarios`(`ci`, `rol`, `contrasenia`) VALUES ('111','estudiante','111');
INSERT INTO `usuarios`(`ci`, `rol`, `contrasenia`) VALUES ('222','estudiante','222');
INSERT INTO `usuarios`(`ci`, `rol`, `contrasenia`) VALUES ('333','kardex','333');
INSERT INTO `usuarios`(`ci`, `rol`, `contrasenia`) VALUES ('444','estudiante','444');
INSERT INTO `usuarios`(`ci`, `rol`, `contrasenia`) VALUES ('555','estudiante','555');
INSERT INTO `usuarios`(`ci`, `rol`, `contrasenia`) VALUES ('666','estudiante','666');


create table flujousuario
(
numerotramite int,
flujo varchar(3),
proceso varchar(3),
fechainicio datetime,
fechafin datetime,
usuario varchar(20)
);
INSERT INTO `flujousuario`(`numerotramite`, `flujo`, `proceso`, `fechainicio`, `fechafin`, `usuario`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]')

CREATE TABLE inscripcion (
  ci VARCHAR(10),
  numerotramite int,
  fecha_nac datetime,
  titulo_Academico varchar(30),
  nacionalidad varchar(30),
  departamento varchar(30),
  correo varchar(30),
  celular varchar(30),
  direccion varchar(30),
  grupo_sanguineo varchar(30)
);

INSERT INTO `inscripcion`(`ci`, `numerotramite`, `fecha_nac`, `titulo_Academico`, `nacionalidad`, `departamento`, `correo`, `celular`, `direccion`, `grupo_sanguineo`) 
VALUES ('111','100',null,null,null,null,null,null,null,null)

create table tramite
(
numerotramite int,
ci VARCHAR(10),
estado varchar(15),
fecha date
);

INSERT INTO `tramite`(`ci`, `numerotramite`, `estado`) VALUES ('111','100','pendiente')

CREATE TABLE persona (
  ci VARCHAR(10),
  nombre VARCHAR(15),
  paterno VARCHAR(15),
  materno VARCHAR(15)
);

INSERT INTO `persona`(`ci`, `nombre`, `paterno`, `materno`) VALUES ('111','Nadya','Huanca','Huaylliri')
INSERT INTO `persona`(`ci`, `nombre`, `paterno`, `materno`) VALUES ('222','Nad','Huanca','Huayll')
INSERT INTO `persona`(`ci`, `nombre`, `paterno`, `materno`) VALUES ('444','Nady','Huanca','Huayll')
INSERT INTO `persona`(`ci`, `nombre`, `paterno`, `materno`) VALUES ('555','Nad','Huanca','Huayll')
INSERT INTO `persona`(`ci`, `nombre`, `paterno`, `materno`) VALUES ('666','Nady','Huanca','Huayll')
INSERT INTO `persona`(`ci`, `nombre`, `paterno`, `materno`) VALUES ('333','david','flores','quispe')

create table flujo
(
    flujo varchar(3),
    proceso varchar(3),
    procesosiguiente varchar(3),
    tipo varchar(1),
    rol varchar(15),
    pantalla varchar(30)
)

insert into flujo values('F1','P1','P2','I','alumno','inicio');
insert into flujo values('F1','P2','P3','P','alumno','listado');
insert into flujo values('F1','P3','P4','I','alumno','envio');


insert into flujo values('F1',	'P1',	'P2',	'I',	'estudiante',	'inicia');
insert into flujo values('F1',	'P2',	'P3',	'P',	'estudiante',	'inscribe');
insert into flujo values('F1',	'P3',	null,	'C',	'kardex',	'requisitos');
insert into flujo values('F1',	'P4',	null,	'C',	'kardex',	'legitimos');
insert into flujo values('F1',	'P5',	'P6',	'P',	'kardex',	'obs');
insert into flujo values('F1',	'P6',	'P9',	'P',	'estudiante',	'fallas');
insert into flujo values('F1',	'P9',	null,	'C',	'kardex',	'requisitos');
insert into flujo values('F1',	'P7',	'P8',	'P',	'kardex',	'inscripcion');


create table flujocondicional
(
    flujo varchar(3),
    proceso varchar(3),
    procesoSI varchar(3),
    procesoNO varchar(3)
)



insert into flujocondicional values('F1',	'P3','P4','P5');
insert into flujocondicional values('F1',	'P4','P7','P8');
insert into flujocondicional values('F1',	'P9','P4','P8');



