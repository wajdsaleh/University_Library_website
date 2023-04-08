insert into place values (id_place_seq.nextval,1,'C','3392');

insert into authors values (auth_id.nextval, 'R. C. Hibbeler');
insert into publishers values (pub_id.nextval, 'Macmillan');
insert into contactpublishers values (pub_id.currval,'Collier_Macmillan@Macmillan');
insert into publisherauthor values (pid_pubauth_seq.nextval, pub_id.currval ,auth_id.currval);
insert into documentdetails values (id_docDet_seq.nextval,'Engineering','English');

insert into book values ('23543108','Engineering mechanics','1974-03-21','1983','N',3,
227,id_docDet_seq.currval,pid_pubauth_seq.currval);

insert into authors values (auth_id.nextval, 'ASEE Prism');
insert into publishers values (pub_id.nextval, 'American Society for Engineering Education');
insert into contactpublishers values (pub_id.currval,'info@American_Society.net');
insert into publisherauthor values (pid_pubauth_seq.nextval, pub_id.currval ,auth_id.currval);
insert into documentdetails values (id_docDet_seq.nextval,'Science','English');

insert into journal values ('27833048','PHYSICS','2018-10-01','2018','N',15,
239,id_docDet_seq.currval,pid_pubauth_seq.currval);


insert into authors values (auth_id.nextval, 'Cathryn Li Yuan Ling');
insert into publishers values (pub_id.nextval, 'Hoay Min');
insert into contactpublishers values (pub_id.currval,'Hoay_Min@contact.com');
insert into publisherauthor values (pid_pubauth_seq.nextval, pub_id.currval ,auth_id.currval);
insert into documentdetails values (id_docDet_seq.nextval,'Business','English');

insert into thesis values ('98365674','Deconstructing Voice-over-IP','2020-04-02','2020','N',1,
233,id_docDet_seq.currval,pid_pubauth_seq.currval);

insert into authors values (auth_id.nextval, 'Andrew S. Tanenbaum');
insert into authors values (auth_id.nextval, 'John David Wetherall');
insert into authors values (auth_id.nextval, 'Peter W. Hawkes');
insert into authors values (auth_id.nextval, 'Sean McArdle');
insert into authors values (auth_id.nextval, 'Kevin P Hare');
insert into authors values (auth_id.nextval, 'Henry Gray');
insert into authors values (auth_id.nextval, 'Marjorie Canfield Willis');
insert into authors values (auth_id.nextval, 'Edward J. Tarbuck');
insert into authors values (auth_id.nextval, 'Paul G. Hewitt');
insert into authors values (auth_id.nextval, 'June Jamrich Parsons');
insert into authors values (auth_id.nextval, 'Roger S. Pressman');
insert into authors values (auth_id.nextval, 'Scottish Secondary Mathematics Group');
insert into authors values (auth_id.nextval, 'James D. Watson');
insert into authors values (auth_id.nextval, 'Nancy H. Hopkins');
insert into authors values (auth_id.nextval, 'Rod R. Seeley');
insert into authors values (auth_id.nextval, 'Neil Alexander Campbell');
insert into authors values (auth_id.nextval, 'Kingsley R. Stern');

insert into publishers values (pub_id.nextval, 'Macmillan');
insert into publishers values (pub_id.nextval, 'Prentice Hall');
insert into publishers values (pub_id.nextval, 'Wiley');
insert into publishers values (pub_id.nextval, 'Pearson Educacion');
insert into publishers values (pub_id.nextval, 'Oxford University Press');
insert into publishers values (pub_id.nextval, 'Nelson Thornes Ltd');
insert into publishers values (pub_id.nextval, 'Kevin P. Hare');
insert into publishers values (pub_id.nextval, 'Portland House');
insert into publishers values (pub_id.nextval, 'Williams & Wilkins');
insert into publishers values (pub_id.nextval, 'Merrill Pub. Co.');
insert into publishers values (pub_id.nextval, 'Little, Brown');
insert into publishers values (pub_id.nextval, 'Course Technology');
insert into publishers values (pub_id.nextval, 'Wiley');
insert into publishers values (pub_id.nextval, 'McGraw-Hill');
insert into publishers values (pub_id.nextval, 'Oxford University Press');
insert into publishers values (pub_id.nextval, 'Heinemann Educational Publishers');
insert into publishers values (pub_id.nextval, 'W. A. Benjamin');
insert into publishers values (pub_id.nextval, 'McGraw-Hill');
insert into publishers values (pub_id.nextval, 'Cummings Pub.');
insert into publishers values (pub_id.nextval, 'Wm. C. Brown');

