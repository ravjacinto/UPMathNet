USE UPMath;
CREATE TABLE IF NOT EXISTS Task
(
	taskID tinyint NOT NULL AUTO_INCREMENT,
	taskname varchar(255) NOT NULL,
	description varchar(255) NOT NULL,
	output varchar(255) NOT NULL,
	progress float NOT NULL,
	 error 	varchar(255) NOT NULL,
	clarifications varchar(255) NOT NULL,
	status varchar(255) NOT NULL,
	result tinyint NOT NULL,
	eventID tinyint NOT NULL,
	PRIMARY KEY(taskID)
); 
create table if not exists Member
(
	memberID tinyint NOT NULL auto_increment,
	name	varchar(255) NOT NULL,
	position varchar(255) NOT NULL,
	email varchar(255) NOT NULL,
	password varchar(255) NOT NULL,
	fb varchar(255) NOT NULL,
	twitter varchar(255) NOT NULL,
	PRIMARY KEY(memberID)
);
create table if not exists Event
(
	eventID tinyint NOT NULL auto_increment,
	name varchar(255) NOT NULL,
	desiredDate date NOT NULL,
	PRIMARY KEY(eventID)	
);
create table if not exists Committee
(
	committeeID tinyint NOT NULL auto_increment,
	commname varchar(255) NOT NULL,
	function varchar(255) NOT NULL,
	head tinyint NOT NULL,
	eventID tinyint NOT NULL,
	PRIMARY KEY(committeeID)
);
create table if not exists TaskAssignment
(
	assignmentID tinyint NOT NULL auto_increment,
	taskID tinyint NOT NULL,
	memberID tinyint NOT NULL,
	PRIMARY KEY(assignmentID)
);
create table if not exists CommitteeAssignment
(
	assignmentID tinyint NOT NULL auto_increment,
	memberID tinyint NOT NULL,
	committeeID tinyint NOT NULL,
	PRIMARY KEY(assignmentID)
);
