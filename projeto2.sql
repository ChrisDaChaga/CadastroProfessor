select * from semana
select * from materia
select *from permanencia
select  * from professor
drop table permanencia
drop table semana
drop table materia
drop table professor
drop table usuario

create table usuario(
	id serial not null primary key,
	email varchar(100),
	senha varchar(100)
);
insert into usuario(email,senha)
values('thiago@email','12345');

create table professor(
	id serial not null primary key,
	nome varchar(100)
);
insert into professor(nome)
values('oshiro');

create table semana(
	id serial not null primary key,
	dia varchar(100)
);
insert into semana(dia)
values('Segunda-Feira');
insert into semana(dia)
values('Terça-Feira');
insert into semana(dia)
values('Quarta-Feira');
insert into semana(dia)
values('Quinta-Feira');
insert into semana(dia)
values('Sexta-Feira');

select * from semana



create table materia(
	id serial not null primary key,
	descricao varchar(100)
);
insert into materia(descricao)
values('WEB3');

create table permanencia(
	id serial not null primary key,
	horario_a varchar(50),
	horario_b varchar(50),
	local varchar(100),
	materia_id int references materia(id),
	professor_id int references professor(id)
);
select * from materia
select * from professor


insert into permanencia(horario_a,horario_b,local,materia_id,professor_id)
values('11:30','12:30','sala B204',2,2);









































