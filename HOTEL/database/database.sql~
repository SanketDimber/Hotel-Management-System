
drop table payment;
drop table feedback;
drop table registration;
drop table usr;
drop table reservation;
drop table room;


create table room(type varchar(20) not null primary key,total_room int not null,reserv_room int not null,avail_room int not null,charge_day int not  null);
\d room;

insert into room values('standard','50','0','50','1000');
insert into room values('suite','50','0','50','1500');
insert into room values('superdeluxe','50','0','50','2500');
insert into room values('deluxe','50','0','50','2000');
select * from room;

create table reservation(res_id varchar(20) not null primary key,chk_in varchar(20) not null,chk_out varchar(20) not null,nor varchar(20) not  null,type varchar(20) not null,name varchar(20) not null,email varchar(20) not null,company varchar(20) not null,contact varchar(20) not null,address varchar(100) not null,spe_req varchar(100) not null,count int not null default 0);
\d reservation;

create table usr(userid varchar(50) not null,password varchar(50) not null);
\d usr;

create table registration(first_name varchar(50) not null,last_name varchar(50) not null,birth varchar(30) not null,contact bigint not null,gender varchar(30) not null,emailid varchar(30) not null,userid varchar(30) not null,password varchar(50) not null,cpass varchar(50) not null);
\d registration;

create table feedback(name varchar(50) not null,email varchar(50) not null,msg varchar(50));
\d feedback;

create table payment(r_id varchar(30) not null,no_of_day int not null,type varchar(30) not null,total_pay int not null,advance int not null,balance int not null,credit_no varchar(30) not null,name varchar(30) not null,cvv int not null,fdate varchar(30) not null,tdate varchar(30) not null,bank varchar(30) not null);
\d payment;
