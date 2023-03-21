
use sterrenstelsel;
CREATE TABLE sterrenstelsel.planeten
(   
    id INT(200) NOT NULL AUTO_INCREMENT,
    naam VARCHAR(200) NOT NULL,
    diameter INT(200) NOT NULL,
    afstand INT(200) NOT NULL,
    massa DECIMAL(60,1)  NOT NULL,
    tijd DATE NULL,
    PRIMARY KEY (id)

    
   
);
TRUNCATE planeten;
INSERT INTO planeten(id,naam,diameter,afstand,massa,tijd) 

VALUES 
('','Zon', '1392000', '0','332946','1111-09-09'),
('','Mercurius','4880','57910000','0.1','3333-10-23'),
('','Venus','12104','108208930','0.9','1000-11-11'),
('','Aarde','12756','149597870','1','0000-00-00'),
('','Mars','6794','227936640','0.1','5567-11-14'),
('','Mars','6794','227936640','0.1','5567-11-14');