<?php include "view/header.html"; 

	include "useful/functions.php";

	$reunions = queryDB();
	?>
	
	<div class="title1">Calendar Project - Bidault Bastien / Widmer Alexis</div>

	<div class="allReunions">All reunions:<p>

	<?php 
		foreach ($reunions as $reunion) {
			echo $reunion[date_reunion]."<pre>Reunion for ".$reunion[intitule_reunion].". Take ".$reunion[duree_estimee_reunion]." at least for this time.</pre>";
		}


	?>

<?php 
include "view/reunion.php";
include "view/footer.html"; ?>
