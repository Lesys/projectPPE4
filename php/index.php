<?php include "view/header.html";
	include "useful/functions.php";

	$reunions = queryDB();
	?>

<?php
include "view/allReunion.php";
include "view/reunion.php";
include "view/footer.html"; ?>
