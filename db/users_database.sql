
create database users_database;

use users_database;

create table users(
				id int auto_increment,
				name varchar(80),
				forename varchar(80),
				user varchar(80),
				password text(80),
				primary key(id)
					);