
/* Database db1 */

SET foreign_key_checks = 0;
drop table if exists users;
SET foreign_key_checks = 1;

create table users(
email varchar (50) not null,
password varchar (60) not null,
firstname varchar (30) not null,
lastname varchar (30) not null,
street varchar (30) not null,
zipcode  varchar (30) not null,
city varchar (30) not null,
primary key (email)
);

