# projectPPE4

Contexte
--------

L'entreprise "BatDesL" a un problème d’organisation à cause des multiples réunion qui s’enchevêtrent sur l’emploi du temps.
Notre solution est de réorganiser cet emploi du temps et de créer une application mobile permettant d'afficher celui-ci.

Schéma :

![schemaPPE4](schemaPPE4.png)

Liste fonctionnelle :

- Une DataBase (MySQL) <= sur machine virtuelle
- Un Middleware (Json) qui va récupérer les données de la DataBase puis les présenter pour un affichage sur un support Android.
- Une application GUI (Support Android)
  - Affiche l'heure et la date du jour sur une page d'accueil
  - Affiche l’emploi du temps commun (depuis la BDD)
  - Possibilité de créer des rendez-vous personnalisés
