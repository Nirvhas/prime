
-- comando para crear base de datos 
create database dbTienda
-- comando para crear una tabla / solo se puede ejecutar una vez
use dbtienda

create table Clientes (
	id int not null primary key auto_increment,
	nombre varchar(100) not null,
	celular varchar(10) null,
	correo varchar (50)
)

-- comando para insertar una tabla  / solo se puede ejecutar una vez
insert into clientes values ( 1,'Juan Perez' , '76543210', 'juan@gmail.com' )
insert into clientes (nombre, celular,correo) values ( 'Maria Delgado' , '77665544' , 'maria@gmail.com' )
-- comando para eliminar datos de una tabla
delete from clientes where id = 3
-- comando para editar datos de una tabla 
update  clientes set correo = 'perez@gmail.com' , celular = '66000010' where id = 1
-- comando para  mostrar datos de una tabla 
select  id , nombre ,