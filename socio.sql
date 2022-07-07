Id  number(3) primary key, 

nombre varchar2(50) not null, 

direccion  varchar2(50) not null, 

fechnac date, 

tfno number(9)); 

create or replace procedure grabarsocio(nombre varchar2,direccion varchar2, fechnac date,tfno number ) is 
v_id number (3):=0; 
begin 
select nvl(max(id),0) into v_id from libros; 
insert into socios values (v_id+1,direccion,fechnac,tfno); 
end;

begin
grabarsocio ('Jacinto','Caldero Nº1',2000-FEB-1,652456524);
end;