create table sementara(
	id_sementara int auto_increment primary key,
	nim varchar(10) not null,
	nama varchar(50) not null,
	kd_matkul varchar(10) not null,
	kd_dosen varchar(10) not null,
	sks varchar(2) not null,
	semester varchar(5) not null
);