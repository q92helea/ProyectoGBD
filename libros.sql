create table libros (
id number primary key,
titulo varchar2(100),
autor varchar2(50),
pagina number
);

create or replace procedure grabarlibros (ptitulo varchar2,pautor varchar2, ppaginas varchar2 ) is 
v_id number (3):=0; 
begin 
select nvl(max(id),0) into v_id from libros; 
insert into libros values (v_id+1,ptitulo,pautor,ppaginas); 
end;

begin
grabarlibros ('Oracle','Richard Elios',250);
end;