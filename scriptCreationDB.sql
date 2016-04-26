CREATE TABLE reunion(
	id_reunion INT AUTO_INCREMENT,
	date_reunion DATETIME,
	duree_estimee_reunion TIME,
	intitule_reunion TEXT(500),
	descriptif_reunion TEXT(5000),
	PRIMARY KEY(id_reunion));


INSERT INTO reunion VALUES (1, "1996-12-12 16:00:00", "01:00:00", "La réunion est un test ahahahha", "Le descriptif ici !!");
