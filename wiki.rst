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

