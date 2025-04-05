CREATE DATABASE GymMemberShip;
USE GymMemberShip;
CREATE TABLE Members (
	MemberID INT NOT NULL UNIQUE,
    Age INT CHECK(Age>=18), 
    Lname varchar(255),
    Address varchar(255),
    ClassNum INT,
    PRIMARY KEY (MemberID)
);
CREATE TABLE Classes (
	ClassNum INT NOT NULL UNIQUE,
    Lname varchar(255),
    FloorNum INT,
    PRIMARY KEY (ClassNum)
    );
CREATE TABLE Booking (
	RegisterNum INT NOT NULL,
    MemberID INT,
    Joining DATETIME,
    PRIMARY KEY (RegisterNum)
    );
SELECT Members.Lname, Booking.RegisterNum, members.ClassNum
FROM Members
INNER JOIN Booking ON Members.MemberID=Booking.MemberID;
