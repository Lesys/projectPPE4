<div class="allReunions">

<?php

	include "headOfPage.php";
	echo "All reunions:<br>";

	foreach ($reunions as $reunion) { ?> 
		<div class="reunionAlone">
            <a href="index.php?action=reunion&id=<?php echo $reunion['id_reunion']; ?>">
				<?php echo $reunion["date_reunion"]."<pre>Reunion for ".$reunion["intitule_reunion"].".Take ".$reunion["duree_estimee_reunion"]." at least for this time.</pre>";
				?>
			</a>
		</div> <?php
	}
?>