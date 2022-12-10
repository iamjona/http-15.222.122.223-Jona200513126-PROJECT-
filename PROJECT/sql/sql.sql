use Jona200513126;
    /*creating database*/
CREATE table users(
	user_id int not null auto_increment,
	first_name varchar (255),
	last_name varchar (255),
    blood_group varchar (255),
	user_name varchar (255),
	password varchar (255),
	confirm varchar (255),
    primary key (user_id)
);
CREATE table blood_donors(
	ID int not null auto_increment,
	fname varchar (255),
	lname varchar (255),
	email varchar (255),
	telNumber varchar (255),
    primary key (ID)
);
INSERT INTO php_users (fname, lname, email, telNumber)
VALUES
('Bob', 'Smith', 'email@email.ca', '705-123-4567'),
('Jane', 'Smith', 'email@email.ca', '705-123-4567'),
('Rob', 'Doe', 'email@email.ca', '705-123-4567'),
('Ian', 'Smith', 'email@email.ca', '705-123-4567'),
('Alexander', 'Walker', 'email@email.ca', '705-123-4567'),
('Arya', 'Carter', 'email@email.ca', '705-123-4567'),
('Natalie', 'May', 'email@email.ca', '705-123-4567'),
('Zoey', 'Brown', 'email@email.ca', '705-123-4567'),
('Ryder', 'Miller', 'email@email.ca', '705-123-4567'),
('Emersyn', 'Mitchell', 'email@email.ca', '705-123-4567'),
('Victor', 'Scott', 'email@email.ca', '705-123-4567'),
('Ian', 'Smith', 'email@email.ca', '705-123-4567'),
('Alexander', 'Walker', 'email@email.ca', '705-123-4567'),
('Arya', 'Carter', 'email@email.ca', '705-123-4567'),
('Natalie', 'May', 'email@email.ca', '705-123-4567'),
('Zoey', 'Brown', 'email@email.ca', '705-123-4567'),
('Jon', 'Doe', 'email@email.ca', '705-123-4567');
