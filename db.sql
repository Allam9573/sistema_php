use db_sistema;

drop table productos;
create table productos(
    id int primary key auto_increment,
    nombre varchar(100) not null,
    descripcion text not null,
    precio decimal(10,2) not null,
    fecha_ingreso timestamp default current_timestamp,
    estado boolean default true
)
select * from productos;

desc db_sistema.productos
insert into `productos`(nombre, descripcion, precio, estado) values("Bote","bote para agua",235,true);