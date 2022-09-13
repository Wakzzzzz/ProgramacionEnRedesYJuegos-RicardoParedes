CREATE DATABASE miBase;
use miBase;

CREATE TABLE Player(
PersonID int,
Name varchar(255),
Score int,
level int
);

insert into Player(PersonId, Name, Score, Level) values (0, "Wakz", 10, 100);
 
 UPDATE Player
 SET Name = "Gus", Score = 5
 WHERE PersonId = 1;
 
select * from Player;

