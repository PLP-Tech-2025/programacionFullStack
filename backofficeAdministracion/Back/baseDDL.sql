create database if not exists proyecto_PLP_Tech;
use proyecto_PLP_Tech;

create table unidadHabitacional (
uni_id int not null auto_increment, 
uni_estado enum ('libre', 'ocupado') default 'libre' not null,
uni_tipo enum ('casa', 'edificio') default 'casa' not null,
uni_bloque varchar (12) not null, 
uni_numero int not null,
uni_fechaAsignacion date not null, 
primary key (uni_id)
);

create table pago (
pago_id int not null auto_increment, 
pago_metodo enum ('transferencia', 'efectivo') default 'transferencia' not null,
pago_cuota int not null, 
pago_fechaInicial date not null,
pago_fechaFinal date not null,
pago_comprobante blob not null, 
pago_estado enum ('realizado','no realizado','atrasado') default 'no realizado' not null, 
pago_tipo enum ('cuota','compensacion','recargo') default 'cuota' not null,
primary key(pago_id)
);

create table realiza (
uni_id int not null,
pago_id int not null,
primary key(uni_id, pago_id),
foreign key(uni_id) references unidadHabitacional (uni_id),
foreign key(pago_id) references pago (pago_id)
);

create table usuario (
  usr_id int not null auto_increment,
  usr_ci varchar(8) not null,
  usr_nombre varchar(100) not null,
  usr_apellido varchar(100) not null,
  usr_nac date not null,
  usr_email varchar(100) not null, 
  usr_pass varchar(255) not null,
  usr_estado enum ('pendiente', 'aceptado', 'rechazado') default 'pendiente' not null,
  usr_tel varchar(9) not null,
  usr_puedeTrabajar boolean default true not null,
  usr_fechaSolicitud date default NOW() not null, 
  uni_id int null,
  imagen varchar(100) default null,
  primary key (usr_id),
  foreign key (uni_id) references unidadHabitacional (uni_id)
);

create table socio (
  usr_id int not null,
  soc_fechaRegistro date not null,
  primary key (usr_id),
  foreign key (usr_id) references usuario(usr_id)
);

create table administrador (
  usr_id int not null,
  adm_esAdminActivo boolean default true not null,
  primary key (usr_id),
  foreign key (usr_id) references usuario(usr_id)
);

create table asamblea (
asamblea_id int not null auto_increment,
asamblea_fecha date not null, 
asamblea_acta blob not null, 
asamblea_descripcion varchar (255) not null, 
asamblea_tema varchar (64) not null,
primary key (asamblea_id)
);

create table gestiona (
usr_id int not null, 
asamblea_id int not null,
primary key (usr_id, asamblea_id),
foreign key (usr_id) references administrador (usr_id),
foreign key (asamblea_id) references asamblea (asamblea_id)
);

create table tarea (
tarea_id int not null auto_increment,
tarea_desc varchar (255) not null, 
tarea_cantidadHorasTrabajadas int not null,
tarea_fecha date not null, 
tarea_tipo enum ('trabajo','justificadas','compensacion') default 'trabajo' not null,
usr_id int not null,
primary key (tarea_id),
foreign key (usr_id) references usuario(usr_id)
);

create table historialDeCambios (
cambio_id int not null auto_increment,
cambio_descripcion varchar (255) not null,
cambio_fecha date not null,
cambio_entidadAfectada varchar (64) not null,
cambio_idAfectada int not null, 
usr_id int not null,
primary key (cambio_id),
foreign key (usr_id) references usuario (usr_id)
);