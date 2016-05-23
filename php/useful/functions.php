<?php
function connectionDB() {
    $PARAMHost = '172.16.99.3'; //Server path
    $PARAMPort = '3306'; //Server port
    $PARAMDBName = 'examen.bidault-widmer'; //DataBase name
    $PARAMUser = 'a.widmer'; //User login
    $PARAMPassword = 'passe'; //User Password

    $connection = new PDO('mysql:host='.$PARAMHost.';port='.$PARAMPort.';dbname='.$PARAMDBName, $PARAMUser, $PARAMPassword,
        array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

    if ($connection) //If we are in Malraux
        return $connection;
    else //If we are out Malraux
    {
        $PARAMHost = "bts.bts-malraux72.net:6380";
        $connection = new PDO('mysql:host='.$PARAMHost.';port='.$PARAMPort.';dbname='.$PARAMDBName, $PARAMUser, $PARAMPassword,
            array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        return $connection;
    }
}

function queryDB() {
	$co = connectionDB();
	$request = "SELECT * FROM reunion ORDER BY date_reunion DESC;"; //Query for the SQL query

    $resultat = $co->query($request); //All fetchs in the $resultat variable

    while ($row = $resultat->fetch()) { //For each row in the result of the query
        $return[] = array(
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

function createNewReunion() {
    $co = connectionDB();

    /*echo checkNullOrNot($_POST["datePost"], "char")."<br>";
    echo checkNullOrNot($_POST["dureePost"].":00", "char")."<br>";
    echo checkNullOrNot($_POST["intitulePost"], "char")."<br>";
    echo checkNullOrNot($_POST["descriptifPost"], "char")."<br>";
    echo checkNullOrNot($_POST["sallePost"], "num")."<br>";*/
    $date = checkNullOrNot($_POST["datePost"], "char");
    $duree = checkNullOrNot($_POST["dureePost"].":00", "char");
    $intitule = checkNullOrNot($_POST["intitulePost"], "char");
    $descriptif = checkNullOrNot($_POST["descriptifPost"], "char");
    $salle = checkNullOrNot($_POST["sallePost"], "num");

    $request = "INSERT INTO reunion (date_reunion, duree_estimee_reunion, intitule_reunion, descriptif_reunion, salle_reunion) VALUES (".$date.", ".$duree.", ".$intitule.", ".$descriptif.", ".$salle.");";

    if ($resultat = $co->query($request) == FALSE) { //All fetchs in the $resultat variable
        echo "Error: ".$request."<br>".$co->error;
    }
}

function deleteReunion($id) {
    $request = "DELETE FROM reunion WHERE id_reunion = ".$id.";";

    $co = connectionDB();

    return $co->query($request);
}

function updateReunion() {
    $id = $_GET['id'];
    echo checkNullOrNot($_POST["datePost"], "char")."<br>";
    echo checkNullOrNot($_POST["dureePost"].":00", "char")."<br>";
    echo checkNullOrNot($_POST["intitulePost"], "char")."<br>";
    echo checkNullOrNot($_POST["descriptifPost"], "char")."<br>";
    echo checkNullOrNot($_POST["sallePost"], "num")."<br>";
    $date = checkNullOrNot($_POST["datePost"], "char");
    $duree = checkNullOrNot($_POST["dureePost"], "char");
    $intitule = checkNullOrNot($_POST["intitulePost"], "char");
    $descriptif = checkNullOrNot($_POST["descriptifPost"], "char");
    $salle = checkNullOrNot($_POST["sallePost"], "num");

    $request = "UPDATE reunion SET date_reunion = ".$date.", duree_estimee_reunion = ".$duree.", intitule_reunion = ".$intitule.", descriptif_reunion = ".$descriptif.", salle_reunion = ".$salle." WHERE id_reunion = ".$id.";";

    $co = connectionDB();

    return $co->query($request);
}

function takeAllSalle() {
    $request = "SELECT * FROM salle ORDER BY num_salle ASC;";

    $co = connectionDB();
    $return = array();

    if ($co->query($request) == TRUE) {
        $resultat = $co->query($request); //All fetchs in the $resultat variable

        while ($row = $resultat->fetch()) { //For each row in the result of the query
            $return[] = array(
                "id_salle"=>$row["id_salle"],
                "num_salle"=>$row["num_salle"]);
        }

        $resultat->closeCursor();
    }
    else
        echo "fail";

    return $return;
}

function checkNullOrNot($var, $type) {
    if ($type == "char") {
        if ($var != null)
            $return = "\"".$var."\"";
        else
            $return = "null";
    }
    else
        if ($var != null)
            $return = $var;
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
    echo '<p class="affDateTime">Bonjour! Nous sommes le ' . $jour . '/' . $mois . '/' . $annee . ' et il est ' . $heure. ' h ' . $minute.'</p>';

}

?>
