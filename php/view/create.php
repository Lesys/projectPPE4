<?php if (isset($_POST['create'])) {
	createNewReunion();
	?>

	<script type="text/javascript">
   		alert("La réunion a été ajoutée.");
        document.location.href="index.php";
   	</script>
   	<?php } ?>

<form method="post" action="#">
  	<fieldset>
	 	<legend>Reunion</legend>
	   	<p>

		<label for="datePost">Date/heure : * </label>
		<input type="datetime" name="datePost" id="datePost" placeholder="aaaa-MM-jj hh:mm:ss" maxlength="19" required="">

		<br>

		<label for="dureePost">Durée : * </label>
		<input type="time" name="dureePost" id="dureePost" placeholder="00:00" maxlength="5" required="">

		<br>

		<label for="intitulePost">Intitulé : * </label>
		<input type="text" name="intitulePost" placeholder="Intitule" id="intitulePost" maxlength="500" required=""/>

		<br>

		<label for="sallePost">Salle : * </label>
			<select name="sallePost">
            	<?php
                	foreach ($salles as $salle) { ?>
                    	<option value="<?php echo $salle['id_salle']; ?>"><?php echo $salle['num_salle']; ?></option>
          		<?php } ?>
        	</select>

		<br>

		<label for="descriptifPost">Descriptif : </label><br>
		<textarea name="descriptifPost" id="descriptifPost" cols="100" rows="10" maxlength="5000" placeholder="Réunion sur l'amortissement de la chute des cheveux en Amazonie..."></textarea>

		<br>

		<br><br>

		<input type="submit" value="Valider" name="create"/>
		<input type="reset" value="Effacer"/>
		<br><br>
	    * : Champs obligatoires

   	</p>
 	</fieldset>

</form>