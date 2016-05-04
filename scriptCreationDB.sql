DROP TABLE reunion;
DROP TABLE salle;

CREATE TABLE salle(
        id_salle INT AUTO_INCREMENT,
        num_salle VARCHAR(4),
        PRIMARY KEY(id_salle));

CREATE TABLE reunion(
	id_reunion INT AUTO_INCREMENT,
	date_reunion DATETIME,
	duree_estimee_reunion TIME,
	intitule_reunion TEXT(500),
	descriptif_reunion TEXT(5000),
	salle_reunion INT,
	PRIMARY KEY(id_reunion),
	CONSTRAINT fk_salle_reunion FOREIGN KEY (salle_reunion) REFERENCES salle(id_salle));

INSERT INTO salle (num_salle) VALUES ("B142"),
("A212"),
("B684");


INSERT INTO reunion VALUES (1, "1996-12-12 16:00:00", "01:00:00", "La réunion est un test ahahahha", "Le descriptif ici !!", 1),
(2, "2016-04-26 16:05:00", "00:15:00", "La réunion aura une durée de 15 minutes", "Nous ferons du traitement de texte, des réunions plus approfondies seront données pour la semaine prochaine.", 2);
