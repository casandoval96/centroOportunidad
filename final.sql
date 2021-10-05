create database empleo;
 use empleo;

create table tbusuario
 (
 usuid int(11) primary key,
 usutipodocumento varchar(30),
 usunombre varchar(30),
 usucontrasena varchar(10),
 usuestado bit,
 usurol varchar(15),
 usucorreo varchar(15),
 ususexo varchar(10),
 usufoto varchar(255)
 );

 create table tbcategoria 
 (
 cateid int(11) NOT NULL AUTO_INCREMENT primary key,
 catenombre varchar(50)
 );
 

create table tbnivel 
 (
 nivid int(11) NOT NULL AUTO_INCREMENT primary key,
 nivnombre varchar(50)
 );


 create table  tbempleado 
 (
 empid int(11) primary key,
 emptipodocumento int(50),
 empnombres varchar(30),
 empapellidos varchar(30),
 foreign key(empid) references tbusuario(usuid)
 );


 create table tbaspirante
 (
 aspcedulaaspirante int(11) primary key,
 aspnombre varchar(50),
 aspedad int(2),
 aspgenero varchar(11),
 foreign key(aspcedulaaspirante) references tbusuario(usuid)
 );

 create table tbhojadevida
 (
 hojid int(11) NOT NULL AUTO_INCREMENT primary key,		
 hojtipodocumento varchar(20),
 hojlugarexpedicion varchar(30),	
 hojnombres varchar(30),
 hojapellidos varchar(30),
 hojfechadenaci date,
 hojlugardenaci varchar(30),
 hojsexo varchar(30),
 hojestadocivil varchar(20),
 hojtelefono int(10),
 hojdireccion varchar(30),
 hojemail varchar(30),
 hojlicencia varchar(10),
 hojvehiculo varchar(10), 
 foreign key(hojid) references tbaspirante(aspcedulaaspirante) 
 );


 create table tbestudio
 (
 estid int(11) NOT NULL AUTO_INCREMENT primary key,
 esthojaid int(11),
 estnivel int(11),
 estnomtitulo varchar(30),
 estinstitucion text(50),
 foreign key(esthojaid) references tbhojadevida(hojid),
 foreign key(estnivel) references tbnivel(nivid)
 );

 create table tbexperiencia
 (
 expid int(11) NOT NULL AUTO_INCREMENT primary key,		
 exphojaid int(11),	
 expempresauno varchar(30),
 expcategoria int(11),
 expcargo text(50),
 expfechaingreso date,
 expfechasalida date,
 expfunciones text(50),
 foreign key(exphojaid) references tbhojadevida(hojid),
 foreign key(expcategoria) references tbcategoria(cateid)
 );




 create table tbofertas
 (
 ofeid int(11) NOT NULL AUTO_INCREMENT primary key,	
 ofeentidad varchar(30),
 ofenombre varchar(50),
 ofedescripcion text(50),
 ofesalario int(20),
 ofeidnivel int(11),
 ofeidcategoria int(11),
 ofeexperiencia int(10),
 ofefecha date,
 foreign key(ofeidnivel) references tbnivel(nivid),
 foreign key(ofeidcategoria) references tbcategoria(cateid)	
 );
 


 create table tbaplicacion
 (
 aplid int(11) NOT NULL AUTO_INCREMENT primary key,
 aploferta int(11),
 aplfecha date,
 aplhora time,
 aplhojadevida int(11),
 foreign key(aplhojadevida) references tbhojadevida(hojid),
 foreign key(aploferta) references tbofertas(ofeid) 	
 );




create table tbfinalista 
(
 finide int(11) NOT NULL AUTO_INCREMENT primary key,
 finaplid int(11),
 finseleccionador int(11),
 finfecha date,
 finhora time,
 finentrevista text,
 findecision varchar (5),
 foreign key(finaplid) references tbaplicacion(aplid),
 foreign key(finseleccionador) references tbusuario(usuid)	
);	





select aspcedulaaspirante,aspnombre,aspedad,aspgenero,aspcodigoprofesion,aspidagencia,profnombre,agenommbre 
FROM tbaspirante
INNER JOIN tbprofesion ON (aspcodigoprofesion=profidprofesion)
INNER JOIN tbagencia ON (aspidagencia=agenit) WHERE aspcedulaaspirante='1074187056';


select aspcedulaaspirante,aspnombre,aspedad,profnombre,agenommbre 
FROM tbaspirante
INNER JOIN tbprofesion ON (aspcodigoprofesion=profidprofesion)
INNER JOIN tbagencia ON (aspidagencia=agenit) where  profnombre="zootecnia";


select finide



select finide,finaplid,finseleccionador,finfecha,finhora 
from tbfinalista;  



select * from tbusuario where usurol="Seleccionador"

select finide,aploferta,ofeentidad,ofenombre,ofedescripcion,usunombre 
from tbfinalista
inner join tbaplicacion on(finaplid=aplid)
inner join tbofertas on(aploferta=ofeid) 
inner join tbhojadevida on(hojid=aplhojadevida) 
inner join tbaspirante on(aplhojadevida=aspcedulaaspirante)
inner join tbusuario on(aspcedulaaspirante=usuid)
where hojid = "1074187055";                   

select finide,ofeentidad,ofenombre,ofedescripcion,usunombre,finfecha,finhora,findecision,hojlugarexpedicion
from tbfinalista
inner join tbusuario on(finseleccionador=usuid)
inner join tbaplicacion on(finaplid=aplid)
inner join tbofertas on(ofeid=aploferta) 
inner join tbhojadevida on(aplhojadevida=hojid)
where aplhojadevida="1074187055";


select finide,ofeentidad,ofenombre,ofedescripcion,usunombre,finfecha,finhora,findecision,hojlugarexpedicion
from tbfinalista
inner join tbusuario on(finseleccionador=usuid)
inner join tbaplicacion on(finaplid=aplid)
inner join tbofertas on(ofeid=aploferta) 
inner join tbhojadevida on(aplhojadevida=hojid)
where usuid ="3213543";