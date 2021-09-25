
create procedure llamarusuario( nom varchar(30),clav varchar(30))
select *  from tbusuario 
where  usunombre=nom and usucontrasena=clav;



CREATE Procedure insertarasp(ide varchar(11))
INSERT INTO tbaspirante(`aspcedulaaspirante`,`aspnombre`,`aspedad`,`aspgenero`) VALUES (ide,'','','');


CREATE Procedure insertarhoj(ide varchar(11))
INSERT INTO tbhojadevida(`hojid`, `hojtipodocumento`, `hojlugarexpedicion`, `hojnombres`, `hojapellidos`, `hojfechadenaci`, `hojlugardenaci`, `hojsexo`, `hojestadocivil`, `hojtelefono`, `hojdireccion`, `hojemail`, `hojlicencia`, `hojvehiculo`) VALUES (ide,'','','','','','','','','','','','','');





create procedure llamarhoja(ide varchar(30))
select *  from tbhojadevida 
where  	hojausuid=ide;



create procedure llamardatos(ide varchar(30))
select *  from tbdatospersonales 
where  	datid=ide;

create procedure llamarexperiencia(ide varchar(30))
select *  from tbexperiencia 
where  	expid=ide;


create procedure llamarestudios(ide varchar(30))
select *  from tbestudios 
where  	estid=ide;


select estid,esthojaid,nivnombre,estnomtitulo,estinstitucion from tbestudio
inner join tbnivel
on estnivel=nivid where estnivel=1074189147;

select ofeid,ofeentidad,ofenombre,ofedescripcion,ofesalario,nivnombre,catenombre,ofeexperiencia,ofefecha from tbofertas
inner join tbnivel
on ofeidnivel=nivid
inner join tbcategoria
on ofeidcategoria=cateid;

select aplid,ofeid,ofeentidad,ofenombre,ofedescripcion,ofesalario,nivnombre,catenombre,ofeexperiencia,aplhora,aplhojadevida from tbaplicacion
inner join tbofertas
on aploferta=ofeid
inner join tbnivel
on ofeidnivel=nivid
inner join tbcategoria
on ofeidcategoria=cateid where aplhojadevida=;


select aplid,ofenombre,aplfecha,aplhora,aplhojadevida from tbaplicacion
inner join tbofertas
on ofeid=aploferta


select finide,finaplid,psinombre,finfecha,finhora from tbfinalista
inner join tbpsicologo
on psiidentificacion=finpsicologo;
