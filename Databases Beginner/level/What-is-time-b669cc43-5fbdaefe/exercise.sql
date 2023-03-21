CREATE DATABASE sterrenstelsel;
CREATE TABLE Planeten (name VARCHAR(20));
INSERT INTO planeten (naam) VALUES ('Zon');
INSERT INTO planeten (naam) VALUES ('Mercurius');
INSERT INTO planeten (naam) VALUES ('Venus');
INSERT INTO planeten (naam) VALUES ('Aarde');
INSERT INTO planeten (naam) VALUES ('Mars');

describe planeten;
 truncate planeten;	
 CREATE TABLE `informatie` (naam varchar(25)) ;
 
 
INSERT INTO informatie (naam, diameter, `afstand tot de zon`, `massa tot de aarde`) VALUES ('Zon', 1400000, 628312010, 140);
INSERT INTO informatie (naam, diameter, `afstand tot de zon`, `massa tot de aarde`) VALUES ('Mercurius', 51118, 288097220, 14); INSERT INTO informatie (naam, diameter, `afstand tot de zon`, `massa tot de aarde`) VALUES ('Venus', 12104, 109208930, 0.9);
INSERT INTO informatie (naam, diameter, `afstand tot de zon`, `massa tot de aarde`) VALUES ('Aarde', 6371, 149600000, 136);
INSERT INTO informatie (naam, diameter, `afstand tot de zon`, `massa tot de aarde`) VALUES ('Mars', 142.984, 778312010, 317);

alter table informatie MODIFY `naam` varchar(15) NOT NULL;
alter table informatie MODIFY `diameter` int(10) NOT NULL;
alter table informatie MODIFY `massa tot de aarde` int(10) NOT NULL;
alter table informatie MODIFY `afstand tot de zon` int(15) NOT NULL;
alter table informatie MODIFY `bezoek_datum` DATE;
describe informatie; 