<?php
function connectionDB() {
    $PARAMHost = '172.16.99.3'; //Server path
    $PARAMPort = '3306'; //Server port
    $PARAMDBName = 'examen.bidault-widmer'; //DataBase name
    $PARAMUser = 'b.bidault'; //User login
    $PARAMPassword = 'passe123'; //User Password

    $connection = new PDO('mysql:host='.$PARAMHost.';port='.$PARAMPort.';dbname='.$PARAMDBName, $PARAMUser, $PARAMPassword,
        array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

    return $connection;
}

function queryDB() {
	$co = connectionDB();
	$request = "SELECT * FROM reunion ORDER BY date_reunion DESC;"; //Query for the SQL query

    $resultat = $co->query($request); //All fetchs in the $resultat variable

    while ($row = $resultat->fetch()) { //For each row in the result of the query
        $return[$row["id_reunion"] - 1] = array(
        	"id_reunion"=>$row["id_reunion"],
        	"date_reunion"=>$row["date_reunion"],
            "duree_estimee_reunion"=>$row["duree_estimee_reunion"],
        	"intitule_reunion"=>$row["intitule_reunion"],
        	"descriptif_reunion"=>$row["descriptif_reunion"],
            "salle_reunion"=>$row["salle_reunion"]);
    }

    $resultat->closeCursor();

    return $return;
}

function showReunion($var) {
    echo "<td>";
        if ($var == null) {
            echo "&nbsp;";
        }
        else {
            echo $var;
        }
    echo "</td>";
}

function createNewReunion() {
    echo checkNullOrNot($_POST["datePost"])."<br>";
    echo checkNullOrNot($_POST["dureePost"].":00")."<br>";
    echo checkNullOrNot($_POST["intitulePost"])."<br>";
    echo checkNullOrNot($_POST["descriptifPost"])."<br>";
    echo checkNullOrNot($_POST["sallePost"])."<br>";
    $date = checkNullOrNot($_POST["datePost"]);
    $duree = checkNullOrNot($_POST["dureePost"].":00");
    $intitule = checkNullOrNot($_POST["intitulePost"]);
    $descriptif = checkNullOrNot($_POST["descriptifPost"]);
    $salle = checkNullOrNot($_POST["sallePost"]);

    $co = connectionDB();
    $request = "SELECT id_salle FROM salle WHERE num_salle = ".$salle;

    $resultat = $co->query($request); //All fetchs in the $resultat variable

    if ($resultat === FALSE) {
        echo "Error: ".$request."<br>".$co->error;
    }

    $row = $resultat->fetch();

    $resultat->closeCursor();

    $salle = $row['id_salle'];
    echo $salle;

    $request = "INSERT INTO reunion (date_reunion, duree_estimee_reunion, intitule_reunion, descriptif_reunion, salle_reunion) VALUES (".$date.", ".$duree.", ".$intitule.", ".$descriptif.", ".$salle.");";

    $resultat = $co->query($request); //All fetchs in the $resultat variable

    if ($resultat === FALSE) {
        echo "Error: ".$request."<br>".$co->error;
    }
}

function deleteReunion($id) {
    $request = "DELETE FROM reunion WHERE id_reunion = ".$id.";";

    $co = connectionDB();

    return $co->query($request);
}

function updateReunion() {
    //$request = "UPDATE reunion SET "
}

function takeAllSalle() {
    $request = "SELECT * FROM salle ORDER BY num_salle ASC;";

    $co = connectionDB();

    if ($co->query($request) == TRUE) {
        $resultat = $co->query($request); //All fetchs in the $resultat variable

        while ($row = $resultat->fetch()) { //For each row in the result of the query
            $return[$row["id_salle"] - 1] = array(
                "id_salle"=>$row["id_reunion"],
                "num_salle"=>$row["num_salle"]);
        }

        $resultat->closeCursor();
    }

    return $return;
}

function checkNullOrNot($var) {
    if ($var != null)
        $return = "\"".$var."\"";
    else
        $return = "null";

    return $return;
}

function affDateTime() {

    // informations de date dans des variables
    $jour = date('d');
    $mois = date('m');
    $annee = date('Y');
    $heure = date('H');
    $minute = date('i');

    // Affichage date et heure
    echo '<p class="affDateTime">Bonjour ! Nous sommes le ' . $jour . '/' . $mois . '/' . $annee . ' et il est ' . $heure. ' h ' . $minute.'</p>';

}

?>
