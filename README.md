projectPPE4
===========

Contexte
--------

Une entreprise a un problème d’organisation à cause des multiples réunion qui s’enchevêtrent sur l’emploi du temps.
Une solution est de créer une application mobile permettant de mieux organiser les évènements à venir.

Schéma :

[schemaPPE4](schemaPPE4.png)

Liste fonctionnelle :

- Une DataBase (MySQL) <= sur machine virtuelle
- Un Middleware (Json) qui va récupérer les données de la DataBase puis les présenter pour un affichage sur un support Android.
- Une application GUI (Support Android)
  - Affiche l’emploi du temps commun (depuis la BDD)
  - Possibilité de créer des rendez-vous personnalisés
