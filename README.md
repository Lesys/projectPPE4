projectPPE4
===========

Contexte
--------

Une entreprise a un problème d’organisation à cause des multiples réunion qui s’enchevêtrent sur l’emploi du temps.
Une solution est de créer une application mobile permettant de mieux organiser les évènements à venir.

Schéma :

![schemaPPE4](schemaPPE4.png)

Liste fonctionnelle :

- Une DataBase (MySQL) sur le serveur du lycée André Malraux
- Un Middleware (traite les données et renvoie un json) qui va récupérer les données de la DataBase puis les présenter pour un affichage sur un support Android.
- Une application GUI (Support Android)
  - Affiche l’emploi du temps commun (depuis la BDD)
  - Possibilité de créer des rendez-vous personnalisés

DataBase :
Synthaxe pour le schéma relationnel :

- nom_table(parametre_1, parametre_2.... parametre_X);

		parametre_1(type[, AUTO_INCREMENT]): Description du paramètre (Clé primaire, Clé étrangère (avec référence)...)
		parametre_2(type): La même chose....

Schéma relationnel :

- reunion(id_reunion, date_reunion, intitule_reunion, descriptif_reunion);

		id_reunion(int, AUTO_INCREMENT): Clé primaire de la table "reunion"
		date_reunion(datetime): La date et l'heure à laquelle la réunion a lieu
		intitule_reunion(: Titre (ou sujet principal) de la réunion (ex: "Réunion sur les comptes et le budget de l'entreprise")
		descriptif_reunion(text): Informations complémentaires concernant la réunion