insert into contactpublishers values (pub_id.currval,'Collier_Macmillan@Macmillan');
insert into contactpublishers values (pub_id.currval,'PrenticeHall@gmail');
insert into contactpublishers values (pub_id.currval,'Wiley@gmail.com');
insert into contactpublishers values (pub_id.currval,'Pearson@Educacion.com');
insert into contactpublishers values (pub_id.currval,'Oxford@Edu.press');
insert into contactpublishers values (pub_id.currval,'Nelson@Thornes.com');
insert into contactpublishers values (pub_id.currval,'Kevin@gmail.com');
insert into contactpublishers values (pub_id.currval,'Portland@house.com');
insert into contactpublishers values (pub_id.currval,'Williams_Wilkins@gmail.com');
insert into contactpublishers values (pub_id.currval,'MerrillPub@gmail.com');
insert into contactpublishers values (pub_id.currval,'Little@brown.com');
insert into contactpublishers values (pub_id.currval,'Course@Technology.com');
insert into contactpublishers values (pub_id.currval,'Wiley@gmail.com');
insert into contactpublishers values (pub_id.currval,'McGraw@Hill.com');
insert into contactpublishers values (pub_id.currval,'Oxford@Edu.press');
insert into contactpublishers values (pub_id.currval,'Heinemann@Edu.Publishers');
insert into contactpublishers values (pub_id.currval,'Benjamin@hotmail.com');
insert into contactpublishers values (pub_id.currval,'McGraw@Hill.com');
insert into contactpublishers values (pub_id.currval,'Cummings@Pub.com');
insert into contactpublishers values (pub_id.currval,'WM@brown.com');

insert into publisherauthor values (pid_pubauth_seq.nextval, pub_id.currval ,auth_id.currval);
insert into publisherauthor values (pid_pubauth_seq.nextval, pub_id.currval ,auth_id.currval);
insert into publisherauthor values (pid_pubauth_seq.nextval, pub_id.currval ,auth_id.currval);
insert into publisherauthor values (pid_pubauth_seq.nextval, pub_id.currval ,auth_id.currval);
insert into publisherauthor values (pid_pubauth_seq.nextval, pub_id.currval ,auth_id.currval);
insert into publisherauthor values (pid_pubauth_seq.nextval, pub_id.currval ,auth_id.currval);
insert into publisherauthor values (pid_pubauth_seq.nextval, pub_id.currval ,auth_id.currval);
insert into publisherauthor values (pid_pubauth_seq.nextval, pub_id.currval ,auth_id.currval);
insert into publisherauthor values (pid_pubauth_seq.nextval, pub_id.currval ,auth_id.currval);
insert into publisherauthor values (pid_pubauth_seq.nextval, pub_id.currval ,auth_id.currval);
insert into publisherauthor values (pid_pubauth_seq.nextval, pub_id.currval ,auth_id.currval);
insert into publisherauthor values (pid_pubauth_seq.nextval, pub_id.currval ,auth_id.currval);
insert into publisherauthor values (pid_pubauth_seq.nextval, pub_id.currval ,auth_id.currval);
insert into publisherauthor values (pid_pubauth_seq.nextval, pub_id.currval ,auth_id.currval);
insert into publisherauthor values (pid_pubauth_seq.nextval, pub_id.currval ,auth_id.currval);
insert into publisherauthor values (pid_pubauth_seq.nextval, pub_id.currval ,auth_id.currval);
insert into publisherauthor values (pid_pubauth_seq.nextval, pub_id.currval ,auth_id.currval);
insert into publisherauthor values (pid_pubauth_seq.nextval, pub_id.currval ,auth_id.currval);
insert into publisherauthor values (pid_pubauth_seq.nextval, pub_id.currval ,auth_id.currval);
insert into publisherauthor values (pid_pubauth_seq.nextval, pub_id.currval ,auth_id.currval);

