-- convert dari tabel kehadiran v1 ke tabel kehadiran v2

insert into kehadiranv2 (id,idUser,idAgenda,p1,p2,p3,p4,p5,p6,p7,p8,p9,p10,p11,p12,p13,p14,p15,p16,p17,p18,p19,p20)
select kehadiran.id,kehadiran.idUser,kehadiran.idAgenda,
if(kehadiran.p1=1,agenda.WaktuMulai,NULL) as p1,
if(kehadiran.p2=1,agenda.WaktuMulai,NULL)as p2,
if(kehadiran.p3=1,agenda.WaktuMulai,NULL)as p3,
if(kehadiran.p4=1,agenda.WaktuMulai,NULL)as p4,
if(kehadiran.p5=1,agenda.WaktuMulai,NULL)as p5,
if(kehadiran.p6=1,agenda.WaktuMulai,NULL)as p6,
if(kehadiran.p7=1,agenda.WaktuMulai,NULL)as p7,
if(kehadiran.p8=1,agenda.WaktuMulai,NULL)as p8,
if(kehadiran.p9=1,agenda.WaktuMulai,NULL)as p9,
if(kehadiran.p10=1,agenda.WaktuMulai,NULL)as p10,
if(kehadiran.p11=1,agenda.WaktuMulai,NULL)as p11,
if(kehadiran.p12=1,agenda.WaktuMulai,NULL)as p12,
if(kehadiran.p13=1,agenda.WaktuMulai,NULL)as p13,
if(kehadiran.p14=1,agenda.WaktuMulai,NULL)as p14,
if(kehadiran.p15=1,agenda.WaktuMulai,NULL)as p15,
if(kehadiran.p16=1,agenda.WaktuMulai,NULL)as p16,
if(kehadiran.p17=1,agenda.WaktuMulai,NULL)as p17,
if(kehadiran.p18=1,agenda.WaktuMulai,NULL)as p18,
if(kehadiran.p19=1,agenda.WaktuMulai,NULL)as p19,
if(kehadiran.p20=1,agenda.WaktuMulai,NULL)as p20
from kehadiran,agenda
where kehadiran.idAgenda = agenda.idAgenda;

-- Default Nilai lama, nilai yang baru sudah pakai trigers
insert into portion(fk_idAgenda,porsi1,porsi2,porsi3,porsi4)
select idAgenda as fk_idAgenda,0,0,0,0
from agenda;


--Kurang query untuk memasukan data userlama ke data nilai mahasiswa