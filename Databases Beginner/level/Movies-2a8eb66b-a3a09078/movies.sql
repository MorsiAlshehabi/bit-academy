USE `netland`;
CREATE TABLE `films` (
    id MEDIUMINT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(100) NOT NULL,
    duur  INT(21) NULL,
    omschrijving VARCHAR(100) NOT NULL
);

INSERT INTO `films` (`title`, `duur`, `datum van uitkomst`, `land van uitkomst`, `omschrijving`, ` id van de trailer op youtube`) VALUES
	('Batman', 4.5, 'september31', NL, die zich in het hiernamaals bevindt. 10),
    ('Superman', 3.5, 'september22', NL, die zich in het hiernamaals bevindt. 20),
    ('Robenhood', 4.5, 'oktober31', UK, die zich in het hiernamaals bevindt. 30),
    ('Mortal', 4.5, 'febrarie31', NL, die zich in het hiernamaals bevindt. 40),
    ('Soccer', 4.5, 'janjarie3', UK, die zich in het hiernamaals bevindt. 50);