insert into documentdetails values (id_docDet_seq.nextval,'Engineering','English');
insert into documentdetails values (id_docDet_seq.nextval,'Computer Science','English');
insert into documentdetails values (id_docDet_seq.nextval,'physics','English');
insert into documentdetails values (id_docDet_seq.nextval,'Chemistry','Spanish');
insert into documentdetails values (id_docDet_seq.nextval,'History','English');
insert into documentdetails values (id_docDet_seq.nextval,'math','English');
insert into documentdetails values (id_docDet_seq.nextval,'Computer Science','English');
insert into documentdetails values (id_docDet_seq.nextval,'Human Anatomy','English');
insert into documentdetails values (id_docDet_seq.nextval,'Medical','English');
insert into documentdetails values (id_docDet_seq.nextval,'physics','English');
insert into documentdetails values (id_docDet_seq.nextval,'physics','English');
insert into documentdetails values (id_docDet_seq.nextval,'Computer Science','English');
insert into documentdetails values (id_docDet_seq.nextval,'Chemistry','English');
insert into documentdetails values (id_docDet_seq.nextval,'Engineering','English');
insert into documentdetails values (id_docDet_seq.nextval,'Engineering','English');
insert into documentdetails values (id_docDet_seq.nextval,'math','English');
insert into documentdetails values (id_docDet_seq.nextval,'Medical','English');
insert into documentdetails values (id_docDet_seq.nextval,'Human Anatomy','English');
insert into documentdetails values (id_docDet_seq.nextval,'biology','English');
insert into documentdetails values (id_docDet_seq.nextval,'biology','English');

insert into book values ('23543108','Engineering mechanics','1974-03-21','1983','N',3,227,id_docDet_seq.currval,pid_pubauth_seq.currval);

insert into book values ('01306610','Computer networks','2003-03-1','4','N',10,201,id_docDet_seq.currval,pid_pubauth_seq.currval);

insert into book values ('04711456','Fundamentals of physics','1997-07-2','5','Y',19,211,id_docDet_seq.currval,pid_pubauth_seq.currval);

insert into book values ('03216967','Quimica','2009-12-2','11','N',17,222,id_docDet_seq.currval,pid_pubauth_seq.currval);

insert into book values ('01921521','Study of history','1939-11-2','2','Y',6,230,id_docDet_seq.currval,pid_pubauth_seq.currval);

insert into book values ('07487252','Essential Maths','2004-5-24','4','N',15,235,id_docDet_seq.currval,pid_pubauth_seq.currval);

insert into book values ('06921067','Computer Science Principles','2018-4-27','1','Y',10,233,id_docDet_seq.currval,pid_pubauth_seq.currval);

insert into book values ('05172090','Anatomy, descriptive and surgical','1977-3-27','15','N',30,232,id_docDet_seq.currval,pid_pubauth_seq.currval);

insert into book values ('06830905','Medical terminology','1996-2-7','1','Y',3,232,id_docDet_seq.currval,pid_pubauth_seq.currval);

insert into book values ('06752069','The earth','1987-7-7','2','N',5,212,id_docDet_seq.currval,pid_pubauth_seq.currval);

insert into book values ('70147052','Conceptual physics','1971-4-3','1','Y',15,202,id_docDet_seq.currval,pid_pubauth_seq.currval);

insert into book values ('07600343','Computer concepts','1996-6-23','2','Y',5,205,id_docDet_seq.currval,pid_pubauth_seq.currval);

insert into book values ('04718703','Organic chemistry','1984-2-20','3','Y',3,215,id_docDet_seq.currval,pid_pubauth_seq.currval);

insert into book values ('00705081','Software engineering','1992-1-10','3','Y',8,207,id_docDet_seq.currval,pid_pubauth_seq.currval);

insert into book values ('15764504','Civil Engineering','1999-5-26','1','Y',8,208,id_docDet_seq.currval,pid_pubauth_seq.currval);

insert into book values ('04355294','Heinemann Mathematics','1992-10-22','1','Y',6,216,id_docDet_seq.currval,pid_pubauth_seq.currval);

insert into book values ('08053960','Molecular biology of the gene','1989-7-29','4','Y',2,202,id_docDet_seq.currval,pid_pubauth_seq.currval);

insert into book values ('00729655','Anatomy & physiology','2007-4-11','8','Y',4,224,id_docDet_seq.currval,pid_pubauth_seq.currval);

insert into book values ('08053092','Biology: Concepts and Connections','1994-8-30','1','Y',5,209,id_docDet_seq.currval,pid_pubauth_seq.currval);

insert into book values ('06971375','Introductory plant biology','1991-1-01','5','Y',10,211,id_docDet_seq.currval,pid_pubauth_seq.currval);

insert into journal values('08898731','Al-Arabiyya','1975-01-01','1995','F',2,  201 id_docDet_seq.currval,pid_pubauth_seq.currval);
 
insert into journal values('13530194','British Journal of Middle Eastern Studies','1974-01-01','2001','T',10, 201, id_docDet_seq.currval,pid_pubauth_seq.currval);
 
