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

function queryAloneDB($id) {
    $co = connectionDB();
    $request = "SELECT * FROM reunion WHERE id_reunion = ".$id.";"; //Query for the SQL query

    $resultat = $co->query($request); //All fetchs in the $resultat variable
    $row = $resultat->fetch();

    $resultat->closeCursor();

    return $row;
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

function createNewField() {
    $date = checkNullOrNot($_POST["datePost"]);
    $duree = checkNullOrNot($_POST["dureePost"]);
    $intitule = checkNullOrNot($_POST["intitulePost"]);
    $descriptif = checkNullOrNot($_POST["descriptifPost"]);
    $salle = checkNullOrNot($_POST["sallePost"]);

    $request = "INSERT INTO reunion (date_reunion, duree_estimee_reunion, intitule_reunion, descriptif_reunion, salle_reunion) VALUES (".$date.", ".$duree.", ".$intitule.", ".$descriptif.", ".$salle.");";

    $co = connectionDB();

    if ($co->query($request) === FALSE) {
        echo "Error: ".$request."<br>".$co->error;
    }
}

function checkNullOrNot($var) {
    if ($var != null)
        $return = "\"".$var."\"";
    else
        $return = null;

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
