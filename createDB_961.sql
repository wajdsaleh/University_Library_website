create table Register(
id int not null,
Uni_E_mail varchar(30) unique not null,
password varchar(15) not null,
First_name varchar(15) not null,
Last_name varchar(25) not null,
constraint id_Register primary key (id,Uni_E_mail));




create table Members (
Uni_E_mail varchar(30) not null,
membership_type varchar(15) not null,
account_state varchar(10) default 'active',
total_documents_CheckedOut int default 0,
activity date,
alerts int default 0,
constraint UEmail_Members primary key (Uni_E_mail),
constraint UEmail_Register  foreign key (Uni_E_mail) REFERENCES Register(Uni_E_mail));



create table DocumentDetails(
Details_ID int not null,
Category varchar(50) not null,
language varchar(20) not null,
CONSTRAINT PK_Details PRIMARY KEY(Details_ID));



create table RequestNewDoc( 
Oreder_number int NOT NULL, 
Uni_E_mail varchar(30) NOT NULL , 
Title varchar(50), 
Type varchar(10) not null, 
Author_name varchar(50) not null, 
Edition varchar(4) not null, 
Date_of_order date, 
Order_state varchar(10) DEFAULT 'processing', 
Description varchar(400),
constraint PK_Req primary key (Oreder_number,Uni_E_mail),
constraint UEmail_Req foreign key (Uni_E_mail) REFERENCES Register(Uni_E_mail));

create table Staff(
Employee_id int not null,
Employee_name varchar(50) not null,
phone_number int,
email varchar(30),
password varchar(15) not null,
constraint id_Staff PRIMARY KEY(Employee_id));


CREATE TABLE Place ( 
Place_id int NOT null , 
Zone_number int not null , 
Zone_name varchar(30) not null, 
Shelve varchar(4) not null,
constraint ID_place PRIMARY KEY(Place_id));


create table Authors(
Author_id int  not null,
Author_Name varchar(50) not null,
constraint auID_Authors primary key(Author_id));



create table Publishers(
Publisher_id int  not null,
Publisher_name varchar(50) not null,
constraint publishID_Publishers primary key(Publisher_id));



create table ContactPublishers (
Publisher_id int not null,
E_mail varchar(30),
constraint contPublisher primary key(Publisher_id),
constraint FK_publishID foreign key (Publisher_id) REFERENCES Publishers(Publisher_id));


create table PublisherAuthor (
PA_ID int not null,
Publisher_id int not null,
Author_id int not null,
constraint PK_PAID primary key(PA_ID),
CONSTRAINT FK_AuthorID FOREIGN key(Author_id) REFERENCES Authors(Author_id),
constraint FK_publisherID foreign key (Publisher_id) REFERENCES Publishers(Publisher_id));




create table Book (
ISSN char(8) not null,
title varchar(100)not null,
publishing_date date not null,
Edition varchar(4) default 1 not null ,
Is_it_borrowed char(1),
No_Copies int  default 1 not null, 
Place_id int not null,
Details_ID int not null,
PA_ID int not null,
constraint PK_ISSN primary key(ISSN),
constraint FK_PlaceID foreign key (Place_id) REFERENCES Place(Place_id),
constraint FK_PAID foreign key (PA_ID) REFERENCES PublisherAuthor (PA_ID),
constraint FK_DetailsID foreign key (Details_ID) REFERENCES DocumentDetails(Details_ID));



create table Journal (
ISSN char(8) not null,
title varchar(100)not null,
publishing_date date not null,
Edition varchar(4) default 1 not null ,
Is_it_borrowed char(1),
No_Copies int  default 1 not null, 
Place_id int not null,
Details_ID int not null,
PA_ID int not null,
constraint Journal_ISSN primary key(ISSN),
constraint Journal_PlaceID foreign key (Place_id) REFERENCES Place(Place_id),
constraint Journal_PAID foreign key (PA_ID) REFERENCES PublisherAuthor (PA_ID),
constraint Journal_DetailsID foreign key (Details_ID) REFERENCES DocumentDetails(Details_ID));



