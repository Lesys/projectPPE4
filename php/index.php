<?php include "view/header.html";
	include "useful/functions.php";

	if(!isset($_REQUEST['action']))
	    $action = 'allReunion';
	else 
	    $action = $_REQUEST['action'];

	if(!isset($_REQUEST['page']))
	    $page = 1;
	else 
	    $page = $_REQUEST['page'];
	switch($action)
	{
		case "allReunion": $reunions = queryDB();
			include "view/allReunion.php";
			break;
		case "reunion": $reunion = queryAloneDB($_REQUEST['id']);
			include "view/reunion.php";
			break;
	}


	?>

<?php 
include "view/footer.html"; ?>
