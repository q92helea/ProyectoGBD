create table usuarios (
id number(4) primary key,
nombre varchar2(30) not null,
email varchar2(40) not null,
pass varchar2(40) not null
);

create table datos_accesos (
id number(4) primary key,
numeroaccesos number(5),
fechaultimoacceso date
);

alter table datos_accesos add constraint fk_accesos foreign key (id) references usuarios(id);

insert into usuarios values (1,'usuario1','usuario1@gmail.com',1234);
insert into usuarios values (2,'usuario2','usuario2@gmail.com',1234);

insert into datos_accesos values (1,null,null);
insert into datos_accesos values (2,null,null);

commit;

create or replace procedure comprobarusuario (p_email varchar2, p_pass varchar2 ) is 

 num number(2) ;

 v_id number (4); 

 v_contador number(2):=0; 


begin 


     select count(*) into v_contador from usuarios where email=p_email and pass=p_pass ; 

     if (v_contador =0 )  then 

         select max(id ) into v_id from usuarios ; 


         insert into usuarios values (v_id+1,p_email,p_pass) ; 

         insert into datos_accesos values (v_id+1,1,sysdate);


        -- el usuario no está registrado 

        -- si el usuario no existe  y es la primera vez que se loguea .. entonces hay que darlo de alta en usuarios y actualizar los datos de acceso a 1. 


        else 

        -- consulta sql a la tabla usuarios para comprobar si existe 

         -- tengo en cuenta que existe 

             select id into v_id from usuarios where email=p_email and pass=p_pass ; 


         -- actualizar los accesos al sitio web del usuario que se ha logeado.


         update datos_accesos set numeroaccesos=nvl(numeroaccesos,0)+1 where id=v_id; 

         update datos_accesos set fechaultimoacceso=sysdate where id=v_id; 



   end if; 



end;