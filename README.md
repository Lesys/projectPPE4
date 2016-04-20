# projectPPE4

Contexte
--------

L'entreprise "BatDesL" a un problème d’organisation à cause des multiples réunion qui s’enchevêtrent sur l’emploi du temps.
Notre solution est de réorganiser cet emploi du temps et de créer une application mobile permettant d'afficher celui-ci.

Schéma :

![schemaPPE4](schemaPPE4.png)

Liste fonctionnelle :

- Une DataBase (MySQL) sur le serveur du lycée André Malraux
- Un Middleware (traite les données et renvoie un json) qui va récupérer les données de la DataBase puis les présenter pour un affichage sur un support Android.
- Une application GUI (Support Android)
  - Affiche l'heure et la date du jour sur une page d'accueil
  - Affiche l’emploi du temps commun (depuis la BDD)
  - Possibilité de créer des rendez-vous personnalisés

DataBase :
Synthaxe pour le schéma relationnel :

- nom_table(parametre_1, parametre_2 ..., parametre_X);

		parametre_1(type[, AUTO_INCREMENT]): Description du paramètre (Clé primaire, Clé étrangère (avec référence)...)
		parametre_2(type): La même chose....

Schéma relationnel :

- reunion(id_reunion, date_reunion, intitule_reunion, descriptif_reunion);

		id_reunion(int, AUTO_INCREMENT): Clé primaire de la table "reunion"
		date_reunion(datetime): La date et l'heure à laquelle la réunion a lieu
		intitule_reunion(text): Titre (ou sujet principal) de la réunion (ex: "Réunion sur les comptes et le budget de l'entreprise")
		descriptif_reunion(text): Informations complémentaires concernant la réunion (ex: autres sujets que le principal)
