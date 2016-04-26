<?php
function connectionDB() {
    $PARAMHost = '172.16.99.3'; //Server path
    $PARAMPort = '3306'; //Server port
    $PARAMDBName = 'examen.bidault-widmer'; //DataBase name
    $PARAMUser = 'a.widmer'; //User login
    $PARAMPassword = 'passe'; //User Password

    $connection = new PDO('mysql:host='.$PARAMHost.';port='.$PARAMPort.';dbname='.$PARAMDBName, $PARAMUser, $PARAMPassword,
        array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

    return $connection;
}

function queryDB() {
	$co = connectionDB();
	$request = "SELECT * FROM reunion ORDER BY date_reunion;"; //Query for the SQL query
    
    $resultat = $co->query($request); //All fetchs in the $resultat variable

    while ($row = $resultat->fetch()) { //For each row in the result of the query
        $return[$row["id_reunion"]] = array(
        	"id_reunion"=>$row["id_reunion"],
        	"date_reunion"=>$row["date_reunion"],
        	"intitule_reunion"=>$row["intitule_reunion"],
        	"descriptif_reunion"=>$row["descriptif_reunion"]);
    }

    $resultat->closeCursor();

    return json_encode($return);
}
?>