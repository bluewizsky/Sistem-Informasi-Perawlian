create table mhs(
	id_mhs int primary key auto_increment,
	nim varchar(10) not null,
	nama_mhs varchar(30)  not null,
	pass_mhs varchar(30) not null,
	prodi varchar(20) not null,
	angkatan varchar(20) not null,
	kelas varchar(4) not null
);

insert into mhs values
	(null,'12001','mhs 001','12001','1','2012','a'),
	(null,'12002','mhs 002','12002','1','2012','a'),
	(null,'12003','mhs 003','12003','1','2012','a'),
	(null,'12004','mhs 004','12004','1','2012','a'),
	(null,'12005','mhs 005','12005','1','2012','a'),
	(null,'12006','mhs 006','12006','1','2012','a'),
	(null,'12007','mhs 007','12007','1','2012','a'),
	(null,'12008','mhs 008','12008','1','2012','a'),
	(null,'12009','mhs 009','12009','1','2012','a'),
	(null,'12010','mhs 010','12010','1','2012','a'),
	(null,'12011','mhs 011','12011','1','2012','b'),
	(null,'12012','mhs 012','12012','1','2012','b'),
	(null,'12013','mhs 013','12013','1','2012','b'),
	(null,'12014','mhs 014','12014','1','2012','b'),
	(null,'12015','mhs 015','12015','1','2012','b'),
	(null,'12016','mhs 016','12016','1','2012','b'),
	(null,'12017','mhs 017','12017','1','2012','b'),
	(null,'12018','mhs 018','12018','1','2012','b'),
	(null,'12019','mhs 019','12019','1','2012','b'),
	(null,'12020','mhs 020','12020','1','2012','b'),
	(null,'12021','mhs 021','12021','2','2012','c'),
	(null,'12022','mhs 022','12022','2','2012','c'),
	(null,'12023','mhs 023','12023','2','2012','c'),
	(null,'12024','mhs 024','12024','2','2012','c'),
	(null,'12025','mhs 025','12025','2','2012','c'),
	(null,'12026','mhs 026','12026','2','2012','c'),
	(null,'12027','mhs 027','12027','2','2012','c'),
	(null,'12028','mhs 028','12028','2','2012','c'),
	(null,'12029','mhs 029','12029','2','2012','c'),
	(null,'12030','mhs 030','12030','2','2012','c'),
	(null,'12031','mhs 031','12031','2','2012','d'),
	(null,'12032','mhs 032','12032','2','2012','d'),
	(null,'12033','mhs 033','12033','2','2012','d'),
	(null,'12034','mhs 034','12034','2','2012','d'),
	(null,'12035','mhs 035','12035','2','2012','d'),
	(null,'12036','mhs 036','12036','2','2012','d'),
	(null,'12037','mhs 037','12037','2','2012','d'),
	(null,'12038','mhs 038','12038','2','2012','d'),
	(null,'12039','mhs 039','12039','2','2012','d'),
	(null,'12040','mhs 040','12040','2','2012','d');
	
create table prodi(
	kd_prodi varchar(5) primary key,
	nama_prodi varchar(30) not null
);

insert into prodi values
('1','Pendidikan Ilmu Komputer'),
('2','Ilmu Komputer');

create table PA(
	id_PA int auto_increment primary key,
	kd_dosen varchar(10) not null,
	kelas varchar(3) not null,
	angkatan varchar(10) not null
);