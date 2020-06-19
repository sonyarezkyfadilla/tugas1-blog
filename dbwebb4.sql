CREATE DATABASE dbwebb4;

CREATE TABLE category (
	id_cat INT(11) NOT NULL AUTO_INCREMENT,
	name_cat VARCHAR (100) NOT NULL,
	text_category VARCHAR (100) NOT NULL,
	PRIMARY KEY (id_cat)
);

CREATE TABLE post (
	id INT(11) NOT NULL AUTO_INCREMENT,
	date_post DATE NOT NULL,
	slug VARCHAR(100) NOT NULL,
	title VARCHAR(100) NOT NULL,
	text_post TEXT NOT NULL,
	id_cat INT(11) NOT NULL,
	PRIMARY KEY(id),
	FOREIGN KEY (id_cat)
	REFERENCES category(id_cat)
);

CREATE TABLE photos (
	id INT(11) NOT NULL AUTO_INCREMENT,
	date_photos DATE NOT NULL,
	title VARCHAR(100) NOT NULL,
	text_photos TEXT NOT NULL,
	post_id INT(11) NOT NULL,
	PRIMARY KEY (id),
	FOREIGN KEY (post_id)
	REFERENCES post(id)
);

CREATE TABLE album (
	id INT(11) NOT NULL AUTO_INCREMENT,
	name VARCHAR(100) NOT NULL,
	text_album VARCHAR(100) NOT NULL,
	photo_id INT(11) NOT NULL,
	PRIMARY KEY (id),
	FOREIGN KEY (photo_id)
	REFERENCES photos (id)
);

CREATE TABLE tb_users (
	user_id INT(11) NOT NULL AUTO_INCREMENT,
	user_name VARCHAR(100) NOT NULL,
	user_password VARCHAR(256) NOT NULL,
	user_email VARCHAR(100) NOT NULL,
	user_nama_lengkap VARCHAR(100) NOT NULL,
	user_role CHAR(2) DEFAULT '2',
	PRIMARY KEY(user_id),
	UNIQUE KEY(user_name, user_email)
);





