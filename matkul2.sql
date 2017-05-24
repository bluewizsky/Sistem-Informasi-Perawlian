create database tubes;

use tubes;

create table matkul(
	id_matkul int primary key auto_increment,
	kd_matkul varchar(10) not null,
	nama_matkul varchar(40) not null,
	sks int not null,
	id_semester int not null,
	status varchar(10) not null,
	prodi varchar(10) not null,
	kd_dosen varchar(10) not null
);


insert into matkul values
	('','KU108','Pendidikan jasmani dan Olah Raga','2','1','wajib','1','0001'),
	('','KD300','Landasan Pendidikan','2','1','wajib','1','0002'),
	('','MA300','Matematika Dasasr','3','1','wajib','1','0003'),
	('','MA301','Fisika Umum','3','1','wajib' ,'1','0004'),
	('','MA302','Kimia Umum','3','1','wajib' ,'1','0005'),
	('','MA303','Biologi Umum','3','1','wajib' ,'1','0006'),
	('','MA304','Pengantar Teknologi Informasi','2','1','wajib','1','0007' ),
	
	('','KU109','Pendidikan Agama','2','2','wajib','1','0008' ),
	('','KD302','Bahasa Indonesia','2','2','wajib','1','0009' ),
	('','KD301','Algoritma dan Pemrograman 1','2','2','wajib','1','0010' ),
	('','MA305','Rangkaian Elektronik','2','2','wajib','1','0011' ),
	('','MA306','Kalkulus','3','2','wajib','1','0012' ),
	('','MA307','Bahasa Inggris','2','2','wajib','1','0013' ),
	('','MA308','Struktur Data','3','2','wajib','1','0014' ),
	('','MA309','Pemrograman Visual','3','2','wajib','1','0015' ),
	
	('','IK311','Algoritma dan Pemrograman 2','3','3','wajib','1','0016' ),
	('','IK330','Basis Data','2','3','wajib','1','0017' ),
	('','IK351','Matematika Diskret','2','3','wajib','1','0018' ),
	('','KU105','Pendidikan Kewarganegaraan','2','3','wajib','1','0019' ),
	('','KD303','Kurikulum dan Pembelajaran','3','3','wajib','1','0020' ),
	('','KD304','Penelolaan Pendidikan','2','3','wajib','1','0021' ),
	
	('','IK500','Belajar dan Pembelajaran Ilmu Komputer','2','4','wajib' ,'1','0022'),
	('','IK501','Evaluasi Pembelajaran Ilmu Komputer','3','4','wajib','1','0023' ),
	('','IK502','Perencanaan Pembelajaran Ilmu Komputer','3','4','wajib','1','0024' ),
	('','IK352','Aljabar Linier dan Matriks','2','4','wajib','1','0025' ),
	('','IK420','Arsitektur dan Organisasi Komputer','3','4','wajib','1','0026' ),
	('','IK353','Statistika','3','4','wajib','1','0027' ),
	('','IK450','Logika Informatika','2','4','wajib','1','0028' ),
	('','IK301','Konsep Teknologi','2','4','pilihan','1','0029' ),
	('','IK480','Pemrograman Internet','2','4','pilihan','1','0030' ),
	('','IK432','Metodologi Berorientasi Objek','3','4','pilihan','1','0031' ),
	('','IK331','Sistem Basis Data','3','4','pilihan','1','0031' ),
	('','IK530','Sistem informasi','3','4','pilihan','1','0032' ),
	('','IK411','Analisis dan Desain Algorista','3','4','pilihan','1','0033' ),
	

	('','KU107','Pengetahuan Lingkungan SosBudTek','2','5','wajib','1','0034' ),
	('','IK503','Media Pembelajaran Ilmu Komputer','3','5','wajib','1','0035' ),
	('','IK307','Rekayasa Perangkat Lunak','3','5','wajib','1','0036' ),
	('','IK451','Metode Numerik','3','5','wajib','1','0037' ),
	('','IK321','Sistem Digital','3','5','wajib','1','0038' ),
	('','IK422','Sistem Operasi','4','5','wajib','1','0039' ),
	

	('','KU303','Seminar Pendidikan Agama','2','6','wajib','1','0040' ),
	('','IK400','Kuliah Kerja Nyata(KKN)','2','6','wajib','1','0041' ),
	('','IK504','Metode Penelitian Pendidikan Ilmu Komputer','3','6','wajib','1','0042' ),
	('','IK443','Pengajaran Berbasis Komputer','2','6','wajib','1','0043' ),
	('','IK580','e-learning','2','6','wajib','1','0044' ),
	('','IK492','Seminar','3','6','wajib','1','0045' ),
	
	('','IK440','Teknik Multimedia','3','6','pilihan','1','0046' ),
	('','IK441','Grafika Komputer','3','6','pilihan','1','0047' ),
	('','IK442','Aplikasi Komputer Grafis','3','6','pilihan','1','0048' ),
	('','IK551','Teknik Simulasi dan Pemodelan','3','6','pilihan','1','0049' ),
	('','IK412','Kriptografi dan Keamanan Informasi','3','6','pilihan','1','0050' ),
	('','IK540','Interaksi Manusia dan Komputer','3','6','pilihan','1','0051' ),
	('','IK481','Pemrograman Berorientasi Objek','3','6','pilihan','1','0052' ),
	('','IK430','Basis Data Non Relasional','3','6','pilihan','1','0053' ),
	('','IK431','Basis Data Terdistribusi','3','6','pilihan','1','0054' ),
	('','IK532','Sistem Informasi Akuntansi','3','6','pilihan','1','0055' ),
	

	('','IK590','Program Latihan Profesi (PLP)','4','7','wajib','1','0056' ),
	('','IK421','Jaringan Komputer','3','7','wajib','1','0057' ),
	('','IK531','Sistem Informasi Pendidikan','3','7','wajib','1','0058' ),
	('','IK493','Komputer dan Masyarakat','2','7','wajib','1','0059' ),


	('','IK491','Kapita Selekta','3','8','wajib','1','0060' ),
	('','IK598','Skripsi','6','8','wajib','1','0061' ),
	('','IK599','Ujian Sidang','0','8','wajib','1','0062' ),

	('','IK460','Kecerdasan Buatan','3','8','pilihan','1','0063' ),
	

	('','KU108','Pendidikan jasmani dan Olah Raga','2','1','wajib','2','0064' ),
	('','MA300','Matematika Dasasr','3','1','wajib','2','0065' ),
	('','MA301','Fisika Umum','3','1','wajib','2','0066' ),
	('','MA302','Kimia Umum','3','1','wajib','2','0067' ),
	('','MA303','Biologi Umum','3','1','wajib','2','0068' ),
	('','MA304','Pengantar Teknologi Informasi','2','1','wajib','2','0069' ),
	('','IK301','Konsep Teknologi','2','1','wajib','2','0070' ),


	('','KU109','Pendidikan Agama','2','2','wajib','2','0071' ),
	('','KD300','Bahasa Indonesia','2','2','wajib','2','0072' ),
	('','KD301','Algoritma dan Pemrograman 1','2','2','wajib','2','0073' ),
	('','MA305','Rangkaian Elektronika','2','2','wajib','2','0074' ),
	('','MA306','Kalkulus','3','2','wajib','2','0075' ),
	('','MA307','Bahasa Inggris','2','2','wajib','2','0076' ),
	('','MA308','Struktur Data','3','2','wajib','2','0077' ),
	('','MA309','Pemrograman Visual','3','2','wajib','2','0078' ),



	('','IK311','Algoritma dan Pemrograman 2','3','3','wajib','2','0079' ),
	('','IK321','Sistem Digital','3','3','wajib','2','0080' ),
	('','IK330','Basis Data','2','3','wajib','2','0081' ),
	('','IK351','Matematika Diskret','2','3','wajib','2','0082' ),
	('','KU105','Pendidikan Kewarganegaraan','2','3','wajib','2','0083' ),
	
	('','IK340','Disain Web','2','3','pilihan','2','0084' ),
	('','IK450','Logika Informatika','2','3','pilihan','2','0085' ),
	

	('','IK331','Sistem Basis Data','3','4','wajib','2','0086' ),
	('','IK352','Aljabar Linier dan Matriks','3','4','wajib','2','0087' ),
	('','IK353','Statistika','3','4','wajib','2','0088' ),
	('','IK370','Rekayasa Perangkat Lunak','3','4','wajib','2','0089' ),
	('','IK420','Arsitektur Komputer','3','4','wajib','2','0090' ),
	
	('','IK432','Metodologi Berorientasi Objek','3','4','pilihan','2','0091' ),
	('','IK543','Mobile Computing','3','4','pilihan','2','0092' ),
	('','IK411','Analisis dan Disain Algoritma','3','4','pilihan','2','0093' ),
	('','IK533','Sistem Informasi Geografis','3','4','pilihan','2','0094' ),
	

	('','KU107','Pendidikan Lingkungan Sosial, BUdaya dan Teknologi (PLSBT)','2','5','wajib','2','0095' ),
	('','IK421','Jaringan Komputer','3','5','wajib','2','0096' ),
	('','IK422','Sistem Operasi','3','5','wajib','2','0097' ),
	('','IK451','Metode Numerik','3','5','wajib','2','0098' ),
	('','IK470','Manajemen Proyek Perangkat Lunak','3','5','wajib','2','0099' ),
	
	('','IK460','Kecerdasan Buatan','3','5','pilihan','2','0100' ),
	('','IK561','Interpretasi dan Pengolahan Citra','3','5','pilihan','2','0101' ),
	('','IK570','Game Programming','3','5','pilihan','2','0102' ),
	('','IK571','Data Warehouse dan Mining','3','5','pilihan','2','0103' ),
	('','IK443','Pengajaran Berbasis Komputer','2','5','pilihan','2','0104' ),
	


	('','KU303','Seminar Pendidikan Agama','2','6','wajib','2','0105' ),
	('','KU400','Kuliah Kerja Nyata(KKN)','2','6','wajib','2','0106' ),
	('','IK452','Teori Bahasa dan Automata','3','6','wajib','2','0107' ),
	('','IK480','Pemrograman Internet','2','6','wajib','2','0108' ),
	('','IK490','Teknik Riset Operasi','3','6','wajib','2','0109' ),
	
	('','IK412','Kriptografi dan Keamanan Informasi','3','6','Pilihan','2','0110' ),
	('','IK440','Teknik Multimedia','3','6','Pilihan','2','0111' ),
	('','IK520','Sistem Terdistribusi','3','6','Pilihan','2','0112' ),
	('','IK513','Sistem Informasi Pendidikan','3','6','Pilihan','2','0113' ),
	('','IK580','E-Learning','3','6','Pilihan','2','0114' ),
	('','IK591','Program Latihan Akademik(PLA)','2','6','Pilihan','2','0115' ),
	


	('','IK492','Seminar','3','7','wajib','2','0116' ),
	('','IK494','Kewirausahaan','2','7','wajib','2','0117' ),
	('','IK540','Interaksi Manusia dan Komputer','3','7','wajib','2','0118' ),
	
	('','IK430','Basis Data Non Relasional','3','7','pilihan','2','0119' ),
	('','IK431','Basis Data Terdistribusi','3','7','pilihan','2','0120' ),
	('','IK461','Sistem Cerdas','3','7','pilihan','2','0121' ),
	('','IK481','Pemrograman Berorientasi Objek','3','7','pilihan','2','0122' ),
	('','IK493','Komputer dan Masyarakat','2','7','pilihan','2','0123' ),
	('','IK510','Teknik Kompilasi','3','7','pilihan','2','0124' ),
	('','IK511','Teknik Komunikasi Data','3','7','pilihan','2','0125' ),
	('','IK560','Kontrol dan Robotika','3','7','pilihan','2','0126' ),
	('','IK581','E-Bisnis','3','7','pilihan','2','0127' ),
	('','IK441','Grafika Komputer','3','7','pilihan','2','0128' ),
	('','IK530','Sistem Informasi','3','7','pilihan','2','0129' ),
	('','IK550','Persamaan Diferensial','3','7','pilihan','2','0130' ),
	
	

	('','IK491','Etika Profesi TI','3','8','wajib','2','0131' ),
	('','IK598','Skripsi','6','8','wajib','2','0132' ),
	('','IK599','Ujian Sidang','0','8','wajib','2','0133' ),
	
	('','IK521','Teknik Interfacing','3','8','pilihan','2','0134' ),
	('','IK522','Mikroelektronika','3','8','pilihan','2','0135' ),
	('','IK523','Rancangan SIstem Digitas','3','8','pilihan','2','0136' ),
	('','IK532','Sistem Informasi Akuntansi','3','8','pilihan','2','0137' );