create table thesis (
ISSN char(8) not null,
title varchar(100)not null,
publishing_date date not null,
Edition varchar(4) default 1 not null ,
Is_it_borrowed char(1),
No_Copies int  default 1 not null, 
Place_id int not null,
Details_ID int not null,
PA_ID int not null,
constraint thesis_ISSN primary key(ISSN),
constraint thesis_PlaceID foreign key (Place_id) REFERENCES Place(Place_id),
constraint thesis_PAID foreign key (PA_ID) REFERENCES PublisherAuthor (PA_ID),
constraint thesis_DetailsID foreign key (Details_ID) REFERENCES DocumentDetails(Details_ID));




create table Borrowers ( 
Borrower_ID int unique not null, 
Uni_E_mail varchar(30) NOT NULL, 
Doc_ISSN char(10) not null, 
Issued_date date not null, 
Retreving_date date not null, 
Fine char(1), 
Actual_return_date date,
constraint ID_Borrowers PRIMARY KEY(Borrower_ID,Uni_E_mail),
constraint UEmail_Borrowers foreign key (Uni_E_mail) REFERENCES Register(Uni_E_mail));


CREATE TABLE Rooms ( 
Room_id int  NOT NULL, 
Room_state varchar(10),  
Duration char(8),
Room_type varchar(15), 
Room_capacity int ,
CONSTRAINT PK_Rooms PRIMARY KEY(Room_id),
CONSTRAINT Check_duration check (
(Duration = '02:00:00' AND Room_type = 'meeting')
OR ( Duration = '02:00:00' AND Room_type = 'lab')
OR ( Duration = '04:00:00' AND Room_type = 'studying room')),
        
 CONSTRAINT Check_roomCapacity check (
    (Room_type = 'meeting' and Room_capacity = 8 ) or
    (Room_type = 'lab' and Room_capacity = 10) or
    (Room_type = 'studying room' and Room_capacity= 4)));

create table Reservations (
ReservationsNO  int not null , 
Room_id  int  not null,
Uni_E_mail varchar(30) not null,
constraint  Res_NO primary key (ReservationsNO),
constraint FK_RoomID foreign key (Room_id) REFERENCES Rooms(Room_id),
constraint  ResEmail foreign key (Uni_E_mail) REFERENCES Register(Uni_E_mail));


create table FineTransaction ( 
Borrower_ID int NOT NULL, 
Transaction_No varchar(12) unique not null, 
amount float, 
CreationDate date,
CONSTRAINT PK_finetransaction primary key (Borrower_ID,Transaction_No),
CONSTRAINT FK_BOID_finetransaction foreign key (Borrower_ID) REFERENCES Borrowers(Borrower_ID));


CREATE TABLE BankTransferTransaction ( 
Borrower_ID int NOT NULL, 
Transaction_No varchar(12), 
BankName varchar(50), 
TransfereeName varchar(30), 
Payment_date date,
CONSTRAINT PK_BankTransaction primary key ( Borrower_ID,Transaction_No),
CONSTRAINT FK_BOID_banktransaction foreign key (Borrower_ID) REFERENCES Borrowers(Borrower_ID),
CONSTRAINT FK_transacionNO_bank  foreign key (Transaction_No) REFERENCES FineTransaction (Transaction_No)); 

CREATE TABLE CreditCardTransaction ( 
Borrower_ID int NOT NULL, 
Transaction_No varchar(12), 
NameOnCard varchar(30), 
Card_number int , 
SSN int, 
Expiration_date date , 
Payment_date date,
CONSTRAINT PK_creditTransaction primary key ( Borrower_ID,Transaction_No),
CONSTRAINT FK_BOID_credittransaction foreign key (Borrower_ID) REFERENCES Borrowers(Borrower_ID),
CONSTRAINT FK_transacionNO_credit  foreign key (Transaction_No) REFERENCES FineTransaction (Transaction_No)); 
     
CREATE TABLE CashTransaction ( 
Borrower_ID int NOT NULL, 
Transaction_No varchar(12), 
Cash_amount float, 
Payment_date date,
CONSTRAINT PK_CashTransaction primary key ( Borrower_ID,Transaction_No),
CONSTRAINT FK_BOID_cashtransaction foreign key (Borrower_ID) REFERENCES Borrowers(Borrower_ID),
CONSTRAINT FK_transacionNO_cash  foreign key (Transaction_No) REFERENCES FineTransaction (Transaction_No));