insert into journal values('00263141','Middle East Journal','1947-01-01','1989','F',1, 203 ,id_docDet_seq.currval,pid_pubauth_seq.currval);
 
insert into journal values('02681080','Health Policy and Planning','1986-01-01','1992','T',3, 203 , id_docDet_seq.currval,pid_pubauth_seq.currval);
 
insert into journal values('07488009','Medicine and War','1985-01-01','1995','T',5, 202 ,id_docDet_seq.currval,pid_pubauth_seq.currval);
 
insert into journal values('02681153','Health Education Research','1986-01-01','2016','F',6, 202 ,id_docDet_seq.currval,pid_pubauth_seq.currval);
 
insert into journal values('20100078','Climate Change Economics','2010-01-01','2010','F',10, 210 ,id_docDet_seq.currval,pid_pubauth_seq.currval);
 
insert into journal values('09583050','Energy & Environment','1974-01-01','1994','T',4, 210 ,id_docDet_seq.currval,pid_pubauth_seq.currval);
 
insert into journal values('02772426','Landscape Journal','1982-01-01','2016','F',1, 207 ,id_docDet_seq.currval,pid_pubauth_seq.currval);
 
insert into journal values('00029246','The American Journal of Economics and Sociology','1941-01-01','1975','T',1, 207 ,id_docDet_seq.currval,pid_pubauth_seq.currval);
 
insert into journal values('20405790','Applied Economic Perspectives and Policy','2010-01-01','2012','F',5, 205 ,id_docDet_seq.currval,pid_pubauth_seq.currval);
 
insert into journal values('03091660','Cambridge Journal of Economics','1977-01-01','2014','F',8, 205, id_docDet_seq.currval,pid_pubauth_seq.currval);


insert into thesis
values('14226790','Effects of surface parameters on boiling heat transfer phenomena','2011-01-01','2011','F',1,211 ,id_docDet_seq.currval,pid_pubauth_seq.currval);
 
insert into thesis
values('55183167','Effects of hot electrons on the stability of a closed field line plasma','2006-01-01','2006','T',1,211,id_docDet_seq.currval,pid_pubauth_seq.currval);
 
insert into thesis
values('84759105','Computer simulation and topological modeling of radiation effects in zircon','2006-01-01','2006','F',1,212,id_docDet_seq.currval,pid_pubauth_seq.currval);
 
insert into thesis
values('81860274','Studies on the dynamics of limited filaments','2006-01-01','2006','T',1,212,id_docDet_seq.currval,pid_pubauth_seq.currval);
 
insert into thesis
values('41746442','Quantum assisted sensing, simulation and control','2016-01-01','2016','T',1,212,id_docDet_seq.currval,pid_pubauth_seq.currval);
 
insert into thesis
values('27104535','Radiation effects on the blood-brain barrier','2007-01-01','2007','F',1,213,id_docDet_seq.currval,pid_pubauth_seq.currval);
 
insert into thesis
values('82199294','Decision Making for Populations','2022-05-01','2022','T',1,213,id_docDet_seq.currval,pid_pubauth_seq.currval);
 
insert into thesis
values('37193265','Speaker Anonymization using End-to-End Zero-Shot Voice Conversion','2022-05-01','2022','T',1,214,id_docDet_seq.currval,pid_pubauth_seq.currval);
 
insert into thesis
values('69915025','Internet as an object','2019-01-01','2019','F',1,215,id_docDet_seq.currval,pid_pubauth_seq.currval);
 
insert into thesis
values('14767684','Technology, trade, and prices','1973-01-01','1973','T',1,215,id_docDet_seq.currval,pid_pubauth_seq.currval);
 
insert into thesis
values('53660744','Firm pricing and entry','1994-01-01','1994','F',1,216, id_docDet_seq.currval,pid_pubauth_seq.currval);
 
insert into thesis
values('5796151','Consumer information, product quality, and seller reputation','1980-01-01','1989','T',1,217,id_docDet_seq.currval,pid_pubauth_seq.currval);
 
 

Insert into Rooms values(RoomsID_seq.nextval, 'available', '02:00:00', 'lab', 10);
Insert into Rooms values(RoomsID_seq.nextval, 'busy', '04:00:00', 'studying room', 4);
Insert into Rooms values(RoomsID_seq.nextval, 'busy', '02:00:00', 'lab', 10);
Insert into Rooms values(RoomsID_seq.nextval, 'available', '02:00:00', 'meeting', 8);


